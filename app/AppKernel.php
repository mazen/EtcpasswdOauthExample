<?php

require_once __DIR__.'/autoload.php';

use Symfony\Component\HttpKernel\Kernel,
    Symfony\Component\Config\Loader\LoaderInterface;

/**
 * Application kernel
 */
class AppKernel extends Kernel
{
    
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            
            new Etcpasswd\OAuthBundle\EtcpasswdOAuthBundle(),
            
            new Mazen\Bundle\TestBundle\MazenTestBundle(),
        );

        if ($this->isDebug()) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
        }
        
        return $bundles;
    }
    
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
        
    }
    
}