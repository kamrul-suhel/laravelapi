<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const AVALIABLE_PRODUCT = 'avaliable';
    const UNAVALIABLE_PRODUCT = 'unavaliable';
    protected $fillable = [
        'name',
        'quantity',
        'description',
        'image',
        'status',
        'seller_id'
    ];

    public function isAvaliable(){
        return $this->status == Product::AVALIABLE_PRODUCT;
    }

    public function seller(){
        return $this->belongTo(Seller::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
