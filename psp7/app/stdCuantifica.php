<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stdCuantifica extends Model
{    protected $table ='stdCuantificas';
    protected $primaryKey='id';
    protected $hiden=['id'];
    protected $fillable=['idEstudiante','numeroProyecto','lenguaje','tipoConteo','ejecutables','declaraciones',
    						'dCompilador','comentarios','lineasBlanco','delimitadores','comentariosAd'];
    public $timestamps = false;
}
