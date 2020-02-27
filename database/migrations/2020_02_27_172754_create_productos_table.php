Integer<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('marca');
            $table->string('color')->nullable();
            $table->string('genero')->nullable();
            $table->date('fechaVencimiento')->nullable();
            $table->string('descripcion')->nullable();
            $table->unsignedInteger('categoria_id');
            $table->unsignedInteger('empresa_id');
            $table->string('slug')->unique(); //URL Amigable


            //relaciones
          $table->foreign('categoria_id')->references('id')->on('categorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');

           $table->foreign('empresa_id')->references('id')->on('empresas')
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
        Schema::dropIfExists('productos');
    }
}
