<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fases extends Model
{
    //
    protected $table ='Fases';
    protected $primaryKey='id';
    protected $hiden=['id'];
    protected $fillable=['Numero','Nombre'];
    public $timestamps = false;
}
