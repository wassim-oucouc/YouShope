<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
class ProduitController extends Controller
{
    public function ProductsHomeRender()
    {
        $products = Produit::get();
        return view('Home',compact('products'));
    }

    public function ProductDetailsRead(Request $request)
    {
       $id_produit = $request['id'];
       $Produit = Produit::find($id_produit);
    //    dd($Produit);
        return view('Product',compact('Produit'));
    }

}
