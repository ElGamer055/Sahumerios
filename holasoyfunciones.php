<?php 
error_reporting(0);
function Conexion ($Db){ //Crea la funcion
  //para no escribir muchas veces estas lineas, se llama a la funcion y se la ejecuta
	$Conect=mysqli_connect("localhost","root","",$Db) //Realiza una consulta en donde se almacena los archivos
	or die("Error de conexion"); //En caso de que exista un error se mostrara este cartel
	return $Conect; //Vuelve al inicio
}

function ConexionyEjecutarConsulta ($Con,$consulta){ //Crea la funcion
  //conecto y ejecuto
	$link=mysqli_connect("localhost","root","",$Con) //Realiza una consulta en donde se almacena los archivos
	or die("Error de conexion"); //En caso de que exista un error se mostrara este cartel
		$R=mysqli_query($link,$Con);
	return $R;
	

}

function Ejecutar_Consulta($Db,$Con){
  //solo ejecuto la consulta
	$Result=mysqli_query($Db,$Con);
	return $Result;
}


function ValidarUseyPass ($User, $Pass,$Userie,$Passbase,$matriz){

if ($User==$Userie){
  echo "<SCRIPT language='JavaScript'>
          location.href='principal.php';
        </SCRIPT> ";
  }
    else{   $Userie=" ";    ?>
      <SCRIPT language='JavaScript'>
        alert ("El nombre de usuario y contrasena es incorrecto");
        location.href='Login.php';
      </SCRIPT>             <?php
      }
if ($Pass==$Passbase){
  echo "La contrasena es ".$Passbase;
  }
  else{   $Passbase=" ";   ?>
    <SCRIPT language='JavaScript'>
      alert ("El nombre de usuario y contrasena es incorrecto");
      location.href='Login.php';
    </SCRIPT>               <?php
    }
}


function ValidarUseyPass1 ($User, $Pass,$Userie,$Passbase,$matriz){

if ($User==$Userie){
  echo "<SCRIPT language='JavaScript'>
          location.href='principal1.php';
        </SCRIPT> ";
  }
    else{   $Userie=" ";    ?>
      <SCRIPT language='JavaScript'>
        alert ("El nombre de usuario y contrasena es incorrecto");
        location.href='Login1.php';
      </SCRIPT>             <?php
      }
if ($Pass==$Passbase){
  echo "La contrasena es ".$Passbase;
  }
  else{   $Passbase=" ";   ?>
    <SCRIPT language='JavaScript'>
      alert ("El nombre de usuario y contrasena es incorrecto");
      location.href='Login1.php';
    </SCRIPT>               <?php
    }
}





function encabezado($Nombre,$Apellido,$Permiso,$Imagen){

$HoraLocal=date("h:i:s");//captura hora

$Fecha=date("j/n/y");//captura fecha
?>
<div class="cajaencabezado">
<img width="100px" height="100px" src="fotos/<?php echo $Imagen;?>.jpeg" class="imagencabezado">
<p class="textoencabezado">
<?php
  echo  "Bienvenido/a ".$Nombre." ".$Apellido."<br>"; 
  echo "Su cargo: "; 
  echo $Permiso;
  echo "</br>";
  echo "inicio sesion alas: ".$HoraLocal;
  echo "</br>";
  echo "Del dia: ".$Fecha;
  echo "</br>";
?>
</p>
</div>
<?php
}

function header_sahumerios($Nombre_de_usuario){
  ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main3.css">
  
  <div class="container">
    <header>
      <nav class="navbar navbar-dark fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="icon me-1"><i class="fa-regular fa-star"></i></span>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="icon me-1"><i class="fa-regular fa-star"></i></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Sahumerios Teiwaz</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <?php if (isset($Nombre_de_usuario) == true): ?>
            <a class="nav-link" aria-current="page" href="InterfazUsuario.php"><i class="fa-solid fa-user"></i> <?php echo " Bienvenido $Nombre_de_usuario"?></a>
            <?php else:  ?>
              <a class="nav-link" aria-current="page" href="Login.php"><i class="fa-solid fa-user"></i> Iniciar sesion</a>
              <?php endif; ?>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html"><i class="fa-solid fa-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="playSound()"> <i class="fa-solid fa-cart-shopping"></i> Carrito de compras</a>
             <audio id="clickSound" src="emuo.mp3" preload="auto"></audio>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="catalogo.php"><i class="fa-solid fa-bag-shopping"></i> Catalogo</a>
             <audio id="clickSound" src="emuo.mp3" preload="auto"></audio>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="playSound()"> <i class="fa-solid fa-gear"></i> Opciones</a>
             <audio id="clickSound" src="emuo.mp3" preload="auto"></audio>
          </li>
          <div class="dropdown show">
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
</html>
<?php
}

function body_sahumerios(){
  ?>
    <h3>Nuevo e imperdible</h3>

    <section class="products">

      <div class="product-card">
        <img src="img/sahur.jpg" alt="Producto 1">
        <p>Producto</p>
        <p>Pequeña descripción y su precio</p>
        <p><button> Agregar al carrito</button></p>
      </div>

      <div class="product-card">
        <img src="img/sahur.jpg" alt="Producto 2">
        <p>Producto</p>
        <p>Pequeña descripción y su precio</p>
        <p><button> Agregar al carrito</button></p>
      </div>

      <div class="product-card">
        <img src="img/sahur.jpg" alt="Producto 3">
        <p>Producto</p>
        <p>Pequeña descripción y su precio</p>
        <p><button> Agregar al carrito</button></p>
      </div>

    </section>

<div class="promo-box container-fluid">
  <div class="promo-inner">
    <div class="promo-bg"></div>

    <div class="promo-buttons">
      <a href="catalogo.php"><button class="promo-btn dark">Ver catálogo</button></a>
      <a href="https://www.roblox.com"><button class="promo-btn purple">¿Cómo comprar?</button></a>
      <a href="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcT36fg28121RMt8fjDSSl58avFrWiTcwmDnpq_TEX0mB-91lJkOVZ4PAsGQyRLTKVWHBwDhYskoU4RhhizuRmFyi2q4TYJeoDSmIdw_izJ4sQ"><button class="promo-btn dark">Skibidi Marley</button></a>
    </div>

    <div class="promo-image">
      <img src="img/sahur.jpg" alt="Inciensos Aromanza">
    </div>
  </div>
</div>



    <h3>Comentarios</h3>

    <section class="comments">
        <div class="comment">
            <p>“Yo soy Marley”</p>
            <div class="comment-author">
                <img src="img/marle.jpg" alt="Foto de Marley">
                <span>Marley</span>
            </div>
        </div>

        <div class="comment">
            <p>“No puede ser, soy Marley”</p>
            <div class="comment-author">
                <img src="img/toilet.jpg" alt="Foto de Marley 2">
                <span>Marley 2</span>
            </div>
        </div>

        <div class="comment">
            <p>“No puede ser, soy Marley”</p>
            <div class="comment-author">
                <img src="img/faraon.jpg" alt="Foto de Marley 2">
                <span>Marley 2</span>
            </div>
        </div>
    </section>

    <footer>
      <p>¡Te puedes registrar aquí!</p>
      <button class="register-button" onclick="document.location='Login.php'">Registrarme</button>
      <div class="footer-info">
        <p>Sahumerios Teiwaz</p>
        <a href="https://www.instagram.com/sahumerios.teiwaz/">Instagram</a>
        <a href="https://facebook.com">Facebook</a>
      </div>
    </footer>
  </div>
  <?php
}

