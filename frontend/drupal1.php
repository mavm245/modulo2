<html>
 <head>
  <title>Drupal 1</title>
 </head>
 <body>

 <?php 
$postdata = http_build_query(
    array(
        'index' => '1'
    )
);
$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);

$context = stream_context_create($opts);

$result = file_get_contents('http://localhost/sitios/pet.pl', false, $context);
#echo "$result";

 require_once("parsear.php");
   $con=new parsear;
   $con->par($result);
?>
 </body>
</html>
