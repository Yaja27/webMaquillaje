<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Votación de Candidatas</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
<header>
    <h3 id="centrado">VOTACIÓN DE CANDIDATAS</h3>
    <h2 id="titulo">REINA DE MAQUILLAJE COREANO 2025</h2>
</header>

<section>
<?php
error_reporting(0);
session_start();

$total = $_SESSION['total'] ?? 0;
$pcandidata1 = $total ? ($_SESSION['candidata1'] * 100) / $total : 0;
$pcandidata2 = $total ? ($_SESSION['candidata2'] * 100) / $total : 0;
$pcandidata3 = $total ? ($_SESSION['candidata3'] * 100) / $total : 0;
$pcandidata4 = $total ? ($_SESSION['candidata4'] * 100) / $total : 0;
?>
<form name="frmVotacion" method="POST" action="conteo.php">
    <table border="0" width="800" cellspacing="10" cellpadding="1">
        <tr>
            <td id="centrado"><img src="candidata1.jpg" class="foto-candidata" alt="Candidata 1"/></td>
            <td id="centrado"><img src="candidata2.jpg" class="foto-candidata" alt="Candidata 2"/></td>
        </tr>
        <tr>
            <td id="centrado">
                Ailani Reyes, 19 años <br>
                <input type="submit" value="Votar" name="btnBoton1" class="btn-votar"/><br>
                Total de votos: <?php echo $_SESSION['candidata1'] ?? 0; ?><br>
                Porcentaje: <?php echo round($pcandidata1, 2); ?>%
            </td>
            <td id="centrado">
                Elysia Aguirre, 22 años <br>
                <input type="submit" value="Votar" name="btnBoton2" class="btn-votar"/><br>
                Total de votos: <?php echo $_SESSION['candidata2'] ?? 0; ?><br>
                Porcentaje: <?php echo round($pcandidata2, 2); ?>%
            </td>
        </tr>
        <tr>
            <td id="centrado"><img src="candidata3.jpg" class="foto-candidata" alt="Candidata 3"/></td>
            <td id="centrado"><img src="candidata4.jpg" class="foto-candidata" alt="Candidata 4"/></td>
        </tr>
        <tr>
            <td id="centrado">
                Zinnia Vazquez, 20 años <br>
                <input type="submit" value="Votar" name="btnBoton3" class="btn-votar"/><br>
                Total de votos: <?php echo $_SESSION['candidata3'] ?? 0; ?><br>
                Porcentaje: <?php echo round($pcandidata3, 2); ?>%
            </td>
            <td id="centrado">
                Azaria Cruz, 21 años <br>
                <input type="submit" value="Votar" name="btnBoton4" class="btn-votar"/><br>
                Total de votos: <?php echo $_SESSION['candidata4'] ?? 0; ?><br>
                Porcentaje: <?php echo round($pcandidata4, 2); ?>%
            </td>
        </tr>
    </table>
</form>

<?php
$arreglo = [
    'Ailani Reyes' => $_SESSION['candidata1'] ?? 0,
    'Elysia Aguirre' => $_SESSION['candidata2'] ?? 0,
    'Zinnia Vazquez' => $_SESSION['candidata3'] ?? 0,
    'Azaria Cruz' => $_SESSION['candidata4'] ?? 0
];
arsort($arreglo);
reset($arreglo);
list($candidata, $puntaje) = each($arreglo);
?>
<table border="0" width="500" cellspacing="10" cellpadding="1" class="tabla-ganadora">
    <tr>
        <td id="ganadora">Total de votantes: <?php echo $total; ?></td>
    </tr>
    <tr>
        <td id="ganadora">Ganadora: <?php echo $candidata; ?> (<?php echo $puntaje; ?> votos)</td>
    </tr>
</table>
</section>

<footer>
    <h5 id="centrado">Todos los derechos reservados ©2015. Diseñado por M@nuel Torres</h5>
</footer>
</body>
</html>
