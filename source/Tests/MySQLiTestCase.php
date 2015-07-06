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

/**
 * Class MySQLiTestCase.
 */
class MySQLiTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * Returns MySQLi configuration.
     *
     * @return array
     */
    protected function getMySQLiConfiguration()
    {
        return array(
            'host' => isset($GLOBALS['DB_HOST']) ? $GLOBALS['DB_HOST'] : 'localhost',
            'username' => isset($GLOBALS['DB_USER']) ? $GLOBALS['DB_USER'] : 'root',
            'password' => isset($GLOBALS['DB_PASSWD']) ? $GLOBALS['DB_PASSWD'] : '',
            'database' => isset($GLOBALS['DB_NAME']) ? $GLOBALS['DB_NAME'] : 'silex_user_test',
            'charset' => isset($GLOBALS['DB_CHARSET']) ? $GLOBALS['DB_CHARSET'] : 'utf8',
        );
    }
}
