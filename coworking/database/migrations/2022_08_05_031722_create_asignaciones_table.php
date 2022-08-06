<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_asignacion');
            $table->time('hora_inicio');
            $table->time('hora_final');
            $table->integer('total_horas');
            $table->string('nota');
            $table->double('total', 8, 2);

            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('sala_id');
            $table->unsignedBigInteger('usuario_id');

            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('sala_id')->references('id')->on('salas');
            $table->foreign('usuario_id')->references('id')->on('users');

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
        Schema::dropIfExists('asignaciones');
    }
};