
<?php 
$stock = 800;
if($stock > 0) {
    echo "hay stock";
} else {
    echo "no hay stock";
}

$valor = rand(1, 5);

if ( $valor == 1 || $valor == 3 || $valor = 5 ) {
    echo "El numero  $valor  es impar";
} else {
    echo "El numero  $valor  es par";
}
?>