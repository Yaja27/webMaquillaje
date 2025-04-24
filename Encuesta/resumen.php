<?php
session_start();

// Guardar la última pregunta si se viene del formulario anterior
if (isset($_POST['preg10'])) {
    $_SESSION['Pregunta10'] = $_POST['preg10'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen de Encuesta</title>
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
            border: 2px solid #cc0066; /* Borde alrededor de la tabla */
        }

        td {
            padding: 10px;
            border: 1px solid #cc0066; /* Borde de las celdas */
        }

        tr:nth-child(even) {
            background-color: #ffe6f0;
        }

        h3 {
            text-align: center;
            color: #cc0066;
        }

        input[type="submit"] {
            background-color: #ff69b4;
            color: white;
            border: none; /* Sin borde en los botones */
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
    <h3>INFORME DE ENCUESTA</h3>
</header>

<?php
$nombres    = $_SESSION['nombres']    ?? 'No registrado';
$dni        = $_SESSION['dni']        ?? 'No registrado';
$pregunta1  = $_SESSION['Pregunta1']  ?? 'No respondida';
$pregunta2  = $_SESSION['Pregunta2']  ?? 'No respondida';
$pregunta3  = $_SESSION['Pregunta3']  ?? 'No respondida';
$pregunta4  = $_SESSION['Pregunta4']  ?? 'No respondida';
$pregunta5  = $_SESSION['Pregunta5']  ?? 'No respondida';
$pregunta6  = $_SESSION['Pregunta6']  ?? 'No respondida';
$pregunta7  = $_SESSION['Pregunta7']  ?? 'No respondida';
$pregunta8  = $_SESSION['Pregunta8']  ?? 'No respondida';
$pregunta9  = $_SESSION['Pregunta9']  ?? 'No respondida';
$pregunta10 = $_SESSION['Pregunta10'] ?? 'No respondida';
?>

<section>
    <form method="POST">
        <table>
            <tr><td>Nombre del ciudadano</td><td><?php echo $nombres; ?></td></tr>
            <tr><td>DNI</td><td><?php echo $dni; ?></td></tr>
            <tr><td>¿Has escuchado hablar del maquillaje coreano?</td><td><?php echo $pregunta1; ?></td></tr>
            <tr><td>¿Dónde viste por primera vez el maquillaje coreano?</td><td><?php echo $pregunta2; ?></td></tr>
            <tr><td>¿Has usado maquillaje coreano alguna vez?</td><td><?php echo $pregunta3; ?></td></tr>
            <tr><td>¿Qué te gusta del maquillaje coreano?</td><td><?php echo $pregunta4; ?></td></tr>
            <tr><td>¿Te gustaría tener una rutina de maquillaje como la de las chicas coreanas?</td><td><?php echo $pregunta5; ?></td></tr>
            <tr><td>¿Qué tipo de productos te llaman más la atención?</td><td><?php echo $pregunta6; ?></td></tr>
            <tr><td>¿Has visto videos de chicas usando maquillaje coreano en redes?</td><td><?php echo $pregunta7; ?></td></tr>
            <tr><td>¿Qué red social usas más para ver contenido de maquillaje?</td><td><?php echo $pregunta8; ?></td></tr>
            <tr><td>¿Tienes algún producto coreano o te gustaría tenerlo?</td><td><?php echo $pregunta9; ?></td></tr>
            <tr><td>¿Qué tan fácil es para ti conseguir maquillaje coreano donde vives?</td><td><?php echo $pregunta10; ?></td></tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="< Anterior" onclick="this.form.action = 'pregunta10.php'" />
                    <input type="submit" value="Volver a encuestar" onclick="this.form.action = 'index.php'" />
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


