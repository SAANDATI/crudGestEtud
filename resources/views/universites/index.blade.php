<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <title>Gestion etudiant</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12 jumbotron">
                    <h1>Liste des universités</h1>
                </div>
                <div class="card-body">
                    <p>
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                        @if (session('messagedelete'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('messagedelete') }}
                            </div>
                        @endif
                    </p>
                </div>
                <div class="card-body">
                    <a href="{{ route('universites.create')}}" class="btn btn-info float-right">Ajouter université</a>
                    <table class="table table-bordered" id="tableau">
                        <thead class="thead-dark">
                            <tr>
                                <th>id</th>
                                <th>Libelle</th>
                                <th>Description </th>
                                <th>Date créer</th>
                                <th>Date Modifier</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($universites as $univ)
                            <tr>
                                <td>{{ $univ->id }}</td>
                                <td>{{ $univ->libelle }}</td>
                                <td>{{ $univ->description }}</td>
                                <td>{{ $univ->created_at->format('d/m/Y H:m:s')}}</td>
                                <td>{{ $univ->updated_at->format('d/m/Y H:m:s')}}</td>
                                <td>
                                    <a href="{{ route('universites.show',$univ->id) }}" class="btn btn-success"><i class="lni lni-eye"></i></a>
                                    <a href="{{ route('universites.edit',$univ->id) }}" class="btn btn-warning"><i class="lni lni-pencil-alt"></i></a>

                                    <form action="{{ route('universites.destroy',$univ->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="confirm('voulez vous apprimer??')">
                                            <i class="lni lni-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