function menu($Permiso){
  
  if($Permiso==1){
?>
<div class="cajabienvenida">
    <p class="bienvenida">SisPa</p>
    <p class="subtitulo">Sistema de Pañol</p>
</div>
    
    <div class="cajamenu">
        <nav class="menu">
            <ul>
                <li><a href="principal.php" class="amenu">Home</a></li>
				<li><a href="listadeusuario.php" class="amenu">Usuarios</a></li>
                <li><a href="nuevo.php" class="amenu">Nueva Herramienta</a></li>
                <li><a href="nuevousuario.php" class="amenu">Nuevo Usuario</a></li>
                 <li><a href="exportar.php" class="amenu">Exportar </a></li>
                
                <li><a href="Importar/importar.php" class="amenu">Importar</a></li>
                <li><a href="BorrarHerramientas.php" class="amenu">Borrar Herramientas</a></li>
                <li><a href="estadisticas.php" class="amenu">Estadisticas</a></li>
                <li><a href="prestados.php" class="amenu">Prestados</a></li>               
                <li><a href="acerca de.php" class="amenu">Acerca de</a></li>
                <li><a href="salir.php" class="amenu">Salir</a></li>
            </ul>
        </nav>
    </div>  
    <!-- "Graficos realizado/graficos/index.php" -->
<?php
}

   if($Permiso==2){
   ?>
<div class="cajabienvenida">
    <p class="bienvenida">Bienvenido</p>
    <p class="subtitulo"> al sistema del Sispa(sistema del pañol)</p>
</div>
    
    <div class="cajamenu">
        <nav class="menu">
            <ul>
                <li><a href="principal.php" class="amenu">Home</a></li>
                <li><a href="listadeusuario.php" class="amenu">Usuarios</a></li>
                <li><a href="nuevo.php" class="amenu">Nueva Herramienta</a></li>
                <li><a href="nuevousuario.php" class="amenu">Nuevo Usuario</a></li>
                <li><a href="importar.php" class="amenu">Importar Tabla</a></li>
                <li><a href="Grafico_Redireccion.php" class="amenu">Graficos</a></li>
                <li><a href="acercade.php" class="amenu">Acerca de</a></li>
                <li><a href="salir.php" class="amenu">Salir</a></li>
            </ul>
        </nav>
    </div>


<?php
  }
   if($cargo==3){
?>
<div class="cajabienvenida">
    <p class="bienvenida">Bienvenido</p>
    <p class="subtitulo"> al sistema del Sispa(sistema del pañol)</p>
</div>
    
    <div class="cajamenu">
        <nav class="menu">
            <ul>
                <li><a href="principal.php" class="amenu">Home</a></li>
                <li><a href="acercade.php" class="amenu">Acerca de</a></li>
                <li><a href="salir.php" class="amenu">Salir</a></li>
            </ul>
        </nav>
    </div>

<?php  
  }  
}


function enc_tabla($consulta){
  //$enlace=Conexion('basepaniol');
  //$i=0;
  //$resultado=mysqli_query($enlace,$consulta);
  
?>
<!-- <link rel='stylesheet' href='css1/estilosprincipal.css'> -->
 <section> 
    <nav classS="menu">
      <table id='encabezadousuario'>
        <tr>
          <td>DNI</td>
          <td>Nombre</td>
          <td>Apellido</td>
          <td>Cargo</td>
          <td>Perfil</td>
          <td>Acciones</td>
        </tr> 
      </table>
    </nav>
  </section><?php
  //while ($info=mysqli_fetch_field($resultado)){
    //echo"<td>";
    //if($i<=3){
    //$vectortabla[$i]=$info->name;
    //echo"<td>".$vectortabla[$i]."</td>";
    //$i++;
  //}
    //echo"</td>";
  //}
   
 //"</table>";

}


function mostrar_tabla($sql){   
$enlace=Conexion('basededatos'); 
$resultado=mysqli_query($enlace,$sql); 

echo "<div class='cajatabla'>
      <table>
        <thead>
        <tr>
           <td>DNI</td>
           <td>Nombre</td>
           <td>Apellido</td>
           <td>Permiso</td>
           <td>Perfil</td>
           <td>Acciones</td>
        </tr>
        </thead>
        <tbody>"; 
while ($fila=mysqli_fetch_assoc($resultado)){ 
  $DNI=$fila['DNI']; 
  $nombre=$fila['Nombre'];
  $apellido=$fila['Apellido'];
  $permiso=$fila['permiso'];
  $imagen=$fila['DNI'];

  echo "<tr>
           <td>$DNI</td>
           <td>$nombre</td>
           <td>$apellido</td>
           <td>$permiso</td>
           <td><img align=center width=50px height=50px src= fotos/$imagen.jpeg ></td>
           <td><a href='verdetallesusuario.php?valor=$DNI'><img src='img/botonampliar.png' title='Ver usuario completo'></a><a href='modificarusuario.php?valor=$DNI'><img src='img/modificar.png' title='Modificar'></a><a href='eliminarusuario.php?valor=$DNI'><img src='img/eliminar.png' title='Eliminar Usuario'></a></td>
        </tr>"; 
  }
  echo "</tbody></table></div>";
}

function cargarTEXT( $string_consulta){
/* Me conecto y Ejecutamos la query*/  
$Enlace=Conexion('basepanol');
$resultado=mysqli_query($Enlace,$string_consulta);
 while($fila = mysqli_fetch_row($resultado)){
     foreach($fila as $dato){
  echo $dato;
    }
  }
}



// function enc_tabla_herramientaspaniol( $consulta){
// // echo "<link rel='stylesheet' href='css1/estilos1.css' href='css1/estiloprincipal.css'>";
// echo "<table id='encabezadoherramientas'>
//         <tr>
//           <th id='titulotabla'>id herramientas</th>
//           <th id='titulotabla'>cantidad</th>
//           <th id='titulotabla'>descripcion</th>
//           <th id='titulotabla'>estado</th>
//           <th id='titulotabla'>fecha revision</th>
//           <th>acciones</th>
//         </tr>
//       </table>";
// }

function motrar_tabla_herramientaspaniol($cond){ 
$enlace=Conexion('basepanol'); 
$resultado=mysqli_query($enlace,$cond); 

echo "<div class='cajatabla'>
      <table>
        <thead>
        <tr>
          <td>CODIGO</td>
          <td>CANTIDAD</td>
          <td>NOMBRE</td>
          <td>ESTADO</td>
          <td>MARCA</td>
          <td>MODELO</td>
          <td>UBICACION</td>
          <td>ACCIONES</td>
          
        </tr>
        </thead>
        <tbody>";

while ($fila=mysqli_fetch_assoc($resultado)){ 
  $id_herramientas=$fila['id_herramientas']; 
  $CODIGO=$fila['CODIGO'];
  $CANTIDAD=$fila['CANTIDAD'];
  $NOMBRE=$fila['NOMBRE'];
  $ESTADO=$fila['ESTADO'];
  $MARCA=$fila['MARCA'];
  $MODELO=$fila['MODELO'];
  $UBICACION=$fila['UBICACION'];

 
 


  echo "<tr>
           <td>$CODIGO</th>
           <td>$CANTIDAD</td>
           <td>$NOMBRE</td>
            <td>$ESTADO</td>
            <td>$MARCA</td>
             <td>$MODELO</td>
            <td>$UBICACION</td>
           
            
            
           
           
         
           <th>
           
           <a href='verdetalles.php?valor=$id_herramientas'><img src='img/botonampliar.png' title='Ver'></a>
           <a href='modificar.php?valor=$id_herramientas'><img src='img/modificar.png' title='Modificar'></a>
           <a href='prestamo.php?valor=$id_herramientas'><img src='img/prestamo.png' title='Prestar'></a>
           <a href='eliminar.php?valor=$id_herramientas'><img src='img/eliminar.png' title='Eliminar tabla'></a>
           
           </th>
        
        </tr>"; 
  }
  echo  "</tbody></table></div>";
}

function nueva_herramientas($cantidad, $ubicacion,$nombre, $estado, $modelo,$marca,$codigo,$potencia,$numero_de_serie,$fecha_de_adquisicion,

$numero_de_dictamen,$numero_de_factura,$motivo_de_baja,$fecha_de_baja,$reparado,$fecha_de_reparado,$presupuesto_de_reparado,
$factura_de_reparado,$fecha_de_carga)

{
	

$link=Conexion('basepanol');


$consulta= "INSERT INTO  herramientaspaniol (

NOMBRE ,
CODIGO ,
MARCA ,
MODELO ,
POTENCIA ,
NUMERO_DE_SERIE,
CANTIDAD ,
UBICACION,
FECHA_DE_ADQUISICION ,
NUMERO_DE_FACTURA,
ESTADO,
MOTIVO_DE_BAJA ,
REPARADO,
FECHA_DE_REPARADO,
PRESUPUESTO_DE_REPARADO ,
FACTURA_DE_REPARADO,
ADQUIRIDO_MEDIANTE,
PRECIO_UNITARIO,
FECHA_DE_CARGA
)
VALUES (
'$nombre','$codigo','$marca','$modelo','$potencia','$numero_de_serie','$cantidad', '$ubicacion', '$fecha_de_adquisicion',
'$numero_de_factura','$estado', '$motivo_de_baja','$reparado', '$fecha_de_reparado','$presupuesto_de_reparado','$factura_de_reparado', '$adquiridomediante', 
'$preciounitario','$fecha_de_carga') ";

