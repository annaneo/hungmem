<?php

namespace ContainerICPUJkq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebProfiler_Controller_ProfilerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Controller/ProfilerController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Csp/ContentSecurityPolicyHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Csp/NonceGenerator.php';

        return $container->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController(($container->services['router'] ?? self::getRouterService($container)), NULL, ($container->privates['twig'] ?? $container->load('getTwigService')), [], new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator()), \dirname(__DIR__, 4));
    }
}
