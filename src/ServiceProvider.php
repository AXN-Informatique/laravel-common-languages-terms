<?php

namespace Axn\LaravelCommonLanguagesTerms;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../terms', 'common');
    }
}
