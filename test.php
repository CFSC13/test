<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test de PHP</title>
</head>
<body>
	<p>Holas</p>
	<h1>
	<?php
	$suma=10;
	$saldo=1;
		if($suma>1 || $saldo==0)
		{
			echo "mayor";
		}
		else{
			if($suma==1)
				echo "igual";
			else
				echo "menor";
		}
	?>
   <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test de PHP</title>
</head>
<body>
	<p>Holas</p>
	<h1>
	<?php
	$suma=10;
	$saldo=1;
		if($suma>1 || $saldo==0)
		{
			echo "mayor";
		}
		else{
			if($suma==1)
				echo "igual";
			else
				echo "menor";
		}
	?>
	</h1>
</body>
</html>


Agustin Encina6:50 PM
-----------------
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test de PHP</title>
</head>
<body>
	<?php
	$sw=1;
	$tabla=7;
	while($sw<=10) 
	{
		echo "<p>".$tabla." x ".$sw."= <b>".$tabla*$sw."</b></p>";
		$sw++;
	}
	echo "<hr>";
	?>
</body>
</html>
	</h1>
</body>
</html>


------------------------------------------------
<!DOCTYPE html> 
<html> 
<head> 
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 <title>Test de PHP</title> 
</head> 
<body> 
 <?php 
 $sw=1; 
 $tabla=7; 
 while($sw<=10)  
 { 
  echo "<p>".$tabla." x ".$sw."= <b>".$tabla*$sw."</b></p>"; 
  ?> 
   
  <p><?php echo $tabla;?> x <?php echo $sw;?> = <b><?php echo $tabla*$sw;?></b></p> 
 
  <?php 
  $sw++; 
 } 
 echo "<hr>"; 
 ?> 
</body> 
</html>

----------------------------------------------------------------
<!DOCTYPE html> 
<html> 
<head> 
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 <title>Test de PHP</title> 
</head> 
<body> 
 <?php 
 $sw=1; 
 $tabla=7; 
 while($sw<=10)  
 { 
  echo "<p>".$tabla." x ".$sw."= <b>".$tabla*$sw."</b></p>"; 
  $sw++; 
 } 
 echo "<hr>"; 
 for($i=1;$i<=10;$i++) 
 { 
  echo "<p>".$tabla." x ".$i."= <b>".$tabla*$i."</b></p>"; 
 } 
  
 ?> 
</body> 
</html>
----------------------------------------------------------------
<!DOCTYPE html> 
<html> 
<head> 
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 <title>Test de PHP</title> 
</head> 
<body> 
 <?php 
 /* 
 //ejemplo de while 
 $sw=1; 
 $tabla=7; 
 while($sw<=10)  
 { 
  echo "<p>".$tabla." x ".$sw."= <b>".$tabla*$sw."</b></p>"; 
  $sw++; 
 } 
 echo "<hr>"; 
 
 //ejemplo de for 
 for($i=1;$i<=10;$i++) 
 { 
  echo "<p>".$tabla." x ".$i."= <b>".$tabla*$i."</b></p>"; 
 } 
 */ 
 //ejemplo de anidar while y for 
 for($i=1;$i<=10;$i++) 
 { 
  //echo "<p>".$tabla." x ".$i."= <b>".$tabla*$i."</b></p>"; 
  $sw=1; 
  $tabla=$i; 
  while($sw<=10)  
  { 
   echo "<p>".$tabla." x ".$sw."= <b>".$tabla*$sw."</b></p>"; 
   $sw++; 
  } 
  echo "<hr>"; 
 } 
 ?> 
</body> 
</html>

----------------------------------------------------------------

