<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actualLdc extends Model
{
    protected $table ='actualLdcs';
    protected $primaryKey='id';
    protected $hiden=['id'];
    protected $fillable=['idProyecto','idUsuario',
     'actualBase','actualEliminado','actualModificado','actualBadicionado',
     'actualReusado','actualNyC','actualTotal'];
    public $timestamps = false;

}
