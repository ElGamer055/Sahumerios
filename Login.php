<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="css/main.css">
    
    <title>Gordines</title>

    
</head>
<body>
    <form action= 'metadatos.php' method = 'post' class="wrapper">
        <div class="form-box login">
            <h2>Iniciar Sesión</h2>
            <div class="input-box">
                <input type="text" name="User" required placeholder=" " maxlength="40">
                <label>Nombre de usuario</label>
            </div>
            <div class="input-box">
                <input type="password" name="Pass" required placeholder=" " maxlength="40">
                <label>Contraseña</label>
            </div>
            <button type="submit" class="btn">Ingresar</button>
            <div class="login-register">
                <p>¿No tienes cuenta? <a href="Registrar.php" class="register-link">Regístrate</a></p>
            </div>
        </div>
</body>

</body>
</html>