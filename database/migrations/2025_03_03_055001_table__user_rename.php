<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('User', function (Blueprint $table) {
            $table->renameColumn('Email', 'email'); // Renommer la colonne 'email' en 'Email'
        });
    }

    public function down()
    {
        Schema::table('User', function (Blueprint $table) {
            $table->renameColumn('Email', 'email'); // Annuler la migration si nécessaire
        });
    }
};