<!DOCTYPE html> 
<html> 
<head> 
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 <title>Test de PHP</title> 
</head> 
<body> 
 <?php 
 /* 
 //ejemplo de while 
 $sw=1; 
 $tabla=7; 
 while($sw<=10)  
 { 
  echo "<p>".$tabla." x ".$sw."= <b>".$tabla*$sw."</b></p>"; 
  $sw++; 
 } 
 echo "<hr>"; 
 
 //ejemplo de for 
 for($i=1;$i<=10;$i++) 
 { 
  echo "<p>".$tabla." x ".$i."= <b>".$tabla*$i."</b></p>"; 
 } 
 */ 
 //ejemplo de anidar while y for 
 /* 
 for($i=1;$i<=10;$i++) 
 { 
  //echo "<p>".$tabla." x ".$i."= <b>".$tabla*$i."</b></p>"; 
  $sw=1; 
  $tabla=$i; 
  while($sw<=10)  
  { 
   echo "<p>".$tabla." x ".$sw."= <b>".$tabla*$sw."</b></p>"; 
   $sw++; 
  } 
  echo "<hr>"; 
 } 
 */ 
 ?> 
 <table border="1" width="100%"> 
  <tr> 
   <td>Tabla</td> 
   <td>Incremento</td> 
   <td>Total</td> 
  </tr> 
  <?php 
   $tabla=6; 
   for($i=1;$i<=10;$i++) 
   { 
    ?> 
    <tr> 
     <td><?php echo $tabla;?></td> 
     <td><?php echo $i;?></td> 
     <td><?php echo $tabla*$i;?></td> 
    </tr> 
    <?php 
   } 
  ?> 
 </table> 
 ----------------------------------------------------------------

 <!DOCTYPE html> 
<html> 
<head> 
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 <title>Test de PHP</title> 
</head> 
<body> 
 <?php 
 /* 
 //ejemplo de while 
 $sw=1; 
 $tabla=7; 
 while($sw<=10)  
 { 
  echo "<p>".$tabla." x ".$sw."= <b>".$tabla*$sw."</b></p>"; 
  $sw++; 
 } 
 echo "<hr>"; 
 
 //ejemplo de for 
 for($i=1;$i<=10;$i++) 
 { 
  echo "<p>".$tabla." x ".$i."= <b>".$tabla*$i."</b></p>"; 
 } 
 */ 
 //ejemplo de anidar while y for 
 /* 
 for($i=1;$i<=10;$i++) 
 { 
  //echo "<p>".$tabla." x ".$i."= <b>".$tabla*$i."</b></p>"; 
  $sw=1; 
  $tabla=$i; 
  while($sw<=10)  
  { 
   echo "<p>".$tabla." x ".$sw."= <b>".$tabla*$sw."</b></p>"; 
   $sw++; 
  } 
  echo "<hr>"; 
 } 
 */ 
 ?> 
 <table border="1" width="100%"> 
  <tr> 
   <td>Tabla</td> 
   <td>Incremento</td> 
   <td>Total</td> 
  </tr> 
  <?php 
   $tabla=6; 
   for($i=1;$i<=10;$i++) 
   { 
    ?> 
    <tr> 
     <td><?php echo $tabla;?></td> 
     <td><?php echo $i;?></td> 
     <td><?php echo $tabla*$i;?></td> 
    </tr> 
    <?php 
   } 
  ?> 
 </table> 
</body> 
</html>
----------------------------------------------------------------
<!DOCTYPE html> 
<html> 
<head> 
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 <title>Test de PHP</title> 
</head> 
<body> 
 <?php 
 /* 
 //ejemplo de while 
 $sw=1; 
 $tabla=7; 
 while($sw<=10)  
 { 
  echo "<p>".$tabla." x ".$sw."= <b>".$tabla*$sw."</b></p>"; 
  $sw++; 
 } 
 echo "<hr>"; 
 
 //ejemplo de for 
 for($i=1;$i<=10;$i++) 
 { 
  echo "<p>".$tabla." x ".$i."= <b>".$tabla*$i."</b></p>"; 
 } 
 */ 
 //ejemplo de anidar while y for 
 /* 
 for($i=1;$i<=10;$i++) 
 { 
  //echo "<p>".$tabla." x ".$i."= <b>".$tabla*$i."</b></p>"; 
  $sw=1; 
  $tabla=$i; 
  while($sw<=10)  
  { 
   echo "<p>".$tabla." x ".$sw."= <b>".$tabla*$sw."</b></p>"; 
   $sw++; 
  } 
  echo "<hr>"; 
 } 
 */ 
 ?> 
 <table border="1" width="100%"> 
  <tr> 
   <td>Tabla</td> 
   <td>Incremento</td> 
   <td>Total</td> 
  </tr> 
  <?php 
   $tabla=6; 
   for($i=1;$i<=10;$i++) 
   { 
    ?> 
    <tr> 
     <td><?php echo $tabla;?></td> 
     <td><?php echo $i;?></td> 
     <td><?php echo $tabla*$i;?></td> 
    </tr> 
    <?php 
   } 
  ?> 
 </table> 
