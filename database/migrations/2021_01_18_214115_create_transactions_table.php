<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('trans_code', '90')->unique();
            $table->string('trans_type');
            $table->string('trans_mode');
            $table->string('sender_id');
            $table->string('receiver_id');
            $table->string('sender_name');
            $table->string('receiver_name');
            $table->integer('amount');
            $table->integer('currency');
            $table->string('description')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('transactions');
    }
}
