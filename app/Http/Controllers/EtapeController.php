<?php

namespace App\Http\Controllers;

use App\Etape;
use Illuminate\Http\Request;

class EtapeController extends Controller
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
        $recettes = Etape::join('recettes', 'etapes.recette_id', '=', 'recettes.id')
            ->select('recettes.nom')
            ->addSelect('recettes.id')
            ->get();
        return view('etapes.create',["recettes" => $recettes]);
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
            'numero'=>'required|integer|min:1',
            'description'=>'required|String|max:255',
            'recette'=>'required|integer',
        ]);

        $etape = new Etape([
            'numero' => $request->get('numero'),
            'description' => $request->get('description'),
            'recette_id' => $request->get('recette'),
        ]);
        $etape->save();
        return redirect('/')->with('success', 'Etape saved!');
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
        $etape = Etape::find($id);
        $recettes = Etape::join('recettes', 'etapes.recette_id', '=', 'recettes.id')
            ->select('recettes.nom')
            ->addSelect('recettes.id')
            ->get();
        return view('etapes.edit', ["etape" => $etape, "recettes" => $recettes]);
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
            'numero'=>'required|integer|min:1',
            'description'=>'required|String|max:255',
            'recette'=>'required|integer',
        ]);

        $etape = Etape::find($id);
        $etape->numero =  $request->get('numero');
        $etape->description = $request->get('description');
        $etape->recette_id = $request->get('recette');
        $etape->save();

        return redirect('/')->with('success', 'Etape updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etape = Etape::find($id);
        $etape->delete();

        return redirect('/')->with('success', 'étape supprimée!');
    }
}
