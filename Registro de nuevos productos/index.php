<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Registro de Productos</title>
  <link href="estilo.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to bottom, #ffe0f0, #e0f7fa);
      padding: 30px;
      color: #444;
    }

    table {
      background-color: white;
      width: 100%;
      max-width: 600px;
      margin: auto;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0px 0px 15px rgba(255, 182, 193, 0.4);
      border-collapse: collapse;
    }

    td {
      padding: 10px;
      border: none;
    }

    input[type="text"] {
      width: 95%;
      padding: 10px;
      border: none;
      border-radius: 10px;
      background-color: #fff0f5;
      font-size: 16px;
      box-shadow: inset 0 0 5px #f3cce3;
    }

    input[type="submit"] {
      padding: 10px 20px;
      margin-top: 10px;
      margin-right: 10px;
      border: none;
      border-radius: 30px;
      background-image: linear-gradient(to right, #64b5f6, #ff8ec9);
      color: white;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
      transition: transform 0.2s ease;
    }

    input[type="submit"]:hover {
      transform: scale(1.05);
    }

    section {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
  </style>
</head>
<body>
<header>
  <?php include 'encabezado.php'; ?>
</header>

<section>
  <?php include('capturaDatos.php'); ?>
  <form name="frmPrincipal" method="POST" action="agregarProducto.php">
    <table>
      <tr>
        <td>Descripción del Producto</td>
        <td><input type="text" name="txtDescripcion" value="<?php echo getDescripcion();?>" placeholder="Ej: Labial Rosado" /></td>
      </tr>
      <tr>
        <td>Stock</td>
        <td><input type="text" name="txtStock" value="<?php echo getStock();?>" placeholder="Ej: 10" /></td>
      </tr>
      <tr>
        <td>Precio del producto</td>
        <td><input type="text" name="txtPrecio" value="<?php echo getPrecio(); ?>" placeholder="Ej: 149.99" /></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center;">
          <input type="submit" name="btnListado" onclick="this.form.action='listadoProductos.php'" value="📋 Ver listado" />
          <input type="submit" name="btnRegistrar" onclick="this.form.action='agregarProducto.php'" value="💾 Registrar" />
        </td>
      </tr>
    </table>
  </form>
</section>

<footer>
  <?php include 'pie.php'; ?>
</footer>
</body>
</html>
