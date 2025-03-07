<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Adresse_Utilisateur', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('id_adresse');
            $table->Integer('id_utilisateur');
            $table->foreign('id_adresse')->references('id')->on('Adresse')->onDelete('cascade');
            $table->foreign('id_utilisateur')->references('id')->on('Utilisateur')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table__adresse__utilisateur');
    }
};