$R= Ejecutar_Consulta ($link, $consulta);




if($R){
  ?>
  <script language='javascript'>
  alert('La nueva herramienta se ingreso correctamente');
  </script>
  <script language='javascript'>
  location.href='principal.php';
  </script>
  <?php
}
  else{
    ?>
    <script language='javascript'>
    alert('No se pudo agregar');
     location.href='nuevo.php';
    </script>
    <?php
  }
}



function modificar($cantidad,$ubicacion,$nombre, $estado, $modelo,$marca,$codigo, $potencia,$numero_de_serie,  $fecha_de_adquisicion,   $numero_de_dictamen,  $numero_de_factura , $motivo_de_baja,$fecha_de_baja, $reparado,   $fecha_de_reparado,$presupuesto_de_reparado,  $factura_de_reparado,   $fecha_de_carga,$id_herramientas)


{
$consulta="UPDATE herramientaspaniol SET id_herramientas='$id_herramientas', cantidad='$cantidad',ubicacion='$ubicacion', nombre='$nombre', estado='$estado', modelo='$modelo',marca='$marca',codigo='$codigo',potencia='$potencia', numero_de_serie= '$numero_de_serie',fecha_de_adquisicion ='$fecha_de_adquisicion',numero_de_dictamen= '$numero_de_dictamen',numero_de_factura= '$numero_de_factura',motivo_de_baja='$motivo_de_baja', fecha_de_baja ='$fecha_de_baja',reparado='$reparado',fecha_de_reparado='$fecha_de_reparado', presupuesto_de_reparado='$presupuesto_de_reparado', factura_de_reparado= '$factura_de_reparado',fecha_de_carga='$fecha_de_carga' WHERE id_herramientas='$id_herramientas'";
$link=Conexion('basepanol');
$R= Ejecutar_Consulta ($link, $consulta);
if($R){
  ?>
  <script language='javascript'>
  alert('La consulta se ejecuto correctamente');
   location.href='principal.php';
  </script>
  <script language='javascript'>
    alert('Hubo un error al intentar modificar la herramienta' );
  location.href='principal.php';
  </script>
  <?php
}
  else{
    ?>
    <script language='javascript'>
    alert('No se pudo modificar el registro');
    </script>
    <?php
  }
}
function modificarusu($apellido, $cargo, $nombre, $DNI){
$consulta="UPDATE usuario SET Nombre='$nombre', Apellido='$apellido', Cargo='$cargo'  WHERE DNI='$DNI'";
$link=Conexion('basepanol');
$R= Ejecutar_Consulta ($link, $consulta);
if($R){
  ?>
  <script language='javascript'>
  alert('La consulta se ejecuto correctamente');
  </script>
  <script language='javascript'>
  location.href='listadeusuario.php';
  </script>
  <?php
}
  else{
    ?>
    <script language='javascript'>
    alert('No se pudo modificar el registro');
    </script>
    <?php
  }
}
function nueva_Usuario($DNI, $Apellido, $Nombre, $Cargo, $User, $Pass,$Imagen){

$consulta="INSERT INTO usuario SET DNI='$DNI',Apellido='$Apellido', Nombre='$Nombre', Cargo='$Cargo', User='$User', Pass='$Pass' , Imagen='$Imagen'  ";
$link=Conexion('basepanol');
$R= Ejecutar_Consulta ($link, $consulta);
if($R){
  ?>
  <script language='javascript'>
  alert('El usuario se guardado exitosamente');
  </script>
  <script language='javascript'>
  location.href='listadeusuario.php';
  </script>
  <?php
}
  else{
    ?>
    <script language='javascript'>
    alert('No se pudo modificar el registro');
    </script>
    <?php
  }
}

function eliminarusu($DNI){

$consulta="DELETE FROM usuario where DNI='$DNI'";
$link=Conexion('basepanol');
$R=Ejecutar_Consulta($link, $consulta);

if($R){
  ?>
  <script language='javascript'>
  alert('La consulta a sido exitosa');
  </script>
  <script languaje='javascript'>
    location.href='listadeusuario.php';
  </script>
  <?php
}

else{
  ?>
  <script language='javascript'>
    alert('Error');
  </script>
  <?php
  }
}

function cargar_combo_remix ($consulta) {
  $enlace= Conexion ('basepanol');
  $resultado = mysqli_query($enlace,$consulta);
  while ($fila=mysqli_fetch_row($resultado)) {
foreach ($fila as $dato) {
  echo "<option>".$dato."</option>";
    }
  }
}


function mostrar_tabla_herr_con_paginacion_prestados(){

 $Enlace=Conexion('basepanol');

// maximo por pagina
$limit = 7;

// pagina pedida


if (isset($_GET["pag"])) {
$pag = (int) $_GET["pag"];
} else {
$pag= "";
}
if ($pag < 1)
{
   $pag = 1;
}
$offset = ($pag-1) * $limit;


$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM prestamo LIMIT $offset, $limit";
$sqlTotal = "SELECT FOUND_ROWS() as total";

$resultado= mysqli_query($Enlace,$sql);
$rsTotal = mysqli_query($Enlace,$sqlTotal);

$rowTotal = mysqli_fetch_assoc($rsTotal);
// Total de registros sin limit
$total = $rowTotal["total"];

?>

<?php
 
echo "<div class='cajatabla'>
      
        <thead>
        <tr>
        
          <td>CODIGO</th>
          <td>CANTIDAD PRESTADA</th>
          <td>DESCRIPCION</th>
          <td>DOCENTE</th>
          <td>CURSO</th>               
          <td>ALUMNO</th>
          <td>FECHA/HORA DE PRESTAMO</th>
          <td>FECHA/HORA DE DEVOLUCION</th>
          <td>TURNO</th>
          <td>OBSERVACIONES</th>  
           <td>SITUACION</th>
          <td>EN SERVICIO</th>                      
          <td>CANTIDAD STOCK</th>
           <td>ACCIONES</th>
      
        </tr>
        </thead>
        <tbody>";

while ($fila=mysqli_fetch_assoc($resultado)){ 
  // <link rel='stylesheet' href='css/estilos1.css'/> 
// echo "<table border='1' id='mostrartablaherramientas'>"; 
  $id_herramientas=$fila['id_Herramienta']; 
$CodigoHerramienta=$fila['CodigoHerramienta']; 
   $CantidadPrestada=$fila['CantidadPrestada'];
  $DescripcionHerramienta=$fila['DescripcionHerramienta'];
  $PrestadoDocente=$fila['PrestadoDocente'];
  $CursoAlumno=$fila['CursoAlumno'];  
  $PrestadoAlumno=$fila['PrestadoAlumno'];
  
    
  
  $FechaHoraPrestamo=$fila['FechaHoraPrestamo'];  
$FechaHoraPrestamo=date("d-m-Y", strtotime($FechaHoraPrestamo));


$FechaHoraDevolucion=$fila['FechaHoraDevolucion'];
$FechaHoraDevolucion=date("d-m-Y", strtotime($FechaHoraDevolucion));  
  
  
  
  
  $Turno=$fila['Turno'];
  $ObservacionPrestamo=$fila['ObservacionPrestamo'];
  $EstadoPrestamo=$fila['EstadoPrestamo'];
  $EstadodeServicio=$fila['EstadodeServicio'];
  $CantStockHerramienta=$fila['CantStockHerramienta'];
   
  
   
  $fecha2=date("d-m-Y", strtotime($fecha_revision));


  echo "<tr>
           <td>$CodigoHerramienta</td>
           <td>$CantidadPrestada</td>
           <td>$DescripcionHerramienta</td>
           <td>$PrestadoDocente</td>
           <td>$CursoAlumno</td>
           <td>$PrestadoAlumno</td>
           <td>$FechaHoraPrestamo</td>
            <td> $FechaHoraDevolucion</td>
           <td>$Turno</td>
             <td>$ObservacionPrestamo</td>
               <td>$EstadoPrestamo</td>
                 <td>$EstadodeServicio</td>
               <td>$CantStockHerramienta</td>
     
         
          
           <td><a href='verdetalles.php?valor=$id_herramientas'><img src='img/botonampliar.PNG' title='Mas Info'></a>
           <a href='modificar.php?valor=$id_herramientas'><img src='img/modificar.png' title='Modificar Herramienta'></a>
           <a href='prestamo.php?valor=$id_herramientas'><img src='img/prestamo.png' title='Prestar herramienta'></a>
           <a href='eliminar.php?valor=$id_herramientas'><img src='img/eliminar.png' title='Eliminar Herramienta'></a></td>
        </tr>";
}
echo "</tbody>  </div>";
?>

<tfoot>
      <tr>
         <td colspan="6">
      <?php
         $totalPag = ceil($total/$limit);
         $links = array();
         for( $i=1; $i<=$totalPag ; $i++)
         {
            $links[] = "<a href=\"?pag=$i\" class='linkpaginacion'>$i</a>"; 
         }
         echo implode(" - ", $links);
      ?>
         </td>
      </tr>
   </tfoot>
  </table> 
</div>
   <?php
}



