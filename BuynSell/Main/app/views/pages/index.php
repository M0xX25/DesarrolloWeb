<!DOCTYPE html>
<html lang="en">
<?php
  include_once dirname(__DIR__) . '/../config/config.php';
  include_once URL_APP . '/views/custom/header.php';
  include_once URL_APP . '/views/custom/navbar.php';
?>
<body>
<div class="contenedor">
  <div id="carouselExampleControls" class="carousel slide my-carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo URL_IMAGENES?>/all.png" class="d-block w-100" alt="Carrusel1">
        <div class="carousel-caption d-none d-md-block">
      </div>
      <div class="carousel-item">
      <img src="<?php echo URL_IMAGENES?>anillo.png" class="d-block w-100" alt="Carrusel1">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
      <img src="<?php echo URL_IMAGENES?>tesla.jpg" class="d-block w-100" alt="Carrusel1">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div> 
<div class="contenedor2">
<div class="columna">
            <div class="tarjeta">
                <h2>Anillo Trinity Cerámica Clásico</h2>
                <p>Descripción de la tarjeta.</p>
            </div>
        </div>
        <div class="columna">
            <div class="tarjeta">
                <h2>Televisor Samsung 65" Smart TV OLED UHD 4K QN65S95BA</h2>
                <p>Descripción de la tarjeta.</p>
               <a href="<?php echo URL_VIEWS?>/productos.php"><button class="add-to-cart-center" style="text-align: center">Ver productos</button></a>
            </div>
        </div>
        <div class="columna">
            <div class="tarjeta">
                <h2>2023 Model 3</h2>
                <p>Descripción de la tarjeta.</p>
            </div>
        </div>
</div>
<?php
include_once URL_APP . '/views/custom/footer.php';
?>
</body>
</html>