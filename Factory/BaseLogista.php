<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bernardo
 */

namespace Factory;

abstract class BaseLogista
{

    /**
     * @return mixed
     */
    abstract public function getIncidents($shipping_id);

    /**
     * @return mixed
     */
    abstract public function calculateShipping($shipping_id);

    /**
     * @return mixed
     */
    abstract public function getStateShipping($shipping_id);
}