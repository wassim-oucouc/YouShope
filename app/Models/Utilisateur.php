<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Utilisateur extends Authenticatable
{
    use HasFactory;

    protected $table = "User"; 

    protected $fillable = ['Prenom', 'Nom', 'email', 'Password', 'Image', 'id_role', 'Status', 'Created_at', 'Updated_at'];
}


