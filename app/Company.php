<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $table = 'companies';
	//public $timestamps = false;
	protected $guarded = array();
	//protected $fillable = ['name','type','email','subtitle','country','city','address','cel','tel','description','image','lng','lat'];
}