<?php

namespace ContainerF7aUXD7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_QXXNQ9dService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.QXXNQ9d' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/process/Messenger/RunProcessMessageHandler.php';

        return $container->privates['.messenger.handler_descriptor.QXXNQ9d'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Symfony\Component\Process\Messenger\RunProcessMessageHandler(), []);
    }
}
