<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
     protected $table= 'cats';
     protected $fillable=['title'];
     use SoftDeletes;
     protected $dates = ['deleted_at'];
}
