<?php
//Fx - includes - conexión BD 
 //Fx 
 //definir una Fx 

 
 function suma($valor_uno,$valor_dos) 
 { 
  return $valor_uno+$valor_dos; 
 } 
 function mayor($uno, $dos) 
 { 
  if($uno>$dos) 
   echo $uno." es mayor que ".$dos; 
  else 
   echo $dos." es mayor que ".$uno; 
 
  echo "<p>La suma de los valores es de: ".suma($uno,$dos)."</p>"; 
 } 

 function nombre($nombre){
    echo "<h1> Hola ".$nombre."</h1>";
 }

 ?>