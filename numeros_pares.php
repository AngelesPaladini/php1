<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
for ($i = 1; $i <= 100; $i++){
    echo $i . "<br>";
}
for ($i = 2; $i <= 100; $i+=2){
    echo $i . "<br>";
}
for ($i = 2; $i <= 100; $i+=2) {
    if($i == 60){
        echo $i . "<br>";
        break;
    }
    echo$i . "<br>";

}
?>