<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Acceso</title>
    <style>
        body {
            background-color: #ffeef5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        form {
            background-color: #ffffff;
            margin: 60px auto;
            padding: 25px;
            border-radius: 20px;
            max-width: 600px;
            box-shadow: 0 8px 25px rgba(220, 115, 160, 0.2);
            border: 2px solid #f5a5c2;
        }

        table {
            width: 100%;
            border: none;
        }

        #titulo {
            text-align: center;
            font-size: 30px;
            color: #d87093;
            font-family: 'Georgia', serif;
            margin-bottom: 20px;
        }

        #derecha {
            text-align: right;
            font-weight: bold;
            padding-right: 10px;
        }

        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #f3b3c6;
            background-color: #fff0f5;
        }

        #boton {
            background-color: #f5a5c2;
            border: none;
            color: white;
            padding: 10px 25px;
            border-radius: 12px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
        }

        #boton:hover {
            background-color: #f08bb6;
        }

        img {
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(200, 100, 150, 0.3);
        }

        footer {
            text-align: center;
            font-family: 'Georgia', serif;
            font-size: 14px;
            color: #999;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <section>
        <?php
        error_reporting(0);
        session_start();

        if (!isset($_SESSION['admin'])) {
        ?>
        <form name="frmLogin" method="POST" action="login.php">
            <table cellspacing="0" cellpadding="5">
                <tr>
                    <td colspan="3">
                        <p id="titulo">Acceso</p>
                    </td>
                </tr>
                <tr>
                    <td id="derecha" width="150">Usuario</td>
                    <td><input type="text" name="txtUsuario" required /></td>
                    <td rowspan="4">
                        <img src="imageng.png" width="200" height="200" />
                    </td>
                </tr>
                <tr>
                    <td id="derecha">Clave</td>
                    <td>
                        <input type="password" name="txtClave" maxlength="20" required />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="checkbox" name="recordar" value="ON" />
                        Recordar la clave
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input id="boton" type="submit" name="btnLogin" value=" LOGIN " />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <?php
                        } else {
                            header('location:principal.php');
                        }

                        if (isset($_SESSION['error'])) {
                            echo "<p style='color:red;'>".$_SESSION['error']."</p>";
                            unset($_SESSION['error']);
                        }
                        ?>
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

