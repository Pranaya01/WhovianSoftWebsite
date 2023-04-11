<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'date',
        'news_title', 
        'news_category',
        'news_description', 
        'user_id',
        'image',
        'meta_title',
        'meta_description'
    ];
    public function user_name(){
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
