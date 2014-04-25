<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="imagenes-javier/estilos-kuicho.css">
        <title>hola</title>
    </head>
    <body>
        <?php
         echo '<p>Hola mundo</p>';
         $nombre=$_GET['nombre'];
         $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
        $fp = fopen("$DOCUMENT_ROOT/ordenes.txt", "w");
        $fuera='hola mundo, eres muy chistoso';
        fwrite($fp, $fuera);
        fclose($fp);
        echo  $nombre.' , seas bienvenido<br />';
        ?>
        <a href="" class="btn btn-primary" >Este es un boton</a>
    </body>
</html>
