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
  Usted esta a punto de Modificar los datos de un paciente. Ingrese Nombre, Apellido y DNI del paciente que desea modificar y luego ingrese los datos nuevos.
</div>





<form action="modificarpback.php"  method="POST">


<input type="text" name="nombreMod" class="form-control" placeholder="Nombre del paciente que va a ser modificado">
<br>
<br>
<input type="text" name="apellidoMod" class="form-control" placeholder="Apellido del paciente que va a ser modificado">
<br>
<br>
<input type="text" name="dniMod" class="form-control" placeholder="DNI del paciente que va a ser modificado">
<br>

<div class="alert alert-primary" role="alert">
  Ingrese los datos nuevos...
</div>

<input type="text" placeholder="E-mail" class="form-control" name="mail" >

<br>
<br>


<input type="text" placeholder="Nombre" class="form-control" name="nombre" >

<br>
<br>

<input type="text" placeholder="Apellido" class="form-control" name="apellido" >

<br>
<br>


<input type="text" placeholder="DNI" class="form-control" name="dni" >

<br>
<br>


<select class="form-control" name="obra" >
<option>Obra social</option>
<option>Particular</option>
<option>Osde</option>
<option>IOMA</option>
<option>Galeno</option>
<option>Swiss Medical</option>

</select>

<br>
<br>

<label for="">Fecha de nacimiento</label>
<br>
<input type="date" placeholder="Fecha de nacimiento" class="form-control" name="nacimiento" >

<br>
<br>



<button type="submit" class="btn btn-info">Modificar</button>

<br>
<br>




</form>


















</main>













  </body>













  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</html>