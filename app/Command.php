<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Command extends Model
{
    
    protected $table="command";
    protected $primaryKey = 'id_client';
    protected $dates = ['deleted_at'];
    protected $fillable = [
         'name', 'email', 'adress','product','quantity','phone','dispo'
     ];
}
