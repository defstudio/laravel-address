<?php


namespace DefStudio\Address\Models;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'label',
        'street',
        'city',
        'state',
        'postal_code',
        'country',
        'addressable_id',
        'addressable_type',
    ];

    public function addressable(){
        return $this->morphTo();
    }

    public function scopeLabel(Builder $query, string $label): Builder{
        if(empty($label)) return $query;

        return $query->where('label', $label);
    }
}
