<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bernardo
 *
 * Execute test: phpunit Factory/Test/LogistaFactoryTest.php
 */

namespace Factory\Test;

require_once __DIR__ . '/../../autoload.php';

use Factory\LogistaFactory;

class LogistaFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateLogista()
    {
        $name = "Factory\\Logista\\UPS";
        $logista = LogistaFactory::create($name);

        $this->assertInstanceOf('Factory\\BaseLogista', $logista);
    }

    /**
     * @expectedException  \DomainException
     */
    public function testCreateLogistaUnknown()
    {
        $name = "Factory\\Logista\\Seur";
        $logista = LogistaFactory::create($name);
    }
}