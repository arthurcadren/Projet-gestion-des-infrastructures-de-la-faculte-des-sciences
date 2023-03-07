<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style type="text/css">
            div {
  display: flex;
}

div img {
  margin-right: 10px;
  flex-wrap: wrap
}
form{
    position: relative;
    left: 30.15%;
    right: 0.38%;
    top: 68%;
    bottom: 0%;
    border-radius: 20px;
    width: 513px;
    height: 507px;
}
    </style>
</head>
<body>

<h1 align="center">Terrains disponibles</h1>
<div>
@foreach($terrains as $terrain)

    <p><img src="{{asset('phototerrain/'.$terrain->phototerrain)}}" alt="" style="width: 400px;"><span>id:{{ $terrain->id }}</span></p>
    
    
@endforeach
</div>
<script>

document.addEventListener('DOMContentLoaded', function(){
  const container = document.querySelector('p');
  const images = container.querySelectorAll('img');

  let currentImage = 0;

  function scrollImages(){
    container.scrollLeft += images[currentImage].offsetWidth;
    currentImage++;
    if (currentImage === images.length){
      currentImage = 0;
    }
  }

  setInterval(scrollImages, 1000);
});
</script>
</h1>























    <form action="{{route('ReservationTerrain')}}"  method="post">
        @csrf
        <div>
            <input type="text" name="idTerrain" id="" placeholder="Id du terrain" required>
        </div>
        <br>
        <div>
            <input type="date" name="jour" id="" placeholder="jour voulue" required>
        </div>
        <br>
        <div>
            <input type="time" name="debutreserv" id="" placeholder="date de prise" required>
        </div>
        <br>
        <div>
            <input type="time" name="finreserv" id="" placeholder="date de remise" required>
        </div>
        <br>
        <textarea name="motif" id="" cols="30" rows="10" required> motif de la reservation EX:match de foot L1 info vs L2 info</textarea>
    
        <input type="submit" value="Reserver">
    </form>
</body>
</html>