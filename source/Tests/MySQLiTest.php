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

    /**
     * Returns MySQLi instance
     *
     * @return MySQLi
     */
    protected function getMySQLi()
    {
        $config = $this->getMySQLiConfiguration();
        $db = new MySQLi($config['host'], $config['username'], $config['password'], $config['database']);
        $db->set_charset($config['charset']);

        return $db;
    }

    public function testQueryThrowsException()
    {
        $db = $this->getMySQLi();
        $this->setExpectedException('Kilte\\MySQLi\\Exception\\MySQLiException');
        $db->query("INVALID QUERY");
    }

    public function testQueryReturnsResult()
    {
        $db = $this->getMySQLi();
        $this->assertInstanceOf('\\mysqli_result', $db->query("SHOW TABLES"));
    }

}
