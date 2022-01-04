<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleoInformalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleo_informal', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empleo');
            $table->string('detalle_empleo');
            $table->string('direccion_empleo');
            $table->string('comuna_empleo');
            $table->string('region_empleo');
            $table->string('categoria');
            $table->integer('precio_empleo');
            $table->datetime('fecha_y_hora');
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
        Schema::dropIfExists('empleo_informal');
    }
}