function mostrar_tabla_herr_con_paginacion(){
 $Enlace=Conexion('basepanol');

// maximo por pagina
$limit = 7;

// pagina pedida


if (isset($_GET["pag"])) {
$pag = (int) $_GET["pag"];
} else {
$pag= "";
}
if ($pag < 1)
{
   $pag = 1;
}
$offset = ($pag-1) * $limit;


$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM herramientaspaniol LIMIT $offset, $limit";
$sqlTotal = "SELECT FOUND_ROWS() as total";

$resultado= mysqli_query($Enlace,$sql);
$rsTotal = mysqli_query($Enlace,$sqlTotal);

$rowTotal = mysqli_fetch_assoc($rsTotal);
// Total de registros sin limit
$total = $rowTotal["total"];

?>

<?php
echo "<div class='cajatabla'>
      <table>
        <thead>
        <tr>
          <td>CODIGO</th>
          <td>CANTIDAD STOCK</th>
          <td>NOMBRE</th>
            <td>MARCA</th>
          <td>MODELO</th>
          <td>UBICACION</th>
	         <td>ACCIONES PERMITIDAS</th>
          
        </tr>
        </thead>
        <tbody>
		
		";

while ($fila=mysqli_fetch_assoc($resultado)){ 
  // <link rel='stylesheet' href='css/estilos1.css'/> 
// echo "<table border='1' id='mostrartablaherramientas'>"; 
  $id_herramientas=$fila['id_herramientas']; 
  $presta = "presta";
  $devuelve = "devuelve";
$codigo=$fila['CODIGO'];  
  $cantidad=$fila['CANTIDAD'];
  $nombre=$fila['NOMBRE'];
  $marca=$fila['MARCA'];
  $modelo=$fila['MODELO'];
  $ubicacion=$fila['UBICACION'];

    

  echo "<tr>
           <td>$codigo</th>
           <td>$cantidad</th>
           <td>$nombre</th>
            <td>$marca</th>
           <td>$modelo</th>
           <td>$ubicacion</th>
       
            
           
           
           <td>
		   <a href='verdetalles.php?valor=$id_herramientas'><img src='img/botonampliar.PNG' title='Mas Info'></a>
           <a href='modificar.php?valor=$id_herramientas'><img src='img/modificar.png' title='Modificar Herramienta'></a>
           <a href='prueba.php?valor=$codigo'><img src='img/codigobarras.jpg' title='Generar Codigo de Barras'></a>           
           <a href='prestamoCB.php?valor=$id_herramientas & valor1=$presta'><img src='img/prestamo.png' title='Prestar herramienta'></a>
           <a href='prestamoCB.php?valor=$id_herramientas & valor1=$devuelve'><img src='img/convertir.png' title='Devolver herramienta'></a>
           <a href='eliminar.php?valor=$id_herramientas'><img src='img/eliminar.png' title='Eliminar Herramienta'></a>
		   </th>
        </tr>";
        
}
echo "</tbody>";
?>
<tfoot>
      <tr>
         <td colspan="6">
      <?php
         $totalPag = ceil($total/$limit);
         $links = array();
         for( $i=1; $i<=$totalPag ; $i++)
         {
            $links[] = "<a href=\"?pag=$i\" class='linkpaginacion'>$i</a>"; 
         }
         echo implode(" - ", $links);
      ?>
         </td>
      </tr>
   </tfoot>
  </table> 
</div>
   <?php
}


function MostrarEstadisticas($herramientaspaniol,$Desde, $Hasta, $Docente, $Situacion,$Alumno,$EnServicio,$NiveldeUso,$Turno,$ConObservaciones){


	$Desde=date("Y-m-d", strtotime($Desde));
$Hasta=date("Y-m-d", strtotime($Hasta));

	
	
 $Enlace=Conexion('basepanol');

// maximo por pagina
$limit = 7;

// pagina pedida


if (isset($_GET["pag"])) {
$pag = (int) $_GET["pag"];
} else {
$pag= "";
}
if ($pag < 1)
{
   $pag = 1;
}
$offset = ($pag-1) * $limit;


if($herramientaspaniol=='No Considerar'  AND $Docente=='No Considerar' AND $Situacion=='No Considerar' AND $Alumno=='No Considerar'  AND $EnServicio=='No Considerar'  AND  $NiveldeUso =='No Considerar' AND $Turno=='No Considerar'  AND $ConObservaciones=='No Considerar' AND $Desde !=='No Considerar' AND $Hasta !=='No Considerar' ) {
	$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM prestamo  where FechaHoraPrestamo= '$Desde' and  FechaHoraDevolucion = '$Hasta' LIMIT $offset, $limit";
}

if($herramientaspaniol !=='No Considerar'  AND $Docente=='No Considerar' AND $Situacion=='No Considerar' AND $Alumno=='No Considerar'  AND $EnServicio=='No Considerar'  AND  $NiveldeUso =='No Considerar' AND $Turno=='No Considerar'  AND $ConObservaciones=='No Considerar' AND $Desde !=='No Considerar' AND $Hasta !=='No Considerar') {
	$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM prestamo  where FechaHoraPrestamo= '$Desde' and  FechaHoraDevolucion = '$Hasta' AND DescripcionHerramienta = '$herramientaspaniol' LIMIT $offset, $limit";
}


if($herramientaspaniol=='No Considerar'  AND $Docente=='No Considerar' AND $Situacion=='No Considerar' AND $Alumno=='No Considerar'  AND $EnServicio=='No Considerar'  AND  $NiveldeUso =='Muy Solicitada' AND $Turno=='No Considerar'  AND $ConObservaciones=='No Considerar' AND $Desde !=='No Considerar' AND $Hasta !=='No Considerar' ) {
	
$sql = "SELECT DescripcionHerramienta, count( DescripcionHerramienta ) AS VecesSolicitada
FROM prestamo
where FechaHoraPrestamo= '$Desde' and  FechaHoraDevolucion = '$Hasta'
GROUP BY DescripcionHerramienta
ORDER BY 2 DESC
LIMIT $offset, $limit";

}



if($herramientaspaniol=='No Considerar'  AND $Docente=='No Considerar' AND $Situacion=='No Considerar' AND $Alumno=='No Considerar'  AND $EnServicio=='No Considerar'  AND  $NiveldeUso !=='No Considerar' AND $Turno=='No Considerar'  AND $ConObservaciones=='No Considerar' AND $Desde =='No Considerar' AND $Hasta =='No Considerar' ) {

if($NiveldeUso =='Muy Solicitada' ){
$sql = "SELECT DescripcionHerramienta ,count(DescripcionHerramienta ) AS VecesSolicitada
FROM prestamo
GROUP BY DescripcionHerramienta
ORDER BY 1 DESC
LIMIT $offset, $limit";
}

if($NiveldeUso =='Menos Solicitada'){
$sql = "SELECT DescripcionHerramienta ,count(DescripcionHerramienta ) AS VecesSolicitada
FROM prestamo
GROUP BY DescripcionHerramienta
ORDER BY 1 ASC
LIMIT $offset, $limit";
}
}

$sqlTotal = "SELECT FOUND_ROWS() as total";

$resultado= mysqli_query($Enlace,$sql);
$rsTotal = mysqli_query($Enlace,$sqlTotal);

$rowTotal = mysqli_fetch_assoc($rsTotal);
// Total de registros sin limit
$total = $rowTotal["total"];

?>

<?php


	
	

echo "<div class='cajatabla'>
      <table>
        <thead>
        <tr>
       
          <td>NOMBRE</th>
          <td>PRESTADA DESDE</th>
          <td>PRESTADA HASTA</th>
          <td>DOCENTE</th>
          <td>SITUACION</th>
          <td>ALUMNO</th>
          <td>TURNO</th>
          <td>EN SERVICIO</th>
              
          <td>OBSERVACIONES</th>
          
        </tr>
        </thead>
        <tbody>";

while ($fila=mysqli_fetch_assoc($resultado)){ 
  // <link rel='stylesheet' href='css/estilos1.css'/> 
// echo "<table border='1' id='mostrartablaherramientas'>"; 
  
    $CodigoHerramienta=$fila['CodigoHerramienta']; 
     $DescripcionHerramienta=$fila['DescripcionHerramienta'];




$FechaHoraPrestamo=$fila['FechaHoraPrestamo'];  
$FechaHoraPrestamo=date("d-m-Y", strtotime($FechaHoraPrestamo));


$FechaHoraDevolucion=$fila['FechaHoraDevolucion'];
$FechaHoraDevolucion=date("d-m-Y", strtotime($FechaHoraDevolucion));  
  
  
  $PrestadoDocente=$fila['PrestadoDocente'];
 
  $EstadoPrestamo=$fila['EstadoPrestamo'];
 $PrestadoAlumno=$fila['PrestadoAlumno'];
 
   $Turno=$fila['Turno'];
     $EstadodeServicio=$fila['EstadodeServicio'];
    $ObservacionPrestamo=$fila['ObservacionPrestamo'];

     
    



  echo "<tr>
          
           <td>$DescripcionHerramienta</td>
           <td>$FechaHoraPrestamo</td>
           <td>$FechaHoraDevolucion</td>
           <td>$PrestadoDocente</td>
           <td>$EstadoPrestamo</td>
           <td>$Turno</td>
           
           <td> $EstadodeServicio <td>
     <td>$ObservacionPrestamo <td>
           
        
           
           
            </tr>";
}
echo "</tbody>";
?>
<tfoot>
      <tr>
         <td colspan="6">
      <?php
         $totalPag = ceil($total/$limit);
         $links = array();
         for( $i=1; $i<=$totalPag ; $i++)
         {
            $links[] = "<a href=\"?pag=$i\" class='linkpaginacion'>$i</a>"; 
         }
         echo implode(" - ", $links);
      ?>
         </td>
      </tr>
   </tfoot>
  </table> 
</div>
   <?php



}



