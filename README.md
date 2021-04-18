# PHP-Test
[![Latest Stable Version](https://poser.pugx.org/hum/crud/v)](//packagist.org/packages/hum/crud) 
[![Total Downloads](https://poser.pugx.org/hum/crud/downloads)](//packagist.org/packages/hum/crud) 
[![Latest Unstable Version](https://poser.pugx.org/hum/crud/v/unstable)](//packagist.org/packages/hum/crud)
[![License](https://poser.pugx.org/hum/crud/license)](//packagist.org/packages/hum/crud)
PHP-Test
=======
A simple library for php test.

Installation
------------

Use composer to manage your dependencies and download Php-test:

```bash
composer require hum/test
```

Example
-------
```php
use hum\crud\Test;

$humcrud = new Test();
return $humcrud->testgreet("HUM");
