<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descripcion = trim($_POST["txtDescripcion"] ?? '');
    $stock = trim($_POST["txtStock"] ?? '');
    $precio = trim($_POST["txtPrecio"] ?? '');

    // Validaciones básicas
    if ($descripcion !== '' && is_numeric($stock) && is_numeric($precio)) {
        $linea = $descripcion . "|" . $stock . "|" . $precio . "\n";
        $archivo = fopen("productos.txt", "a");

        if ($archivo) {
            fwrite($archivo, $linea);
            fclose($archivo);

            // Redirigir al listado
            header("Location: listadoProductos.php");
            exit();
        } else {
            echo "<p>No se pudo abrir el archivo para guardar los datos.</p>";
        }
    } else {
        echo "<p>⚠️ Por favor, completa todos los campos correctamente.</p>";
        echo "<a href='index.php'>⬅️ Volver al formulario</a>";
    }
} else {
    echo "<p>Acceso no válido.</p>";
}
?>
