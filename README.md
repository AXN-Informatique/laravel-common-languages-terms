Laravel common languages terms
==============================

Provides a set of common language terms for Laravel.


Installation
------------

Install through composer:

```sh
composer require axn/laravel-common-languages-terms
```

In Laravel 5.5 the service provider will automatically get registered.
In older versions of the framework just add the service provider
to the array of providers in `config/app.php`:

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

You can access to the translations of this package in this way:

```php
trans('common::{file}.{key}')
```

Where "{file}" is the translation file name and where "{key}" is the key in that file.

Look in the files in the "terms" directory of the package to better understand..

For example, for the delete action:

```php
trans('common::action.delete')
```

Or for the title of a button "back to the list":

```php
trans('common::back.list')
```

