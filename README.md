Yophpcs
=======
Yophpcs is the PHP Code Sniffer for Yola that defines the PHP Coding Standards

Using the Code Sniffer
----------------------
```
$ ./vendor/bin/phpcs --extensions=php --standard=/path/to/yophpcs/Standard /path/to/project
```

## Yola
The base standard, it is derived from the [PSR-2 Coding Style Guide](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md).

Differences
-----------

###4.2 Properties

Property names SHOULD be prefixed to indicate private visibility.

```
<?php
namespace Vendor\Package;

class ClassName
{
    public $foo = null;
    protected $bar = null;
    private $_baz = null;
}
```

## SiteComponents
Due to the minimum requirements of SiteComponents, a derivative of the Yola Standard is necessary

Differences
-----------
