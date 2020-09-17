<?php

use Illuminate\View\ComponentAttributeBag;

/**
 * @var ComponentAttributeBag $attributes
 * @var string $prefix
 */

?>

<div class="row">
    <div class="col-12 form-group">
        <x-text name="{{$prefix}}[street]" label="{{ucwords(__('def-address::address.street'))}}"/>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-4 form-group">
        <x-text name="{{$prefix}}[postal_code]" label="{{ucwords(__('def-address::address.postal_code'))}}"/>
    </div>
    <div class="col-12 col-md-6 form-group">
        <x-text name="{{$prefix}}[city]" label="{{ucwords(__('def-address::address.city'))}}"/>
    </div>
    <div class="col-12 col-md-2 form-group">
        <x-text name="{{$prefix}}[state]" label="{{ucwords(__('def-address::address.state'))}}"/>
    </div>
</div>
<div class="row">
    <div class="col-12 form-group">
        <x-text name="{{$prefix}}[country]" label="{{ucwords(__('def-address::address.country'))}}"/>
    </div>
</div>
