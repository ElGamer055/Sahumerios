<?php
// apertura php 
    session_start();
    //inicio sesion, permite levantar(carga datos guardados) un perfil de usuario
    include 'holasoyfunciones.php';//asignacion, recibo por el metodo post lo enviado por el login
    $apellido=$_POST['Apellido'];
    $nombre=$_POST['Nombre'];
    $Nombre_de_usuario=$_POST['Nombredeusuario'];
    $Contrasena=$_POST['contrasena'];
    $numtelefono=$_POST['num'];

$consulta= "INSERT INTO `usuarios`(`Nombre_de_usuario`, `Nombre`, `Apellido`, `Contrasena`, `Telefono`,`Id_cargo`) VALUES ('$Nombre_de_usuario','$nombre','$apellido','$Contrasena','$numtelefono','1')";

    //$consulta= "SELECT*FROM usuarios WHERE User='$User' AND Pass='$Pass'";//una instruccion SQL SELECT para obtener datos de la tabla 'usuario' donde 'usuario'
    //$consulta= "SELECT * FROM usuarios INNER  JOIN Permisos ON permiso=Id_Permiso";
    //$consulta= "SELECT * FROM usuarios INNER  JOIN Permisos ON permiso=Id_Permiso WHERE User='$User' AND Pass='$Pass'";
    
    $conexion=mysqli_connect('localhost','root','','sahumerios'); //establece una conexion a una base de datos MySQL ubicada en 'localhost' usando 'root' como n
    $result=mysqli_query($conexion,$consulta);//ejecuta la instruccion $consulta en la conexion de base de datos establecida y asigna el resualtado a la variable
   
    echo '<script language="javascript">
        alert("Skibidi creado!");
        location.href="index.php";
        </script>';
?>