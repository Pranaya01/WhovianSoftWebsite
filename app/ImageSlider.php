<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageSlider extends Model
{
    protected $table = 'imageslider';
    protected $fillable = [
        'title',
        'image',
    ];
}
