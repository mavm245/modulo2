 <?php
header("Content-type: text/html; charset=utf-8");

class Conectar
{
public function method_post()
    {
	$respuesta = shell_exec('perl pet.cgi');
	return $respuesta;
    }
  }
?>
