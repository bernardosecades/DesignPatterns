<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bernardo
 */

namespace Factory;

abstract class LogistaFactory
{

    /**
     * @param $name
     * @return mixed
     * @throws \DomainException
     */
    public static function create($name)
    {
        if (class_exists($name)) {
            return new $name;
        } else {
            return new \DomainException(sprintf("%s : Unknown class type", __METHOD__));
        }
    }
}