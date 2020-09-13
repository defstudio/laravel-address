<?php


namespace DefStudio\Address;


use DefStudio\Address\View\Components\Form;

class AddressServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__."/../database/migrations");
        $this->loadViewsFrom(__DIR__."/resources/views", 'def-address');
        $this->loadViewComponentsAs('address', [
            Form::class
        ]);
    }
}
