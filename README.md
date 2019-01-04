# Base Plugin

## Features
- Composer
- PSR-4 Autoloading
- PHPUnit
- PHPCSFixer
- PHPDI

## Requirements
- PHP
- Composer

## Setup
```sh
$ git clone git@bitbucket.org:webfatorial/wp-plugin-base.git
$ mv wp-plugin-base <wp folder>/wp-content/plugins
$ cd <wp folder>/wp-content/plugins/wp-plugin-base
$ composer install
```

## TODO
- [x] PSR4 Autoloading
- [x] Setup composer autoloading
- [x] Install composer dependencies on plugin activation
- [] Setup PHPDI
- [] Create config file
- [] Configure webpack
- [] Configure pre-commit hook to use phpcsfixer
- [] Create script to replace base with plugin name
- [] Fix assets paths
