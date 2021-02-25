<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_ventes', function (Blueprint $table) {
            $table->id();
            $table->string('owner')->nullable();
            $table->longText('copie_rccm')->nullable();
            $table->string('rccm')->nullable();
            $table->longText('carte_contribuable')->nullable();
            $table->longText('non_redevance')->nullable();
            $table->string('localisation')->nullable();
            $table->string('init_deposit')->nullable();
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
        Schema::dropIfExists('point_ventes');
    }
}
