<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.css') }}">
    <title>Creation université</title>
</head>
<body>
    <div class="contaire">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-header">
                    <h2>Créer une Universite</h2>
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
                <form action="{{ route('universites.store') }}" method="post">
                    @csrf

                    <label for="libelle">Nom Université</label>
                    <input type="text" name="libelle" class="form-control">
                    <label for="description">Description Université</label>
                    <input type="text" name="description" class="form-control">
                    <input type="submit" value="Enregistrer" class="btn btn-success mt-5">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
