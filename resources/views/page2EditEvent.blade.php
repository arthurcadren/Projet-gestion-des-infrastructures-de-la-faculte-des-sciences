<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app3.css')}}">
    <title>Document</title>
</head>
<body>
    <section class="creerEvent">
        <span class="titreEvent">Edit Evenement Salle</span>
        <span class="soulEvent"></span>

        <form action="/updateeventvrai/{{$data->nomevent}}" method="POST" enctype="multipart/form-data">
            @csrf
            
                <select name="jour" class="jourevent" required>
                <option selected>{{ $data->Date }}</option>
                    <option value="Lundi">Lundi</option>
                    <option value="Mardi">Mardi</option>
                    <option value="Mercredi">Mercredi</option>
                    <option value="Jeudi">Jeudi</option>
                    <option value="Vendredi">Vendredi</option>
                    <option value="Samedi">Samedi</option>
                </select>

                <input type="text" placeholder="Salle Event" name="salle" class="salleevent" value="{{$data->nomSalle}}" required>

                <select name="type" id="" class="typeevent" required>
                <option selected>{{$data->evenement}}</option>
                    <option value="Cour">Cour</option>
                    <option value="CC">CC</option>
                    <option value="SN">SN</option>
                    <option value="TP">TP</option>
                    <option value="TD">TD</option>
                    <option value="Administratif">Administratif</option>
                </select>
                <input type="text" name="nomevent" placeholder="Nom Event" class="nomevent" value="{{$data->nomevent}}" required>
                
                <select name="filiere" class="filiereevent" required>
                    <option selected>{{$data->filiere}}</option>
                    <option value="ICT4D">ICT4D</option>
                    <option value="Informatique">Informatique</option>
                    <option value="Mathematique">Mathematique</option>
                    <option value="Physique">Physique</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>

                </select>

                <select name="niveau" class="niveaucons" required>
                    <option selected>{{$data->niveau}}</option>
                    <option value="L1">L1</option>
                    <option value="L2">L2</option>
                    <option value="L3">L3</option>
                    <option value="M1">M1</option>
                    <option value="M2">M2</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="Administratif">Administatif</option>
                </select>
                <input type="time" name="debut" placeholder="Start Time" class="debutevent" value="{{$data->tempsdebut}}" required>
                <input type="time" name="fin" placeholder="Start Time" class="finevent" value="{{$data->tempsfin}}" required>
                <input type="submit" value="Create" class="bouttonevent">
            </form>
    </section>

</body>
</html>