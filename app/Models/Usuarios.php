<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Usuarios extends Eloquent
{
    use HasFactory, Notifiable;

    protected $connection = "mongodb";
    protected $collection = 'usuarios';

    protected $fillable = [
        'nombre',
        'correo_electronico',
        'contraseña',
        'rol_id', // Relacion con Rol (clave foránea)
        'telefono',
        'direccion',
    ];

    public function roles()
    {
        return $this->belongsToMany(Roles::class);
    }

    public function servicios()
    {
        return $this->hasMany(Servicios::class);
    }

    public function solicitudes()
    {
        return $this->hasMany(Solicitudes::class);
    }
}