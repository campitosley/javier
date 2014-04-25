<html>
    <head>
        <title>Conoce nuestra recomendacion de hoteles para el dia de hoy!!!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos.css" />
       <link rel="stylesheet" href="imagenes-javier/estilos-kuicho.css"> 
    </head>
    <body>
        



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
      echo'te conectaste adecuadamente'.'<br>';
     //Insertamoe n la tabla informacion:
   //   mysqli_query($con,"INSERT INTO informacion (promocion,mensaje, direccion,imagen)
//VALUES ('esto es una promo no 2', 'Ven a hospedarte al mejor hotel de la region','domiciolio conocido','algo.jpg')");
// echo 'Se hizo la insercion'.'<br>';
 /*
 $result = mysqli_query($con,"SELECT * FROM informacion");

while($row = mysqli_fetch_array($result))
  {
  echo 'promocion:'. $row['promocion'] . " mensaje: " . $row['mensaje'];
  echo "<br>";
  }
  */
  
  $result2 = mysqli_query($con,"SELECT * FROM informacion");
  echo "<table border='1'>
<tr>
<th>Promocion</th>
<th>Mensaje</th>
</tr>";

while($row = mysqli_fetch_array($result2))
  {
  echo "<tr>";
  echo "<td>" . $row['promocion'] . "</td>";
  echo "<td>" . $row['mensaje'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

$result3=  mysqli_query($con,"SELECT * FROM informacion WHERE id=5");
while($fila=  mysqli_fetch_array($result3)){
    echo "<br>promocion: ".$fila['promocion']." Mensaje: ".$fila['mensaje']."<br>";
}
 
  }
     mysqli_close($con);  
  echo 'hasta luego';
  
  
  
 
  ?>
    </body>
</html>