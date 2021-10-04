<?php

$aClientes = array(
    array("dni" => "33300012", "nombre" => "Ana Valle"), //posicion 0
    array("dni" => "33300013", "nombre" => "Bernabe Flores"), //poscion 1
);

foreach ($aClientes as $pos => $cliente) {
    echo "El cliente $pos es ". $cliente["nombre"];
}
?>