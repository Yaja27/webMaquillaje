<?php
session_start();
$_SESSION['Pregunta9'] = $_POST['preg9'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pregunta 10</title>
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
    <form method="POST" action="resumen.php">
        <table>
            <tr>
                <th colspan="2">¿Qué tan fácil es para ti conseguir maquillaje coreano donde vives?</th>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="preg10" value="Muy fácil, lo venden en tiendas o en línea" required /> Muy fácil, lo venden en tiendas o en línea<br/>
                    <input type="radio" name="preg10" value="A veces veo productos, pero no siempre" /> A veces veo productos, pero no siempre<br/>
                    <input type="radio" name="preg10" value="Casi no hay donde conseguir" /> Casi no hay donde conseguir<br/>
                    <input type="radio" name="preg10" value="No lo he buscado" /> No lo he buscado<br/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="< Anterior"
                        onclick="this.form.action = 'pregunta9.php'" />
                    <input type="submit" value="Finalizar"
                        onclick="this.form.action = 'resumen.php'" />
                </td>
            </tr>
        </table>
    </form>
</section>

<footer>
    <p>Todos los derechos reservados YajairayLaisha@2025</p>
</footer>
</body>
</html>

