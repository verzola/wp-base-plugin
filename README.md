# Wordpress Base Plugin

Webpack and Composer base plugin for Wordpress

## Features

- PSR-4 Autoloading
- Code Sniffer
- Dependency Injection
- Composer
- PHPUnit

## Setup

```sh
# enter in wordpress plugins folder 
$ cd wp-content/plugins

# clone base plugin
$ git clone git@github.com:verzola/wp-base-plugin.git _base

# enter in base plugin directory
$ cd _base

# install dependencies
$ npm install

# start browsersync development server
$ npm run dev

# compile assets for production
$ npm run build

```

## Helpers

```sh
# install dependencies and build for production
$ ./bin/build

# start webpack in watch mode
$ ./bin/dev

# formats code
$ ./bin/format

# install dependencies
$ ./bin/install

# run test suite
$ ./bin/test
```
