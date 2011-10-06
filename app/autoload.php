<?php
$vendors = realpath(__DIR__.'/../vendor');

require_once $vendors.'/symfony/src/Symfony/Component/ClassLoader/UniversalClassLoader.php';
use Symfony\Component\ClassLoader\UniversalClassLoader;


$loader = new UniversalClassLoader();
$loader -> registerNamespaces(array(
    'Symfony'                         => array($vendors.'/symfony/src', $vendors.'/bundles'),
    'Etcpasswd'                       => $vendors.'/bundles',
    
    'Buzz'                            => $vendors.'/buzz/lib',
    'Assetic'                         => $vendors.'/assetic/src',
    'Monolog'                         => $vendors.'/monolog/src',
));

$loader -> registerPrefixes(array(
    'Twig_' => $vendors.'/twig/lib',
));

$loader->registerNamespaceFallbacks(array(
    __DIR__.'/../lib',
    __DIR__.'/../tests'
));

$loader -> register();
