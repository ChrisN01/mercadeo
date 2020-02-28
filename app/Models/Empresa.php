<?php

namespace App\Models;
use App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'rif',
        'nombre',
        'direccion',
        'telefono',
        'licencia_id',
        'usuario_id'
    ];
}
