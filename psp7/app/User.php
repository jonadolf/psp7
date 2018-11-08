<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array


     */
    

    protected $fillable = [
        'name', 'tipoUsuario','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token', 'password'
    ];


   /* public function setPasswordAttibute($valor){

        if(!empty($valor)) {

            $this->attributes['password'] =\ Hash::make($valor);
        }
    }

    /* FUNCION PARA ENVIAR CORREO ELECTRONICO*/
    /*public function sendPasswordResetNotification($token){

        $this->notify(new CustomerResetPasswordNotification($toke));
 
   }*/
}
