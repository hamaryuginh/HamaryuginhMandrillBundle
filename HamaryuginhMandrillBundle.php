<?php

namespace Hamaryuginh\MandrillBundle;

use Hamaryuginh\MandrillBundle\DependencyInjection\CompilerPass\AddMandrillServiceCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class HamaryuginhMandrillBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new AddMandrillServiceCompilerPass());
    }
}
