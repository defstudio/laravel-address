<?php


namespace DefStudio\Address\Traits;


use DefStudio\Address\Models\Address;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * Trait HasAddress
 *
 * @property-read Collection|Address[] $addresses
 * @property-read Address $address
 *
 * @package DefStudio\Address\Traits
 */
trait HasAddress
{
    public static function bootHasAddress(){
        static::deleting(function($model){
            $model->addresses()->delete();
        });
    }


    public function addresses($label=''): MorphMany{
        if(empty($label)){
            return $this->morphMany($this->get_address_model(), 'addressable');
        }else{
            return $this->morphMany($this->get_address_model(), 'addressable')->label($label);
        }

    }

    public function address($label = 'primary'): MorphOne
    {
        return $this->morphOne($this->get_address_model(), 'addressable')->label($label);
    }

    public function has_address()
    {
        return $this->addresses()->count() > 0;
    }


    protected function get_address_model(): string
    {
        return config('addresses.address_model', Address::class);
    }

}
