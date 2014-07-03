<?php

/**
 * Part of the SilexMySQLi
 *
 * @author  Kilte Leichnam <nwotnbm@gmail.com>
 * @package SilexMySQLi
 */

namespace Kilte\MySQLi\Tests;

use Kilte\MySQLi\MySQLiServiceProvider;
use Silex\Application;

/**
 * Class MySQLiServiceProviderTest
 *
 * @package Kilte\MySQLi\Tests
 */
class MySQLiServiceProviderTest extends MySQLiTestCase
{

    /**
     * Returns Silex Application
     *
     * @return Application
     */
    private function getApplication()
    {
        $app = new Application();
        return $app->register(
            new MySQLiServiceProvider,
            array('mysqli.configuration' => $this->getMySQLiConfiguration())
        );
    }

    public function testRegister()
    {
        $app = $this->getApplication();
        $this->assertInstanceOf('\\Kilte\\MySQLi\\MySQLi', $app['mysqli']);
    }

}
