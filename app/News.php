<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'date',
        'news_title', 
        'news_type',
        'news_description', 
        'image'
    ];
}
