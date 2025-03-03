<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Utilisateur extends Authenticatable
{
    use HasFactory;

    protected $table = "User";  // Assurez-vous que la table s'appelle bien "User"

    // Utilisez le bon nom de colonne ici
    protected $fillable = ['Prenom', 'Nom', 'email', 'Password', 'Image', 'id_role', 'Status', 'Created_at', 'Updated_at'];

    protected $hidden = ['Password'];  // Masquer le mot de passe

    public function getAuthIdentifierName()
    {
        return 'email';  // Utilisez "Email" au lieu de "email" si c'est le nom de la colonne dans la base de données
    }
}


