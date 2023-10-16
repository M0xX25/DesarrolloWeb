<!DOCTYPE html>
<html lang="en">
<?php
include_once dirname(__DIR__) . '/../config/config.php';
include_once URL_APP . '/views/custom/header.php';
include_once URL_APP . '/views/custom/navbar.php';
?>

<body>
  <div class="index">
    <center>
      <section id="section" class="sect">
        <video src="<?php echo URL_IMAGENES ?>/fondo.mp4" autoplay="true" muted="true" loop="true"></video>
        <h1>ELECCIONES PRESIDENCIALES 2022</h1>
        <section class="noticias">
          <div class="noticia">
            <img src="<?php echo URL_IMAGENES ?>/noticia1.jpg" alt="Noticia">
            <div class="texto">
              <h2>¡Histórico! Gustavo Petro gana las elecciones presidenciales de Colombia</h2>
              <p>En una elección histórica, Gustavo Petro se convierte en el primer presidente de izquierda en la historia de Colombia. Con una plataforma centrada en la justicia social y la lucha contra la corrupción, Petro ha ganado el apoyo de millones de colombianos que buscan un cambio real en el país. La victoria de Petro marca un momento trascendental en la historia política de Colombia y abre una nueva era de esperanza para el pueblo colombiano.</p>
            </div>
          </div>
        </section>
      </section>
    </center>
  </div>
</body>
<?php

include_once URL_APP . '/views/custom/footer.php';

?>

<script>
  var video = document.querySelector('video');
  video.playbackRate = 0.6;
</script>

</html>