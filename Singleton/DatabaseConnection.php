<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bernardo
 * To change this template use File | Settings | File Templates.
 */

namespace Singleton;

class DatabaseConnection
{

    private static $instance = null;

    /**
     * @return mixed
     */
    static public function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    /**
     * Construct
     */
    private function __construct() {}

    /**
     * Clone
     */
    final private function __clone() {}
}