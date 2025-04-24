<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encuesta sin bordes</title>
    <link href="estilo.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff0f5;
            font-family: Arial, sans-serif;
        }

        table {
            width: 700px;
            margin: 50px auto;
            border-collapse: collapse;
        }

        td {
            border: none;
            padding: 10px 5px;
        }

        input[type="text"], input[type="submit"] {
            border: none;
            border-radius: 0;
            padding: 8px;
            font-size: 16px;
            width: 100%;
            background-color: #ffffff;
            box-shadow: none;
        }

        input[type="submit"] {
            cursor: pointer;
            background-color: #ff69b4;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #ff1493;
        }

        footer {
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>

<header>
    <?php include 'encabezado.php'; ?>
</header>

<section>
    <form method="POST" action="pregunta1.php">
        <table>
            <tr>
                <td><label for="nombres">Nombres y apellidos</label></td>
                <td><input type="text" id="nombres" name="txtNombres" required /></td>
            </tr>
            <tr>
                <td><label for="dni">Número DNI</label></td>
                <td><input type="text" id="dni" name="txtDNI" maxlength="8" required /></td>
            </tr>
            <tr>
                <td>Empezar con la encuesta &gt;&gt;&gt;</td>
                <td><input type="submit" value="Encuesta" /></td>
            </tr>
        </table>
    </form>
</section>

<footer>
    <p>Todos los derechos reservados YajairayLaisha@2025</p>
</footer>

</body>
</html>

