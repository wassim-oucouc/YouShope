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
        Schema::create('Commande', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('id_utilisateur');
            $table->Integer('id_produit');
            $table->foreign('id_utilisateur')->references('id')->on('Utilisateur')->onDelete('cascade');
            $table->foreign('id_produit')->references('id')->on('Produit')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_commande');
    }
};
