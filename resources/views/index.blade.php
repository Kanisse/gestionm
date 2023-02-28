
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <ul class="list-group">
        
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produits as $value)
                <tr>
                    <td>{{ $value -> Nom }}</td>
                    <td>{{ $value -> prix }}</td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
        
        
        
    </ul>
</body>
</html>