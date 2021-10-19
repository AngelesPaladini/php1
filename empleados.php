<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEmpleados = array();
$aEmpleados[] = array(
    "dni" => "33300123",
    "nombre" => "David Garcia",
    "bruto" => "85000.30",
);
$aEmpleados[] = array(
    "dni" => "40874456",
    "nombre" => "Ana Del Valle",
    "bruto" => "90000",
);
$aEmpleados[] = array(
    "dni" => "67567565",
    "nombre" => "Andres Perez",
    "bruto" => "100000",
);
$aEmpleados[] = array(
    "dni" => "75744545",
    "nombre" => "Victoria Luz",
    "bruto" => "70000",
);
function calcularNeto($bruto)
{
    $neto = $bruto - ($bruto * 0.17);
    return $neto;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Lista de precios</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>DNI</th>
                        <th>NOMBRE</th>
                        <th>SUELDO</th>
                    </tr>

                    <?php

                    foreach ($aEmpleados as $empleado) {
                        echo "<tr><td>" . $empleado["dni"] . "</td>";
                        echo "<td>" . strtoupper($empleado["nombre"]) . "</td>";
                        echo "<td>" . number_format(calcularNeto($empleado["bruto"]), 2, ",", ".") . "</td></tr>";
                    }
                    ?>
                </table>
                <div class="row">
                    <div class="col">
                        <h5>Cantidad de empleados activos: <?php echo count($aEmpleados); ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>