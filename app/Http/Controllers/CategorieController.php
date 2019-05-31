<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::All();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
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
            'nom'=>'required|string|max:255',
            'description'=>'required|string|max:255',
        ]);

        $categorie = new Categorie([
            'nom' => $request->get('nom'),
            'description' => $request->get('description'),
        ]);
        $categorie->save();
        return redirect('/')->with('success', 'Category saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Categorie::findOrFail($id);
        $recettes = Categorie::join('categories_recettes', 'categories.id', '=', 'categories_recettes.categorie_id')
            ->join('recettes', 'recettes.id', '=', 'categories_recettes.recette_id')
            ->select('recettes.nom')
            ->addSelect('recettes.description')
            ->addSelect('recettes.id')
            ->addSelect('recettes.image')
            ->where('categories.id',$id)
            ->get();
        return view('categories.categorie', ["categorie" => $categorie, "recettes" => $recettes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::find($id);
        return view('categories.edit', compact('categorie'));
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
            'nom'=>'required|string|max:255',
            'description'=>'required|string|max:255',
        ]);

        $categorie = Categorie::find($id);
        $categorie->nom =  $request->get('nom');
        $categorie->description = $request->get('description');
        $categorie->save();

        return redirect('categories/'.$id)->with('success', 'Category updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();

        return redirect('/')->with('success', 'Categorie supprimée!');
    }
}
