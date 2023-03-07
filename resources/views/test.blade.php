<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app2.css')}}">
    <link rel="stylesheet" href="{{asset('css/styletableau.css')}}">
    <title>Document</title>
</head>
<body>
<h1 align="center">Liste des Salles</h1>
    <div class="container">
        <a href="{{route('page2')}}"><button type="button" class='btn btn-success'>Ajout +</button></a>          
        <div class="row">
            @if($message= Session::get('success'))
                <div class="message">
                    {{$message}}
                </div>
            @endif
                <table class="content-table">
            <thead>
                <tr>
                <th scope="col">Nom Salle</th>
                <th scope="col">Capacite</th>
                <th scope="col" align="center">Emplacement</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $row) 
                <tr>
                <td>{{$row->nomSalle}}</td>
                <td>{{$row->capacite}}</td>
                <td>{{$row->emplacement}}</td>
                <td>
                    <a href="{{route('deletesalle',['nomSalle'=>$row->nomSalle])}}"><button type="button" class='btn btn-danger'>Delete</button></a>
                    <a href="{{route('updatedata',['nomSalle'=>$row->nomSalle])}}"><button type="button" class='btn btn-info'>Edit</button><a>
                    <!-- /updatedata/{{$row->nomSalle}} -->
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
    <script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script> 
</body>
<script src="{{asset('css/app.js')}}">
    Swal("Bonjour tout le monde !") ;
</script>

</html>