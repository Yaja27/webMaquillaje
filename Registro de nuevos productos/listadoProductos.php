<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listado de Productos</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #e0f7fa;
            padding: 30px;
        }

        table {
            width: 90%;
            margin: auto;
            background-color: #fff;
            border-collapse: collapse;
            box-shadow: 0px 0px 15px rgba(255, 182, 193, 0.4);
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #f8bbd0;
            color: #880e4f;
        }

        td {
            background-color: #fff0f5;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            font-weight: bold;
            color: #d81b60;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h2 style="text-align:center; color:#d81b60;">📋 Listado de Productos</h2>

<?php
$archivo = "productos.txt";

if (file_exists($archivo)) {
    $productos = file($archivo, FILE_IGNORE_NEW_LINES);

    if (count($productos) > 0) {
        echo "<table>";
        echo "<tr><th>DESCRIPCIÓN DEL PRODUCTO</th><th>STOCK</th><th>PRECIO</th></tr>";

        foreach ($productos as $producto) {
            $datos = explode("|", $producto);
            $descripcion = $datos[0] ?? '';
            $stock = $datos[1] ?? '';
            $precio = $datos[2] ?? '';

            // Validamos si el precio es numérico antes de aplicar number_format
            $precioFormateado = is_numeric($precio) ? "$" . number_format((float)$precio, 2) : 'N/A';

            echo "<tr>";
            echo "<td>$descripcion</td>";
            echo "<td>$stock</td>";
            echo "<td>$precioFormateado</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p style='text-align:center;'>No hay productos registrados.</p>";
    }
} else {
    echo "<p style='text-align:center;'>El archivo de productos no existe.</p>";
}
?>

<a href="index.php">⬅️ Volver al registro</a>

</body>
</html>

