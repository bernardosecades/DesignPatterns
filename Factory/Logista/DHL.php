<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bernardo
 */

namespace Factory\Logista;

use Factory\BaseLogista;

class DHL extends BaseLogista
{

    /**
     * @return mixed|string
     */
    public function getIncidents($shipping_id)
    {
        return sprintf("Incidents shipping id: %d (%s)", $shipping_id, __CLASS__);
    }

    /**
     * @return mixed|string
     */
    public function calculateShipping($shipping_id)
    {
        return sprintf("Value shipping id: %d (%s)", $shipping_id, __CLASS__);
    }

    /**
     * @return mixed|string
     */
    public function getStateShipping($shipping_id)
    {
        return sprintf("State shipping id: %d (%s)", $shipping_id, __CLASS__);
    }
}