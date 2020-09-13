<?php


namespace DefStudio\Address;


class AddressServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__."/../database/migrations");
    }
}
