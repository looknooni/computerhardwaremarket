<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'products_id';
    protected $fillable = [
        'name',
        'price',
        'category_id',
        'image',
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
