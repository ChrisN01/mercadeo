<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas_ofertas', function (Blueprint $table) {
            $table->increments('oferta_id')->unsigned();
            $table->unsignedInteger('rifEmpresa');

             //relaciones
           $table->foreign('oferta_id')->references('id')->on('ofertas')
           ->onDelete('cascade')
           ->onUpdate('cascade');

            $table->foreign('rifEmpresa')->references('id')->on('empresas')
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
        Schema::dropIfExists('empresas_ofertas');
    }
}
