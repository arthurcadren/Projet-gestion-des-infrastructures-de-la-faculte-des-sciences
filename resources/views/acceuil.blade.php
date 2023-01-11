<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acceuil</title>
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <nav class="navbar">
        <a href="#" class="logo">CampusResource</a>

        <div class="nav-link">
            <ul>
                <li class="active"><a href="#">Home<a><li>
                <li><a href="#">About<a><li>
                <li><a href="#">Service<a><li>
                <li><a href="#">BookNow<a><li>
            </ul>
        </div>

        <img src="images/Hamburger1.png" alt="menu" class="menu">
    </nav>
    <header>
        
    </header>
    <nav class="texte">
        <p class="texte0">Campus Resource <br>
                        reservation</p> <br>

    <p class="texte1">Make your events more special <br>
                        and valuable by getting the best <br>
                        resources now!</p>
    </nav>

    <section>
        <aside class="block1">
            <img src="images/imagesBus.jpg" title="vehicule" class="imgBus">
            <p class="t1">vehicle <br>Reservation</p>
            
        </aside>
        <aside class="block2">
            <img src="images/imageTerrain.jpg" title="class" class="imgTerrain">
            <p class="t2">Sport Space <br>Reservation</p>
        </aside>
        <aside class="block3">
            <img src="images/imageclasse.jpg" title="class" class="imgClass">
            <p class="t3">class Room <br>Reservation</p>
        </aside>
             
    </section>

    <section class="cadre2">
        <article class="cd1"></article>
        <article class="cd2">
            <!-- <img src="images/imagesBus.jpg" class="imagecd2"> -->
        </article>
        <article class="cd3">The Faculty Of Science of the University of Yaoundé 
            has open her doors to whole public, to provide them with the 
            best resources for any event like conferences, campus
             advertisement space, sporting space, amongst others. This 
             reservation system secures your demand, and provides you with
            a receipt to prove you booked for the resource. You can now therefore join the larger community, that is already enjoying this new offer, offered by the university of Yaoundé 1 and give a new look and taste to your event.</article>

        <article class="cd4">About Us</article>
        <article class="cd5"></article>
        <input type="button" value="Reserve Now" class="BouttonVehicule">
    <section>
    
    <section class="cadre3">
        <p class="titreOurService">Our Services</p>
        <div class="service1">
            <span class="imgservice1"></span>
            <p class="text1">ClassRoom Reservation</p>
            <span class="trai1"></span>
            <p class="text2">Hall of almost all Capacities</p>
            <span class="trai2"></span>
            <p class="text3">Very Clean and Vantililated</p>
            <span class="trai3"></span>
            <p class="text4">High and Ofently Maintain</p>
            <span class="trai4"></span>
            <p class="text5">Read more</p>
            <input type="button" value="BookNow" class="button1">
        </div>

        <div class="service2">
            <span class="imgservice12"></span>
            <p class="text12">SchoolBus Reservation</p>
            <span class="trai12"></span>
            <p class="text22">Hall of almost all Capacities</p>
            <span class="trai22"></span>
            <p class="text32">Very Clean and Vantililated</p>
            <span class="trai32"></span>
            <p class="text42">High and Ofently Maintain</p>
            <span class="trai42"></span>
            <p class="text52">Read more</p>
            <input type="button" value="BookNow" class="button12">
        </div>

        <div class="service3">
            <span class="imgservice13"></span>
            <p class="text13">ClassRoom Reservation</p>
            <span class="trai13"></span>
            <p class="text23">Hall of almost all Capacities</p>
            <span class="trai23"></span>
            <p class="text33">Very Clean and Vantililated</p>
            <span class="trai33"></span>
            <p class="text43">High and Ofently Maintain</p>
            <span class="trai43"></span>
            <p class="text53">Read more</p>
            <input type="button" value="BookNow" class="button13">
        </div>
    </section>

    <section class="cadre4">
        <p class="titlecadre4">What our Clients Say About Us</p>
        <span class="soulignecadre4"></span>
        <span class="Dev1"></span>
    </section>

</body>

 <script>
    const menuHamburger=document.querySelector(".menu")
    const navLinks=document.querySelector(".nav-link")

    menuHamburger.addEventListener('click',()=>{
        navLinks.classList.toggle('mobile-menu')
    })

</script>
</html>