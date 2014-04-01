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
        <div class="container">
            
            <center>  <a href="administracion-catalogos.html"  class="btn btn-lg btn-success" style="color: #ffffff;" >Regresar a administración</a></center>
        </div>


        <br><br>

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


//subios el archivo
$uploaddir = '/home/campitoskuicho/public_html/archivos-hoteles/';
if($promo=="promo1"){
$uploaddir = '/home/campitoskuicho/public_html/archivos-hoteles/';
}
if($promo=="promo2"){
    $uploaddir = '/home/campitoskuicho/public_html/archivos-restaurantes/';
}
if($promo=="promo3"){
    $uploaddir = '/home/campitoskuicho/public_html/archivos-artesanias/';
}
if($promo=="promo4"){
    $uploaddir = '/home/campitoskuicho/public_html/archivos-temascales/';
}


$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

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

$fecha=date("F j, Y, g:i a");  


echo "El archivo a subir es:".$archivaldo." y la latitud longitud es:".$posicion." Seleccionaste un:".$promo. " la fecha es:".$fecha;
?>
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