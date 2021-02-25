<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('super_admins', function (Blueprint $table) {
            $table->id();
            $table->string('matricule', 100)->unique();
            $table->longText('cv')->nullable();
            $table->string('last_diploma')->nullable();
            $table->string('motivation_letter')->nullable();
            $table->longText('casier_judi')->nullable();
            $table->string('languages')->nullable();
            $table->string('years_experience')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('type_contract')->nullable();
            $table->string('revenu')->default('0.00');
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('super_admins');
    }
}