function MostrarNiveldeSolicitud($herramientaspaniol,$Desde, $Hasta, $Docente, $Situacion,$Alumno,$EnServicio,$NiveldeUso,$Turno,$ConObservaciones){





 $Enlace=Conexion('basepanol');

// maximo por pagina
$limit = 7;

// pagina pedida


if (isset($_GET["pag"])) {
$pag = (int) $_GET["pag"];
} else {
$pag= "";
}
if ($pag < 1)
{
   $pag = 1;
}
$offset = ($pag-1) * $limit;




if($herramientaspaniol=='No Considerar'  AND $Docente=='No Considerar' AND $Situacion=='No Considerar' AND $Alumno=='No Considerar'  AND $EnServicio=='No Considerar'  AND  $NiveldeUso =='Muy Solicitada' AND $Turno=='No Considerar'  AND $ConObservaciones=='No Considerar' AND $Desde !=='No Considerar' AND $Hasta !=='No Considerar' ) {
	
$sql = "SELECT DescripcionHerramienta, count( DescripcionHerramienta ) AS VecesSolicitada
FROM prestamo
where FechaHoraPrestamo= '$Desde' and  FechaHoraDevolucion = '$Hasta'
GROUP BY DescripcionHerramienta
ORDER BY 2 DESC
LIMIT $offset, $limit";

}



if($herramientaspaniol=='No Considerar'  AND $Docente=='No Considerar' AND $Situacion=='No Considerar' AND $Alumno=='No Considerar'  AND $EnServicio=='No Considerar'  AND  $NiveldeUso !=='No Considerar' AND $Turno=='No Considerar'  AND $ConObservaciones=='No Considerar' AND $Desde =='No Considerar' AND $Hasta =='No Considerar' ) {

if($NiveldeUso =='Muy Solicitada'){
$sql = "SELECT DescripcionHerramienta ,count(DescripcionHerramienta ) AS VecesSolicitada
FROM prestamo
GROUP BY DescripcionHerramienta
ORDER BY 2 DESC
LIMIT $offset, $limit";
}

if($NiveldeUso =='Menos Solicitada'){
$sql = "SELECT DescripcionHerramienta ,count(DescripcionHerramienta ) AS VecesSolicitada
FROM prestamo
GROUP BY DescripcionHerramienta
ORDER BY 1 ASC
LIMIT $offset, $limit";
}
}

$sqlTotal = "SELECT FOUND_ROWS() as total";

$resultado= mysqli_query($Enlace,$sql);
$rsTotal = mysqli_query($Enlace,$sqlTotal);

$rowTotal = mysqli_fetch_assoc($rsTotal);
// Total de registros sin limit
$total = $rowTotal["total"];

?>

<?php
echo "<div class='cajatabla'>
      <table>
        <thead>
        <tr>
       
          <td>NOMBRE</th>
          <td>PRESTADA DESDE</th>
          <td>PRESTADA HASTA</th>
          <td>DOCENTE</th>
          <td>SITUACION</th>
          <td>ALUMNO</th>
          <td>TURNO</th>
          <td>EN SERVICIO</th>
              
          <td>OBSERVACIONES</th>
          
        </tr>
        </thead>
        <tbody>";

while ($fila=mysqli_fetch_assoc($resultado)){ 
  // <link rel='stylesheet' href='css/estilos1.css'/> 
// echo "<table border='1' id='mostrartablaherramientas'>"; 
  
    $CodigoHerramienta=$fila['CodigoHerramienta']; 
     $DescripcionHerramienta=$fila['DescripcionHerramienta'];




$FechaHoraPrestamo=$fila['FechaHoraPrestamo'];  
$FechaHoraPrestamo=date("d-m-Y", strtotime($FechaHoraPrestamo));


$FechaHoraDevolucion=$fila['FechaHoraDevolucion'];
$FechaHoraDevolucion=date("d-m-Y", strtotime($FechaHoraDevolucion));  
  
  
  $PrestadoDocente=$fila['PrestadoDocente'];
 
  $EstadoPrestamo=$fila['EstadoPrestamo'];
 $PrestadoAlumno=$fila['PrestadoAlumno'];
 
   $Turno=$fila['Turno'];
     $EstadodeServicio=$fila['EstadodeServicio'];
    $ObservacionPrestamo=$fila['ObservacionPrestamo'];

     
    



  echo "<tr>
          
           <td>$DescripcionHerramienta</td>
           <td>$FechaHoraPrestamo</td>
           <td>$FechaHoraDevolucion</td>
           <td>$PrestadoDocente</td>
           <td>$EstadoPrestamo</td>
           <td>$Turno</td>
           
           <td> $EstadodeServicio <td>
     <td>$ObservacionPrestamo <td>
           
        
           
           
            </tr>";
}
echo "</tbody>";
?>
<tfoot>
      <tr>
         <td colspan="6">
      <?php
         $totalPag = ceil($total/$limit);
         $links = array();
         for( $i=1; $i<=$totalPag ; $i++)
         {
            $links[] = "<a href=\"?pag=$i\" class='linkpaginacion'>$i</a>"; 
         }
         echo implode(" - ", $links);
      ?>
         </td>
      </tr>
   </tfoot>
  </table> 
</div>
   <?php




}








