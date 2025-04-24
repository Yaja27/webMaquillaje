<?php
session_start();
$_SESSION['Pregunta8'] = $_POST['preg8'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pregunta 9</title>
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
    <form method="POST" action="pregunta10.php">
        <table>
            <tr>
                <th colspan="2">¿Tienes algún producto coreano o te gustaría tenerlo?</th>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="preg9" value="Sí, ya tengo" required /> Sí, ya tengo<br/>
                    <input type="radio" name="preg9" value="Tengo todos" /> Tengo todos<br/>
                    <input type="radio" name="preg9" value="Me gustaría probar" /> Me gustaría probar<br/>
                    <input type="radio" name="preg9" value="No me interesa" /> No me interesa<br/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="< Anterior"
                        onclick="this.form.action = 'pregunta8.php'" />
                    <input type="submit" value="Siguiente >"
                        onclick="this.form.action = 'pregunta10.php'" />
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
