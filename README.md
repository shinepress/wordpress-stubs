# shinepress/wordpress-stubs

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