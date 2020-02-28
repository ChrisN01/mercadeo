<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//Importacion de los modelos
use App\Models\Administrador;
use App\Models\Cliente;
use App\Models\Empresa;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    //Relacion uno a uno: Un administrador solo puede tener un usuario
    public function administrador()
    {
        return $this->hasOne('App\Models\Administrador');
    }
    //Relacion uno a uno: Un cliente solo puede tener un usuario
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente');
    }

    //Relacion uno a uno: Una empresa solo puede tener un usuario
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa');
    }

}
