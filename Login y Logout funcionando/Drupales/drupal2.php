<html>
<head>
<title>varteaga</title>
</head>
<body>
<?php
session_start();
include('../hybridauth/config.php');
include('../hybridauth/hybridauth/Hybrid/Auth.php');

if(isset($_SESSION['estado']))   {
    $postdata = http_build_query(
     array(
         'index' => '2'
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
    echo "You're not authorised to enter this page. Please provide your right credentials. You will be redirected to Log-in pagw in three seconds";
    sleep(3);
    header("Location: http://45.55.135.209/");
}
?>
<br><br><center>
<a href="../hybridauth/logout.php"><img src='../hybridauth/logout.png' alt="Log out" height="80" width="80"></img></a>
<br><br></center>
</body>
</html>