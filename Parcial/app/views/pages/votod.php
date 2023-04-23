<!DOCTYPE html>
<html lang="en">
<?php
include_once dirname(__DIR__) . '/../config/config.php';
include_once URL_APP . '/views/custom/header.php';
include_once URL_APP . '/views/custom/navbar.php';
?>

<body class="votod">
  <section id="section" class="sect">
    <video src="<?php echo URL_IMAGENES ?>/fondo.mp4" autoplay="true" muted="true" loop="true"></video>
    <h1>ELECCIONES PRESIDENCIALES 2022</h1>
    <form class="votar" action="procesar_formulario.php" method="POST">
      <ul class="horizontal-list">
        <li id="identificacion">
          <h2>Identificacion</h2>
          <div id="informacion">
            <label for="cedula">Cedula</label></br>
            <input type="number" id="cedula" name="cedula" required pattern="[0-9]+" /></br>

            <label for="fecha-expedicion">Fecha de expedicion</label></br>
            <input type="date" id="fecha-expedicion" name="fecha-expedicion" required /></br>
          </div>
        </li>
        <li id="personal">
          <h2>Informacion Personal</h2>
          <label for="nombre">Nombres</label></br>
          <input id="nombre" type="text" name="nombre" pattern="[A-Za-zÁ-ú ]+" required onkeypress="soloLetras(event)" /></br>

          <label for="apellido">Apellidos</label></br>
          <input id="apellido" type="text" name="apellido" pattern="[A-Za-zÁ-ú ]+" required onkeypress="soloLetras(event)" /></br>
        </li>
        <li id="votacionform">
          <div id="formvoto">
            <h2>Candidato a votar</h2>
            <ul>
              <li>
                <div class="sectvotacandi">
                  <label for="petro">
                    <input type="radio" id="votopetro" name="voto" value="Petro">
                    Gustavo Petro</br>
                    <img id="imagenvoto" src="<?php echo URL_IMAGENES ?>/petro.jpg"></br>
                  </label>
                </div>
              </li>
              <li>
                <div class="sectvotacandi">
                  <label for="rodolfo">
                    <input type="radio" id="votorodolfo" name="voto" value="Rodolfo">
                    Rodolfo Hernandez</br>
                    <img id="imagenvoto" src="<?php echo URL_IMAGENES ?>/rodolfo.jpg"></br>
                  </label>
                </div>
              </li>
              <li>
                <div class="sectvotacandi">
                  <label for="fico">
                    <input type="radio" id="votofico" name="voto" value="Fico">
                    Federico Gutierrez</br>
                    <img id="imagenvoto" src="<?php echo URL_IMAGENES ?>/fico.jpg"></br>
                  </label>
                </div>
              </li>
              <li>
                <div class="sectvotacandi">
                  <label for="fajardo">
                    <input type="radio" id="votofajardo" name="voto" value="Fajardo">
                    Sergio Fajardo</br>
                    <img id="imagenvoto" src="<?php echo URL_IMAGENES ?>/fajardo.jpg">
                  </label>
                </div>
              </li>
            </ul>
          </div>
        </li>
      </ul>
      <div id="enviarform">
        <input type="submit" value="Enviar" />
      </div>
    </form>
  </section>
</body>
<?php

include_once URL_APP . '/views/custom/footer.php';

?>

<script>
  var video = document.querySelector('video');
  video.playbackRate = 0.6;
</script>

</html>