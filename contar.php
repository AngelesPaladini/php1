<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$aProductos=array("Lavadora Multifunción","Iphones XR","Afeitadora 2000","Teclado Inteligente","Netbook Hp");
$aPacientes=array("Lucia Pilco","Pablo Flores","María Lopez","Franco Perez");
$aNotas=array(9,8,9.50,4,7,8);

function contar($aArray){
    $cont= 0;
     foreach($aArray as $item){
         $cont++;
    }
    return $cont;
}

echo "cantidad de productos " . contar($aProductos) . "<br>";
echo "cantidad de pacientes " . contar($aPacientes) . "<br>";
echo "cantidad de notas " . contar($aNotas);






?>