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
 <h1 align="center">Liste des Terrains</h1>
<div class="container">
<a href="{{route('creerTAdmin')}}"><button type="button" class='btn btn-success'>Ajout +</button></a>
        <div class="row">
            @if($message= Session::get('success'))
                <div class="message">
                    {{$message}}
                </div>
            @endif
                <table class="content-table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">type</th>
                <th scope="col">dimmension</th>
                <th scope="col">emplacement</th>
                <th scope="col">photo</th>
                
                <!-- <th scope="col">Nom evenement</th>
                <th scope="col">Niveau</th> -->
                <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $row) 
                <tr>
                <!-- <td>{{$row->tempsdebut}} <br>{{$row->tempsfin}}</td> -->
                <td>{{$row->id}}</td>
                <td>{{$row->type}}</td>
                <td>{{$row->dimension}}</td>
                <td>{{$row->emplacement}}</td>
                <td>
                    <img src="{{asset('phototerrain/'.$row->phototerrain)}}" alt="" style="width:40px;">
                </td>
                <!-- <td>{{$row->niveau}}</td> -->
                <td>
                    <a href="{{route('deleteterrain',['id'=>$row->id])}}"><button type="button" class='btn btn-danger'>Delete</button></a>
                    <a href="{{route('updateterrain',['phototerrain'=>$row->phototerrain])}}"><button type="button" class='btn btn-info'>Edit</button><a>
                    <!-- /updateevent/{{$row->nomevent}} -->
                </td>
                </tr>
            @endforeach
            </tbody>
            </table>
</body>
</html>