<?php

/**
 * Part of the SilexMySQLi
 *
 * For the full copyright and license information,
 * view the LICENSE file that was distributed with this source code.
 *
 * @author  Kilte Leichnam <nwotnbm@gmail.com>
 * @package SilexMySQLi
 */

namespace Kilte\MySQLi;

use Kilte\MySQLi\Exception\MySQLiException;

/**
 * MySQLi Class
 *
 * @package Kilte\MySQLi
 */
class MySQLi extends \mysqli
{

    /**
     * Run Query
     *
     * @param string $statement SQL statement
     * @param int    $type      Result Mode MYSQLI_USE_RESULT or MYSQLI_STORE_RESULT
     *
     * @throws MySQLiException
     * @return \mysqli_result
     */
    public function query($statement, $type = MYSQLI_USE_RESULT)
    {
        $result = parent::query($statement, $type);
        if (!empty($this->error)) {
            throw new MySQLiException('Error: ' . $this->error . "\r\n\t" . 'Statement: ' . $statement, $this->errno);
        }

        return $result;
    }

}
