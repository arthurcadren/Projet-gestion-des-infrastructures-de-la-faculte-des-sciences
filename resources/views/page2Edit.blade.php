<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app1.css')}}">
    <title>Document</title>
</head>
<body>

    <section class="ressalle">
        
        <span class="titresalle">Edit ClassRooms</span>
        <span class="soulsalle"></span>
        <form action="/updatedatavrai/{{$data->nomSalle}}" method="POST" class="cadrecree">
        @csrf
        
            <span class="photoclass"></span>
            
            <span class="classligne1"></span>
            <input type="text" class="inputclass1" name="noms" placeholder="Veuillez entrer le nom de la salle de classe" value="{{$data->nomSalle}}" required>
            
            <span class="classligne2"></span>
            <input type="number" class="inputclass2" name="capacite" placeholder="Enter the class or hall  maximum capacity" value="{{$data->capacite}}" required>
            <span class="classligne3"></span>

            <span class="classligne4"></span>
            <input type="text" class="inputclass4" name="emplacement" placeholder="Veuillez entrer son emplacement" value="{{$data->emplacement}}" required>
            
            <input type="submit" value="Create" class="buttonclass">
        </form>
    </section>
</body>
</html>