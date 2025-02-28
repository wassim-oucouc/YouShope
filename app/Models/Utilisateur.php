<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Authenticatable
{
    protected $table = "User";
    protected $fillable = ['Prenom','Nom','Email','Password','Image','id_role','Status','Created_at','Updated_at'];
    use HasFactory;
}
