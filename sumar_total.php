<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000,
);
$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000,
);
$aProductos[] = array(
    "nombre" => "Aire Acondicionado Split Inverter frio/calor Surrey 2900/F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000,
);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Listado de productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Accion</th>
                    </tr>
                    <tr>
                        <td><?php echo $aProductos[0]["nombre"]; ?></td>
                        <td><?php echo $aProductos[0]["marca"]; ?></td>
                        <td><?php echo $aProductos[0]["modelo"]; ?></td>
                        <td><?php echo $aProductos[0]["stock"] == 0? "Sin stock" : ($aProductos[0]["stock"] > 0 && $aProductos[0]["stock"] <= 10? "Poco stock" : "Hay stock"); ?></td>
                        <td>$<?php echo $aProductos[0]["precio"]; ?></td>
                        <td><button class="btn btn-primary">Comprar</button></td>
                    </tr>
                    <tr>
                        <td><?php echo $aProductos[1]["nombre"]; ?></td>
                        <td><?php echo $aProductos[1]["marca"]; ?></td>
                        <td><?php echo $aProductos[1]["modelo"]; ?></td>
                        <td><?php echo $aProductos[1]["stock"] == 0? "Sin stock" : ($aProductos[1]["stock"] > 0 && $aProductos[1]["stock"] <= 10? "Poco stock" : "Hay stock"); ?></td>
                        <td>$<?php echo $aProductos[1]["precio"]; ?></td>
                        <td><button class="btn btn-primary">Comprar</button></td>
                    </tr>
                    <tr>
                        <td><?php echo $aProductos[2]["nombre"]; ?></td>
                        <td><?php echo $aProductos[2]["marca"]; ?></td>
                        <td><?php echo $aProductos[2]["modelo"]; ?></td>
                        <td><?php echo $aProductos[2]["stock"] == 0? "Sin stock" : ($aProductos[2]["stock"] > 0 && $aProductos[2]["stock"] <= 10? "Poco stock" : "Hay stock"); ?></td>
                        <td>$<?php echo $aProductos[2]["precio"]; ?></td>
                        <td><button class="btn btn-primary">Comprar</button></td>
                    </tr>

                </table>
            </div>
        </div>
    </main>
    
</body>
</html>