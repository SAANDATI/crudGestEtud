@extends('home.master1')

@section('contenu')

<div class="card mt-5">
    <div class="card-header">
        <h2>Detail classe</h2>
    </div>
    <div class="list-group">
        <ul class="list-group">
            <li class="list-group-item"><strong>Id:</strong>{{ $classe->id }}</li>
            <li class="list-group-item"><strong>Nom:</strong>{{ $classe->nom }}</li>
            <li class="list-group-item"><strong>Description:</strong>{{ $classe->description }}</li>
            <li class="list-group-item"><strong>Université:</strong>{{ $classe->universite }}</li>
            <li class="list-group-item"><strong>Date créer</strong>{{ $classe->created_at }}</li>
            <li class="list-group-item"><strong>Date modifier</strong>{{ $classe->updated_at }}</li>
        </ul>
    </div>
</div>

@endsection
