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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',60);
            //que el campo permita valores nulos
            $table->string('descripcion',100)->nullable();
            $table->integer('stock');
            //columna Decimal, por defecto 1
            $table->float('precioCompra')->default(1);
            $table->float('precioVenta')->default(1);
            //Relacion con nuestra tabla Categorias
            $table->foreignId('categoria_id')->constrained();
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
        Schema::dropIfExists('productos');
    }
};
