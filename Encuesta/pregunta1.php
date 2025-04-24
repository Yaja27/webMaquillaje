<?php
session_start();

// Solo guardar si se recibió por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['nombres'] = $_POST['txtNombres'] ?? '';
    $_SESSION['dni'] = $_POST['txtDNI'] ?? '';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pregunta 1 - Maquillaje Coreano</title>
    <link href="estilo.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff0f5;
            font-family: Arial, sans-serif;
        }

        table {
            width: 700px;
            margin: 40px auto;
            border-collapse: collapse;
        }

        th {
            text-align: center;
            font-size: 20px;
            padding-bottom: 10px;
        }

        td {
            border: none;
            padding: 10px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            background-color: #ff69b4;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            margin-right: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ff1493;
        }

        footer p {
            text-align: center;
            font-size: 14px;
            color: #555;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <header>
        <?php include 'encabezado.php'; ?>
    </header>

    <section>
        <form method="POST" action="pregunta2.php">
            <table>
                <tr>
                    <th colspan="2">¿Has escuchado hablar del maquillaje coreano?</th>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="preg1" value="Sí" required /> Sí<br/>
                        <input type="radio" name="preg1" value="No" /> No<br/>
                        <input type="radio" name="preg1" value="Sólo lo he visto en redes" /> Sólo lo he visto en redes<br/>
                        <input type="radio" name="preg1" value="Doramas" /> Doramas
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="< Anterior" onclick="this.form.action='index.php'" />
                        <input type="submit" value="Siguiente >" />
                    </td>
                </tr>
            </table>
        </form>
    </section>

    <footer>
        <p>Todos los derechos reservados Yajaira@2025</p>
    </footer>
</body>
</html>
