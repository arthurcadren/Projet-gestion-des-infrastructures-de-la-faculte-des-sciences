<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styletableau.css')}}">
    <!-- <title>Document</title> -->


    <!-- -----------------------------------------------------------------------------------------------  -->

        <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Infrastructure management facscience university of yaounde1</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('template/maincss/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('template/https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('template/https://use.fontawesome.com/releases/v5.7.2/css/all.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('template/maincss/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('template/maincss/font-awesome.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('template/maincss/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('template/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="asset('template/maincss/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="{{asset('template/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{asset('template/maincss/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('template/maincss/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!-- -----------------------------------------------------------------------------------------------  -->
</head>
<body>
 <h1 align="center">Liste des Salles</h1>
<div class="container">
        <a href="{{route('creerEAdmin')}}"><button type="button" class='btn btn-success'>Ajout +</button></a>
            <form action="{{route('RUD')}}" method="get">
                <input type="search" name="search">         
            </form>
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
                <th scope="col">Heure</th>
                <th scope="col">Nom Salle</th>
                <th scope="col">Jour</th>
                <th scope="col">Evenement</th>
                <th scope="col">Filiere</th>
                <th scope="col">Nom evenement</th>
                <th scope="col">Niveau</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no=1;
                @endphp
            @foreach($data as $index=>$row) 
                <tr>
                    <td scope="row">{{$index + $data->firstItem()}}</td>
                <td scope="row">{{$row->tempsdebut}} <br>{{$row->tempsfin}}</td>
                <td scope="row">{{$row->nomSalle}}</td>
                <td scope="row">{{$row->Date}}</td>
                <td scope="row">{{$row->evenement}}</td>
                <td scope="row">{{$row->filiere}}</td>
                <td scope="row">{{$row->nomevent}}</td>
                <td scope="row">{{$row->niveau}}</td>
                <td scope="row">
                    <a href="{{route('deleteevent',['Date'=>$row->Date,'nomevent'=>$row->nomevent,'tempsdebut'=>$row->tempsdebut,'tempsfin'=>$row->tempsfin]) }}"><button type="button" class='btn btn-danger'>Delete</button></a>
                    <a href="{{route('updateevent',['nomevent'=>$row->nomevent])}}"><button type="button" class='btn btn-info'>Edit</button></a>
                    <!-- /updateevent/{{$row->nomevent}} -->
                </td>
                </tr>
            @endforeach
            </tbody>
            </table>
{{$data->links()}}
</body>

</html>