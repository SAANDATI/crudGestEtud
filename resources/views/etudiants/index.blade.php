@extends('home.master')
@section('contenu')

<div class="card mt-5">
    <div class="card-header">
        <h1>Liste des etudiant</h1>
        <a href="{{ route('etudiants.create') }}" class="btn btn-info float-right">Ajouter un etudiant</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="tableau">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Prenom</th>
                    <th>Nom </th>
                    <th>Telephone </th>
                    <th>Email </th>
                    <th>Photo profil </th>
                    <th>Classe</th>
                    <th>Date d'ajout</th>
                    <th>date edit</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($etudiants as $etu)
                <tr>
                    <td>{{ $etu->id }}</td>
                    <td>{{ $etu->prenomEtud }}</td>
                    <td>{{ $etu->nomEtud }}</td>
                    <td>{{ $etu->telephone }}</td>
                    <td>{{ $etu->email }}</td>
                    {{-- <td>{{ $etu->photoProfil }}</td> --}}
                    <td><img src="{{ $etu->profilEtudiant() }}" alt="" width="50"></td>
                    <td>{{ $etu->classe->nom }}</td>
                    <td>{{ $etu->created_at->format('d/m/Y H:m:s')}}</td>
                    <td>{{ $etu->updated_at->format('d/m/Y H:m:s')}}</td>
                    <td>
                        <a href="{{ route('etudiants.show', $etu->id) }}" class="btn btn-success"><i class="lni lni-eye"></i></a>
                        <a href="{{ route('etudiants.edit', $etu->id) }}" class="btn btn-warning"><i class="lni lni-pencil-alt"></i></a>

                        <form action="{{ route('etudiants.destroy',$etu->id) }}" method="post">
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

    <!-- la pagination des données -->
    {{-- {{ $etudiants->links() }} --}}
</div>

@endsection
