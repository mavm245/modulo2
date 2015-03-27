<html>
<head>
<title>gcorrea</title>
</head>
<body>
<?php
session_start();
include('../hybridauth/config.php');
include('../hybridauth/hybridauth/Hybrid/Auth.php');

if(isset($_SESSION['estado']))   {
  $postdata = http_build_query(
      array(
          'index' => '3'
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

  $result = file_get_contents('http://45.55.135.209/sitios/pet.pl', false, $context);
  #echo "$result";

  require_once("parsear.php");
  $con=new parsear;
  $con->par($result);
}
else {
  echo "You're not authorised to enter this page. Please provide your right credentials. You will be redirected to Log-in page in three seconds";
  sleep(3);
  header("Location: http://45.55.135.209/");
}
?>
</body>
</html>