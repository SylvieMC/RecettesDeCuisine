<?php

namespace App\Http\Controllers;

use App\Recette;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    	$recettes = Recette::All()->take(4);
        $utilisateurs = Recette::join('utilisateurs', 'recettes.utilisateur_id', '=', 'utilisateurs.id')
            ->select('utilisateurs.pseudo')
            ->addSelect('utilisateurs.id')
            ->get();
        $categories = Recette::join('categories_recettes', 'recettes.id', '=', 'categories_recettes.recette_id')
            ->join('categories', 'categories.id', '=', 'categories_recettes.categorie_id')
            ->select('categories.nom')
            ->addSelect('categories.id')
            ->orderByRaw('recettes.id asc')
            ->get(); 
        $countCategoriesParRecette = Recette::selectRaw('COUNT(*) as nb')
            ->join('categories_recettes', 'recettes.id', '=', 'categories_recettes.recette_id')
            ->groupBy('categories_recettes.recette_id')
            ->get();
            return view('index', ["recettes" => $recettes, "utilisateurs"=>$utilisateurs,"categories"=> $categories, "nbCategorieParRecette" => $countCategoriesParRecette]);
    }
}
