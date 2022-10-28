<?php //Programa de tabla de multiplicar 1 al 6
for ($tabla=1; $tabla <=6 ; $tabla++){
for ($x=1; $x <=6;$x++){
	echo '[ '.$tabla.' * '.$x.' = '.$tabla*$x.' ] ';
}
echo nl2br("\r\n");
} 
?>
