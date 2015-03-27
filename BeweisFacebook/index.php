<?php
	require_once("src/facebook.php");

	$config = array();
	$config["appId"] = '459921734160848';
	$config["secret"] = '8fbc1660fd571796bfa150d472170e1a';
	$config["fileUpload"] = false;

	$facebook = new Facebook($config);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Log in</title>
</head>
<body>
	<center>
		<h2>¡Bienvenido!</h2>
		<br><br><br><br>
		<table>
		  <tr>
		    <th><a href="<?php echo $facebook->getLoginUrl(); ?>"><img src="Images/Facebook_logo.png" alt="Facebook" height="100" width="100"></a></th>
		    <th><img src="Images/Twitter_logo.png" alt="Twitter" height="100" width="100"></th>
		  </tr>
		</table>
	</center>
</body>
</html>