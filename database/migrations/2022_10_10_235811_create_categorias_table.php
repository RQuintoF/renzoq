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
        Schema::create('categorias', function (Blueprint $table) {
            //Columna Identificador ->Autoincrementable
            $table->id();
            //Columna Categoria
            $table->string('nombre',100);
            //Columna Descripcion
            $table->string('descripcion',150);
            //Columna de registro: Creado y Actualizado
            $table->timestamps();
            //Campo borrado suave
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
};