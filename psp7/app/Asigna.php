<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asigna extends Model
{

    protected $table ='asignas';
    protected $primaryKey='id';
    protected $hiden=['id'];
    protected $fillable=['idEstudiante','numeroProyecto','estado'];
    public $timestamps = false;

   /* public function setAsignadoAttribute($value){
    	$this->attributes['asignado']=($value == 'on' )? '1':'0';
    }*/
}
