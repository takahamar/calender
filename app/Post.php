<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = ['user','id', 'designated_at', 'title', 'body', 'image_url'];
}

class BaseModel extends Model
{
    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('YmdHIS');
    }
 
    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('YmdHIS');
    }
}
