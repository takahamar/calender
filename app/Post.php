<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['designated_at', 'title', 'body', 'image_url'];
}
