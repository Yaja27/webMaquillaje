<?php
session_start();
$_SESSION['Pregunta3'] = $_POST['preg3'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pregunta 4 - Maquillaje Coreano</title>
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
        <form method="POST" action="pregunta5.php">
            <table>
                <tr>
                    <th colspan="2">¿Qué te gusta del maquillaje coreano?</th>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="preg4" value="Se ve natural y bonito" /> Se ve natural y bonito<br/>
                        <input type="radio" name="preg4" value="Tiene empaques lindos" /> Tiene empaques lindos<br/>
                        <input type="radio" name="preg4" value="Es fácil de aplicar" /> Es fácil de aplicar<br/>
                        <input type="radio" name="preg4" value="No me interesa" /> No me interesa
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="< Anterior" onclick="this.form.action='pregunta3.php'" />
                        <input type="submit" value="Siguiente >" onclick="this.form.action='pregunta5.php'" />
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
