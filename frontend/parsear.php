<?php
header("Content-type: text/html; charset=utf-8");

class Parsear
{
public function par($parser)
    {

$phpArray =  new RecursiveIteratorIterator(
new RecursiveArrayIterator(json_decode($parser, TRUE)),
RecursiveIteratorIterator::SELF_FIRST);


 foreach ($phpArray as $key => $val) {
         if(is_array($val)) {
 
          if(is_numeric($key)) {
        echo "<br>";
     } else {
         echo "<h1>$key</h1>";
         echo "<br>";
         }
         }
         else{
 
                 if($key == "titulo"){
                  #echo " $val";
                  echo "<h2>$val</h2>";
                  }
 
                 if($key == "imagen"){
                 #echo " $val";
                 echo "<a href= '$val'><img src='$val' alt='Imagen' /></a>";
                 echo "<br>";
                 }
 
                 if($key == "categoria"){
                      echo "$key: $val";
                     echo "<br>";
                      }
 
		 if($key == "comentarios"){
                   echo "$key: $val";
                   echo "<br>";
                    }
                  if($key == "cuerpo"){
                    echo "$key: $val";
                    echo "<br>";
                     }
                  if($key == "fecha"){
                  echo "$key: $val";
                    echo "<br>";
                     }


                  #echo "<br>";
                   }

    }
  }
}
?>
