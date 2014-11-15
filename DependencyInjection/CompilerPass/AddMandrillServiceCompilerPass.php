<?php
/**
 * Created by PhpStorm.
 * User: Hamaryuginh
 * Date: 11/10/2014
 * Time: 15:15
 */

namespace Hamaryuginh\MandrillBundle\DependencyInjection\CompilerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class AddMandrillServiceCompilerPass implements CompilerPassInterface
{

    /**
     * You can modify the container here before it is dumped to PHP code.
     *
     * @param ContainerBuilder $container
     *
     * @api
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('hamaryuginh.mandrill_manager'))
            return;

        $definition = $container->getDefinition('hamaryuginh.mandrill_manager');

        $taggedServices = $container->findTaggedServiceIds('hamaryuginh.mandrill_service');

        foreach ($taggedServices as $id => $attributes)
            $definition->addMethodCall('registerMandrillService', array(new Reference($id)));
    }
}
