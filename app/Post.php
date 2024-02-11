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
    public function tecPost1()
    {
        return $this->belongsTo(Technology::class, 'tec1');
    }
    public function tecPost2()
    {
        return $this->belongsTo(Technology::class, 'tec2');
    }
    public function tecPost3()
    {
        return $this->belongsTo(Technology::class, 'tec3');
    }
    public function tecPost4()
    {
        return $this->belongsTo(Technology::class, 'tec4');
    }
}
