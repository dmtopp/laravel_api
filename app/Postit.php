<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postit extends Model
{
    protected $fillable = ['name', 'note'];
}
