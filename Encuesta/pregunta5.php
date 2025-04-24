<?php
session_start();
$_SESSION['Pregunta4'] = $_POST['preg4'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pregunta 5 - Maquillaje Coreano</title>
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
        <form method="POST" action="pregunta6.php">
            <table>
                <tr>
                    <th colspan="2">¿Te gustaría tener una rutina de maquillaje como la de las chicas coreanas?</th>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="preg5" value="Si" required /> Si<br/>
                        <input type="radio" name="preg5" value="No" /> No<br/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="< Anterior" onclick="this.form.action='pregunta4.php'" />
                        <input type="submit" value="Siguiente >" />
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
