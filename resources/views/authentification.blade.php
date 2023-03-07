<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type ="text/css">
        @media only screen and (max-width:600px){
            .container{
                width:100%;
            }
        }
        .container{
            width:400px;
            margin:0 auto;
            border:1px solid #ccc;
            padding:10px;

        }
        </style>
    <title>Formulaire d'authentification</title>
</head>
<body>
    <div class="container">
        <h2>Connexion</h2>
        <form action="{{route('check')}}" method="post">
            @csrf
            <div>
                <label for="name">Nom et prenom:</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="matricule">Matricule:</label>
                <input type="text" name="matricule" id="matricule">
            </div>
            <div><input type="submit" value="Valider"></div>
        </form>
    </div>
</body>
</html>