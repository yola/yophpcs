# Yophpcs

Yophpcs is the PHP Code Sniffer for Yola that defines the PHP Coding Standards

## Using the Code Sniffer

```
$ vendor/bin/phpcs --extensions=php --standard=/path/to/yophpcs/Standard /path/to/project
```

## Use as the phpcs standard

```
$ phpcs --config-set default_standard /path/to/checkout/yophpcs/Yola
Config value "default_standard" added successfully
```

The phpcs config file is located:
`/usr/local/etc/PHP_CodeSniffer/CodeSniffer.conf`

## Yola Standard
The base standard, it is derived from the [PSR-2 Coding Style Guide](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md).

### Differences

#### 4.2 Properties

Property names SHOULD be prefixed to indicate private visibility.

```php
<?php
namespace Vendor\Package;

class ClassName
{
    public $foo = null;
    protected $bar = null;
    private $_baz = null;
}
```

## Tests
Included are unit tests. To run tests:

```
$ vendor/bin/codecept run
```
