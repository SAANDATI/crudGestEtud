@extends('home.master')
@section('contenu')

<div class="card mt-5">
    <div class="card-header">
        <h1 class="text">Modification etudiant</h1>
    </div>
    <form action="{{ route('etudiants.update',$etudiant->id)}}" method="POST">
        @method('PUT')
        @csrf
        <label for="">Prenom</label>
        <input type="text-center" name="prenomEtud" value="{{ $etudiant->prenomEtud}}" class="form-control mb-3" required>
        <label for="">Nom</label>
        <input type="text-center" name="nomEtud" value="{{ $etudiant->nomEtud}}" class="form-control mb-3" required>
        <label for="">Telephone</label>
        <input type="text-center" name="telephone" value="{{ $etudiant->telephone}}" class="form-control mb-3" required>
        <label for="">Email</label>
        <input type="text-center" name="email" value="{{ $etudiant->email}}" class="form-control mb-3" required>
        <label for="">Profil</label>
        <input type="file" name="photoProfil" value="{{ $etudiant->photoProfil}}" class="form-control mb-3" required>
        <label for="">Classe</label>
        <input type="text-center" name="classes" value="{{ $etudiant->classes}}" class="form-control mb-3" required>
        <button type="submit" class="btn btn-warning">Edit etudiant</button>
    </form>
</div>

@endsection
