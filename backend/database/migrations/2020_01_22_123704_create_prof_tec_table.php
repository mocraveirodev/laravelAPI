<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfTecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prof_tec', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('prof_id');
            $table->foreign('prof_id')->references('id')->on('profissionais');
            $table->unsignedBigInteger('tec_id');
            $table->foreign('tec_id')->references('id')->on('tecnologias');
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
        Schema::dropIfExists('prof_tec');
    }
}
