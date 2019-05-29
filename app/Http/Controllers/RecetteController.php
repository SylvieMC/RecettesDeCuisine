<?php

namespace App\Http\Controllers;

use App\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recettes = Recette::All();
        $utilisateurs = Recette::join('utilisateurs', 'recettes.utilisateur_id', '=', 'utilisateurs.id')
            ->select('utilisateurs.pseudo')
            ->get();
        $categories = Recette::join('categories_recettes', 'recettes.id', '=', 'categories_recettes.recette_id')
            ->join('categories', 'categories.id', '=', 'categories_recettes.categorie_id')
            ->select('categories.nom')
            ->get(); 
            return view('recettes', ["recettes" => $recettes, "utilisateurs"=>$utilisateurs,"categories"=> $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recette = Recette::findOrFail($id);
        $utilisateur = Recette::join('utilisateurs', 'recettes.utilisateur_id', '=', 'utilisateurs.id')
            ->select('utilisateurs.pseudo')
            ->where('recettes.id',$id)
            ->get();
        $categorie = Recette::join('categories_recettes', 'recettes.id', '=', 'categories_recettes.recette_id')
            ->join('categories', 'categories.id', '=', 'categories_recettes.categorie_id')
            ->select('categories.nom')
            ->where('recettes.id',$id)
            ->get();
        $etapes = Recette::join('etapes', 'recettes.id', '=', 'etapes.recette_id')
            ->select('etapes.description')
            ->where('recettes.id',$id)
            ->get(); 
        $ingredients = Recette::join('ingredients_recettes', 'recettes.id', '=', 'ingredients_recettes.recette_id')
            ->join('ingredients', 'ingredients.id', '=', 'ingredients_recettes.ingredient_id')
            ->select('ingredients.nom')
            ->where('recettes.id',$id)
            ->get();  
        return view('recette', ["recette" => $recette, "utilisateur" => $utilisateur,"categorie"=> $categorie, "ingredients"=>$ingredients,"etapes"=>$etapes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
