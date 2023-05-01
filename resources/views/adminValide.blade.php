<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>bricollage</p>

    <h1 align="center">demandes de reservations</h1>
<div class="container">
        <!-- <a href="{{route('page2')}}"><button type="button" class='btn btn-success'>Ajout +</button></a>          
        <div class="row"> -->
            @if($message= Session::get('success'))
                <div class="message">
                    {{$message}}
                </div>
            @endif
            @foreach($data as $row) 
                <p>N plaque           :{{$row->numero_plaque}}</p>
                <p>date de reservation:{{$row->date_reservation}}</td>
                <p>date de prise      :{{$row->date_debut}}</td>
                <p>date de remise     :{{$row->date_fin}}</td>
                <br>
                <p>
                <a href="{{route('refusereserv',['numplaque'=>$row->numero_plaque])}}"><button type="button" class='btn btn-danger'>Delete</button></a>
                <a href="{{route('acceptreserv',['numplaque'=>$row->numero_plaque])}}"><button type="button" class='btn btn-danger'>Accepter</button></a>
                </p>




                
            @endforeach
</h1>
<br>
<br>
</body>
</html>