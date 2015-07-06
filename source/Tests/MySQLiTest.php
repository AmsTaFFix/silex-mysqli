<?php

/**
 * Part of the SilexMySQLi.
 *
 * For the full copyright and license information,
 * view the LICENSE file that was distributed with this source code.
 *
 * @author  Kilte Leichnam <nwotnbm@gmail.com>
 */
namespace Kilte\MySQLi\Tests;

use Kilte\MySQLi\MySQLi;

/**
 * Class MySQLiTest.
 */
class MySQLiTest extends MySQLiTestCase
{
    /**
     * Returns MySQLi instance.
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

    public function testQueryReturnsResult()
    {
        $db = $this->getMySQLi();
        $this->assertInstanceOf('\\mysqli_result', $db->query('SHOW TABLES'));
    }
}
