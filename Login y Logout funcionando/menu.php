<html>
<head>
<title>Menu de Sitios</title>
</head>
<body>
<?php
session_start();
include('../hybridauth/config.php');
include('../hybridauth/hybridauth/Hybrid/Auth.php');

if(isset($_SESSION['estado']))   {
	echo "<center>"; 
	echo '<p>Menu de Sitios</p>';

	echo "<br></br>";
	echo "<a href='/sitios/drupal1.php' target='_blank'><img src='/imagenes/1.gif' alt='Link a Drupal1' /></a>";
	echo "<a href='/sitios/drupal2.php' target='_blank'><img src='/imagenes/2.gif' alt='LInk a Drupal2' /></a>";

	echo "<br></br>";
	echo "<a href='/sitios/drupal3.php' target='_blank'><img src='/imagenes/3.gif' alt='Link a Drupal3' /></a>";
	echo "<a href='/sitios/drupal4.php' target='_blank'><img src='/imagenes/4.gif' alt='Link a Drupal4' /></a>";
	echo "</center>";
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