//-----------------------------------------------------


function buscar(){
?>
  <div class="contenedorbuscar">
    <form method=POST action='resultadobusqueda.php'> 
      <div class="cajabuscar"><input class="textobuscar" type='text' name='busqueda' placeholder="Herramienta a buscar"></div>
      <div class="botonbuscar"><input class="boton" type="submit" value="BUSCAR" ></div>
    </form> 
  </div>
<?php
}
function buscarusuario(){
?>
  <div class="contenedorbuscar">
    <form method=POST action='resultadobusquedausuario.php'> 
      <div class="cajabuscar"><input class="textobuscar" type='text' name='busqueda' placeholder="Usuario a buscar"></div>
      <div class="botonbuscar"><input class="boton" type="submit" value="BUSCAR" ></div>
    </form> 
  </div>
<?php
}

 
 
 
function prestamo($id_herramientas,$CantidadEnStock,$descripcion,$fecha_Prestamo,$FechaDevolucion,$EstadoDev,$Docente,$Observaciones,$Alumno,$EstadodeServicio,$CantidadaPrestar,$FormaTicket,$ValorQR){
    $_SESSION['Alumnopdf']=$Alumno;
    $_SESSION['Docentepdf']=$Docente;
    $_SESSION['Descripcionpdf']=$descripcion;
    $_SESSION['CantPrestarpdf']=$CantidadaPrestar;
$consulta="INSERT INTO prestamo (IdHerramienta, DescripcionHerramienta, fechaHoraPrestamo, FechaHoraDevPrestamo, EstadoPrestamo, CantidadPrestada, CantStockHerramienta, ObservacionPrestamo, PrestadoAlumno, PrestadoDocente, EstadodeServicio) VALUES ('$id_herramientas', '$descripcion', '$fecha_Prestamo', '$FechaDevolucion', '$EstadoDev', '$CantidadaPrestar', '$CantidadEnStock', '$Observaciones', '$Alumno', '$Docente', '$EstadodeServicio')";
$link=Conexion('basepanol');
$R=Ejecutar_Consulta($link, $consulta);
/*if($R){
  ?>
  <script language='javascript'>
    alert('La consulta se ejecuto correctamente');
  </script>
  <script language='javascript'>
    location.href='PRUEBA TICKET/documento.php';
  </script>
  <?php
}
  else{
    ?>
    <script language='javascript'>
    alert('No se pudo modificar el registro');
    location.href='principal.php';
    </script>
    <?php
  }
  }*/
if ($FormaTicket=="ticket"){
    ?>
  <script language='javascript'>
    //location.href='PRUEBA TICKET/documento.php';
    location.href="principal.php";
    window.open('PRUEBA TICKET/documento.php');
  </script>
    <?php
  }//fin del if para ticket o qr
if ($FormaTicket=="qr"){
    ?>
  <script language='javascript'>
    location.href='<?php echo "indexqr.php?valor=$ValorQR" ?>';
  </script>
    <?php
  }//fin del if para ticket o qr
}//fin de la funcion

function vaciartabla( $Consulta) 

{

$link=Conexion('basepanol');
$R= Ejecutar_Consulta ($link, $Consulta);
if($R){
  ?>
  <script language='javascript'>
  alert('Se han eliminado todas las herramientas');
   location.href='principal.php';
  </script>
  
  <?php
}
  else{
    ?>
    <script language='javascript'>
    alert('Hubo un error al intentar eliminar las herramientas' );
  location.href='principal.php';
  </script>
    <?php
  }
}

