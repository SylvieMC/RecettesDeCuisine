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
        $ingredients = IngredientRecette::join('ingredients', 'ingredients_Recettes.ingredient_id', '=', 'ingredients.id')
            ->select('ingredients.nom')
            ->addSelect('ingredients.id')
            ->get();
        $recettes = IngredientRecette::join('recettes', 'ingredients_Recettes.recette_id', '=', 'recettes.id')
            ->select('recettes.nom')
            ->addSelect('recettes.id')
            ->get();
        return view('ingredientsRecettes.create',["ingredients" => $ingredients, "recettes" => $recettes]);
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
            'quantite'=>'required|integer|min:1',
            'unite'=>'required|String|max:255',
            'ingredient'=>'required|integer',
            'recette'=>'required|integer',
        ]);

        $ingredientsRecettes = new IngredientRecette([
            'quantite' => $request->get('quantite'),
            'unite' => $request->get('unite'),
            'ingredient_id' => $request->get('ingredient'),
            'recette_id' => $request->get('recette'),
        ]);
        $ingredientsRecettes->save();
        return redirect('/')->with('success', 'Ingrédient / Recette saved');
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
        $ingredientsRecettes = IngredientRecette::find($id);
        $ingredients = IngredientRecette::join('ingredients', 'ingredients_Recettes.ingredient_id', '=', 'ingredients.id')
            ->select('ingredients.nom')
            ->addSelect('ingredients.id')
            ->get();
        $recettes = IngredientRecette::join('recettes', 'ingredients_Recettes.recette_id', '=', 'recettes.id')
            ->select('recettes.nom')
            ->addSelect('recettes.id')
            ->get();
        return view('ingredientsRecettes.edit', ["ingredientsRecettes" => $ingredientsRecettes,"ingredients" => $ingredients, "recettes" => $recettes]);
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
        $request->validate([
            'quantite'=>'required|integer|min:1',
            'unite'=>'required|String|max:255',
            'ingredient'=>'required|integer',
            'recette'=>'required|integer',
        ]);

        $ingredientsRecettes = IngredientRecette::find($id);
        $ingredientsRecettes->quantite =  $request->get('quantite');
        $ingredientsRecettes->unite = $request->get('unite');
        $ingredientsRecettes->ingredient_id = $request->get('ingredient');
        $ingredientsRecettes->recette_id = $request->get('recette');
        $ingredientsRecettes->save();

        return redirect('/')->with('success', 'ingredients / Recettes updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingredientsRecettes = IngredientRecette::find($id);
        $ingredientsRecettes->delete();

        return redirect('/')->with('success', 'ingredients / Recettes supprimé!');
    }
}
