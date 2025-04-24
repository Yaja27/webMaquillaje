<?php
session_start();
$_SESSION['Pregunta5'] = $_POST['preg5'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pregunta 6</title>
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
    <form method="POST" action="pregunta7.php">
        <table>
            <tr>
                <th colspan="2">¿Qué tipo de productos te llaman más la atención?</th>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="preg6" value="Tinta para labios" required /> Tinta para labios<br/>
                    <input type="radio" name="preg6" value="Rubor" /> Rubor<br/>
                    <input type="radio" name="preg6" value="Sombras de ojos" /> Sombras de ojos<br/>
                    <input type="radio" name="preg6" value="BB Cream" /> BB Cream<br/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="< Anterior"
                        onclick="this.form.action = 'pregunta5.php'" />
                    <input type="submit" value="Siguiente >"
                        onclick="this.form.action = 'pregunta7.php'" />
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
