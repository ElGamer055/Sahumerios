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
    $Cargo = $_SESSION['idcargo'];
    ?>
  

    <?php
        header_sahumerios($Nombre_de_usuario);
    ?>

    </header>
<body>

<div class="perfil-container">
    <!-- Imagen -->
    <div class="perfil-foto">
        <img src="sahur.jpg" alt="Foto de perfil">
    </div>

    <!-- Datos -->
    <?php if (isset($_GET["editar"])): ?>
      <form method="post" action="interfazUsuario.php">
        <input type="text" name="nombre" value="<?= $Nombre_de_usuario ?>" required>
        <input type="text" name="edad" value="<?= $Nombre ?>" required>
        <input type="number" name="email" value="<?= $Cargo ?>" required>
        <button class="btn" type="submit">Guardar</button>
      </form>
    <?php else: ?>
      <!-- Si no, mostrar solo los datos -->
      <div class="datos">
        <p><b>Nombre:</b> <?= $Nombre_de_usuario ?></p>
        <p><b>Edad:</b> <?= $Nombre ?></p>
        <p><b>Email:</b> <?= $Cargo ?></p>
        <a href="?editar=1"><button class="btn">Editar</button></a>
        <a href="#"><button class="btn"> serrar sesion</button></a>
        
      </div>
      
    <?php endif; ?>
  </div>
    <?php if ($Cargo == 3) : ?>
    <a href="panelDeControl.php">Panel de administrador</a>
    <?php endif; ?>
</div>

<style>
.perfil-container {
    display: flex;
    align-items: center;
    gap: 20px; /* espacio entre imagen y datos */
}

/* Imagen circular */
.perfil-foto img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #ddd;
}

/* Texto de datos */
.perfil-datos p {
    margin: 8px 0;
}
</style>
</body>
<script src="js/main.js"></script>
<script src="js/bootstrap.js"></script>
</html>
