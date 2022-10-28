
<?php //Programa de tabla de multiplicar 1 al 6 1ra forma
for ($tabla=1; $tabla <=6 ; $tabla++){
for ($x=1; $x <=6;$x++){
	echo '[ '.$tabla.' * '.$x.' = '.$tabla*$x.' ] ';
}
echo nl2br("\r\n");
} 
?>

<?php //Programa de tabla de multiplicar 1 al 6 2da forma
for($x=1;$x<7;$x++){
    for($y=1;$y<7;$y++){    
echo strval($x*$y) . " ";
    }
    echo nl2br("\r\n");
}
?>
