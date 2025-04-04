<?php

namespace Container2Oo3MLt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VjU7So6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VjU7So6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VjU7So6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\AdminController::dashboard' => ['privates', '.service_locator.6tMdNa5.App\\Controller\\AdminController::dashboard()', 'getAdminControllerdashboardService', true],
            'App\\Controller\\AdminController::users' => ['privates', '.service_locator.OzEre6h.App\\Controller\\AdminController::users()', 'getAdminControllerusersService', true],
            'App\\Controller\\AdminController::editUser' => ['privates', '.service_locator.Dw6dywA.App\\Controller\\AdminController::editUser()', 'getAdminControllereditUserService', true],
            'App\\Controller\\AdminController::approveUser' => ['privates', '.service_locator.Dw6dywA.App\\Controller\\AdminController::approveUser()', 'getAdminControllerapproveUserService', true],
            'App\\Controller\\EmailTemplateController::index' => ['privates', '.service_locator.k9R1AxW.App\\Controller\\EmailTemplateController::index()', 'getEmailTemplateControllerindexService', true],
            'App\\Controller\\EmailTemplateController::new' => ['privates', '.service_locator.suHSJ1C.App\\Controller\\EmailTemplateController::new()', 'getEmailTemplateControllernewService', true],
            'App\\Controller\\EmailTemplateController::edit' => ['privates', '.service_locator.PUsP4l5.App\\Controller\\EmailTemplateController::edit()', 'getEmailTemplateControllereditService', true],
            'App\\Controller\\EmailTemplateController::preview' => ['privates', '.service_locator.vOrWoox.App\\Controller\\EmailTemplateController::preview()', 'getEmailTemplateControllerpreviewService', true],
            'App\\Controller\\EmailTemplateController::delete' => ['privates', '.service_locator.PUsP4l5.App\\Controller\\EmailTemplateController::delete()', 'getEmailTemplateControllerdeleteService', true],
            'App\\Controller\\ProfileController::edit' => ['privates', '.service_locator.28sjWxR.App\\Controller\\ProfileController::edit()', 'getProfileControllereditService', true],
            'App\\Controller\\ProfileController::changePassword' => ['privates', '.service_locator.Q.g4ps2.App\\Controller\\ProfileController::changePassword()', 'getProfileControllerchangePasswordService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.iWwUsxu.App\\Controller\\RegistrationController::register()', 'getRegistrationControllerregisterService', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.vPVKT.B.App\\Controller\\RegistrationController::verifyUserEmail()', 'getRegistrationControllerverifyUserEmailService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.KHhLDTq.App\\Controller\\ResetPasswordController::request()', 'getResetPasswordControllerrequestService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.qHpfPrp.App\\Controller\\ResetPasswordController::reset()', 'getResetPasswordControllerresetService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.QMbW_7n.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'App\\Controller\\StaticTranslationController::edit' => ['privates', '.service_locator.KHhLDTq.App\\Controller\\StaticTranslationController::edit()', 'getStaticTranslationControllereditService', true],
            'App\\Controller\\SuperAdminController::dashboard' => ['privates', '.service_locator.OzEre6h.App\\Controller\\SuperAdminController::dashboard()', 'getSuperAdminControllerdashboardService', true],
            'App\\Controller\\SuperAdminController::promoteToAdmin' => ['privates', '.service_locator.Dw6dywA.App\\Controller\\SuperAdminController::promoteToAdmin()', 'getSuperAdminControllerpromoteToAdminService', true],
            'App\\Controller\\SuperAdminController::demoteAdmin' => ['privates', '.service_locator.Dw6dywA.App\\Controller\\SuperAdminController::demoteAdmin()', 'getSuperAdminControllerdemoteAdminService', true],
            'App\\Controller\\SuperAdminController::managePermissions' => ['privates', '.service_locator.E0eIVeV.App\\Controller\\SuperAdminController::managePermissions()', 'getSuperAdminControllermanagePermissionsService', true],
            'App\\Controller\\SuperAdminController::promoteToSuperAdmin' => ['privates', '.service_locator.Dw6dywA.App\\Controller\\SuperAdminController::promoteToSuperAdmin()', 'getSuperAdminControllerpromoteToSuperAdminService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\AdminController:dashboard' => ['privates', '.service_locator.6tMdNa5.App\\Controller\\AdminController::dashboard()', 'getAdminControllerdashboardService', true],
            'App\\Controller\\AdminController:users' => ['privates', '.service_locator.OzEre6h.App\\Controller\\AdminController::users()', 'getAdminControllerusersService', true],
            'App\\Controller\\AdminController:editUser' => ['privates', '.service_locator.Dw6dywA.App\\Controller\\AdminController::editUser()', 'getAdminControllereditUserService', true],
            'App\\Controller\\AdminController:approveUser' => ['privates', '.service_locator.Dw6dywA.App\\Controller\\AdminController::approveUser()', 'getAdminControllerapproveUserService', true],
            'App\\Controller\\EmailTemplateController:index' => ['privates', '.service_locator.k9R1AxW.App\\Controller\\EmailTemplateController::index()', 'getEmailTemplateControllerindexService', true],
            'App\\Controller\\EmailTemplateController:new' => ['privates', '.service_locator.suHSJ1C.App\\Controller\\EmailTemplateController::new()', 'getEmailTemplateControllernewService', true],
            'App\\Controller\\EmailTemplateController:edit' => ['privates', '.service_locator.PUsP4l5.App\\Controller\\EmailTemplateController::edit()', 'getEmailTemplateControllereditService', true],
            'App\\Controller\\EmailTemplateController:preview' => ['privates', '.service_locator.vOrWoox.App\\Controller\\EmailTemplateController::preview()', 'getEmailTemplateControllerpreviewService', true],
            'App\\Controller\\EmailTemplateController:delete' => ['privates', '.service_locator.PUsP4l5.App\\Controller\\EmailTemplateController::delete()', 'getEmailTemplateControllerdeleteService', true],
            'App\\Controller\\ProfileController:edit' => ['privates', '.service_locator.28sjWxR.App\\Controller\\ProfileController::edit()', 'getProfileControllereditService', true],
            'App\\Controller\\ProfileController:changePassword' => ['privates', '.service_locator.Q.g4ps2.App\\Controller\\ProfileController::changePassword()', 'getProfileControllerchangePasswordService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.iWwUsxu.App\\Controller\\RegistrationController::register()', 'getRegistrationControllerregisterService', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.vPVKT.B.App\\Controller\\RegistrationController::verifyUserEmail()', 'getRegistrationControllerverifyUserEmailService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.KHhLDTq.App\\Controller\\ResetPasswordController::request()', 'getResetPasswordControllerrequestService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.qHpfPrp.App\\Controller\\ResetPasswordController::reset()', 'getResetPasswordControllerresetService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.QMbW_7n.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'App\\Controller\\StaticTranslationController:edit' => ['privates', '.service_locator.KHhLDTq.App\\Controller\\StaticTranslationController::edit()', 'getStaticTranslationControllereditService', true],
            'App\\Controller\\SuperAdminController:dashboard' => ['privates', '.service_locator.OzEre6h.App\\Controller\\SuperAdminController::dashboard()', 'getSuperAdminControllerdashboardService', true],
            'App\\Controller\\SuperAdminController:promoteToAdmin' => ['privates', '.service_locator.Dw6dywA.App\\Controller\\SuperAdminController::promoteToAdmin()', 'getSuperAdminControllerpromoteToAdminService', true],
            'App\\Controller\\SuperAdminController:demoteAdmin' => ['privates', '.service_locator.Dw6dywA.App\\Controller\\SuperAdminController::demoteAdmin()', 'getSuperAdminControllerdemoteAdminService', true],
            'App\\Controller\\SuperAdminController:managePermissions' => ['privates', '.service_locator.E0eIVeV.App\\Controller\\SuperAdminController::managePermissions()', 'getSuperAdminControllermanagePermissionsService', true],
            'App\\Controller\\SuperAdminController:promoteToSuperAdmin' => ['privates', '.service_locator.Dw6dywA.App\\Controller\\SuperAdminController::promoteToSuperAdmin()', 'getSuperAdminControllerpromoteToSuperAdminService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\AdminController::dashboard' => '?',
            'App\\Controller\\AdminController::users' => '?',
            'App\\Controller\\AdminController::editUser' => '?',
            'App\\Controller\\AdminController::approveUser' => '?',
            'App\\Controller\\EmailTemplateController::index' => '?',
            'App\\Controller\\EmailTemplateController::new' => '?',
            'App\\Controller\\EmailTemplateController::edit' => '?',
            'App\\Controller\\EmailTemplateController::preview' => '?',
            'App\\Controller\\EmailTemplateController::delete' => '?',
            'App\\Controller\\ProfileController::edit' => '?',
            'App\\Controller\\ProfileController::changePassword' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\StaticTranslationController::edit' => '?',
            'App\\Controller\\SuperAdminController::dashboard' => '?',
            'App\\Controller\\SuperAdminController::promoteToAdmin' => '?',
            'App\\Controller\\SuperAdminController::demoteAdmin' => '?',
            'App\\Controller\\SuperAdminController::managePermissions' => '?',
            'App\\Controller\\SuperAdminController::promoteToSuperAdmin' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\AdminController:dashboard' => '?',
            'App\\Controller\\AdminController:users' => '?',
            'App\\Controller\\AdminController:editUser' => '?',
            'App\\Controller\\AdminController:approveUser' => '?',
            'App\\Controller\\EmailTemplateController:index' => '?',
            'App\\Controller\\EmailTemplateController:new' => '?',
            'App\\Controller\\EmailTemplateController:edit' => '?',
            'App\\Controller\\EmailTemplateController:preview' => '?',
            'App\\Controller\\EmailTemplateController:delete' => '?',
            'App\\Controller\\ProfileController:edit' => '?',
            'App\\Controller\\ProfileController:changePassword' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\StaticTranslationController:edit' => '?',
            'App\\Controller\\SuperAdminController:dashboard' => '?',
            'App\\Controller\\SuperAdminController:promoteToAdmin' => '?',
            'App\\Controller\\SuperAdminController:demoteAdmin' => '?',
            'App\\Controller\\SuperAdminController:managePermissions' => '?',
            'App\\Controller\\SuperAdminController:promoteToSuperAdmin' => '?',
        ]);
    }
}
