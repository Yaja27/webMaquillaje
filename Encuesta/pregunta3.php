<?php
session_start();
$_SESSION['Pregunta2'] = $_POST['preg2'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encuesta - Pregunta 3</title>
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

        button {
            background-color: #ff69b4;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            margin-right: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
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
    <form id="formulario" method="POST" action="pregunta4.php">
        <table>
            <tr>
                <th colspan="2">¿Has usado maquillaje coreano alguna vez?</th>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="preg3" value="Sí, lo uso seguido" required /> Sí, lo uso seguido<br/>
                    <input type="radio" name="preg3" value="Sólo he probado uno o dos productos" /> Sólo he probado uno o dos productos<br/>
                    <input type="radio" name="preg3" value="Lo probé una vez" /> Lo probé una vez<br/>
                    <input type="radio" name="preg3" value="Nunca lo he usado" /> Nunca lo he usado
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" onclick="cambiarAccion('pregunta2.php')">&lt; Anterior</button>
                    <button type="submit" onclick="cambiarAccion('pregunta4.php')">Siguiente &gt;</button>
                </td>
            </tr>
        </table>
    </form>
</section>

<footer>
    <p>Todos los derechos reservados YajairayLaisha@2025</p>
</footer>

<script>
function cambiarAccion(destino) {
    document.getElementById('formulario').action = destino;
}
</script>

</body>
</html>
