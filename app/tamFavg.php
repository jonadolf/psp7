<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tamFavg extends Model
{
    protected $table ='tamFavgs';
    protected $primaryKey='id';
    protected $hiden=['id'];
    protected $fillable=['idProyecto','idUsuario',
    					'fReusado','fNyC','fTotal',
    					 'avgfReusado','avgfNyC','avgfTotal'];
    public $timestamps = false;
}
