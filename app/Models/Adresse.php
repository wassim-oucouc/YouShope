<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{

    protected $table = "Adresse";
    protected $fillable = ['Adresse','PostalCode','Ville','Pays']; 
    use HasFactory;
}
