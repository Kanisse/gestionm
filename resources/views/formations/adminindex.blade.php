

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Espace Administrateur</h1>
    <h2> Bienvenue {{ Auth::user() -> name }}</h2>
    
    <h2>Nombre de formations : {{ $nbrformation }}</h2>

    <ul>
@foreach($formations as  $value)
<li>Nom :  {{$value -> Nom_Cours  }} </li>
@endforeach
 
    </ul>
</body>
</html>