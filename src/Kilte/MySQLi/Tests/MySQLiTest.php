<?php

/**
 * Part of the SilexMySQLi
 *
 * @author  Kilte Leichnam <nwotnbm@gmail.com>
 * @package SilexMySQLi
 */

namespace Kilte\MySQLi\Tests;

use Kilte\MySQLi\MySQLi;

/**
 * Class MySQLiTest
 *
 * @package Kilte\MySQLi\Tests
 */
class MySQLiTest extends MySQLiTestCase
{

    public function testQueryThrowsException()
    {
        $config = $this->getMySQLiConfiguration();
        $db = new MySQLi($config['host'], $config['username'], $config['password'], $config['database']);
        $db->set_charset($config['charset']);
        $this->setExpectedException('Kilte\\MySQLi\\Exception\\MySQLiException');
        $db->query("INVALID QUERY");
    }

}
