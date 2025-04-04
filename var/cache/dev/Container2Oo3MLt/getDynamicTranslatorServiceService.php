<?php

namespace Container2Oo3MLt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDynamicTranslatorServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\DynamicTranslatorService' shared autowired service.
     *
     * @return \App\Service\DynamicTranslatorService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/DynamicTranslatorService.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService'));

        if (isset($container->privates['App\\Service\\DynamicTranslatorService'])) {
            return $container->privates['App\\Service\\DynamicTranslatorService'];
        }

        return $container->privates['App\\Service\\DynamicTranslatorService'] = new \App\Service\DynamicTranslatorService($a, ($container->services['translator'] ?? $container->load('getTranslatorService')), 'fr');
    }
}
