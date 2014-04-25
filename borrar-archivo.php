<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$ruta='http://kuicho.com/archivos-hoteles/hotel-granada.jpg';
   $partida = explode('http://kuicho.com', $ruta);
  $archivo= $partida[1];
  $archivo='/home/campitoskuicho/public_html'.$archivo;
  unlink($archivo);
  echo $archivo;