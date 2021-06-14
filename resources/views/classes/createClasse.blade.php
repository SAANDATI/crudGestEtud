@extends('home.master')

@section('contenu')

<div class="card mt-5">
    <div class="card-header">
        <h2>Ajouter une classe</h2>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($error->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('classes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="nom">Nom classe</label>
            <input type="text" name="nom" class="form-control">
            <label for="desc">Description</label>
            <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
            <label for="nom">Universite</label>
            <select name="universite" class="form-control">
                @foreach ($universites as $uv)
                <option value="{{$uv->nom}}">{{ $uv->nom }}</option>
                @endforeach
            </select>

            <input type="submit" value="Enregistrer" class="btn btn-success mt-5">
        </form>
    </div>
</div>

@endsection
