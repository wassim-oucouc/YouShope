<?php

namespace App\Models;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = "Produit";
    protected $fillable = ['id','Titre','Description','Image','Quantity','Prix','id_categorie','Created_at','Updated_at'];
    use HasFactory;

    public function Categorie()
    {
        return $this->belongsTo(Categorie::class,'id_categorie');
    }
}
