<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliationUserEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliation_user_entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('id_entreprise');
            $table->foreign('id_entreprise')->references('id')->on('entreprises');
            $table->string('id_user');
            $table->foreign('id_entreprise')->references('id')->on('users');
            //use session variables
            $table->string('affect_by');
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
        Schema::dropIfExists('affiliation_user_entreprises');
    }
}
