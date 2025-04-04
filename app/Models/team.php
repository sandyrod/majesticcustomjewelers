<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'position',
        'x',
        'facebook',
        'instagram',
        'tiktok',
        'linkedin'
    ];
}
