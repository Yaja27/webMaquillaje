<?php
session_start();
error_reporting(0);

// Mismos productos (puedes incluirlos desde un archivo común si prefieres)
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

if (isset($_POST['finalizar'])) {
    $total = $_POST['total'];
    $pago = $_POST['pago'];
    $cambio = $pago - $total;

    if ($pago >= $total) {
        $_SESSION['mensaje'] = "Compra realizada con éxito. Cambio: $" . number_format($cambio, 2);
        $_SESSION['carrito'] = [];
    } else {
        $_SESSION['error'] = "El pago es insuficiente.";
    }
    header("Location: resumen.php");
    exit;
}

if (isset($_GET['accion']) && $_GET['accion'] == "limpiar") {
    session_unset();
    header("Location: resumen.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen de Compra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fffafc;
            padding: 30px;
        }
        .btn-comprar {
            background-color: #d81b60;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .btn-comprar:hover {
            background-color: #c2185b;
        }
        .detalle {
            background-color: #fff0f5;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            width: 90%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: center;
        }
        input[type="number"] {
            padding: 6px;
            width: 120px;
        }
    </style>
</head>
<body>

<h2 style="text-align:center; color:#d81b60;">🛍️ Resumen de tu Compra</h2>

<?php if (!empty($_SESSION['carrito'])): ?>
    <?php $total = 0; ?>
    <div class="detalle">
        <form method="POST">
            <table>
                <tr style="background-color: #f8bbd0;">
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
                <?php foreach ($_SESSION['carrito'] as $archivo => $cantidad):
                    $nombre = $productos[$archivo]['nombre'];
                    $precio = $productos[$archivo]['precio'];
                    $subtotal = $cantidad * $precio;
                    $total += $subtotal;
                ?>
                <tr>
                    <td><?= $nombre ?></td>
                    <td>$<?= number_format($precio, 2) ?></td>
                    <td><?= $cantidad ?></td>
                    <td>$<?= number_format($subtotal, 2) ?></td>
                </tr>
                <?php endforeach; ?>
                <tr style="font-weight:bold;">
                    <td colspan="3">TOTAL</td>
                    <td>$<?= number_format($total, 2) ?></td>
                </tr>
            </table>
            <br>

            <label><strong>Monto recibido:</strong></label><br>
            <input type="number" name="pago" min="0" step="0.01" required>
            <input type="hidden" name="total" value="<?= $total ?>">

            <br><br>
            <div style="text-align:center;">
                <input type="submit" name="finalizar" value="✅ Finalizar Compra" class="btn-comprar">
                <a href="index.php" class="btn-comprar" style="background-color:#4caf50;">🛍️ Seguir comprando</a>
                <a href="?accion=limpiar" class="btn-comprar" style="background-color:#f44336;">🧹 Limpiar carrito</a>
            </div>
        </form>
        <br>

        <?php
        if (isset($_SESSION['mensaje'])) {
            echo "<p style='color:green; text-align:center; font-weight:bold;'>{$_SESSION['mensaje']}</p>";
            unset($_SESSION['mensaje']);
        }
        if (isset($_SESSION['error'])) {
            echo "<p style='color:red; text-align:center; font-weight:bold;'>{$_SESSION['error']}</p>";
            unset($_SESSION['error']);
        }
        ?>
    </div>
<?php else: ?>
    <p style="text-align:center; color:gray;">No hay productos en el carrito.</p>
    <div style="text-align:center;">
        <a href="index.php" class="btn-comprar" style="background-color:#4caf50;">🛍️ Ir a Comprar</a>
    </div>
<?php endif; ?>

</body>
</html>
