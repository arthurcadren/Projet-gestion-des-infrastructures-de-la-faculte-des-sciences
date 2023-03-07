<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/updatevoiturevrai/{{$data->numero_plaque}}" method="post">
        @csrf
        <div>
            <input type="text" name="marque" id="" placeholder="Marque du vehicule" value="{{$data->marque}}" required>
        </div>
        <br>

        <div>
            <input type="text" name="modele" id="" value="{{$data->modele}}" required>
        </div>
        <br>

        <div>
            <input type="text" name="annee" id="" placeholder="annee de fabrication" value="{{$data->annee}}" required>
        </div>
        <br>

        <div>
            <input type="text" name="couleur" id="" placeholder="couleur" value="{{$data->couleur}}" required>
        </div>
        <br>

        <div>
            <input type="text" name="num_plaque" id="" placeholder="numero de plaque" value="{{$data->numero_plaque}}" required>
        </div>
        <br>
        <div>
            <input type="file" name="photo" value="{{$data->photo}}" required>
        </div>
        <br>
        <div>
            <input type="submit" value="Modifier">
        </div>
    </form>
</body>
</html>