@extends('home.master')

@section('contenu')

<div class="card mt-5">
    <div class="card-header">
        <h2>Detail etudiant</h2>
    </div>
    <div class="list-group">
        <ul class="list-group">
            <li class="list-group-item"><strong>Id:</strong>{{ $etudiant->id }}</li>
            <li class="list-group-item"><strong>Prenom:</strong>{{ $etudiant->prenomEtud }}</li>
            <li class="list-group-item"><strong>Nom:</strong>{{ $etudiant->nomEtud }}</li>
            <li class="list-group-item"><strong>Telephone:</strong>{{ $etudiant->telephone }}</li>
            <li class="list-group-item"><strong>Adresse:</strong>{{ $etudiant->email }}</li>
            <li class="list-group-item"><strong>Date créer</strong>{{ $etudiant->created_at }}</li>
            <li class="list-group-item"><strong>Date modifier</strong>{{ $etudiant->updated_at }}</li>
        </ul>
    </div>
</div>



@endsection
