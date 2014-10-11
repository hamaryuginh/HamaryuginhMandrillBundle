<?php

namespace Hamaryuginh\MandrillBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class HamaryuginhMandrillExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('hamaryuginh_mandrill.api_key', $config['api_key']);
        $container->setParameter('hamaryuginh_mandrill.disable_delivery', $config['disable_delivery']);
        $container->setParameter('hamaryuginh_mandrill.default.sender', $config['default']['sender']);
        $container->setParameter('hamaryuginh_mandrill.default.sender_name', $config['default']['sender_name']);
        $container->setParameter('hamaryuginh_mandrill.default.subaccount', $config['default']['subaccount']);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
    }
}
