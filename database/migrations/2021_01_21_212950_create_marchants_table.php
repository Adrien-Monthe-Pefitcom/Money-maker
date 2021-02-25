<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marchants', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('raison')->nullable();
            $table->string('forme')->nullable();
            $table->string('date_creation')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_gerant')->nullable();
            $table->string('siege')->nullable();
            $table->string('phone')->nullable();
            $table->string('site')->nullable();
            $table->string('statut')->default('En Attente');
            $table->string('activite')->nullable();
            $table->string('gerant_id')->nullable();
            $table->string('commercial_id')->nullable();
            $table->string('superviseur_id')->nullable();

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
        Schema::dropIfExists('marchants');
    }
}
