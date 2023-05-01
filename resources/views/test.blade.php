<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app2.css')}}">
    <link rel="stylesheet" href="{{asset('css/styletableau.css')}}"> 

    <title>Document</title>


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
        <a href="{{route('page2')}}"><button type="button" class='btn btn-success'>Ajout +</button></a>  
            <form action="{{route('test')}}" method="get">
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
                <th scope="col">Nom Salle</th>
                <th scope="col">Capacite</th>
                <th scope="col" align="center">Emplacement</th>
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
    {{$data->links()}}
    </div>

    <script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script> 
</body>
<script src="{{asset('css/app.js')}}">
    Swal("Bonjour tout le monde !") ;
</script>

</html>