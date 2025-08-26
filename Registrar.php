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
    <form action= 'metadatosRegister.php' method = 'post' class="wrapper">
        <div class="form-box login">
            <h2>Registro</h2>
            <div class="input-box">
                <input type="text" placeholder=" " name="Nombredeusuario" maxlength="40">
                <label>Nombre de usuario</label>
            </div>
            <div class="input-box">
                <input type="text" placeholder=" " name="Nombre" maxlength="40">
                <label>Nombre</label>
            </div>
            <div class="input-box">
                <input type="text"  placeholder=" " name="Apellido" maxlength="40">
                <label>Apellido</label>
            </div>
            <div class="input-box">
                <input type="number" placeholder=" " name="num" maxlength="12">
                <label>Telefono</label>
            </div>
            <div class="input-box">
                <input type="password" placeholder=" " name="contrasena" maxlength="40">
                <label>Contraseña</label>
            </div>
            <button type="submit" class="btn">Registrarse</button>
            <div class="login-register">
                <p>¿Ya tienes cuenta? <a href="Login.php" class="login-link">Iniciar Sesión</a></p>
            </div>
        </div>
</form>

</body>

    <script src="js/main.js"></script>
</body>
</html>