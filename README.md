Base62 Algorithm
================
[![Build Status](https://img.shields.io/travis/vinkla/base62/master.svg?style=flat)](https://travis-ci.org/vinkla/base62)
[![Latest Stable Version](http://img.shields.io/packagist/v/vinkla/base62.svg?style=flat)](https://packagist.org/packages/vinkla/base62)
[![License](https://img.shields.io/packagist/l/vinkla/base62.svg?style=flat)](https://packagist.org/packages/vinkla/base62)

Base62 Algorithm Composer package. Convert integers to [base62](http://en.wikipedia.org/wiki/62) strings and back.


Installation
------------
This is class is in the [Packagist repository](https://packagist.org/packages/vinkla/base62) and can be installed like any other [Composer](https://getcomposer.org/) package.

```json
{
	"require": {
		"vinkla/base62": "~1.0"
	}
}
```

If using [Laravel](http://laravel.com) (not required), add the service provider to ```config/app.php``` in the providers array.

```php
'Vinkla\Base62\Base62ServiceProvider'
```

Usage
-----
Here's an example.
```php
$base62 = new Vinkla\Base62();

// Encode
$string = $base62->encode(36); // Returns 'A'

// Decode
$int = $base62->decode($string); // Returns '36'
```

## License

The Base62 package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
