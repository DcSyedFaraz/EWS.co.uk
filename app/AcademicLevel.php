<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicLevel extends Model
{
    public $timestamps=false;

    public $fillable=['id','name'];
}
