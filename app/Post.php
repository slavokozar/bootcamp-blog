<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    protected $fillable = ['name','content','user_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag','tags_posts');
    }

}
