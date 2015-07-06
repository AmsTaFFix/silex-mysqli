<?php

/**
 * Part of the SilexMySQLi.
 *
 * For the full copyright and license information,
 * view the LICENSE file that was distributed with this source code.
 *
 * @author  Kilte Leichnam <nwotnbm@gmail.com>
 */
namespace Kilte\MySQLi;

/**
 * MySQLi Class.
 */
class MySQLi extends \mysqli
{
    /**
     * Run Query.
     *
     * @param string $statement SQL statement
     * @param int    $type      Result Mode MYSQLI_USE_RESULT or MYSQLI_STORE_RESULT
     *
     * @return \mysqli_result
     */
    public function query($statement, $type = MYSQLI_USE_RESULT)
    {
        $result = parent::query($statement, $type);

        return $result;
    }
}
