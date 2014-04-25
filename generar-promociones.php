<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
$promo=$_GET["catalogo"];
$mimensaje;
$midireccion;
$miimagen;
$miposicion;
$arr=array();
 $result = mysqli_query($con,"SELECT * FROM informacion WHERE promocion='$promo'");
 while($fila=  mysqli_fetch_array($result)){
$mipromo = $fila['promocion'];
$mimensaje = $fila['mensaje'];
$midireccion=$fila['direccion'];
$miimagen =$fila['imagen'];
$miposicion=$fila['posicion'];
$mitelefono=$fila['telefono'];
$miprecios=$fila['precios'];



array_push($arr,array('promocion' => $mipromo, 'mensaje' => $mimensaje,'direccion' => $midireccion, 'imagen' => $miimagen,'posicion' =>$miposicion,'telefono' =>$mitelefono,'precios' =>$miprecios ));
}

//$arr2=array('mispromociones' => $arr);

echo json_encode($arr);
  }
   mysqli_close($con);  