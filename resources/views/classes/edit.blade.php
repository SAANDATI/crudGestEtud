@extends('home.master1')

@section('contenu')

<div class="card mt-5">
    <div class="card-header">
        <h1 class="text">Modification classe</h1>
    </div>
    <form action="{{ route('classes.update',$classe->id)}}" method="POST">
        @method('PUT')
        @csrf
        <label for="">Nom de classe</label>
        <input type="text-center" name="nom" value="{{ $classe->nom}}" class="form-control mb-3" required>
        <label for="">Description</label>
        <input type="text-center" name="description" value="{{ $classe->description}}" class="form-control mb-3" required>
        <button type="submit" class="btn btn-warning">Edit classe</button>
    </form>
</div>
@endsection
