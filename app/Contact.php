<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
//    mass assignment
    protected $fillable = ['name','phone','message'];
}
