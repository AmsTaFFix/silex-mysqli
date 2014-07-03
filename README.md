#Silex MySQLi

Simple MySQLi Service provider for [Silex](http://silex.sensiolabs.org)

[![Build Status](https://travis-ci.org/Kilte/silex-mysqli.svg?branch=master)](https://travis-ci.org/Kilte/silex-mysqli)

## Requirements

- PHP >= 5.3.3

## Registration

    $app->register(
        new MySQLiServiceProvider,
        array(
            'mysqli.configuration' => array(
                'host'     => 'localhost',
                'username' => 'root',
                'password' => '1234',
                'database' => 'mysql',
                'charset'  => 'utf8',
            ),
        )
    );

Now the service is available as `$app['mysqli']`

## Usage

This provider provides extended internal `\mysqli` class.
The only difference is that `query()` method throws the `Kilte\MySQLi\Exception\MySQLiException` exception.
