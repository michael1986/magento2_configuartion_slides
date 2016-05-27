# My Shower Shows

1. [AngularJS is super cool](shows/angular)
2. [50 shades of PHP](shows/50-shades-of-php)
3. [Another PHP](shows/another-php)

This repo also provides a simple framework which helps with preparing the shows if you now some php.

See [helpers.php](helpers.php) for available functions.

Use [compile.php](compile.php) to build the HTML version of the show:
```
php compile.php <show-name>
```

See [example show](var/example) for a quick-start.

## Start new show

Copy `var/example` to `shows/<show-name>`. Write.

## Installation

1. Run:
```
bower install
php -S localhost:8000
```
2. Open: [http://localhost:8000]