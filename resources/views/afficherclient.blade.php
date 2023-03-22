
@extends('layouts.app')

@section('content')
<h1>Liste des Clients</h1>
<table class="table">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Adresse</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $value)
        <tr>
            <td>{{ $value -> Nom }}</td>
            <td>{{ $value -> Prenom }}</td>
            <td>{{ $value -> Tel }}</td>
            <td>{{ $value -> adresse }}</td>
            @can('isAdmin')
            <td>
                <form action="" method="post">
                <button class="btn btn-danger">Supprimer</button>
                </form>
            </td>
            <td>
                <a class="btn btn-warning" href="">Modifier</a>
            </td>
            @endcan
            <td> 
            <a  class="btn btn-info" href="{{ route ('productbyclient',$value->id) }}">
                liste des produits
            </a>
                
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
    
