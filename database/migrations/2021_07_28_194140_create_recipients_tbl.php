<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipientsTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipients_tbl', function (Blueprint $table) {
            $table->bigIncrements('recipient_id');
            $table->string('name');
            $table->string('email')->unique();
             $table->string('phone')->default('');
             $table->string('address');
             $table->string('mobile')->unique();
             $table->string('country');
             $table->bigInteger('id')->unsigned()->index()->nullable();
             $table->foreign('id')->references('id')->on('users'); 
            $table->timestamp('email_verified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipients_tbl');
    }
}
