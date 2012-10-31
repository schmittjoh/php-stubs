PHPStubs
========

PHPStubs are PHP files which describe functions, classes, and constants provided
by PHP core, and third-party C extensions.

They are commonly used in IDEs for auto-completion, or static analysis tools.

This repository contains stubs for everything covered by the PHP Documentation,
and also the scripts necessary to build them. The types for some functions are
more precise than in the PHP Documentation. For example, instead of ``array``
often a type like ``string[]`` is used. Instead of ``mixed``, in some cases
we use something like ``float|string``.

The code for generating stubs is released under the Apache2 license. All generated
stubs automatically inherit their original license, the
[PHP Documentation license](http://creativecommons.org/licenses/by/3.0/legalcode).

If you would like to generate stubs, you can use the provided CLI tools:

```php
php bin/phpstubs.php generate
```