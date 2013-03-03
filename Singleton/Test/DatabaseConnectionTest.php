<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bernardo
 *
 * Execute test: phpunit Singleton/Test/DatabaseConnectionTest.php
 */

namespace Singleton\Test;

require_once __DIR__ . '/../../autoload.php';

use Singleton\DatabaseConnection;

class DatabaseConnectionTest extends \PHPUnit_Framework_TestCase
{
    public function testGetInstance()
    {
        $dc1 = DatabaseConnection::getInstance();
        $dc2 = DatabaseConnection::getInstance();

        $this->assertInstanceOf('Singleton\\DatabaseConnection', $dc1);
        $this->assertInstanceOf('Singleton\\DatabaseConnection', $dc2);
        $this->assertSame($dc1, $dc2);
    }
}