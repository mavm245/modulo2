<html>
 <head>
  <title>Drupal 1</title>
 </head>
 <body>
 <?php 
 require_once("conectar.php");
  $obj=new conectar;
  $salida= $obj->method_post();


 require_once("parsear.php");
   $con=new parsear;
   $con->par($salida);


?>
 </body>
</html>