function ACTUALIZAR_CANTIDAD($VectorHerram){
	$VectorHerram_1 = $VectorHerram[0];
	$VectorHerram_2 = $VectorHerram[1];
	$VectorHerram_3 = $VectorHerram[2];
	$VectorHerram_4 = $VectorHerram[3];
	$VectorHerram_5 = $VectorHerram[4];
	$VectorHerram_6 = $VectorHerram[5];
	$VectorHerram_7 = $VectorHerram[6];
	$VectorHerram_8 = $VectorHerram[7];
	$VectorHerram_9 = $VectorHerram[8];
	$VectorHerram_10 = $VectorHerram[9];
	
	/*herramienta 1*/
	$codigo1 = $VectorHerram_1[0];
	$cant_prestar1 = $VectorHerram_1[1];
	$presta = $VectorHerram_1[8];
	$devuelve = $VectorHerram_1[8];
	$consulta="SELECT * FROM herramientaspaniol where CODIGO = $codigo1"; //selecciona el id_herramientas de la base de datos y crea una consulta
	$link=Conexion('basepanol'); //conecta con la base de datos
	$R=Ejecutar_Consulta($link,$consulta); // ejecuta una consulta y crea una variable para alojar el resultado
	$herramienta1=mysqli_fetch_array($R);
	
	/*herramienta 2*/
	$codigo2 = $VectorHerram_2[0];
	$cant_prestar2 = $VectorHerram_2[1];
	$consulta2="SELECT * FROM herramientaspaniol where CODIGO = $codigo2"; //selecciona el id_herramientas de la base de datos y crea una consulta
	$R=Ejecutar_Consulta($link,$consulta2); // ejecuta una consulta y crea una variable para alojar el resultado
	$herramienta2=mysqli_fetch_array($R);
	
	/*herramienta 3*/
	$codigo3 = $VectorHerram_3[0];
	$cant_prestar3 = $VectorHerram_3[1];
	$consulta3="SELECT * FROM herramientaspaniol where CODIGO = $codigo3"; //selecciona el id_herramientas de la base de datos y crea una consulta
	$R=Ejecutar_Consulta($link,$consulta3); // ejecuta una consulta y crea una variable para alojar el resultado
	$herramienta3=mysqli_fetch_array($R);
	
	/*herramienta 4*/
	$codigo4 = $VectorHerram_4[0];
	$cant_prestar4 = $VectorHerram_4[1];
	$consulta4="SELECT * FROM herramientaspaniol where CODIGO = $codigo4"; //selecciona el id_herramientas de la base de datos y crea una consulta
	$R=Ejecutar_Consulta($link,$consulta4); // ejecuta una consulta y crea una variable para alojar el resultado
	$herramienta4=mysqli_fetch_array($R);
	
	/*herramienta 5*/
	$codigo5 = $VectorHerram_5[0];
	$cant_prestar5 = $VectorHerram_5[1];
	$consulta5="SELECT * FROM herramientaspaniol where CODIGO = $codigo5"; //selecciona el id_herramientas de la base de datos y crea una consulta
	$R=Ejecutar_Consulta($link,$consulta5); // ejecuta una consulta y crea una variable para alojar el resultado
	$herramienta5=mysqli_fetch_array($R);
	
	/*herramienta 6*/
	$codigo6 = $VectorHerram_6[0];
	$cant_prestar6 = $VectorHerram_6[1];
	$consulta6="SELECT * FROM herramientaspaniol where CODIGO = $codigo6"; //selecciona el id_herramientas de la base de datos y crea una consulta
	$R=Ejecutar_Consulta($link,$consulta6); // ejecuta una consulta y crea una variable para alojar el resultado
	$herramienta6=mysqli_fetch_array($R);
	
	/*herramienta 7*/
	$codigo7 = $VectorHerram_7[0];
	$cant_prestar7 = $VectorHerram_7[1];
	$consulta7="SELECT * FROM herramientaspaniol where CODIGO = $codigo7"; //selecciona el id_herramientas de la base de datos y crea una consulta
	$R=Ejecutar_Consulta($link,$consulta7); // ejecuta una consulta y crea una variable para alojar el resultado
	$herramienta7=mysqli_fetch_array($R);
	
	/*herramienta 8*/
	$codigo8 = $VectorHerram_8[0];
	$cant_prestar8 = $VectorHerram_8[1];
	$consulta8="SELECT * FROM herramientaspaniol where CODIGO = $codigo8"; //selecciona el id_herramientas de la base de datos y crea una consulta
	$R=Ejecutar_Consulta($link,$consulta8); // ejecuta una consulta y crea una variable para alojar el resultado
	$herramienta8=mysqli_fetch_array($R);
	
	/*herramienta 9*/
	$codigo9 = $VectorHerram_9[0];
	$cant_prestar9 = $VectorHerram_9[1];
	$consulta9="SELECT * FROM herramientaspaniol where CODIGO = $codigo9"; //selecciona el id_herramientas de la base de datos y crea una consulta
	$R=Ejecutar_Consulta($link,$consulta9); // ejecuta una consulta y crea una variable para alojar el resultado
	$herramienta9=mysqli_fetch_array($R);
	
	/*herramienta 10*/
	$codigo10 = $VectorHerram_10[0];
	$cant_prestar10 = $VectorHerram_10[1];
	$consulta10="SELECT * FROM herramientaspaniol where CODIGO = $codigo10"; //selecciona el id_herramientas de la base de datos y crea una consulta
	$R=Ejecutar_Consulta($link,$consulta10); // ejecuta una consulta y crea una variable para alojar el resultado
	$herramienta10=mysqli_fetch_array($R);
	
	if($presta =="presta"){
		$total = $herramienta1['CANTIDAD'] - $cant_prestar1;
		$total2 = $herramienta2['CANTIDAD'] - $cant_prestar2;
		$total3 = $herramienta3['CANTIDAD'] - $cant_prestar3;
		$total4 = $herramienta4['CANTIDAD'] - $cant_prestar4;
		$total5 = $herramienta5['CANTIDAD'] - $cant_prestar5;
		$total6 = $herramienta6['CANTIDAD'] - $cant_prestar6;
		$total7 = $herramienta7['CANTIDAD'] - $cant_prestar7;
		$total8 = $herramienta8['CANTIDAD'] - $cant_prestar8;
		$total9 = $herramienta9['CANTIDAD'] - $cant_prestar9;
		$total10 = $herramienta10['CANTIDAD'] - $cant_prestar10;
	}else{
		$total = $herramienta1['CANTIDAD'] + $cant_prestar1;
		$total2 = $herramienta2['CANTIDAD'] + $cant_prestar2;
		$total3 = $herramienta3['CANTIDAD'] + $cant_prestar3;
		$total4 = $herramienta4['CANTIDAD'] + $cant_prestar4;
		$total5 = $herramienta5['CANTIDAD'] + $cant_prestar5;
		$total6 = $herramienta6['CANTIDAD'] + $cant_prestar6;
		$total7 = $herramienta7['CANTIDAD'] + $cant_prestar7;
		$total8 = $herramienta8['CANTIDAD'] + $cant_prestar8;
		$total9 = $herramienta9['CANTIDAD'] + $cant_prestar9;
		$total10 = $herramienta10['CANTIDAD'] + $cant_prestar10;
	}
	
	
	if($total < 0 && total > $herramienta1['CANTIDAD']  || $total2 < 0 && total2 > $herramienta2['CANTIDAD'] || $total3 < 0 && total3 > $herramienta3['CANTIDAD'] || $total4 < 0 && total4 > $herramienta4['CANTIDAD'] || $total5 < 0 && total5 > $herramienta5['CANTIDAD'] || $total6 < 0 && total6 > $herramienta6['CANTIDAD'] || $total7 < 0 && total7 > $herramienta7['CANTIDAD'] || $total8 < 0 && total8 > $herramienta8['CANTIDAD'] || $total9 < 0 && total9 > $herramienta9['CANTIDAD'] || $total10 < 0 && total10 > $herramienta10['CANTIDAD'] ){
		echo '<script language="javascript">
		alert("La cantidad a prestar de una de las herramientas supera el stock total, porfavor revise los Datos ingresados");
		location.href ="prestamoCB.php";
	</script>';
	}else{
		/*herramienta 1*/
		$updateHerramienta1="UPDATE herramientaspaniol SET CANTIDAD = $total WHERE CODIGO = $codigo1"; //selecciona el id_herramientas de la base de datos y crea una consulta
		$R= Ejecutar_Consulta ($link, $updateHerramienta1);
		/*herramienta 2*/
		$updateHerramienta2="UPDATE herramientaspaniol SET CANTIDAD = $total2 WHERE CODIGO = $codigo2"; //selecciona el id_herramientas de la base de datos y crea una consulta
		$R2= Ejecutar_Consulta ($link, $updateHerramienta2);
		/*herramienta 3*/
		$updateHerramienta3="UPDATE herramientaspaniol SET CANTIDAD = $total3 WHERE CODIGO = $codigo3"; //selecciona el id_herramientas de la base de datos y crea una consulta
		$R3= Ejecutar_Consulta ($link, $updateHerramienta3);
		/*herramienta 4*/
		$updateHerramienta4="UPDATE herramientaspaniol SET CANTIDAD = $total4 WHERE CODIGO = $codigo4"; //selecciona el id_herramientas de la base de datos y crea una consulta
		$R4= Ejecutar_Consulta ($link, $updateHerramienta4);
		/*herramienta 5*/
		$updateHerramienta5="UPDATE herramientaspaniol SET CANTIDAD = $total5 WHERE CODIGO = $codigo5"; //selecciona el id_herramientas de la base de datos y crea una consulta
		$R5= Ejecutar_Consulta ($link, $updateHerramienta5);
		/*herramienta 6*/
		$updateHerramienta6="UPDATE herramientaspaniol SET CANTIDAD = $total6 WHERE CODIGO = $codigo6"; //selecciona el id_herramientas de la base de datos y crea una consulta
		$R6= Ejecutar_Consulta ($link, $updateHerramienta6);
		/*herramienta 7*/
		$updateHerramienta7="UPDATE herramientaspaniol SET CANTIDAD = $total7 WHERE CODIGO = $codigo7"; //selecciona el id_herramientas de la base de datos y crea una consulta
		$R7= Ejecutar_Consulta ($link, $updateHerramienta7);
		/*herramienta 8*/
		$updateHerramienta8="UPDATE herramientaspaniol SET CANTIDAD = $total8 WHERE CODIGO = $codigo8"; //selecciona el id_herramientas de la base de datos y crea una consulta
		$R8= Ejecutar_Consulta ($link, $updateHerramienta8);
		/*herramienta 9*/
		$updateHerramienta9="UPDATE herramientaspaniol SET CANTIDAD = $total9 WHERE CODIGO = $codigo9"; //selecciona el id_herramientas de la base de datos y crea una consulta
		$R9= Ejecutar_Consulta ($link, $updateHerramienta9);
		/*herramienta 10*/
		$updateHerramienta10="UPDATE herramientaspaniol SET CANTIDAD = $total10 WHERE CODIGO = $codigo10"; //selecciona el id_herramientas de la base de datos y crea una consulta
		$R10= Ejecutar_Consulta ($link, $updateHerramienta10);
		/*se inserta el prestamo*/
		INSERT_PRESTAMO($VectorHerram);
		header('location:principal.php');
	}
	
}

