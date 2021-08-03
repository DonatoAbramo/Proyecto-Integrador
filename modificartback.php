





<?php

$nombreMod = $_POST['nombreMod'];
$dniMod =  $_POST['dniMod'];
$fechaMod = $_POST['fechaMod'];

// Datos Modificados:

    $nombreCompleto = $_POST['nombreCompleto'];
    $dni = $_POST['dni'];
    $fecha =  $_POST['fecha'];
    $horario = $_POST['horario'];
    $obraSocial = $_POST['obraSocial'];
    $mail = $_POST['e-mail'];


$conexion2 = mysqli_connect("localhost","root","","proyecto");

$fechaInvMod= date('Y-m-d',strtotime($fechaMod));

$fechaInv= date('Y-m-d',strtotime($fecha));


$queryUpdate= "UPDATE turnos set nombre='$nombreCompleto', dni=$dni , fecha='$fechaInv' , horario='$horario' , obra='$obraSocial' , mail='$mail' where nombre='$nombreMod' AND dni=$dniMod AND fecha='$fechaInvMod' ";

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
  <h4 class="alert-heading">Turno Modificado con exito</h4>
  <p>Usted ha Modificado un Turno de manera exitosa.</p>
  <hr>
  <p class="mb-0"></p>
  </div>




<?php

if(10==10){


  header('refresh: 2; url= office2.php');
  echo "<script>location.href='office2.php';</script>";
  die();



}



?>



  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>









</html>