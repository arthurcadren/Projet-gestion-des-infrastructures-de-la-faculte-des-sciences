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

    <h1 align="center">demandes de reservations de terrains</h1>
<div class="container">
        <!-- <a href="{{route('page2')}}"><button type="button" class='btn btn-success'>Ajout +</button></a>          
        <div class="row"> -->
            <!-- @if($message= Session::get('success'))
                <div class="message">
                    {{$message}}
                </div>
            @endif -->
            @foreach($data as $row) 
                <p>id du terrain reserve           :{{$row->terrain_id}}</p>
                <p>jour d'utilisation              :{{$row->jourdeprise}}</td>
                <p>heure du debut                  :{{$row->debut}}</td>
                <p>heure de fin                    :{{$row->fin}}</td>
                <p>heure de fin                    :{{$row->motif}}</td>
                <br>
                <p>
                 <a href="{{route('refuseterrain',['id'=>$row->id])}}"><button type="button" class='btn btn-danger'>Delete</button></a>
                 
                </p>           
            @endforeach
</h1>
</body>
</html>