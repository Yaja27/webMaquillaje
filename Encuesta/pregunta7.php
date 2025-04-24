<?php
session_start();
$_SESSION['Pregunta6'] = $_POST['preg6'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pregunta 7</title>
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
    <form method="POST" action="pregunta8.php">
        <table>
            <tr>
                <th colspan="2">¿Has visto videos de chicas usando maquillaje coreano en redes?</th>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="preg7" value="Sí, y me inspiran mucho" required /> Sí, y me inspiran mucho<br/>
                    <input type="radio" name="preg7" value="Sí, pero no me interesan tanto" /> Sí, pero no me interesan tanto<br/>
                    <input type="radio" name="preg7" value="No he visto" /> No he visto<br/>
                    <input type="radio" name="preg7" value="No uso redes para eso" /> No uso redes para eso<br/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="< Anterior"
                        onclick="this.form.action = 'pregunta6.php'" />
                    <input type="submit" value="Siguiente >"
                        onclick="this.form.action = 'pregunta8.php'" />
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
