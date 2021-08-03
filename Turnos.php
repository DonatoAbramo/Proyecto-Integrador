<!doctype html>



<html lang="en">



  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>FIKS Kinesiologia</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
  </head>










  <body>
    


  <header> 




<nav class="containerfluid">

<div class="secciones">

<br>


</div>

</nav>

<div >

<div class="header"> <img src="header.jpg" alt="" height="300px">  </div>


</div>


<nav class="containerfluid">

<div class="secciones">

<div ><a href="index.php">Inicio</a></div>
<div  ><a href="obras.php">Obras Sociales</a></div>
<div ><a href="Turnos.php">Turnos Online</a></div>
<div ><a href="registro.php">Registro</a></div>




</div>

</nav>


</header>








<main class="mainobras">








<!-- INICIO BANNER -->

<div class="banner">  

<div> 

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: 100%; height: 415px; display: inline-block; " >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="swissban.jpg" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="galenoban.jpg" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="osdeban.jpg" class="d-block w-100" alt="..." >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>


</div>







<!-- FIN BANNER -->




<div>


<div > 

<form action="turnosback.php" style="margin-left: 80%" method="POST">

<input type="text" name="nombreCompleto" id="" placeholder="Nombre Completo">


<br>
<br>


<input type="text" name="dni" id="" placeholder="DNI">


<br>
<br>



<input type="date" name="fecha" id="" placeholder="DD/MM/YYY">


<br>
<br>




<select class="input" name="horario">

<option>Seleccione Horario</option>
<option>9:00 AM</option>
<option>10:00 AM</option>
<option>11:00 AM</option>
<option>12:00 AM</option>
<option>13:00 PM</option>
<option>14:00 PM</option>
<option>15:00 PM</option>
<option>16:00 PM</option>
<option>17:00 PM</option>
<option>18:00 PM</option>
<option>19:00 PM</option>


</select>


<br>
<br>

<select class="input" name="obraSocial">

<option>Seleccione obra social</option>
<option>Osde</option>
<option>Swiss Medical</option>
<option>Galeno</option>


</select>



<br>
<br>



<input type="text" name="e-mail" id="" placeholder="E-mail">
<br>
<br>

<textarea name="" id="" cols="30" rows="10" placeholder="Razon del turno"></textarea>
<br>
<br>

<button class="btn btn-primary" type="submit" id="botones">Enviar</button>





</form>
</div>




</div>






<!--   



<div class="banner">  

<div> 

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: 100%; height: 590px; display: inline-block; " >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="banner lidherma.jpg" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="banner lidherma2.jpg" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="banner lidherma3.jpg" class="d-block w-100" alt="..." >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>


</div>
-->



</main>


<footer id="footer">

<div>  

<a href="Turnos.php"><p>Turnos online</p></a>
<a href="obras.php"><p>Obras sociales</p></a>
<a href="registro.php"><p>Unete a FIKS</p></a>
<p>@Copyright Fiks™</p>


</div>



<div>

<p> Informacion de contacto: </p>
<p>Email: fikskinesiologia@gmail.com</p>
<p>Telefono: 1166046826 / 42648893</p>
<p>Direccion: Estacion de Lomas de Zamora 2140</p>

</div>


<div>

<p>Redes sociales: </p> 

<div>

<a href="https://www.facebook.com/enespanol/" target="_blank">  <img src="facebook.jpg" alt="">   </a>

<a href="https://twitter.com/?lang=es" target="_blank">  <img src="twitter.jpg" alt="">   </a>

<a href="https://ar.linkedin.com/" target="_blank">  <img src="linkedin.jpg" alt="">   </a>



</div>

</div>







</footer>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>









</html>