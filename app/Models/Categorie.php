<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = "Categorie";
    protected $fillable = ['nom'];
    use HasFactory;

    public function Produit()
    {
        return $this->hasMany(Produit::class);
    }
}
