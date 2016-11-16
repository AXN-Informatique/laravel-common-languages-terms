Laravel common languages terms
==============================

Provides a set of common language terms for Laravel.


Installation
------------

Install through composer:

```sh
composer require axn/laravel-common-languages-terms
```

Add the service provider to the array of providers in `config/app.php`:

```php
// config/app.php

'provider' => [
    //...
    Axn\LaravelCommonLanguagesTerms\ServiceProvider::class,
    //...
];
```

Usage
-----

Look in the files in the "terms" directory of the package.

For example, for the delete action:

```php
trans('common::action.delete')
```

Or for the title of a button "back to the list":

```php
trans('common::misc.back_to_list')
```

