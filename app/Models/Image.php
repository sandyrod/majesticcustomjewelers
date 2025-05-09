<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'is_main',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
