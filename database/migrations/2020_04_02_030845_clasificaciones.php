<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clasificaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('clasificaciones', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('idDuracion');
          $table->string('tipo_clasificacion');//crianza, reserve, gran reserva
          $table->integer('tiempo');//tiempo de duracion dependiendo el tipo_clasificacion
          $table->rememberToken();
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
        Schema::dropIfExists('clasificaciones');
    }
}
