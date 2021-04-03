<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     // SoftDeletes;
     protected $dates = ['deleted_at'];
     protected $fillable = [
          'reference', 'date', 'address','price','name_deli'
      ];
}