/*MetaPrestamoCB*/
function INSERT_PRESTAMO($VectorHerram){
$link=Conexion('basepanol'); //conecta con la base de datos
$VectorHerram_1 = $VectorHerram[0];
$VectorHerram_2 = $VectorHerram[1];
$VectorHerram_3 = $VectorHerram[2];
$VectorHerram_4 = $VectorHerram[3];
$VectorHerram_5 = $VectorHerram[4];
$VectorHerram_6 = $VectorHerram[5];
$VectorHerram_7 = $VectorHerram[6];
$VectorHerram_8 = $VectorHerram[7];
$VectorHerram_9 = $VectorHerram[8];
$VectorHerram_10 = $VectorHerram[9];
if($VectorHerram_1[8] == "presta"){
/*Se carga los Datos de la herramienta 1 si existe*/
if($VectorHerram_1!==''){
$consulta="INSERT INTO prestamo (
CodigoHerramienta ,
CantidadPrestada ,
DescripcionHerramienta ,
FechaHoraDevolucion ,
PrestadoDocente,
PrestadoAlumno,
EstadodeServicio,
FechaHoraPrestamo
)
VALUES (
'$VectorHerram_1[0]', 
'$VectorHerram_1[1]', 
'$VectorHerram_1[2]', 
'$VectorHerram_1[3]', 
'$VectorHerram_1[4]', 
'$VectorHerram_1[5]', 
'$VectorHerram_1[6]', 
'$VectorHerram_1[7]'
) ";
$R= Ejecutar_Consulta ($link, $consulta);
}
/*Se carga los Datos de la herramienta 2 si existe*/
if($VectorHerram_2[0]!==''){
$consulta2="INSERT INTO prestamo (
CodigoHerramienta ,
CantidadPrestada ,
DescripcionHerramienta ,
FechaHoraDevolucion ,
PrestadoDocente,
PrestadoAlumno,
EstadodeServicio,
FechaHoraPrestamo
)
VALUES (
'$VectorHerram_2[0]', 
'$VectorHerram_2[1]', 
'$VectorHerram_2[2]', 
'$VectorHerram_2[3]', 
'$VectorHerram_2[4]', 
'$VectorHerram_2[5]', 
'$VectorHerram_2[6]', 
'$VectorHerram_2[7]'
) ";

$R2= Ejecutar_Consulta ($link, $consulta2);
}
/*Se carga los Datos de la herramienta 3 si existe*/
if($VectorHerram_3[0]!==''){
$consulta3="INSERT INTO prestamo (
CodigoHerramienta ,
CantidadPrestada ,
DescripcionHerramienta ,
FechaHoraDevolucion ,
PrestadoDocente,
PrestadoAlumno,
EstadodeServicio,
FechaHoraPrestamo
)
VALUES (
'$VectorHerram_3[0]', 
'$VectorHerram_3[1]', 
'$VectorHerram_3[2]', 
'$VectorHerram_3[3]', 
'$VectorHerram_3[4]', 
'$VectorHerram_3[5]', 
'$VectorHerram_3[6]', 
'$VectorHerram_3[7]'
) ";

$R3= Ejecutar_Consulta ($link, $consulta3);
}
/*Se carga los Datos de la herramienta 4 si existe*/
if($VectorHerram_4[0]!==''){
$consulta4="INSERT INTO prestamo (
CodigoHerramienta ,
CantidadPrestada ,
DescripcionHerramienta ,
FechaHoraDevolucion ,
PrestadoDocente,
PrestadoAlumno,
EstadodeServicio,
FechaHoraPrestamo
)
VALUES (
'$VectorHerram_4[0]', 
'$VectorHerram_4[1]', 
'$VectorHerram_4[2]', 
'$VectorHerram_4[3]', 
'$VectorHerram_4[4]', 
'$VectorHerram_4[5]', 
'$VectorHerram_4[6]', 
'$VectorHerram_4[7]'
) ";

$R4= Ejecutar_Consulta ($link, $consulta4);
}
/*Se carga los Datos de la herramienta 5 si existe*/
if($VectorHerram_5[0]!==''){
$consulta5="INSERT INTO prestamo (
CodigoHerramienta ,
CantidadPrestada ,
DescripcionHerramienta ,
FechaHoraDevolucion ,
PrestadoDocente,
PrestadoAlumno,
EstadodeServicio,
FechaHoraPrestamo
)
VALUES (
'$VectorHerram_5[0]', 
'$VectorHerram_5[1]', 
'$VectorHerram_5[2]', 
'$VectorHerram_5[3]', 
'$VectorHerram_5[4]', 
'$VectorHerram_5[5]', 
'$VectorHerram_5[6]', 
'$VectorHerram_5[7]'
) ";

$R5= Ejecutar_Consulta ($link, $consulta5);
}

/*Se carga los Datos de la herramienta 6 si existe*/
if($VectorHerram_6[0]!==''){
$consulta6="INSERT INTO prestamo (
CodigoHerramienta ,
CantidadPrestada ,
DescripcionHerramienta ,
FechaHoraDevolucion ,
PrestadoDocente,
PrestadoAlumno,
EstadodeServicio,
FechaHoraPrestamo
)
VALUES (
'$VectorHerram_6[0]', 
'$VectorHerram_6[1]', 
'$VectorHerram_6[2]', 
'$VectorHerram_6[3]', 
'$VectorHerram_6[4]', 
'$VectorHerram_6[5]', 
'$VectorHerram_6[6]', 
'$VectorHerram_6[7]'
) ";

$R6= Ejecutar_Consulta ($link, $consulta6);
}

/*Se carga los Datos de la herramienta 3 si existe*/
if($VectorHerram_7[0]!==''){
$consulta7="INSERT INTO prestamo (
CodigoHerramienta ,
CantidadPrestada ,
DescripcionHerramienta ,
FechaHoraDevolucion ,
PrestadoDocente,
PrestadoAlumno,
EstadodeServicio,
FechaHoraPrestamo
)
VALUES (
'$VectorHerram_7[0]', 
'$VectorHerram_7[1]', 
'$VectorHerram_7[2]', 
'$VectorHerram_7[3]', 
'$VectorHerram_7[4]', 
'$VectorHerram_7[5]', 
'$VectorHerram_7[6]', 
'$VectorHerram_7[7]'
) ";

$R7= Ejecutar_Consulta ($link, $consulta7);
}

/*Se carga los Datos de la herramienta 3 si existe*/
if($VectorHerram_8[0]!==''){
$consulta8="INSERT INTO prestamo (
CodigoHerramienta ,
CantidadPrestada ,
DescripcionHerramienta ,
FechaHoraDevolucion ,
PrestadoDocente,
PrestadoAlumno,
EstadodeServicio,
FechaHoraPrestamo
)
VALUES (
'$VectorHerram_8[0]', 
'$VectorHerram_8[1]', 
'$VectorHerram_8[2]', 
'$VectorHerram_8[3]', 
'$VectorHerram_8[4]', 
'$VectorHerram_8[5]', 
'$VectorHerram_8[6]', 
'$VectorHerram_8[7]'
) ";

$R8= Ejecutar_Consulta ($link, $consulta8);
}

/*Se carga los Datos de la herramienta 3 si existe*/
if($VectorHerram_9[0]!==''){
$consulta9="INSERT INTO prestamo (
CodigoHerramienta ,
CantidadPrestada ,
DescripcionHerramienta ,
FechaHoraDevolucion ,
PrestadoDocente,
PrestadoAlumno,
EstadodeServicio,
FechaHoraPrestamo
)
VALUES (
'$VectorHerram_9[0]', 
'$VectorHerram_9[1]', 
'$VectorHerram_9[2]', 
'$VectorHerram_9[3]', 
'$VectorHerram_9[4]', 
'$VectorHerram_9[5]', 
'$VectorHerram_9[6]', 
'$VectorHerram_9[7]'
) ";

$R9= Ejecutar_Consulta ($link, $consulta9);
}

/*Se carga los Datos de la herramienta 3 si existe*/
if($VectorHerram_10[0]!==''){
$consulta10="INSERT INTO prestamo (
CodigoHerramienta ,
CantidadPrestada ,
DescripcionHerramienta ,
FechaHoraDevolucion ,
PrestadoDocente,
PrestadoAlumno,
EstadodeServicio,
FechaHoraPrestamo
)
VALUES (
'$VectorHerram_10[0]', 
'$VectorHerram_10[1]', 
'$VectorHerram_10[2]', 
'$VectorHerram_10[3]', 
'$VectorHerram_10[4]', 
'$VectorHerram_10[5]', 
'$VectorHerram_10[6]', 
'$VectorHerram_10[7]'
) ";

$R10= Ejecutar_Consulta ($link, $consulta10);
}
}
else if($VectorHerram_1[8] == "devuelve"){
	/*Herramienta 1*/
	$consultareg="SELECT * FROM prestamo where CODIGO = $VectorHerram_1[0]"; //selecciona el id_herramientas de la base de datos y crea una consulta
	$R=Ejecutar_Consulta($link,$consultareg); // ejecuta una consulta y crea una variable para alojar el resultado
	$registro=mysqli_fetch_array($R);
	$totalRH1 = $VectorHerram_1[1] - $registro['CantidadPrestada'];
	if($VectorHerram_1!==''){
	$updateh1="UPDATE prestamo SET CantidadPrestada = $totalRH1 WHERE CodigoHerramienta = $VectorHerram_1[0]"; //selecciona el id_herramientas de la base de datos y crea una consulta
	$R2= Ejecutar_Consulta ($link, $updateh1);
	}
}
/*Se comprueba que la consulta se realizo*/

}


?>