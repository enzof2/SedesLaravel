<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table= 'personas';
    protected $fillable= ['name','lastname','dni','telf','fechnac'];
}
