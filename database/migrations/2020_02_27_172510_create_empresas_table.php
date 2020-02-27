<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rif');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono');
            $table->unsignedInteger('licencia_id');
            $table->unsignedInteger('usuario_id');

             //relaciones
             $table->foreign('licencia_id')->references('id')->on('licencias')
             ->onDelete('cascade')
             ->onUpdate('cascade');

            $table->foreign('usuario_id')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('empresas');
    }
}
