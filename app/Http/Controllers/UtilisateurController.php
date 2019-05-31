<?php

namespace App\Http\Controllers;

use App\Avatar;
use App\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utilisateurs = Utilisateur::All();
        $users = Utilisateur::join('avatars', 'utilisateurs.avatar_id', '=', 'avatars.id')
            ->select('avatars.url')
            ->get();
        return view('utilisateurs.utilisateurs', ["utilisateurs" => $utilisateurs]);
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
        $utilisateur = Utilisateur::findOrFail($id);
        $avatar = Utilisateur::join('avatars', 'utilisateurs.avatar_id', '=', 'avatars.id')
            ->select('avatars.url')
            ->where('utilisateurs.id',$id)
            ->get();
        $recettes = Utilisateur::join('recettes', 'utilisateurs.id', '=', 'recettes.utilisateur_id')
            ->select('recettes.nom')
            ->addSelect('recettes.description')
            ->addSelect('recettes.id')
            ->addSelect('recettes.image')
            ->where('utilisateurs.id',$id)
            ->get();
        return view('utilisateurs.utilisateur', ["utilisateur" => $utilisateur, "avatar" => $avatar, "recettes" => $recettes]);
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
