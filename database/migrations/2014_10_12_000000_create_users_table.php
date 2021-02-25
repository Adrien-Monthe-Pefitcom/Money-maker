<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('sexe')->nullable();
            $table->string('identifiant_unique')->nullable();
            $table->string('ville')->nullable();
            $table->string('pays')->nullable();
            $table->string('profession')->nullable();
            $table->string('date_naissance')->nullable();
            $table->string('nom_banque')->nullable();
            $table->string('phone', 20)->unique();
            $table->string('role')->default('user');
            $table->string('statut')->default('En Attente');
            $table->string('num_piece')->nullable();
            $table->longText('scan_piece_recto')->nullable();
            $table->longText('scan_piece_verso')->nullable();
            $table->longText('photo')->nullable();
            $table->string('type_compte')->nullable();
            $table->string('no_compte_carte_virtuelle', 100)->unique();
            $table->string('refere_par')->nullable();
            $table->double('solde')->default('0.00');
            $table->longText('signature')->nullable();
            $table->string('num_compte_bancaire')->nullable();
            $table->string('commercial_id')->nullable();
            $table->string('superviseur_id')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
