@extends('layouts.app')

@section('content')
    
<table>
    <tr> 
        <th></th>
        <th></th>
    </tr>

@foreach($client -> produits as $value)
    <tr>
        <td>{{ $value -> Nom }}</td>
        <td>{{ $value -> Prix }}</td>
    </tr>
@endforeach
</table>
@endsection