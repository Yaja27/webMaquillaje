<?php
function getDescripcion() {
    return isset($_POST['txtDescripcion']) ? $_POST['txtDescripcion'] : '';
}

function getStock() {
    return isset($_POST['txtStock']) ? $_POST['txtStock'] : '';
}

function getPrecio() {
    return isset($_POST['txtPrecio']) ? $_POST['txtPrecio'] : '';
}
?>

