<?php
session_start();

if (isset($_POST['btnBoton1'])) $_SESSION['candidata1'] = ($_SESSION['candidata1'] ?? 0) + 1;
if (isset($_POST['btnBoton2'])) $_SESSION['candidata2'] = ($_SESSION['candidata2'] ?? 0) + 1;
if (isset($_POST['btnBoton3'])) $_SESSION['candidata3'] = ($_SESSION['candidata3'] ?? 0) + 1;
if (isset($_POST['btnBoton4'])) $_SESSION['candidata4'] = ($_SESSION['candidata4'] ?? 0) + 1;

$_SESSION['total'] = ($_SESSION['candidata1'] ?? 0) + ($_SESSION['candidata2'] ?? 0) + 
                      ($_SESSION['candidata3'] ?? 0) + ($_SESSION['candidata4'] ?? 0);

header('Location: index.php');
exit;
?>
