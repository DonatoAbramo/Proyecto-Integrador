





<?php

$nombre = $_POST['nombreCompleto'];
$dni =  $_POST['dni'];
$fecha = $_POST['fecha'];
$horario = $_POST['horario'];
$obraSocial = $_POST['obraSocial'];
$mail = $_POST['e-mail'];



$conexion = mysqli_connect("localhost","root","","proyecto") ;

$fechaInv= date('Y-m-d',strtotime($fecha));

/*
echo $nombre;
echo "<br>";
echo $dni;
echo "<br>";
echo $fecha;
echo "<br>";
echo $horario;
echo "<br>";
echo $obraSocial;
echo "<br>";
echo $mail;
*/



$query = "insert into turnos(nombre, dni, horario, obra, mail,fecha) values ('$nombre','$dni','$horario','$obraSocial','$mail','$fechaInv') ";



$insert = mysqli_query($conexion, $query );







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
  <h4 class="alert-heading">Turno Reservado Correctamente</h4>
  <p>Gracias por pedir su turno online, Bienvenido a FIKS</p>
  <hr>
  <p class="mb-0">Si usted desea modificar la fecha del turno o cancelarlo comuniquese con atencion al cliente</p>
  </div>




<?php

if(10==10){


  header('refresh: 3; url= index.php');
  echo "<script>location.href='index.php';</script>";
  die();



}



?>



  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>









</html>