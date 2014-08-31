<?php

/**
 * Part of the SilexMySQLi
 *
 * @author  Kilte Leichnam <nwotnbm@gmail.com>
 * @package SilexMySQLi
 */

namespace Kilte\MySQLi\Tests;

use Kilte\MySQLi\MySQLiServiceProvider;
use Pimple\Container;

/**
 * Class MySQLiServiceProviderTest
 *
 * @package Kilte\MySQLi\Tests
 */
class MySQLiServiceProviderTest extends MySQLiTestCase
{

    /**
     * Returns Container
     *
     * @return Container
     */
    private function getContainer()
    {
        $container = new Container();
        return $container->register(
            new MySQLiServiceProvider,
            array('mysqli.configuration' => $this->getMySQLiConfiguration())
        );
    }

    public function testRegister()
    {
        $c = $this->getContainer();
        $this->assertInstanceOf('\\Kilte\\MySQLi\\MySQLi', $c['mysqli']);
    }

}
