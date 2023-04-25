
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center active">
            Active list item
            <span class="badge badge-secondary badge-pill">pill1</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            List item
            <span class="badge badge-secondary badge-pill">pill2</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center disabled">
            Disabled item
            <span class="badge badge-secondary badge-pill">pill3</span>
        </li>
    </ul>
    <h1>Liste des clients</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Photo</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as  $value)
        <tr>
            <td> <img src="{{ asset('/storage/images/'. $value -> photo )}}"> </td>
            <td> {{  $value -> Nom }}</td>
            <td> {{  $value -> Prenom }}</td>
            <td> {{  $value -> Tel }}</td>
            <td> {{  $value -> adresse }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
  
    <div class= 'd-flex justify-content-center'>
        {{  $clients -> links()  }}
    </div>

</body>
</html>