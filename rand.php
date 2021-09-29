<?php
$valor = rand(1,5);
echo "$valor<br>"; #br salto de linea
if($valor == 1 || $valor == 3) {
    echo "El número $valor es impar";
} else if($valor == 5) {
    echo "El número $valor es impar";
} else{
    echo "El número $valor es par";
}



?>