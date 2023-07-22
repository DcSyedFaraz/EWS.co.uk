<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaperType extends Model
{
    public $timestamps=false;

    public $fillable=['id','name'];
}
