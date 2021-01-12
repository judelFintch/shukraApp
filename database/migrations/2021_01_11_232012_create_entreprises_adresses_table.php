<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises_adresses', function (Blueprint $table) {
            $table->id();
            $table->string('number')->nullable();
            $table->string('street')->nullable();
            $table->string('town')->nullable();
            $table->string('country')->nullable();
            //the responsable of entreprises
            $table->string('responsable')->nullable();
            //the represente of entreprise of the manager
            $table->string('personne_affect')->nullable();
            $table->string('id_entreprises');
            $table->foreign('id_entreprises')->references('id')->on('entreprises');
             //use session variables
            //this variable can be call for ah session variable
            $table->string('add_by')->nullable();
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
        Schema::dropIfExists('entreprises_adresses');
    }
}
