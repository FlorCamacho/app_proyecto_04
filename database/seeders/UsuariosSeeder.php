<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Usuarios::insert([
            [
                'nombre' => 'Administrador',
                'correo_electronico' => 'admin@ejemplo.com',
                'contraseña' => Hash::make('password'),
                'rol_id' => 1,
            ],
            [
                'nombre' => 'Niñera 1',
                'correo_electronico' => 'ninera1@ejemplo.com',
                'contraseña' => Hash::make('password'),
                'rol_id' => 2,
            ],
            [
                'nombre' => 'Cliente 1',
                'correo_electronico' => 'cliente1@ejemplo.com',
                'contraseña' => Hash::make('password'),
                'rol_id' => 3,
            ],
        ]);
    }
}
