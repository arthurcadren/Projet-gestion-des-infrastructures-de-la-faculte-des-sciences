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

<h1 align="center">Voitures disponibles</h1>
<div>
@foreach($vehicules as $vehi)

    <p><img src="{{asset('photovehicule/'.$vehi->photo)}}" alt="" style="width: 400px;"><span>matricule:{{ $vehi->numero_plaque }}</span></p>
    
    
@endforeach
</div>
<script>
//   let images = document.querySelectorAll('p');

// let wrapper = document.createElement('div');
// wrapper.style.overflowX = 'scroll';
// wrapper.style.width = '400px';
// wrapper.style.height = '200px';

// for (let i = 0; i < images.length; i++) {
//   let scrollbar = document.createElement('div');
//   scrollbar.style.width = images[i].width;
//   scrollbar.style.overflowX = 'scroll';
//   scrollbar.addEventListener('scroll', function() {
//     images[i].scrollLeft = scrollbar.scrollLeft;
//   });
//   wrapper.appendChild(scrollbar);
//   wrapper.appendChild(images[i]);
// }

// document.body.appendChild(wrapper);

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























    <form action="{{route('insertReservation')}}"  method="post">
        @csrf
        <div>
            <input type="text" name="id_user" id="" placeholder="id utilisateur" required>
        </div>
        <br>
        <div>
            <input type="text" name="numplaque" id="" placeholder="numero plaque" required>
        </div>
        <br>
        <div>
            <input type="date" name="debutreserv" id="" placeholder="date de prise" required>
        </div>
        <br>
        <div>
            <input type="date" name="finreserv" id="" placeholder="date de remise" required>
        </div>
        <br>
    
        <input type="submit" value="Reserver">
    </form>
</body>
</html>