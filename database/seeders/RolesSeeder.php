<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Roles::insert([
            ['nombre' => 'administrador'],
            ['nombre' => 'niñera'],
            ['nombre' => 'cliente'],
        ]);
    }
}
