<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stdCodifica extends Model
{
	protected $table ='stdCodificas';
    protected $primaryKey='id';
    protected $hiden=['id'];
    protected $fillable=['idEstudiante','numeroProyecto','contenido'];
    public $timestamps = false;


    
}
