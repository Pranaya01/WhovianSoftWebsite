<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResourceSlider extends Model
{
    protected $table = 'resourceSlider';
    protected $fillable = [
        'title',
        'image',
    ];
}
