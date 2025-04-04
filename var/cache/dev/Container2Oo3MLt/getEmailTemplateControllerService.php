<?php

namespace Container2Oo3MLt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailTemplateControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EmailTemplateController' shared autowired service.
     *
     * @return \App\Controller\EmailTemplateController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EmailTemplateController.php';

        $container->services['App\\Controller\\EmailTemplateController'] = $instance = new \App\Controller\EmailTemplateController(($container->privates['App\\Service\\AdminPermissionService'] ?? $container->load('getAdminPermissionServiceService')), ($container->privates['App\\Service\\EmailTemplateService'] ?? $container->load('getEmailTemplateServiceService')));

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\EmailTemplateController', $container));

        return $instance;
    }
}
