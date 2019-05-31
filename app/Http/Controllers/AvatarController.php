<?php

namespace App\Http\Controllers;

use App\Avatar;
use Illuminate\Http\Request;

class AvatarController extends Controller
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
        return view('avatars.create');
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
            'url'=>'required|String|max:255',
        ]);

        $avatar = new Avatar([
            'url' => $request->get('url'),
        ]);
        $avatar->save();
        return redirect('/')->with('success', 'Avatar saved!');
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
        $avatar = Avatar::find($id);
        return view('avatars.edit', ["avatar" => $avatar]);
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
            'url'=>'required|String|max:255',
        ]);

        $avatar = Avatar::find($id);
        $avatar->url = $request->get('url');
        $avatar->save();

        return redirect('/')->with('success', 'Avatar updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $avatar = Avatar::find($id);
        $avatar->delete();

        return redirect('/')->with('success', 'Avatar supprimé!');
    }
}
