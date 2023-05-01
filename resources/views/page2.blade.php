<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app1.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <title>Document</title>
</head>
<body id="page2">
    <nav class="navbar">
        <a href="#" class="logo">
        <!-- <img src="images/logo.png" title="class" class="imgTerrain"> -->
         <img src="images/logo.png" title="class" class="imgTerrain">
        </a>

        <div class="nav-link">
            <ul>
                <li class="active"><a href="#">Home<a><li>
                <li><a href="#cd4">About<a><li>
                <li><a href="#titreOurService">Service<a><li>
                <a href="#"><button class="bookbtn">BookNow<button><a>
            </ul>
        </div>
    </nav>

            @if(isset($_COOKIE['notif']))
                <p>{{ $_COOKIE['notif'] }}</p>
            @endif

        <!-- @if(Session::has('notif'))
            <p>{{ Session::get('notif') }}</p>
        @endif -->

    <section class="cadre2">
        <span class="titrecadre2">Time Table and Class Room Management</span>
        <span class="soulcadre2"></span>
        <!-- <span class="cd1">
            <span class="textcd1">If you are a Teacher, you can now propose your  time table, base 
                on your free time.
            </span>
            <a href=""><input type="submit" value="Propose" class="btcd1"></a>
        </span> -->

        <span class="cd2">
            <span class="textcd2">Student can now consult their timetables for TP,CC, SN, and for normal Courses. 
            </span>
            <a href="#consultTime"><input type="submit" value="Consult" class="btcd2"></a>
        </span>

        <span class="cd3">
            <span class="textcd3">Administrators can now create new event for Any class room. 
            </span>
            <a href="#creerEvent"><input type="submit" value="Create" class="btcd3"></a>
        </span>

        <span class="cd4">
            <span class="textcd4">Find Empty class rooms Where you can study 
            </span>
            <a href="#emptyclass"><input type="submit" value="Find" class="btcd4"></a>
        </span>

        <!-- <span class="cd5">
            <span class="textcd5">Create and update new classrooms and hall in the system.
            </span>
            <a href="#ressalle"><input type="submit" value="Manage" class="btcd5"></a>
        </span> -->


    </section>










    <section class="consultTime" id="consultTime">
        <span class="titretime">Consult Time table of Salle</span>
        <span class="soultime"></span>
            <form action="{{route('show')}}" enctype="multipart/form-data">
                
                <select name="input1consult" class="input1consult" required>
                    <option selected>Enter you departement</option>
                    <option value="Informatique">Informatique</option>
                    <option value="Mathematique">Mathematique</option>
                    <option value="Physique">Physique</option>
                    <option value="Chimie">Chimie</option>
                    <option value="Administratif">Administratif</option>
                </select>
                <!-- <input type="text" class="input2consult" name="input2consult" placeholder="Enter salle name" required> -->

                <select  class="input2consult" name="input2consult" placeholder="Enter salle name"  required> 
                        @foreach($salles as $salle)
                          <option value="{{ $salle->nomSalle }}">{{ $salle->nomSalle }}</option>
                        @endforeach
                </select>    

                <select name="input3consult" class="input3consult" required>
                <option selected hidden>type d'evenement</option>
                    <option value="Cour">Cour</option>
                    <option value="CC">CC</option>
                    <option value="SN">SN</option>
                    <option value="TP">TP</option>
                    <option value="TD">TD</option>
                    <option value="Administratif">Administratif</option>
                </select>
                <button type="submit" class="boutton4consult">Search</button>
                <!-- <input type="submit" value="Search" class="boutton4consult"> -->
            </form>
        
    </section>




















































    <!-- <section class="creerEvent" id="creerEvent">
        <span class="titreEvent">Create Event</span>
        <span class="soulEvent"></span>

        <form action="{{route('insertevenement')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <select name="jour" class="jourevent" required>
                <option selected hidden>Jour evenement</option>
                    <option value="Lundi" selected>Lundi</option>
                    <option value="Mardi">Mardi</option>
                    <option value="Mercredi">Mercredi</option>
                    <option value="Jeudi">Jeudi</option>
                    <option value="Vendredi">Vendredi</option>
                    <option value="Samedi">Samedi</option>
                </select>

                <input type="text" placeholder="Salle Event" name="salle" class="salleevent" required>

                <select name="type" id="" class="typeevent" required>
                <option selected hidden>Type evenement</option>
                    <option value="Cour">Cour</option>
                    <option value="CC">CC</option>
                    <option value="SN">SN</option>
                    <option value="TP">TP</option>
                    <option value="TD">TD</option>
                    <option value="Vide">Vide</option>
                    <option value="Administratif">Administratif</option>
                    <option value="Soutenance">Soutenance</option>
                </select>
                <input type="text" name="nomevent" placeholder="Nom Event" class="nomevent" required>
                
                <select name="filiere" class="filiereevent" required>
                    <option selected hidden>Filiere</option>
                    <option value="ICT4D">ICT4D</option>
                    <option value="Informatique">Informatique</option>
                    <option value="Mathematique">Mathematique</option>
                    <option value="Physique">Physique</option>
                    <option value="Aucune">Aucune</option>

                </select>

                <select name="niveau" class="niveaucons" required>
                    <option selected hidden>Niveau</option>
                    <option value="L1">L1</option>
                    <option value="L2">L2</option>
                    <option value="L3">L3</option>
                    <option value="M1">M1</option>
                    <option value="M2">M2</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="Administratif">Administatif</option>
                    <option value="Aucun">Aucun</option>
                </select>
               
                <input type="time" name="debut" placeholder="Start Time" class="debutevent" required>
                <input type="time" name="fin" placeholder="Start Time" class="finevent" required>
                <input type="submit" value="Create" class="bouttonevent">
            </form>
    </section> -->


















    <section class="emptyclass" id="emptyclass">
        <span class="titreempty">Find Empty Class Room </span>
        <span class="soulempty"></span>
        <span class="textempty">Find a quite place where you can study. Dedicated class rooms just 
                                for studies are now available for you. </span>
        <form action="{{route('showvide')}}">
            <select name="imputempty" class="imputempty" required>
                <option selected hidden>Select day</option>
                <option value="Lundi">Lundi</option>
                <option value="Mardi">Mardi</option>
                <option value="Mercredi">Mercredi</option>
                <option value="Jeudi">Jeudi</option>
                <option value="Vendredi">Vendredi</option>
                <option value="Samedi">Samedi</option>
            </select>
            <input type="submit" value="Go there now" class="submitempty">
        </form>
        
    </section>





    <!-- <section class="ressalle" id="ressalle">
        
        <span class="titresalle">Create and Update New ClassRooms</span>
        <span class="soulsalle"></span>
        <form action="{{route('insertdata')}}" method="POST" class="cadrecree">
        @csrf
            <span class="photoclass"></span>
            
            <span class="classligne1"></span>
            <input type="text" class="inputclass1" name="noms" placeholder="Veuillez entrer le nom de la salle de classe" required>
            
            <span class="classligne2"></span>
            <input type="number" class="inputclass2" name="capacite" placeholder="Enter the class or hall  maximum capacity" required>
            <span class="classligne3"></span>

            <span class="classligne4"></span>
            <input type="text" class="inputclass4" name="emplacement" placeholder="Veuillez entrer son emplacement" required>
            
            <input type="submit" value="Create" class="buttonclass">
        </form>
    </section> -->



    <section class="derniercadre">
        <span class="dertext1">Sign Up For Our News Letter</span>
        <span class="dertext2">Get to know update about free resources, and don’t miss the chance to secure yours. </span>
        <span class="dertext3">Your Email</span>
        <input type="text" name="" class="dertext" placeholder="example@gmail.com" required>
        <input type="button" value="subscribe" class="derbut">

        <span class="dertext4">Your best online reservation 
                                system. Stay in touch we can provide better services</span>
        <span class="dertext5">Quick Links</span>
        <span class="dertext6">Services</span>
        <span class="dertext7">Quick Links</span>
        <span class="dertext8">Home</span>
        <span class="dertext9">Classroom Reservation</span>
        <span class="dertext10">Facebook</span>
        <span class="dertext11">About</span>
        <span class="dertext12">vehicle Reservation</span>
        <span class="dertext13">Twitter</span>
        <span class="dertext14">Services</span>
        <span class="dertext15">sport FieldsReservation</span>
        <span class="dertext16">Whatsapp</span>
        <span class="dertext17">CampusResource 2023 C .ink, all right reserved</span>
    </section>
</body>
</html>