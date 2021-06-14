@extends('home.master')

@section('contenu')

<div class="card mt-5">
    <div class="card-header">
        <h1 class="text">Modification Université</h1>
    </div>
    <form action="{{ route('universites.update',$universite->id)}}" method="POST">
        @method('PUT')
        @csrf
        <label for="">Nom univesité</label>
        <input type="text-center" name="nom" value="{{ $universite->libelle}}" class="form-control mb-3" required>
        <label for="">Description</label>
        <input type="text-center" name="nom" value="{{ $universite->description}}" class="form-control mb-3" required>
        <button type="submit" class="btn btn-warning">Edit universite</button>
    </form>
</div>
@endsection
