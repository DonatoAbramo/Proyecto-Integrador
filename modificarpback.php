





<?php


$nombreMod = $_POST['nombreMod'];
$apellidoMod = $_POST['apellidoMod'];
$dniMod = $_POST['dniMod'];


$mail = $_POST["mail"];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni =  $_POST['dni'];
$obraSocial = $_POST['obra'];
$fechaNacimiento = $_POST['nacimiento'];

$conexion2 = mysqli_connect("localhost","root","","proyecto");

$fechaInv= date('Y-m-d',strtotime($fechaNacimiento));


$queryUpdate= "UPDATE pacientes set mail='$mail',nombre='$nombre',apellido='$apellido',dni='$dni',obra='$obraSocial', nacimiento='$fechaInv' WHERE nombre='$nombreMod' AND apellido='$apellidoMod' AND dni=$dniMod ";
$update = mysqli_query($conexion2, $queryUpdate);




/*

echo "<br>";

if(mysqli_connect_errno()){

  echo "error";
  
  }else{
      echo "se conecto";
  
  }




$queryUpdate= "update pacientes set contraseña=4567 where nombre='Tobias' ";
$update = mysqli_query($conexion, $queryUpdate);



$queryDelete= "delete from pacientes where nombre='Tobias'";
$delete= $update = mysqli_query($conexion, $queryDelete);

*/



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
  </head>




  <body>
    
  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Paciente Modificado Correctamente</h4>
  <p>Usted Ha modificado los datos de un paciente con exito.</p>
  <hr>
  <p class="mb-0"></p>
  </div>




<?php

if(10==10){


  header('refresh: 3; url= office.php');
  echo "<script>location.href='office.php';</script>";
  die();



}



?>



  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>









</html>