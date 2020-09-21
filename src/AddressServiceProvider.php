<?php


namespace DefStudio\Address;


use DefStudio\Address\View\Components\Form;
use Illuminate\Support\ServiceProvider;

class AddressServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . "/../database/migrations");

        $this->loadViewComponentsAs('address', [
            Form::class
        ]);

        $this->loadViewsFrom(__DIR__ . "/../resources/views", 'def-address');

        $this->loadTranslationsFrom(__DIR__ . "/../resources/lang", 'def-address');


        $this->publishes([
            __DIR__ . "/../resources/views" => resource_path('views/vendor/def-address'),
        ], 'views');

        $this->publishes([
            __DIR__ . "/../resources/lang" => resource_path('lang/vendor/def-address'),
        ], 'lang');


    }
}
