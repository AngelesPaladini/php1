<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50
);
$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79
);
$aPacientes[] = array(
    "dni" => "24.789.897",
    "nombre" => "Lucia Gonzales",
    "edad" => 30,
    "peso" => 59
);
$aPacientes[] = array(
    "dni" => "44.378.711",
    "nombre" => "Pablo Lopez",
    "edad" => 27,
    "peso" => 80
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-left">Listado de Pacientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre y apellido</th>
                        <th>Edad</th>
                        <th>Peso</th>
                    </tr>
                    <?php
                    foreach ($aPacientes as $pos => $Paciente) {
                        echo "<tr>";
                        echo "<td>" . $Paciente["dni"] ."<br>" . "</td>";
                        echo "<td>" . $Paciente["nombre"] ."<br>" . "</td>";
                        echo "<td>" . $Paciente["edad"] ."<br>" . "</td>";
                        echo "<td>" . $Paciente["peso"] ."<br>" . "</td>";
                        echo "</tr>";

                    }

                    ?>
                </table>
            </div>
        </div>

    </main>
</body>

</html>