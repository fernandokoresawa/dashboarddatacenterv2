<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alertas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('historico_id');
            $table->foreign('historico_id')->references('id')->on('historicos');

            $table->string('mensagem');

            $table->boolean('enviado');

            //Ex.: Sensor de gás em estado de alerta: 81ppm em 23/10/2019 às 14:00:23 

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
        Schema::dropIfExists('alertas');
    }
}
