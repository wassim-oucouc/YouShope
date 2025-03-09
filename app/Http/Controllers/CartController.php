<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;

class CartController extends Controller
{
   public function StoreCartSession(Request $request)
   {
      // session()->forget('cart');
     $id =  $request->id;
   //   dd($id);
      $Products = [];
            $Product =[
         'id' => $request->id,
         'title' => $request->title,
         'categorie' => $request->categorie,
         'Quantity' => $request->quantity,
         'Prix' => $request->prix,
         'Image' => $request->Image,
         'Size' => $request->Taille,
         'Categorie' => $request->categorie,
     ];

     $Products = $Product;
     session()->push('cart', $Products);
     return redirect('/item/'.$id);
   }

   public function RenderProductCart()
   {
      $ProductsCart = session()->get('cart');
      // dd($ProductsCart);
      $Product = [];

      foreach($ProductsCart as $value)
      {
         $Product = $ProductsCart;
      }
      // dd(session()->get('cart'));
      return view('ValidationPanier',compact('Product'));
   }

   Public function DeleteProduct(Request $request)
   {
      $ProductsCart = session('cart');
      // dd($ProductsCart);
      $taille = $request['taille'];
      $id = $request['id'];
      $quantite = $request['quantité'];

      $filteredarray = array_filter($ProductsCart,function($item) use($taille,$id,$quantite){
         return  $item['id'] != $id;
      });

      // dd($filteredarray);git b
  session()->put('cart', $filteredarray);

  return redirect('/panier');

//   dd($ProductsCart);
   }
}
