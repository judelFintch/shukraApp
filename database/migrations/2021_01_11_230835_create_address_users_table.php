<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_users', function (Blueprint $table) {
           $table->id();
            $table->string('quarter');
            $table->string('lot_number');
            $table->string('reference');
            $table->string('tonw');
            $table->string('street');
            $table->string('id_info_user');
            $table->foreign('id_info_user')->references('id')->on('info_users');
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
        Schema::dropIfExists('address_users');
    }
}
