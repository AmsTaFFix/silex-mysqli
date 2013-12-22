<?php

/**
 * Part of the silex-mysqli
 *
 * @author Kilte <nwotnbm@gmail.com>
 * @package silex-mysqli
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
     * Registers services on the given app.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Application $app An Application instance
     */
    public function register(Application $app)
    {
        $app['mysqli'] = $app->share(function () use ($app) {
            $config = isset($app['mysqli.configuration']) && is_array($app['mysqli.configuration']) ? $app['mysqli.configuration'] : array();
            $MySQLi = new MySQLi($config['host'], $config['username'], $config['password'], $config['database']);
            $MySQLi->set_charset($config['charset']);

            return $MySQLi;
        });
    }

    /**
     * Bootstraps the application.
     *
     * This method is called after all services are registered
     * and should be used for "dynamic" configuration (whenever
     * a service must be requested).
     */
    public function boot(Application $app)
    {
    }

}
