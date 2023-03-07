<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/updateterrainvrai/{{$data->phototerrain}}" method="post">
        @csrf
        <div>
            <input type="text" name="type" id="" placeholder="Marque du vehicule" value="{{$data->type}}" required>
        </div>
        <br>

        <div>
            <input type="text" name="dimension" id="" value="Modele du vehicule" value="{{$data->dimension}}" required>
        </div>
        <br>

        <div>
            <input type="text" name="emplacement" id="" placeholder="annee de fabrication" value="{{$data->emplacement}}" required>
        </div>
        <br>

        <div>
            <input type="file" name="photo" value="{{$data->phototerrain}}" required>
        </div>
        <br>
        <div>
            <input type="submit" value="Modifier">
        </div>
    </form>
</body>
</html>