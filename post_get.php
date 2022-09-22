<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
include('conexion.php');
conectar();
//error_reporting(E_ALL); 
//ini_set('display_errors', '0');
$sql=mysqli_query($con, "select *from usuarios"); 
    if(mysqli_num_rows($sql)!=0) 
    { 
     ?> 
     <table border="1" width="100%"> 
      <tr> 
       <td>ID</td> 
       <td>USUARIO</td> 
       <td>CLAVE</td> 
      </tr> 
      <?php 
         while($r=mysqli_fetch_array($sql)) 
         { 
          ?> 
          <tr> 
           <td><?php echo $r['id'];?></td> 
           <td><?php echo $r['usuario'];?></td> 
           <td><?php echo $r['clave'];?></td> 
          </tr> 
          <?php 
          //echo $r['id'].' - '.$r['usuario'].' - '.$r['clave']."<hr>";  
         } 
         ?> 
        </table> 
        <?php 
    } 
    else 
    { 
     echo "<h1>SIN DATOS</h1>"; 
    }

if($_GET['accion']=="alta") 
{ 
 //nuevo registro 
 echo "<h1>INSERTO REGISTRO: ".$_POST['nombre']."</h1>"; 
} 
 
if($_GET['accion']=="modificar") 
{ 
 //nuevo registro 
 echo "<h1>MODIFICO EL REGISTRO: ".$_POST['nombre']." CON EL ID: ".$_POST['id']."</h1>"; 
} 
 
if($_GET['accion']=="eliminar") 
{ 
 //nuevo registro 
 echo "<h1>ELIMINO EL REGISTRO: ".$_GET['id']."</h1>"; 
} 
?> 
<!DOCTYPE html> 
<html> 
<head> 
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 <title>POST y GET</title> 
</head> 
<body> 
<form method="POST" action="post_get.php?accion=alta"> 
 <input type="text" name="nombre" id="nombre"> 
 <input type="submit" value="guardar"> 
</form> 
 
<form method="POST" action="post_get.php?accion=modificar"> 
 <input type="text" name="nombre" id="nombre" value="Christian"> 
 <input type="hidden" name="id" id="id" value="10"> 
 <input type="submit" value="modificar"> 
</form> 
 
<form method="POST" action="post_get.php?accion=eliminar&id=5"> 
 <input type="submit" value="eliminar"> 
</form> </body>
</html>