# shinepress/wordpress-stubs

[![Latest Version](https://img.shields.io/packagist/v/shinepress/wordpress-stubs?label=latest)](https://packagist.org/packages/shinepress/wordpress-stubs/)
[![Downloads](https://img.shields.io/packagist/dt/shinepress/wordpress-stubs?label=downloads)](https://packagist.org/packages/shinepress/wordpress-stubs/)

## Installation

The recommendend installation method is with composer:
```sh
$ composer require shinepress/wordpress-stubs
```

## Usage

Just register the autoloader as a bootstrap file in your phpstan config:
```yaml
parameters:
    bootstrapFiles:
        - ./vendor/shinepress/wordpress-stubs/autoload.php
```

## Attribution

All tagged releases are automatically generated from [php-stubs/wordpress-stubs](https://github.com/php-stubs/wordpress-stubs/).