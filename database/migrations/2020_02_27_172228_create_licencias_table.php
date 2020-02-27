<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->float('costo');
            $table->string('ventaja');
            $table->string('descripcion');
            $table->string('tiempoDeUso');
            $table->string('tipo');
            $table->string('caracteristicas');
            $table->string('cantidadProducto');
            $table->date('fechaCompra');
            $table->date('fechaExpiracion');
            $table->unsignedInteger('administrador_id');
            $table->timestamps();

            //relaciones
            $table->foreign('administrador_id')->references('id')->on('administradors')
             ->onDelete('cascade')
             ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licencias');
    }
}
