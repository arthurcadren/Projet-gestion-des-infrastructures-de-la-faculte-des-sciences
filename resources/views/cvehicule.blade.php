<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="{{route('insertvoiture')}}" method="POST" enctype="multipart/form-data"><!--"{{route('insertvoiture')}}" -->
        @csrf
        <div>
            <input type="text" name="marque" id="" placeholder="Marque du vehicule" required>
        </div>
        <br>

        <div>
            <input type="text" name="modele" id="" value="Modele du vehicule" required>
        </div>
        <br>

        <div>
            <input type="text" name="annee" id="" placeholder="annee de fabrication" required>
        </div>
        <br>

        <div>
            <input type="text" name="couleur" id="" placeholder="couleur" required>
        </div>
        <br>

        <div>
            <input type="text" name="num_plaque" id="" placeholder="numero de plaque" required>
        </div>
        <br>
        <div>
            <input type="file" name="photo" required>
        </div>
        <br>
        <div>
            <input type="submit" value="creer">
        </div>
    </form>

    <p>enregistrement de terrain</p>

    <!-- --------------------enregistrement de terrains --------------------------- -->

    <form action="{{route('insertterrain')}}" method="POST" id="terrain" enctype="multipart/form-data">
        @csrf
        <div>
            <input type="text" name="type" id="" placeholder="Type de terrain" required>
        </div>
        <br>

        <div>
            <input type="text" name="dimension" id="" placeholder="dimension" required>
        </div>
        <br>

        <div>
            <input type="text" name="emplacement" id="" placeholder="emplacement" required>
        </div>
        
        <br>

        <div>
            <input type="file" name="phototerrain" required>
        </div>
        <br>
        <div>
            <input type="submit" value="creer">
        </div>
    </form>

</body>
</html>