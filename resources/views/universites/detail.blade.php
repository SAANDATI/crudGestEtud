@extends('home.master')

@section('contenu')

<div class="card mt-5">
    <div class="card-header">
        <h2>Detail Universite</h2>
    </div>
    <div class="list-group">
        <ul class="list-group">
            <li class="list-group-item"><strong>Id:</strong>{{ $universite->id }}</li>
            <li class="list-group-item"><strong>Nom:</strong>{{ $universite->libelle }}</li>
            <li class="list-group-item"><strong>Description:</strong>{{ $universite->description }}</li>
            <li class="list-group-item"><strong>Date créer</strong>{{ $universite->created_at }}</li>
            <li class="list-group-item"><strong>Date modifier</strong>{{ $universite->updated_at }}</li>
        </ul>
    </div>
</div>



@endsection
