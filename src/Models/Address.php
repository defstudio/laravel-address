<?php


namespace DefStudio\Address\Models;


use DefStudio\Address\Database\Factories\AddressFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    use HasFactory;

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

    public function addressable()
    {
        return $this->morphTo();
    }

    public function scopeLabel(Builder $query, string $label): Builder
    {
        if (empty($label)) return $query;

        return $query->where('label', $label);
    }

    protected static function newFactory()
    {
        return AddressFactory::new();
    }


}
