<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;
use Illuminate\Support\Facades\DB;


class CommandeController extends Controller
{
    public function StoreCommande(Request $request)
    {
        $id = $request['id'];
        $title = $request['title'];
        $image = $request['image'];
        $size = $request['size'];
        $Quantite = $request['Quantite'];
        $prix = $request['prix'];
        $categorie = $request['categorie'];
        $total = $request['total'];
        // dd($request['id']);

        $array = [
            'id' => $id,
            'Title' => $title,
            'image' => $image,
            'size' => $size,
            'quantite' => $Quantite,
            'prix' => $prix,
            'categorie' => $categorie,
            'Total' => $total,
        ];

    //    dd($array);

       $countarray = count(reset($array));

    //    dd($countar   ray);

      
$Products = [];
$Product = [];
        for($i = 0; $i < $countarray ; $i++)
        {
            foreach($array as $key => $value)
            {
                if(isset($value[$i]))
                {
                $Product[$key] = $value[$i];
                // array_push($Product,$value[$i]);
                // echo $i;
                
                }
                

            }
              $Products[] = $Product;
            
        }
        
    //    dd($Products);

            $id = DB::table('Commande')->insertGetId([
                "id_utilisateur"=> 1,
                "Status" => "Pending",
                "total" => $request['total'],
                "created_at" => "2019-04-02 15:25:37",
                "updated_at" => "2019-04-02 15:25:37",
            ]);

            foreach($Products as $value)
            {
                DB::table('Produit_Commande')->insert([
                    'id_produit' => $value['id'],
                    'id_commande' => $id,
                    'Quantité' => $value['quantite'],
                    'Taille' => $value['size'],
                ]);
            }

        // dd($id);

    }
}
