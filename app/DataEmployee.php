<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataEmployee extends Model
{


  protected $fillable = [
       'name', 'email','phone', 'password','address',
   ];

     public $timestamps = false;
}
