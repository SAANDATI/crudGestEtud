@extends('home.master')

@section('contenu')

<div class="card mt-5">
	<div class="card-header">
		Liste des classes
		<a href="{{ route('classes.create') }}" class="btn btn-outline-success float-right">Ajouter une classe</a>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>N°</th>
					<th>Nom</th>
					<th>Description</th>
					<th>Universite</th>
                    <th>Date ajout</th>
                    <th>Date edit</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($classes as $cls)
                    <tr>
                        <td>{{ $cls->id }}</td>
                        <td>{{ $cls->nom }}</td>
                        <td>{{ $cls->description }}</td>
                        <td>{{ $cls->universite->libelle }}</td>
                        <td>{{ $cls->created_at->format('d/m/Y H:m:s')}}</td>
                        <td>{{ $cls->updated_at->format('d/m/Y H:m:s')}}</td>
                        <td>
                            <a href="{{ route('classes.show',$cls->id) }}" class="btn btn-success"><i class="lni lni-eye"></i></a>
                                <a href="{{ route('classes.edit',$cls->id) }}" class="btn btn-warning"><i class="lni lni-pencil-alt"></i></a>

                                <form action="{{ route('classes.destroy',$cls->id) }}" method="post">
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

@endsection
