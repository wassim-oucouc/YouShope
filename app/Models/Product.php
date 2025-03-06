<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $id;
    public $Titre;
    public $categorie;
    public $Quantity;

    public function __construct($id, $Titre, $categorie, $Quantity)
    {
        $this->id = $id;
        $this->Titre = $Titre;
        $this->categorie = $categorie;
        $this->Quantity = $Quantity;
    }
}
