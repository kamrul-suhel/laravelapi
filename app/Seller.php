<?php

namespace App;

use App\Scopes\SellerScope;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seller extends User
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

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
