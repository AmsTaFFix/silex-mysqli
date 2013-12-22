<?php

/**
 * Part of the silex-mysqli
 *
 * @author Kilte <nwotnbm@gmail.com>
 * @package silex-mysqli
 */

require __DIR__ . '/../vendor/autoload.php';

use Kilte\MySQLi\Exception\MySQLiException;
use Kilte\MySQLi\MySQLiServiceProvider;
use Silex\Application;

$app = new Application(array('debug' => true));

$app->register(new MySQLiServiceProvider, array(
    'mysqli.configuration' => array(
        'host'     => 'localhost',
        'username' => 'root',
        'password' => '1234',
        'database' => 'mysql',
        'charset'  => 'utf8',
    ),
));

$app->get('/', function () use ($app) {
    $return = '<pre>';
    try {
        $result = $app['mysqli']->query("INVALID");
        $return .= 'Perform Query<br />' . print_r($result, true) . '<hr />';
    } catch (MySQLiException $e) {
        $return .= 'Catch MySQLIException with message: <br />' . $e->getMessage() . '<hr />';
    }
    $return .= 'MySQLi:<br />' . print_r($app['mysqli'], true) . '<hr />';

    return $return;
});

$app->run();
