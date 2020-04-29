# shinepress/wordpress-stubs

[![Latest Version](https://img.shields.io/packagist/v/shinepress/wordpress-stubs?label=latest)](https://packagist.org/packages/shinepress/wordpress-stubs/)
[![Downloads](https://img.shields.io/packagist/dt/shinepress/wordpress-stubs?label=downloads)](https://packagist.org/packages/shinepress/wordpress-stubs/)


## Description

WordPress function and class declaration stubs for static analysis split into multiple files for increased performance. Automatically generated from the [wordpress-stubs.php](https://github.com/php-stubs/wordpress-stubs/blob/master/wordpress-stubs.php) stubfile in [php-stubs/wordpress-stubs](https://github.com/php-stubs/wordpress-stubs/).


## Installation

The recommendend installation method is with composer:
```sh
$ composer require shinepress/wordpress-stubs
```

**Note:** only tagged versions are functional, dev-main will not provide any stubfiles.


## Usage

Just register the autoloader as a bootstrap file in your phpstan config:
```yaml
parameters:
    bootstrapFiles:
        - ./vendor/shinepress/wordpress-stubs/autoload.php
```


## Acknowledgements

The project is made possible by:
* [php-stubs/wordpress-stubs](https://packagist.org/packages/php-stubs/wordpress-stubs) ([Viktor Szépe](https://github.com/szepeviktor))
* [czproject/git-php](https://packagist.org/packages/czproject/git-php) ([Jan Pecha](https://github.com/janpecha))
* [nikic/php-parser](https://packagist.org/packages/nikic/php-parser) ([Nikita Popov](https://github.com/nikic))