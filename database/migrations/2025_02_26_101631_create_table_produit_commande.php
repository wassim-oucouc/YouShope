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
        Schema::create('Produit_Commande', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('id_produit');
            $table->Integer('id_commande');
            $table->foreign('id_produit')->references('id')->on('Produit')->onDelete('cascade');
            $table->foreign('id_commande')->references('id')->on('Commande')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table__produit__commande');
    }
};
