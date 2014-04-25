<html>
    <head>
        <title>Borrar Catálogos</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta http-equiv="content-language" content="en" />
		<meta name="author" content="Johan Säll Larsson" />
		<meta name="viewport" content="width=device-width,initial-scale=1" />
     
		
		
		<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/ui-lightness/jquery-ui.css" />
		<link type="text/css" rel="stylesheet" href="css/960/min/960.css" />
		<link type="text/css" rel="stylesheet" href="css/960/min/960_16_col.css" />
		<link type="text/css" rel="stylesheet" href="css/normalize/min/normalize.css" />
		<link type="text/css" rel="stylesheet" href="css/prettify/min/prettify.css" />
		<link type="text/css" rel="stylesheet" href="css/style.css" />
		<script type="text/javascript" src="js/modernizr-2.0.6/modernizr.min.js"></script>
                 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    </head>
    <body>
  <header class="dark">
			<div class="container_16">
                            <h1><a href="/">Kuicho <span></span></a>Borra Catálogos</h1>
			</div>
		</header>
        <ol class="breadcrumb">
            <li><a href="/">INICIO</a></li>
            <li><a href="administracion-promociones.html">ADMINISTRACIÓN DE PROMOCIONES</a></li>
            <li><a href="administracion-catalogos.html">ADMINISTRACIÓN DE CATALOGOS</a></li>
            <li><a href="borrar-catalogos.php" class="active">BORRAR CATALOGOS</a></li>
        </ol>      
    <center>
        <h2>El elemento de catalogo ya ha sido borrado</h2>
    </center>

    <center>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$id=$_POST["id"];
// Create connection
$con=mysqli_connect("localhost","campitos","celiesita","imagenes");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Fallo al conectarse a mysql MySQL: " . mysqli_connect_error();
  }
  else{
      //echo'Borrar un catalogo'.'<br>';
     //Insertamoe n la tabla informacion:
   //   mysqli_query($con,"INSERT INTO informacion (promocion,mensaje, direccion,imagen)
//VALUES ('esto es una promo no 2', 'Ven a hospedarte al mejor hotel de la region','domiciolio conocido','algo.jpg')");
// echo 'Se hizo la insercion'.'<br>';
 
 $result = mysqli_query($con,"SELECT * FROM informacion WHERE id = $id");
$ruta;
while($row = mysqli_fetch_array($result))
  {
  $ruta=$row['imagen'];
 
  }
  $partida = explode('http://kuicho.com', $ruta);
  $archivo= $partida[1];
  $archivo='/home/campitoskuicho/public_html'.$archivo;
  unlink($archivo);
mysqli_query($con,"DELETE FROM informacion WHERE id=$id");



  }
     mysqli_close($con);  
  //echo 'Elemento borrado';
  
  
  
 
  ?>
        </center>
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <center>
           
                    <a href="borrar-catalogos.php" class="btn btn-lg btn-success" style="color:white;">Regresar a borra catalogos</a>
                </center>
            </div>
        </div>
    </div>
   
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
		<script type="text/javascript" src="js/jquery-1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/underscore-1.2.2/underscore.min.js"></script>
		<script type="text/javascript" src="js/backbone-0.5.3/backbone.min.js"></script>
		<script type="text/javascript" src="js/prettify/prettify.min.js"></script>
                <script src="bootstrap/js/bootstrap.min.js"></script>
                <script src="bootstrap/js/docs.min.js"></script>
		<script type="text/javascript" src="js/demo.js"></script>
		<script type="text/javascript" src="ui/jquery.ui.map.js"></script>
		<script type="text/javascript" src="ui/jquery.ui.map.services.js"></script>
		<script type="text/javascript" src="ui/jquery.ui.map.extensions.js"></script>
                 <script>
        $(document).ready(function(){
            $("#borrar-registro").click(function(){
            alert("Opcion en construccion, aun no esta borrado ");
             });
        });
    </script>
    </body>
</html>