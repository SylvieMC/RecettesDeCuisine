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
        return view('categories', ["categories" => $categories]);
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
     * @param  \App\Categorie  $Categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $Categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $Categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $Categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie  $Categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $Categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie  $Categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $Categorie)
    {
        //
    }
}
