<?php
session_start();
$_SESSION['Pregunta1'] = $_POST['preg1'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encuesta - Pregunta 2</title>
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
    <form id="formulario" method="POST" action="pregunta3.php">
        <table>
            <tr>
                <th colspan="2">¿Dónde viste por primera vez el maquillaje coreano?</th>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="preg2" value="TikTok" required /> TikTok<br/>
                    <input type="radio" name="preg2" value="YouTube" /> YouTube<br/>
                    <input type="radio" name="preg2" value="Instagram" /> Instagram<br/>
                    <input type="radio" name="preg2" value="Doramas" /> Doramas<br/>
                    <input type="radio" name="preg2" value="En una tienda" /> En una tienda<br/>
                    <input type="radio" name="preg2" value="Amigas o familia" /> Amigas o familia
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" onclick="cambiarAccion('pregunta1.php')">&lt; Anterior</button>
                    <button type="submit" onclick="cambiarAccion('pregunta3.php')">Siguiente &gt;</button>
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
