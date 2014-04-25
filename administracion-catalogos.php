<!doctype html> 
<html lang="en">
   <head>
		<title>MAPAS</title>
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
                            <h1><a href="/">Kuicho <span></span></a> Alta de catálogos y mapa de geolocalización</h1>
			</div>
		</header>
        <br>
        


        <br><br>
    <center>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Obtenemos la posicion del formulario
$promo=$_POST["promo"];
$posicion=  $_POST["posicion"];
$titulo=$_POST["direccion"];
$mensaje=$_POST["mensaje"];
$telefono=$_POST["telefono"];
$precios=$_POST["precios"];


// La sig ruta solo es para guardar en json
$ruta;

//subios el archivo
$uploaddir = '/home/campitoskuicho/public_html/archivos-hoteles/';
$ruta="http://kuicho.com/archivos-hoteles/";
if($promo=="promo1"){
$uploaddir = '/home/campitoskuicho/public_html/archivos-hoteles/';
$ruta="http://kuicho.com/archivos-hoteles/";
}
if($promo=="promo2"){
    $uploaddir = '/home/campitoskuicho/public_html/archivos-restaurantes/';
    $ruta="http://kuicho.com/archivos-restaurantes/";
}
if($promo=="promo3"){
    $uploaddir = '/home/campitoskuicho/public_html/archivos-artesanias/';
      $ruta="http://kuicho.com/archivos-artesanias/";
}
if($promo=="promo4"){
    $uploaddir = '/home/campitoskuicho/public_html/archivos-temascales/';
      $ruta="http://kuicho.com/archivos-temascales/";
}
if($promo=="promo5"){
    $uploaddir = '/home/campitoskuicho/public_html/archivos-lugares/';
      $ruta="http://kuicho.com/archivos-lugares/";
}
if($promo=="promo6"){
    $uploaddir = '/home/campitoskuicho/public_html/archivos-fiestas/';
      $ruta="http://kuicho.com/archivos-fiestas/";
}
if($promo=="promo7"){
    $uploaddir = '/home/campitoskuicho/public_html/archivos-fiestas/';
      $ruta="http://kuicho.com/archivos-promociones/";
}
if($promo=="promo8"){
    $uploaddir = '/home/campitoskuicho/public_html/archivos-fiestas/';
      $ruta="http://kuicho.com/archivos-paquetes/";
}


$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
// El siguiente es solo para json
$ruta=$ruta.basename($_FILES['userfile']['name']);


$posicion=str_replace('(','',$posicion);
$posicion=$posicion=str_replace(')','',$posicion);

$archivaldo="archivalo:".basename($_FILES['userfile']['name']);


   $tipo=$_POST["puto"];
$respuesta="inicio";
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    $respuesta= "El archivo ha sido guardado con exito.\n";
} else {
    $respuesta= "Posble ataque".$uploadfile;
}
//ESTABLECEMOS LA CONEXION
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
     mysqli_query($con,"INSERT INTO informacion (promocion,mensaje, direccion,imagen,posicion,telefono,precios)"
             ." VALUES ('$promo', '$mensaje','$titulo','$ruta','$posicion','$telefono','$precios')");
  }
echo 'registro insertado correctamente'.'<br>';
// echo 'Se hizo la insercion'.'<br>';

$fecha=date("F j, Y, g:i a");  


echo "El archivo a subir es:".$archivaldo." y la latitud longitud es:".$posicion." Seleccionaste un:".$promo. " la fecha es:".$fecha;
?>
    </center>
    <br>
    <div class="container">
            
            <center>  <a href="administracion-catalogos.html"  class="btn btn-lg btn-success" style="color: #ffffff;" >Regresar a administración</a></center>
        </div>
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
</body>
</html>