<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios'); // Clave foránea a usuarios
            $table->foreignId('servicio_id')->constrained('servicios'); // Clave foránea a servicios
            $table->date('fecha');
            $table->integer('duracion');
            $table->enum('estado', ['pendiente', 'confirmado', 'cancelado']);
            $table->decimal('costo_total', 8, 2);
            $table->string('comentarios')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
}