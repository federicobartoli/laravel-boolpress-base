<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // in ita protected $table = 'nome table in ita';
    protected $fillable = [
       'title',
       'body',
       'slug',
       'author',
       'published'//,
       // 'img'
   ];
}
