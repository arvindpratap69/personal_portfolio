<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'icon_1',
        'icon_2',
        'icon_3',
        'subtitle',
        'title',
        'short_description',
        'long_description',
    ];
}
