<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class planLdc extends Model
{
    protected $table ='planLdcs';
    protected $primaryKey='id';
    protected $hiden=['id'];
    protected $fillable=['idProyecto','idUsuario',
     'planBase','planBeliminado','planBmodificado','planBadicionado',
     'planBreusado','planNyC','planTotal'];
    public $timestamps = false;
}
