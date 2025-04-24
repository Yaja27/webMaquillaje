<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CONTROL DE CLIENTES</title>
    <style>
        body {
            background-color: #fff0f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #ffc0cb;
            padding: 20px;
            text-align: center;
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        #centrado {
            text-align: center;
            margin-top: 10px;
            font-size: 18px;
            color: #8b008b;
        }

        section {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        table {
            background-color: #fff;
            border: 2px solidrgb(240, 186, 205);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 15px rgba(220, 115, 160, 0.2);
        }

        table td {
            padding: 10px;
            vertical-align: middle;
            font-size: 16px;
        }

        table img {
            border-radius: 10px;
        }

        table a {
            color: #d87093;
            text-decoration: none;
            font-weight: bold;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>
<header>
    <?php require 'encabezado.php'; ?>
    <p id="centrado">
        Bienvenido > <?php echo $_SESSION['admin']; ?><br>
        | <a href="cerrar.php" style="color:white;">Cerrar Sesión</a> |
    </p>
</header>

<section>
    <table border="0" width="550" cellspacing="10">
        <tr>
            <td><a href="#"><img src="registroClientes.jpg" width="60" height="60" alt="Registro" /></a></td>
            <td><a href="#">Registro de clientes</a></td>
        </tr>
        <tr>
            <td><a href="#"><img src="ElistadoClientes.jpg" width="60" height="60" alt="Listado" /></a></td>
            <td><a href="#">Listado de Clientes</a></td>
        </tr>
        <tr>
            <td><a href="javascript:close()"><img src="Salir.png" width="60" height="60" alt="Salir" /></a></td>
            <td><a href="javascript:close()">Salir</a></td>
        </tr>
    </table>
</section>

<footer>
    <?php require 'pie.php'; ?>
</footer>
</body>
</html>
