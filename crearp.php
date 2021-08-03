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
  Usted esta a punto de Crear un paciente. Ingrese Todos los datos necesarios para darlo de alta en el sistema.
</div>





<form action="crearpback.php"  method="POST">


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

<input type="password" placeholder="Contraseña" class="form-control" name="pass" >

<br>


<button type="submit" class="btn btn-info">Crear</button>

<br>
<br>




</form>
