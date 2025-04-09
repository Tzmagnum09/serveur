<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Form\UserEditType;
use App\Repository\UserRepository;
use App\Service\AdminPermissionService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

#[Route('/admin/users')]
class UserController extends AbstractController
{
    private UserRepository $userRepository;
    private AdminPermissionService $permissionService;
    private TranslatorInterface $translator;

    public function __construct(
        UserRepository $userRepository,
        AdminPermissionService $permissionService,
        TranslatorInterface $translator
    ) {
        $this->userRepository = $userRepository;
        $this->permissionService = $permissionService;
        $this->translator = $translator;
    }

    #[Route('', name: 'app_admin_users')]
    public function index(Request $request): Response
    {
        // Vérifier si l'utilisateur a la permission de gérer les utilisateurs
        $admin = $this->getUser();
        if (!$admin->isSuperAdmin() && !$this->permissionService->hasPermission($admin, 'manage_users')) {
            $this->addFlash('error', $this->translator->trans('admin.flash.no_permission'));
            return $this->redirectToRoute('app_admin_dashboard');
        }

        // Filtre et recherche
        $filter = $request->query->get('filter');
        $search = $request->query->get('q');

        $queryBuilder = $this->userRepository->createQueryBuilder('u');

        // Appliquer la recherche si présente
        if ($search) {
            $queryBuilder
                ->where('u.email LIKE :search OR u.username LIKE :search OR u.firstName LIKE :search OR u.lastName LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        // Appliquer le filtre si présent
        if ($filter === 'verified') {
            $queryBuilder->andWhere('u.isVerified = true');
        } elseif ($filter === 'unverified') {
            $queryBuilder->andWhere('u.isVerified = false');
        } elseif ($filter === 'approved') {
            $queryBuilder->andWhere('u.isApproved = true');
        } elseif ($filter === 'pending') {
            $queryBuilder->andWhere('u.isVerified = true AND u.isApproved = false');
        }

        // Ordonner les résultats
        $queryBuilder->orderBy('u.createdAt', 'DESC');

        $users = $queryBuilder->getQuery()->getResult();

        return $this->render('admin/users.html.twig', [
            'users' => $users,
            'permission_service' => $this->permissionService,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_user_edit')]
    public function edit(User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'utilisateur a la permission de gérer les utilisateurs
        $admin = $this->getUser();
        if (!$admin->isSuperAdmin() && !$this->permissionService->hasPermission($admin, 'manage_users')) {
            $this->addFlash('error', $this->translator->trans('admin.flash.no_permission'));
            return $this->redirectToRoute('app_admin_dashboard');
        }

        // Formater la date de naissance si elle existe
        $birthDateFormatted = null;
        if ($user->getBirthDate() instanceof \DateTime) {
            $birthDateFormatted = $user->getBirthDate()->format('d/m/Y');
        }

        // Créer le formulaire
        $form = $this->createForm(UserEditType::class, $user, [
            'is_admin' => true, // Pour afficher les champs d'administration
            'birthdate_formatted' => $birthDateFormatted
        ]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Traiter la date de naissance
            $birthDateString = $form->get('birthDate')->getData();
            if ($birthDateString) {
                try {
                    // Convertir le format DD/MM/YYYY en DateTime
                    $birthDate = \DateTime::createFromFormat('d/m/Y', $birthDateString);
                    if ($birthDate) {
                        $user->setBirthDate($birthDate);
                    }
                } catch (\Exception $e) {
                    // En cas d'erreur, on conserve la date existante ou null
                }
            } else {
                // Si la date est vide, on la met à null
                $user->setBirthDate(null);
            }

            // Si l'utilisateur est approuvé mais que la date d'approbation n'est pas définie
            if ($user->isApproved() && $user->getApprovedAt() === null) {
                $user->setApprovedAt(new \DateTimeImmutable());
            }

            $entityManager->flush();

            $this->addFlash('success', $this->translator->trans('admin.flash.user_updated'));

            return $this->redirectToRoute('app_admin_users');
        }

        return $this->render('admin/user_edit.html.twig', [
            'userForm' => $form->createView(),
            'user' => $user,
            'permission_service' => $this->permissionService,
        ]);
    }

    #[Route('/{id}/approve', name: 'app_admin_user_approve', methods: ['POST'])]
    public function approve(User $user, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'utilisateur a la permission d'approuver les utilisateurs
        $admin = $this->getUser();
        if (!$admin->isSuperAdmin() && !$this->permissionService->hasPermission($admin, 'approve_users')) {
            $this->addFlash('error', $this->translator->trans('admin.flash.no_permission'));
            return $this->redirectToRoute('app_admin_users');
        }

        // Vérifier si l'utilisateur est vérifié mais pas approuvé
        if ($user->isVerified() && !$user->isApproved()) {
            $user->setIsApproved(true);
            $user->setApprovedAt(new \DateTimeImmutable());

            $entityManager->flush();

            $this->addFlash('success', $this->translator->trans('admin.flash.user_approved'));
        } else {
            $this->addFlash('error', $this->translator->trans('admin.flash.user_already_approved'));
        }

        return $this->redirectToRoute('app_admin_users');
    }
}