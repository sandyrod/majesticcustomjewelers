<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product',
        'code',
        'price',
        'description',
        'showprice',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function productcategory()
    {
        return $this->hasMany(ProductCategory::class);
    }
}
