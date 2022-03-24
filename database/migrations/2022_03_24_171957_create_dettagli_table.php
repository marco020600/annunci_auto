<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDettagliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dettagli', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('proprietari');
            $table->string('cambio');
            $table->string('vernice');
            $table->string('rivestimenti');
            $table->bigInteger('posti');
            $table->bigInteger('porte');
            $table->text('consumi');
            $table->text('emissioni');
            $table->text('equipaggiamento');
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
        Schema::dropIfExists('dettagli');
    }
}
