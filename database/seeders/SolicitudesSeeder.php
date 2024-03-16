<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SolicitudesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Solicitudes::insert([
            [
                'usuario_id' => 3,
                'servicio_id' => 1,
                'fecha' => Carbon::now()->format('Y-m-d'),
                'duracion' => 60,
                'estado' => 'pendiente',
                'costo_total' => 15.00,
                'comentarios' => 'Necesito cuidado de niños para esta tarde.',
            ],
            [
                'usuario_id' => 3,
                'servicio_id' => 2,
                'fecha' => Carbon::now()->addDays(2)->format('Y-m-d'),
                'duracion' => 480,
                'estado' => 'pendiente',
                'costo_total' => 100.00,
                'comentarios' => 'Necesito cuidado de niños para el próximo fin de semana.',
            ],
        ]);
    }
}
