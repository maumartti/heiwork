<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $guarded = array();

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function categoryPost()
    {
        return $this->belongsTo(CategoryPost::class, 'category_id');
    }
}
