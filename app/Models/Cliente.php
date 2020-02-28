<?php

namespace App\Models;
use App\Model\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cliente extends Model
{
	use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cedula',
        'nombre',
        'apellido',
        'direccion',
        'telefono',
        'licencia_id',
        'usuario_id'
    ];
}
