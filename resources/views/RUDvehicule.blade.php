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
 <h1 align="center">Liste des vehicules</h1>
<div class="container">
<a href="{{route('cVAdmin')}}"><button type="button" class='btn btn-success'>Ajout +</button></a>      
        <div class="row">
            @if($message= Session::get('success'))
                <div class="message">
                    {{$message}}
                </div>
            @endif
                <table class="content-table">
            <thead>
                <tr>
                    <th></th>
                <th scope="col">marque</th>
                <th scope="col">modele</th>
                <th scope="col">annee</th>
                <th scope="col">couleur</th>
                <th scope="col">numero_plaque</th>
                <th scope="col">photo_vehicule</th>
                <!-- <th scope="col">Nom evenement</th>
                <th scope="col">Niveau</th> -->
                <th></th>
                </tr>
            </thead>
            <tbody>
            @php
                    $no=1;
                @endphp
            @foreach($data as $index=>$row) 
                <tr>
                <!-- <td>{{$row->tempsdebut}} <br>{{$row->tempsfin}}</td> -->
                <td scope="row">{{$index + $data->firstItem()}}</td>
                <td>{{$row->marque}}</td>
                <td>{{$row->modele}}</td>
                <td>{{$row->annee}}</td>
                <td>{{$row->couleur}}</td>
                <td>{{$row->numero_plaque}}</td>
                <td>
                    <img src="{{asset('photovehicule/'.$row->photo)}}" alt="" style="width:40px;">
                </td>
                <!-- <td>{{$row->niveau}}</td> -->
                <td>
                    <a href="{{route('deletevoiture',['numplaque'=>$row->numero_plaque])}}"><button type="button" class='btn btn-danger'>Delete</button></a>
                    <a href="{{route('updatevoiture',['numplaque'=>$row->numero_plaque])}}"><button type="button" class='btn btn-info'>Edit</button><a>
                    <!-- /updateevent/{{$row->nomevent}} -->
                </td>
                </tr>
            @endforeach
            </tbody>
            </table>
</body>
{{$data->links()}}

</html>