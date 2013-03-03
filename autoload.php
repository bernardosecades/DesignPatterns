<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bernardo
 */

require_once 'vendor/autoload.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();

$loader->registerNamespaces(array(
    'Factory'         => __DIR__,
    'Singleton'       => __DIR__
));

$loader->register();

