# Laravel Get Validation Rules Helper

This package helps you to get validation rule so easily.

*Support Laravel 5.4~*

## Installation

First, pull in the package through Composer.

Run `composer require hareku/laravel-rule-getter`

And then, include the service provider within `config/app.php`.

```php
'providers' => [
    Hareku\LaravelRule\ValidationRuleServiceProvider::class,
];
```

Publish the config file. (validation-rules.php)

```sh
$ php artisan vendor:publish --provider="Hareku\LaravelRule\ValidationRuleServiceProvider"
```

Setting is completed!

## Usage

### Get a validation rule.

```php
// validation-rules.php

return [
    'user' => [
        'name'     => 'required|min:1|max:20',
        'email'    => 'required|email|max:255|unique:users',
        'password' => 'required|min:6|max:100|confirmed',
    ],
];


// You can get with a helper function.

rule('user.name') // 'required|min:1|max:20'
rule('user.email') // 'required|email|max:255|unique:users'
rule('user.password') // 'required|min:6|max:100|confirmed'
```

## License

MIT

## Author

hareku (hareku908@gmail.com)
