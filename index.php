<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Shaira K-Beauty - Portal de Aplicaciones</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #ffc0cb, #add8e6);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff0f5;
            padding: 40px 60px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            text-align: center;
            border: 2px solid #ffb6c1;
        }

        h1 {
            color: #d63384;
            margin-bottom: 25px;
            font-size: 32px;
            text-shadow: 1px 1px 2px #fff;
        }

        .app-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .app-link {
            display: inline-block;
            padding: 14px 24px;
            font-size: 17px;
            color: #fff;
            background: linear-gradient(135deg, #ffb6c1, #87cefa);
            text-decoration: none;
            border-radius: 30px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .app-link:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🌸 Shaira K-Beauty - Portal de Aplicaciones 🌸</h1>
        <div class="app-list">
            <a class="app-link" href="Login/index.php">🔐 Login</a>
            <a class="app-link" href="Encuesta/index.php">📋 Encuesta</a>
            <a class="app-link" href="Votación de candidatas/index.php">👑 Candidatas</a>
            <a class="app-link" href="Registro de nuevos productos/index.php">📦 Registro de Productos</a>
            <a class="app-link" href="Carrito de compras básico/index.php">🛒 Venta Carrito</a>
        </div>
    </div>
</body>
</html>
