<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $etudiants = Etudiant::all()->paginate(10);

        $etudiants = Etudiant::all();
        return view('etudiants.index')->with('etudiants',$etudiants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classe::orderBy('id', 'DESC')->get();
        return view('etudiants.create',compact('classes'));
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
            'prenomEtud' => 'required|min:3|max:30|string',
            'nomEtud' => 'required|min:2|max:50|string',
            'telephone' => 'required|string|min:7|max:30|unique:etudiants','regex:/^(78|77|76|70|33)[0-9]{7}$#/',
            'email' => 'required|string|email|max:50|unique:etudiants'
        ]);

        $etud = new Etudiant();

        $photoProfil = $request->file('photoProfil');
        $imageProfil = 'etudiant'.time().uniqid().'.'.$photoProfil->getClientOriginalExtension();
        $photoProfil->storeAs('imageprofils',$imageProfil);

        $etud->prenomEtud = $request->prenomEtud;
        $etud->nomEtud = $request->nomEtud;
        $etud->telephone = $request->telephone;
        $etud->email = $request->email;
        $etud->photoProfil = $imageProfil;
        $etud->classe_id = $request->classe;
        $etud->save();

        return redirect()->route('etudiants.index')->with('message', 'Ajout etudiant effectué!!!!!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etudiant = Etudiant::find($id);
        return view('etudiants.detail')->with('etudiant', $etudiant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant = Etudiant::find($id);
        return view('etudiants.edit')->with('etudiant', $etudiant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->prenomEtud = $request->prenomEtud;
        $etudiant->nomEtud = $request->nomEtud;
        $etudiant->telephone = $request->telephone;
        $etudiant->email = $request->email;
        $etudiant->photoprofil = $request->photoProfil;
        $etudiant->classe_id = $request->classe;
        $etudiant->save();
        return redirect()->route('etudiants.index')->with('message', 'Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect()->route('etudiants.index')->with('message','Suppression reussit!!!!');
    }
}
