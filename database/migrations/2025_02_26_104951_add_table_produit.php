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
        Schema::create('Produit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Titre');
            $table->string('Description');
            $table->string('Image');
            $table->string('Quantity');
            $table->Integer('Prix');
            $table->Integer('id_categorie');
            $table->foreign('id_categorie')->references('id')->on('Categorie')->onDelete('cascade');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table__produit');
    }
};
