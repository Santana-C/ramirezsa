<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia Sesión</title>
</head>
<body>
    <style>
        *{
            font-family: 'Roboto', sans-serif;
        }
        h1{
            text-align:center;
        }
        table{
            width:25%;
            background-color:#FFC;
            border:2px solid #F00;
            margin:auto;
        }
        .izq{
            text-align:right;
        }
        .der{
            text-align:left;
        }
        td{
            text-align:center;
            padding:10px;
        }
    </style>
    <h1>Introduce tus datos</h1>
    <form action="comprueba_login.php" method="post">
        <table>
            <tr>
                <td class="izq">
                    Login:
                </td>
                <td class="der">
                    <input type="text" name="usuario">
                </td>
            </tr>
            <tr>
                <td class="izq">
                    Contraseña:
                </td>
                <td class="der">
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Iniciar Sesión">
                </td>
            </tr>
        </table>
    
</body>
</html>