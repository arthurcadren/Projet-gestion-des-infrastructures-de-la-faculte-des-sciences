<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styletableau.css')}}">
    <title>Document</title>
</head>
<body>
 <h1 align="center">Salle vide</h1>
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
                <th scope="col">Heure</th>
                <th scope="col">Nom Salle</th>
                <th scope="col">Jour</th>
                <th scope="col">Evenement</th>
                <th scope="col">Filiere</th>
                <th scope="col">Nom evenement</th>
                <th scope="col">Niveau</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $row) 
                <tr class="active-row">
                <td>{{$row->tempsdebut}} <br>{{$row->tempsfin}}</td>
                <td>{{$row->nomSalle}}</td>
                <td>{{$row->Date}}</td>
                <td>{{$row->evenement}}</td>
                <td>{{$row->filiere}}</td>
                <td>{{$row->nomevent}}</td>
                <td>{{$row->niveau}}</td>
                <!-- <td>
                    <!-- <a href="{{route('deleteevent',['nomevent'=>$row->nomevent])}}"><button type="button" class='btn btn-danger'>Delete</button></a>
                    <a href="{{route('updateevent',['nomevent'=>$row->nomevent])}}"><button type="button" class='btn btn-info'>Edit</button><a> -->
                    <!-- /updateevent/{{$row->nomevent}} -->
                <!--</td>  -->
                </tr>
            @endforeach
            </tbody>
            </table>
</body>
</html>