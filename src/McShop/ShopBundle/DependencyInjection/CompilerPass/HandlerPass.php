<?php declare(strict_types=1);


namespace McShop\ShopBundle\DependencyInjection\CompilerPass;


use McShop\ShopBundle\Handler\HandlerFactory;
use McShop\ShopBundle\Handler\HandlerInterface;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class HandlerPass implements CompilerPassInterface
{
    /**
     * You can modify the container here before it is dumped to PHP code.
     * @throws \Exception
     */
    public function process(ContainerBuilder $container)
    {
        $factory = $container->get(HandlerFactory::class);
        $handlers = $container->findTaggedServiceIds('mc_shop.item_handler');
        foreach ($handlers as $handler) {
            $factory->addHandler($handler);
        }
    }
}
