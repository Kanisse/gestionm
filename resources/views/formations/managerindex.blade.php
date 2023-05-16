<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Espace Manager</h1>


<h3>Mes Formations : </h3>
<ul>
    @foreach($formations as  $value)
    <li>Nom :  {{$value -> Nom_Cours  }} </li>
    @endforeach
     
        </ul>
   </body>
</html>