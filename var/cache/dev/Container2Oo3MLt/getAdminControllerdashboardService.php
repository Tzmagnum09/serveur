<?php

namespace Container2Oo3MLt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminControllerdashboardService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6tMdNa5.App\Controller\AdminController::dashboard()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6tMdNa5.App\\Controller\\AdminController::dashboard()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'emailTemplateRepository' => ['privates', 'App\\Repository\\EmailTemplateRepository', 'getEmailTemplateRepositoryService', true],
        ], [
            'userRepository' => 'App\\Repository\\UserRepository',
            'emailTemplateRepository' => 'App\\Repository\\EmailTemplateRepository',
        ]))->withContext('App\\Controller\\AdminController::dashboard()', $container);
    }
}
