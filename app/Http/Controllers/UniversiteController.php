<?php

namespace App\Http\Controllers;

use App\Models\Universite;
use Illuminate\Http\Request;

class UniversiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universites = Universite::all();
        return view('universites.index')->with('universites', $universites);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('universites.createUniversite');
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
            'libelle' => 'required|min:3|max:50|unique:universites'
        ]);

        $uni = new Universite();
        $uni->libelle = $request->libelle;
        $uni->description = $request->description;
        $uni->save();
        return redirect()->route('universites.index')->with('message','enregistrement effectuer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Universite  $universite
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $universite = Universite::find($id);
        return view('universites.detail')->with('universite', $universite);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Universite  $universite
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $universite = Universite::find($id);
        return view('universites.edit')->with('universite', $universite);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Universite  $universite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $universite = Universite::find($id);
        $universite->libelle = $request->libelle;
        $universite->description = $request->description;
        $universite->save();
        return redirect()->route('universites.index')->with('message', 'Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Universite  $universite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $universite = Universite::find($id);
        $universite->delete();
        return redirect()->route('universites.index')->with('message','Univ supprimer');
    }
}
