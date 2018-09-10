<?php

namespace App;

use App\Scopes\SellerScope;

class Seller extends User
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new SellerScope());
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products(){
        return $this->hasMany(Product::class);
    }
}
