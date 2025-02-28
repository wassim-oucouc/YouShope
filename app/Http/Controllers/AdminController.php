<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class AdminController extends Controller
{

        public function ProductsRender()
        {
            $products = Produit::all();
            $categories = Categorie::get();
  return view('Administrateur.ProductAdmin',compact('products','categories'));
        }

        public function StoreProducts(Request $request)
        {
           $id_categorie =  Categorie::select('id')->where('nom', '=' ,$request->Categorie)->get();
           $id;
           foreach($id_categorie as $id)
           {
            $id = $id['id'];
           }
            Produit::create([
                'Titre' => $request->Titre,
                'Prix' => $request->Prix,
                'Quantity' => $request->Quantity,
                'Description' => $request->Description,
                'Image' => $request->Image,
                'id_categorie' => $id,
            ]);

            return redirect('/admin/products');

        }

        public function DeleteProduct(Request $request)
        {
           $product = Produit::find($request['id']);
           $delete = $product->delete();

           if($delete)
           {
            return redirect('/admin/products');
           }
           else
           {
            dd('was not deleted');
           }

        }

        public function UpdateProduct($id)
        {
            $product = Produit::find($id);
            $categories = Categorie::get();
            return view('Administrateur.ProductUpdate',compact('product','categories'));
        }

        public function UpdateProductForm(Request $request,$id)
        {
            $id_categorie =  Categorie::select('id')->where('nom', '=' ,$request->Categorie)->get();
            $id_update;
            foreach($id_categorie as $idcategorie)
            {
             $id_update = $idcategorie['id'];
            }
            $product = Produit::find($id);
            $product->Titre = $request->name;
            $product->Description = $request->input('Description');
            $product->Image = $request->input('Image');
            $product->Quantity = $request->input('Quantity');
            $product->id_categorie = $id_update;
            $product->Prix = $request->input('Prix');
            $product->save();
            return  redirect('/admin/products');
        }

        public function CategorieRender()
        {
            $categories = Categorie::get();
            // dd($categories);
            return view('Administrateur.CategorieAdmin',compact('categories'));
          
        }

        public function StoreCategorie(Request $request)
        {
            $categoriestore = Categorie::create([
                "nom" => $request->name,
               ]);

               return redirect('admin/categories');
        }

        public function DeleteCategorie(Request $request)
        {
            $categorie = Categorie::find($request['id']);
            $categorie->delete();
            return redirect('/admin/categories');
        }

        public function UpdateCategorie($id)
        {
            $categorie = Categorie::find($id);
            return view('Administrateur.CategorieUpdate',compact('categorie'));
        }

        public function UpdateCategorieForm(Request $request,$id)
        {
            $categorie = Categorie::find($id);
            $categorie->nom = $request->nom;
            $categorie->save();

            return redirect('/admin/categories');

        }
}
