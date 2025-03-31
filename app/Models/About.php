<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    protected $table = 'aboutus';

    protected $fillable = [
        'title',
        'description',
        'firstSubtitle',
        'firstDescription',
        'secondSubtitle',
        'secondDescription',
        'urlVideo'

    ];
}
