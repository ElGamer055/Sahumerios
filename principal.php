<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main3.css">
  <title>Teiwaz Sahumerios</title>
</head>
<body>

    <?php
    session_start();//para mantener la sesion abierta
    include 'holasoyfunciones.php';
    $Nombre_de_usuario = $_SESSION['user'];
    $Nombre = $_SESSION['nom'];
    $Imagen=$_SESSION['dni'];
    $Permiso = $_SESSION['permisos'];
    $DNI = $_SESSION['dni'];
    ?>
  

    <?php
        header_sahumerios($Nombre_de_usuario);
    ?>

      <h1>Teiwaz Sahumerios</h1>
      <h2 id="frase-aleatoria"></h2>
    </header>
<body>
  <?php
    body_sahumerios();
  ?>

</body>
<script src="js/main.js"></script>
<script src="js/bootstrap.js"></script>
</html>
