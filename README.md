# MySQLiServiceProvider

MySQLi Service provider for [Pimple 3](http://github.com/fabpot/Pimple)

[![Build Status](https://travis-ci.org/Kilte/silex-mysqli.svg?branch=master)](https://travis-ci.org/Kilte/silex-mysqli)


## Requirements

- PHP &gt;= 5.3.3


## Usage

```php
use Kilte\MySQLi\MySQLiServiceProvider;
use Pimple\Container;

$c = new Container();

$c->register(
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
```

Now the service is available as `$c['mysqli']`.

This provider provides extended internal `\mysqli` class.

The only difference is that `query()` method throws the `Kilte\MySQLi\Exception\MySQLiException` exception.


## Tests

```
$ composer install
$ vendor/bin/phpunit
```

## Changelog

### 1.1.0 \[31.08.2014\]

- Making service compliant with Pimple 2.1 and Silex 2.0 (by Alexander Kudryashov)
- Making Pimple dependency instead Silex (by Alexander Kudryashov)

### 1.0.1 \[03.07.2014\]

- Throw \LogicException, if configuration does not exists
- Added unit tests
- PSR-4 autoloading

### 1.0.0 \[30.12.2013\]

- First release


## Contributing

- Fork it
- Create your feature branch (git checkout -b awesome-feature)
- Make your changes
- Write/update tests, if necessary
- Update README.md, if necessary
- Push your branch to origin (git push origin awesome-feature)
- Send pull request
- ???
- PROFIT!!!

Do not forget merge upstream changes:

    git remote add upstream https://github.com/Kilte/silex-mysqli
    git checkout master
    git pull upstream
    git push origin master

Now you can to remove your branch:

    git branch -d awesome-feature
    git push origin :awesome-feature


# LICENSE

The MIT License (MIT)
