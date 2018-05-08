# My [Shower](https://shwr.me/) shows

1. [Magento 2 Configuration](shows/magento2-configuration)

This repo also provides a simple framework which helps with preparing the shows if you know some php.

See [helpers.php](helpers.php) for available functions.

Use [compile.php](compile.php) to build the HTML version of the show:
```
php compile.php <show-name>
```

See [example show](var/example) for a quick-start.

Driven by [Shower Presentation Engine](https://shwr.me/).

## Start new show

Copy `var/example` to `shows/<show-name>`. Write.

## Installation

Run:
```
bower install
php -S localhost:8000
```
Open: [http://localhost:8000](http://localhost:8000)
