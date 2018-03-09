<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */ 
    //Los campos id por defecto no se ponen, no es necesario.
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Estableciendo relacion 1:M user & arituclos, un usuario puede publicar muchos articulos
     public function articles() //funcion en plural
    {
        return $this->hasMany("App\Article"); //nombde del modelo, tabla, clase relacionada con User.
    } //fin articles

    //Estableciendo relacion 1:M un usuario en singuluar c
     public function user()
    {
        return $this->hasMany("App\User"); //nombde del modelo, tabla, clase relacionada con User.
    } //fin articles
}
