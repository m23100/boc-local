<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
	protected $table = 'categories';
    protected $fillable = ['name'];
    //
    public $timestamps = false;

}
