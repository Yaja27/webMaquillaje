<?php
session_start();
error_reporting(0);

// Productos disponibles
$productos = [
    'Base_Maquillaje.png' => ['nombre' => 'Base de Maquillaje', 'precio' => 150],
    'brochas.png' => ['nombre' => 'Brochas', 'precio' => 80],
    'Delinador_Ojos.png' => ['nombre' => 'Delineador de Ojos', 'precio' => 50],
    'Desmaquillante.jpg' => ['nombre' => 'Desmaquillante', 'precio' => 100],
    'Esponja.png' => ['nombre' => 'Esponja', 'precio' => 20],
    'Fijador.png' => ['nombre' => 'Fijador', 'precio' => 130],
    'Labial.png' => ['nombre' => 'Labial', 'precio' => 75],
    'Paleta.png' => ['nombre' => 'Paleta de Sombras', 'precio' => 160],
    'Paquete_Gloss.png' => ['nombre' => 'Paquete de Gloss', 'precio' => 95],
    'Rimer.png' => ['nombre' => 'Rímel', 'precio' => 60],
];

// Agregar productos al carrito
if (isset($_POST['agregar'])) {
    foreach ($_POST['cantidades'] as $archivo => $cantidad) {
        if ($cantidad > 0) {
            $_SESSION['carrito'][$archivo] = ($_SESSION['carrito'][$archivo] ?? 0) + $cantidad;
        }
    }
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda de Maquillaje Coreano</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #ffccf2, #add8e6); /* Fondo en rosa y azul */
            margin: 0;
            padding: 0;
        }
        header, footer {
            background-color: #fce4ec;
            padding: 15px;
        }
        .encabezado {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .encabezado img {
            width: 80px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }
        .encabezado-texto {
            text-align: center;
        }
        .encabezado-texto h3 {
            font-size: 26px;
            font-style: italic;
            color: #8b008b;
            margin: 0;
        }
        .encabezado-texto h2 {
            font-size: 30px;
            font-style: italic;
            color: #d81b60;
            margin: 5px 0 0 0;
        }
        .foto-producto {
            width: 150px;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        .btn-comprar {
            background-color: #d81b60;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .btn-comprar:hover {
            background-color: #c2185b;
        }
        .tabla-productos {
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(220, 115, 160, 0.2);
            width: 80%;
        }
        #centrado {
            text-align: center;
        }
    </style>
</head>
<body>

<header class="encabezado">
    <img src="fotosProductos/Maquillajecoreano2.jpg" alt="Logo">
    <div class="encabezado-texto">
        <h3>Tienda en Línea Maquillaje Coreano</h3>
        <h2>Maquíllate con amor, vive con estilo</h2>
    </div>
</header>

<section>
    <form method="POST">
        <table border="0" width="100%" cellspacing="10" cellpadding="1" class="tabla-productos">
            <?php
            $contador = 0;
            foreach ($productos as $archivo => $info) {
                if ($contador % 2 == 0) echo "<tr>";
                echo '<td id="centrado">';
                echo '<img src="fotosProductos/' . $archivo . '" class="foto-producto" alt="' . $info['nombre'] . '"/><br>';
                echo '<strong>' . $info['nombre'] . '</strong><br>';
                echo 'Precio: $' . $info['precio'] . '<br>';
                echo 'Cantidad: <input type="number" name="cantidades[' . $archivo . ']" min="0" value="0"><br><br>';
                echo '</td>';
                if ($contador % 2 == 1) echo "</tr>";
                $contador++;
            }
            ?>
        </table>
        <div style="text-align:center;">
            <input type="submit" name="agregar" value="Agregar al carrito" class="btn-comprar">
        </div>
    </form>

    <div style="text-align:center; margin:20px;">
        <a href="resumen.php" class="btn-comprar" style="background-color:#4caf50;">🛒 Ver Resumen de Compra</a>
    </div>
</section>

<footer>
    <h5 id="centrado">Todos los derechos reservados ©2025. Yajaira</h5>
</footer>

</body>
</html>
