<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Painting extends Model
{
    protected $fillable = ['author', 'country', 'image', 'price'];
}
