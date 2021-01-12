<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('number')->nullable();
            $table->string('street')->nullable();
            $table->string('town')->nullable();
            $table->string('country')->nullable();
            //the responsable of the site
            $table->string('responsable')->nullable();
            //the represente of entreprise of the manager
            $table->string('personne_affect')->nullable();
            $table->string('id_site');
            $table->foreign('id_site')->references('id')->on('sites');
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
        Schema::dropIfExists('sites_addresses');
    }
}
