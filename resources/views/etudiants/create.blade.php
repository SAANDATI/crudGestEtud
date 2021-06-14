@extends('home.master')

@section('contenu')

<div class="card mt-5">
    <div class="card-header">
        Ajouter un
    </div>
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
    <div class="card-body">
        <form action="{{ route('etudiants.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="">Prenom</label>
            <input type="text" name="prenomEtud" value="" class="form-control">
            <label for="">Nom</label>
            <input type="text" name="nomEtud" class="form-control">
            <label for="">Telephone</label>
            <input type="text" name="telephone" class="form-control">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control">
            <label for="">Profil</label>
            <input type="file"  name="photoProfil" class="form-control">
            <label for="">Classe</label>
            <select name="classe" class="form-control">
                @foreach($classes as $cls)
                <option value="{{ $cls->id }}">{{ $cls->nom }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-success mt-5">Enregistrer</button>
        </form>
    </div>
</div>

@endsection
