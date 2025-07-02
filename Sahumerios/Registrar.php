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
    <div class="wrapper">
        <div class="form-box login">
            <h2>Iniciar Sesión</h2>
            <div class="input-box">
                <input type="email" required placeholder=" ">
                <label>Email</label>
            </div>
            <div class="input-box">
                <input type="password" required placeholder=" ">
                <label>Contraseña</label>
            </div>
            <button type="submit" class="btn">Ingresar</button>
            <div class="login-register">
                <p>¿No tienes cuenta? <a href="#" class="register-link">Regístrate</a></p>
            </div>
        </div>

        <div class="form-box register">
            <h2>Registro</h2>
            <div class="input-box">
                <input type="text" required placeholder=" ">
                <label>Nombre de usuario</label>
            </div>
            <div class="input-box">
                <input type="text" required placeholder=" ">
                <label>Nombre</label>
            </div>
            <div class="input-box">
                <input type="text" required placeholder=" ">
                <label>Apellido</label>
            </div>
            <div class="input-box">
                <input type="number" required placeholder=" ">
                <label>Telefono</label>
            </div>
            <div class="input-box">
                <input type="password" required placeholder=" ">
                <label>Contraseña</label>
            </div>
            <button type="submit" class="btn">Registrarse</button>
            <div class="login-register">
                <p>¿Ya tienes cuenta? <a href="#" class="login-link">Iniciar Sesión</a></p>
            </div>
        </div>
    </div>
</body>

    <script src="js/main.js"></script>
</body>
</html>