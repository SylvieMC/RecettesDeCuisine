<?php

namespace App\Http\Controllers;

use App\IngredientRecette;
use Illuminate\Http\Request;

class IngredientRecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = IngredientRecette::join('categories', 'IngredientRecette.categorie_id', '=', 'categories.id')
            ->select('categories.nom')
            ->addSelect('categories.id')
            ->get();
        $recettes = IngredientRecette::join('recettes', 'IngredientRecette.recette_id', '=', 'recettes.id')
            ->select('recettes.nom')
            ->addSelect('recettes.id')
            ->get();
        return view('ingredientRecettes.create',["categories" => $categories, "recettes" => $recettes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'quantite'=>'required|String|max:255',
            'unite'=>'required|String|max:255',
            'ingredient_id'=>'required|integer|min:0',
            'recette_id'=>'required|integer|min:0',
        ]);

        $utilisateur = new Utilisateur([
            'pseudo' => $request->get('pseudo'),
            'role' => $request->get('role'),
            'avatar_id' => $request->get('avatar'),
        ]);
        $utilisateur->save();
        return redirect('/')->with('success', 'Utilisateur saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
