<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deadline extends Model
{
    public $timestamps=false;

    public $fillable=['id','name'];
}
