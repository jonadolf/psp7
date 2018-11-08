<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Defectos extends Model
{
    //
    protected $table ='Defectos';
    protected $primaryKey='id';
    protected $hiden=['id'];
    protected $fillable=['Numero','Nombre','Descripcion'];
    public $timestamps = false;
}
