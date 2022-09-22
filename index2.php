<?php
include('funciones.php');
include('menu.php');

 //llamada a una Fx 
 //suma(100,300); 
 
 echo "<hr> FUNCIONES <br>"; 
 mayor(3,5);
 nombre('Pepe');

 if(!empty($_GET['seccion'])) 
 { 
  echo "<hr>"; 
  echo "cargo el modulo de ".$_GET['seccion']; 
  //agrego el archivo solicitado 
  include($_GET['seccion'].".php"); 
 }

 echo phpinfo(); 

 ?>