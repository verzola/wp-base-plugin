# Base Plugin

## Features

- Composer
- PSR-4 Autoloading
- Code sniffer
- Dependency injection
- PHPUnit

## Requirements

- PHP
- Node
- Composer

## Setup

```sh
$ git clone git@github.com:verzola/wp-base-plugin.git _base
$ mv _base <wp folder>/wp-content/plugins/
$ cd <wp folder>/wp-content/plugins/_base
```

## Helpers

- ./bin/build -> install composer with no dev flag
- ./bin/dev -> runs webpack watch mode
- ./bin/format -> format code with phpcs
- ./bin/install -> install composer and npm dependencies
- ./bin/test -> run phpunit test suite

## TODO

- [x] PSR4 Autoloading
- [x] Setup composer autoloading
- [x] Install composer dependencies on plugin activation
- [x] Setup PHPDI
- [x] Create config file
- [x] Configure webpack
- [x] Fix assets paths
- [] Configure pre-commit hook to use phpcsfixer
- [] Create script to replace base with plugin name