</body> 
</html>
</body> 
</html>

----------------------------------------------------------------

<!DOCTYPE html> 
<html> 
<head> 
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 <title>Test de PHP</title> 
</head> 
<body> 
 <?php 
 /* 
 //ejemplo de while 
 $sw=1; 
 $tabla=7; 
 while($sw<=10)  
 { 
  echo "<p>".$tabla." x ".$sw."= <b>".$tabla*$sw."</b></p>"; 
  $sw++; 
 } 
 echo "<hr>"; 
 
 //ejemplo de for 
 for($i=1;$i<=10;$i++) 
 { 
  echo "<p>".$tabla." x ".$i."= <b>".$tabla*$i."</b></p>"; 
 } 
 */ 
 //ejemplo de anidar while y for 
 /* 
 for($i=1;$i<=10;$i++) 
 { 
  //echo "<p>".$tabla." x ".$i."= <b>".$tabla*$i."</b></p>"; 
  $sw=1; 
  $tabla=$i; 
  while($sw<=10)  
  { 
   echo "<p>".$tabla." x ".$sw."= <b>".$tabla*$sw."</b></p>"; 
   $sw++; 
  } 
  echo "<hr>"; 
 } 
 */ 
 ?> 
 <!-- 
 <table border="1" width="100%"> 
  <tr> 
   <td>Tabla</td> 
   <td>Incremento</td> 
   <td>Total</td> 
  </tr> 
  <?php 
   $tabla=6; 
   for($i=1;$i<=10;$i++) 
   { 
    ?> 
    <tr> 
     <td><?php echo $tabla;?></td> 
     <td><?php echo $i;?></td> 
     <td><?php echo $tabla*$i;?></td> 
    </tr> 
    <?php 
   } 
  ?> 
 </table> 
 --> 
 <a href="index.php?seccion=empresas&usuario=test&valor=100">Empresas</a> 
 <!--  
 <a href="index.php?seccion=cv">CV</a> 
 <a href="index.php?seccion=contactos">Contactos</a>--> 
  
 <form method="get" action="index.php"> 
  <input type="text" name="seccion"> 
  <input type="text" name="usuario"> 
  <input type="number" name="valor"> 
  <input type="submit" name="" value="Enviar"> 
 </form> 
 <hr> 
 <?php 
 if(!empty($_GET['seccion'])) 
 { 
  echo "cargo el modulo de ".$_GET['seccion']; 
 
  if($_GET['usuario']=="test") 
   echo "<h1>Hola test!!!!</h1>"; 
 
  echo ""; 
  echo "valor: ".$_GET['valor']; 
 } 
 else 
  echo "me quedo en el home"; 
 ?> 

 //por post
 <?php 
 if(!empty($_GET['seccion'])) 
 { 
  echo "cargo el modulo de ".$_GET['seccion']; 
 
  if($_GET['usuario']=="test") 
   echo "<h1>Hola test!!!!</h1>"; 
 
  echo ""; 
  echo "valor: ".$_GET['valor']; 
 } 
 else 
  echo "me quedo en el home"; 
 ?> 

 
</body> 
</html>