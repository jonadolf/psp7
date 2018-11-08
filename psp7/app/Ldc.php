<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Iatstuti\Database\Support\NullableFields;

class Ldc extends Model
{
    protected $table ='ldcs';
    protected $primaryKey='id';
    protected $hiden=['id'];
    protected $fillable=['idEstudiante','numeroProyecto','contenido'];
    public $timestamps = false;
}
