<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesAffiliationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites_affiliations', function (Blueprint $table) {
            $table->id();
            $table->string('id_site');
            $table->foreign('id_site')->references('id')->on('sites');
            $table->string('id_user');
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('sites_affiliations');
    }
}
