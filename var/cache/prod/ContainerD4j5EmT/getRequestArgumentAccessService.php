<?php

namespace ContainerD4j5EmT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRequestArgumentAccessService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Knp\Component\Pager\ArgumentAccess\RequestArgumentAccess' shared service.
     *
     * @return \Knp\Component\Pager\ArgumentAccess\RequestArgumentAccess
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['Knp\\Component\\Pager\\ArgumentAccess\\RequestArgumentAccess'] = new \Knp\Component\Pager\ArgumentAccess\RequestArgumentAccess(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
