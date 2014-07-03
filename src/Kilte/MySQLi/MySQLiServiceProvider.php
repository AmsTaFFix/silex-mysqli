<?php

/**
 * Part of the SilexMySQLi
 *
 * @author  Kilte Leichnam <nwotnbm@gmail.com>
 * @package SilexMySQLi
 */

namespace Kilte\MySQLi;

use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * MySQLiServiceProvider Class
 *
 * @package Kilte\MySQLi
 */
class MySQLiServiceProvider implements ServiceProviderInterface
{

    /**
     * {@inheritdoc}
     */
    public function register(Application $app)
    {
        $app['mysqli'] = $app->share(
            function (Application $app) {
                if (isset($app['mysqli.configuration']) && is_array($app['mysqli.configuration'])) {
                    $config = $app['mysqli.configuration'];
                } else {
                    throw new \LogicException('mysqli.configuration is not defined');
                }
                $MySQLi = new MySQLi($config['host'], $config['username'], $config['password'], $config['database']);
                $MySQLi->set_charset($config['charset']);

                return $MySQLi;
            }
        );
    }

    /**
     * {@inheritdoc}
     */
    public function boot(Application $app)
    {
    }

}
