<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Proyectos extends Model
{
    //

    protected $table ='Proyectos';
    protected $primaryKey='id';
    protected $hiden=['id'];
    protected $fillable=['NumeroProyecto','NombreProyecto','ElementosDeEvaluacion','NombreArchivo','RutaArchivo'];
    public $timestamps = false;
}
