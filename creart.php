<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>FIKS Kinesiologia</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style4.css">
  </head>





  <body>
 




 


<div class="secciones">

<header> 


<p style="color: white;"> FIKS BACKOFFICE</p>


</div>





<div >

<div class="header"> <img src="header.jpg" alt="" height="300px">  </div>


</div>


<nav class="containerfluid">

<div class="secciones">

<div ><a href="office.php">Pacientes</a></div>
<div  ><a href="office2.php">Turnos</a></div>



</div>

</nav>


</header>

    

   
<main>
<div class="alert alert-primary" role="alert">
  Usted esta a punto de Crear un Turno. Ingrese todos los datos necesarios para registrar el turno.
</div>



<form action="creartback.php"   method="POST">


<input type="text" name="nombreCompleto" class="form-control" placeholder="Nombre Completo">


<br>
<br>


<input type="text" name="dni" class="form-control" placeholder="DNI">


<br>
<br>



<input type="date" name="fecha" class="form-control" placeholder="DD/MM/YYY">


<br>
<br>




<select class="form-control" name="horario">

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

<select class="form-control" name="obraSocial">

<option>Seleccione obra social</option>
<option>Osde</option>
<option>Swiss Medical</option>
<option>Galeno</option>


</select>



<br>
<br>



<input type="text" name="e-mail" class="form-control" placeholder="E-mail">
<br>
<br>

<button type="submit" class="btn btn-info">Crear</button>
<br>
<br>






</form>









</main>













  </body>













  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</html>