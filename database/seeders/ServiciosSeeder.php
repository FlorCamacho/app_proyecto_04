<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Servicios::insert([
            [
                'nombre' => 'Cuidado de niños por hora',
                'descripcion' => 'Cuidado de niños de todas las edades.',
                'precio' => 200.00,
                'duracion_estimada' => 60,
                'categoria' => 'Cuidado infantil',
                'usuario_id' => 2,
            ],
            [
                'nombre' => 'Cuidado de niños por día',
                'descripcion' => 'Cuidado de niños de todas las edades durante un día completo.',
                'precio' => 700.00,
                'duracion_estimada' => 480,
                'categoria' => 'Cuidado infantil',
                'usuario_id' => 2,
            ],
            [
                'nombre' => 'Cuidado de niños nocturno',
                'descripcion' => 'Cuidado de niños de todas las edades durante la noche.',
                'precio' => 900.00,
                'duracion_estimada' => 480,
                'categoria' => 'Cuidado infantil',
                'usuario_id' => 2,
            ],
        ]);
    }
}
