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
        Schema::create('Utilisateur', function (Blueprint $table){
            $table->increments('id');
            $table->string('Prenom');
            $table->string('Nom');
            $table->string('Email');
             $table->string('Password');
            $table->string('Image');
            $table->Integer('id_role');
            $table->foreign('id_role')->references('id')->on('Role')->onDelete('cascade');
            $table->string('Status'); 
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**X
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table__utilisateur');
    }
};
