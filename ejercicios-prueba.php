<?php
    $aArray=array();
    $aArray[0]=array("numero1"=>27);
    $aArray[1]=array("numero2"=>44);
    print_r($aArray);
    echo "<br/> el primer numero es: " . $aArray[0]["numero1"] . " Hola<br/>";
    echo "el primer numero es: " . $aArray[1]["numero2"] . " Hola<br/>";
    function sumar($pan,$queso){

        $resultado=$pan+$queso;
        return $resultado;
    }
    $resultado=sumar ($aArray[0]["numero1"],$aArray[1]["numero2"]);
    echo $resultado;
?>
<?php
$aEstadosdeldia=array("nublado","soleado","rojo");
$respuesta=$aEstadosdedia[2];
if ($respuesta=="nublado") {
    echo "pasea tu caniche";
}
elseif ($respuesta=="soleado") {
    echo "toma chocolate";
}
else 
    echo "no hagas nada";
?>