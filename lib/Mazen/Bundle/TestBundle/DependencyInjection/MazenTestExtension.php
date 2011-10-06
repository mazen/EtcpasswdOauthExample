<?php
/*
 * This file is part of the Mazen Project
*
* copyright 2011 Marcel Beerta <marcel@etcpasswd.de>
*/
namespace Mazen\Bundle\TestBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator,
    Symfony\Component\DependencyInjection\ContainerBuilder,
    Symfony\Component\DependencyInjection\Loader\XmlFileLoader,
    Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 *
 * @author Marcel Beerta <marcel@etcpasswd.de>
 *
 */
class MazenTestExtension extends Extension
{
    
    public function load(array $config, ContainerBuilder $container)
    {

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader -> load('services.xml');
        
    }
}