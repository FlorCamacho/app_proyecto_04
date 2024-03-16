<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Solicitudes extends Eloquent
{
    use HasFactory, Notifiable;

    protected $collection = 'solicitudes';

    protected $fillable = [
        'usuario_id', // Relacion con Usuario
        'servicio_id', // Relacion con Servicio
        'fecha',
        'duracion',
        'estado', // (pendiente, confirmado, cancelado)
        'costo_total',
        'comentarios',
    ];

    public function usuarios()
    {
        return $this->belongsTo(Usuarios::class);
    }

    public function servicio()
    {
        return $this->belongsTo(Servicios::class);
    }
}