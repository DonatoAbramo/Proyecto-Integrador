
 <?php
  $conexion = mysqli_connect("localhost","root","","proyecto");
  ?>


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

  <header> 


<div class="secciones">

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

<table class="table table-striped">

<tr>  

<td> <b style=" font-size: x-large;"> Nombre </b>  </td>
<td><b style=" font-size: x-large;"> Apellido </b></td>
<td><b style=" font-size: x-large;"> DNI </b></td>
<td><b style=" font-size: x-large;"> Mail </b></td>
<td><b style=" font-size: x-large;"> Obra Social</b></td>
<td><b style=" font-size: x-large;"> Fecha de Nacimiento </b></td>

</tr>



<?php


$query = "SELECT * FROM pacientes";

$select = mysqli_query($conexion, $query);

while( $mostrar = mysqli_fetch_array($select)  ){
?>

<tr>

<td><?php echo $mostrar['nombre'];   ?></td>
<td><?php echo $mostrar['apellido'];  ?></td>
<td><?php echo $mostrar['dni'];   ?></td>
<td><?php echo $mostrar['mail'] ;  ?></td>
<td><?php echo $mostrar['obra'] ;  ?></td>
<td><?php echo $mostrar['nacimiento'] ;  ?></td>


</tr>

<?php

}

?>





</table>

<button type="button" class="btn btn-primary btn-lg">  <a href="eliminarp.php" style="color: white;"> Eliminar Paciente  </a>    </button>
<button type="button" class="btn btn-primary btn-lg">  <a href="modificarp.php " style="color: white;"> Modificar Paciente </a>    </button>
<button type="button" class="btn btn-primary btn-lg">  <a href="crearp.php " style="color: white;"> Crear Paciente </a>    </button>









    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>




</html>