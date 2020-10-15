<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('estado');
            $table->string('id_productos');
            $table->string('cantidades');
            $table->string('descripcion');
            $table->string('notificar');
            $table->integer('precio_total_venta');
            $table->timestamp('fecha_venta');
            $table->bigInteger('id_empresa')->unsigned();
            $table->foreign('id_empresa')->references('id')->on('empresas');
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
        Schema::dropIfExists('ventas');
    }
}
