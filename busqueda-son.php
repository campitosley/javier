<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$valor=  $_GET["valor"];
// Create connection
$con=mysqli_connect("localhost","campitos","celiesita","imagenes");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else{
     // echo'te conectaste adecuadamente'.'<br>';
     //Insertamoe n la tabla informacion:
   //   mysqli_query($con,"INSERT INTO informacion (promocion,mensaje, direccion,imagen)
//VALUES ('esto es una promo no 2', 'Ven a hospedarte al mejor hotel de la region','domiciolio conocido','algo.jpg')");
// echo 'Se hizo la insercion'.'<br>';
$mipromo;
$mimensaje;
$arr=array();
 $result = mysqli_query($con,"SELECT * FROM informacion WHERE id=".$valor);
 while($fila=  mysqli_fetch_array($result)){
$mipromo = $fila['promocion'];
$mimensaje = $fila['mensaje'];

array_push($arr,array('promocion' => $mipromo, 'mensaje' => $mimensaje));
}

//$arr2=array('mispromociones' => $arr);

echo json_encode($arr);
  }
   mysqli_close($con);  