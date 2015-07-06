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

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * MySQLiServiceProvider Class.
 */
class MySQLiServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function register(Container $app)
    {
        $app['mysqli'] = function () use ($app) {
            if (isset($app['mysqli.configuration']) && is_array($app['mysqli.configuration'])) {
                $config = $app['mysqli.configuration'];
            } else {
                throw new \LogicException('mysqli.configuration is not defined');
            }
            $MySQLi = new MySQLi($config['host'], $config['username'], $config['password'], $config['database']);
            $MySQLi->set_charset($config['charset']);

            return $MySQLi;
        };
    }
}
