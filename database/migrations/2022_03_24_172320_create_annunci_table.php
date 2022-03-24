<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnunciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annunci', function (Blueprint $table) {
            $table->id();
            $table->string('stato');
            $table->string('titolo');
            $table->decimal('prezzo', $precision = 8, $scale = 2);
            $table->bigInteger('chilometraggio');
            $table->date('immatricolazione');
            $table->bigInteger('potenza');
            $table->string('cilindrata');
            $table->string('colore');
            $table->string('alimentazione');
            $table->string('carrozzeria');
            $table->text('descrizione');
            $table->string('indirizzo');
            $table->timestamps();
            $table->foreignId('user_id');
            $table->foreignId('modello_id');
            $table->foreignId('comune_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('modello_id')->references('id')->on('modelli')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('comune_id')->references('id')->on('comuni')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annunci');
    }
}
