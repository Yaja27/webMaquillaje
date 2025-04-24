<?php
session_start();

if ($_POST['txtUsuario'] == 'Yajaira' && $_POST['txtClave'] == 'Aguirrey271') {
    $_SESSION['admin'] = $_POST['txtUsuario'];
} else {
    $_SESSION['error'] = 'Usuario o contraseña incorrectos';
}

header('location:index.php');
?>
