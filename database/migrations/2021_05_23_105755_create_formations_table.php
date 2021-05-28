<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('reference_formation', 10)->unique();
            $table->string('nom_formation', 100);
            $table->string('domaine_formation', 100);
            $table->string('niveau_etude', 50);
            $table->string('type', 100);
            $table->longText('description_formation');
            $table->bigInteger('duree');
            $table->bigInteger('prix');
            $table->string('photo_formation', 100);
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
        Schema::dropIfExists('Formations');
    }
}
