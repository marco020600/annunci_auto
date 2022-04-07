<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelli', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('marca_id');
            $table->timestamps();
            $table->foreign('marca_id')->references('id')->on('marche')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modelli');
    }
}
