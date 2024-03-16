<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Servicios extends Eloquent
{
    use HasFactory, Notifiable;

    protected $connection = "mongodb";
    protected $collection = 'servicios';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'duracion_estimada',
        'categoria',
        'usuario_id', // Relacion con Usuario
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class);
    }

    public function solicitudes()
    {
        return $this->hasMany(Solicitudes::class);
    }
}