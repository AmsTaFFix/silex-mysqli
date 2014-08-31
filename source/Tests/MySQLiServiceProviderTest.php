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

    public function testRegister()
    {
        $c = new Container();
        $c->register(new MySQLiServiceProvider(), array('mysqli.configuration' => $this->getMySQLiConfiguration()));
        $this->assertInstanceOf('\\Kilte\\MySQLi\\MySQLi', $c['mysqli']);
    }

    public function testConfigurationNotExists()
    {
        $c = new Container();
        $c->register(new MySQLiServiceProvider());
        $this->setExpectedException('\\LogicException', 'mysqli.configuration is not defined');
        $c['mysqli'];
    }

}
