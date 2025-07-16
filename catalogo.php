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
            <a class="nav-link active" aria-current="page" href="index.html"><i class="fa-solid fa-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="playSound()"> <i class="fa-solid fa-cart-shopping"></i> Carrito de compras</a>
             <audio id="clickSound" src="emuo.mp3" preload="auto"></audio>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="playSound()"> <i class="fa-solid fa-user"></i> Usuario</a>
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

      <h1>Teiwaz Sahumerios</h1>
      <h2 id="frase-aleatoria"></h2>
    </header>

   <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

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
  
</body>
<script src="js/main.js"></script>
<script src="js/bootstrap.js"></script>
<script>
  function playSound() {
    const audio = document.getElementById("clickSound");
    audio.currentTime = 0; // rewind to start
    audio.play();
  }
</script>
</html>
