<!DOCTYPE html>
<html lang="en">
<?php
include_once dirname(__DIR__) . '/../config/config.php';
include_once URL_APP . '/views/custom/header.php';
include_once URL_APP . '/views/custom/navbar.php';
?>

<body>
    <div id="candida">
        <video src="<?php echo URL_IMAGENES ?>/fondo.mp4" autoplay="true" muted="true" loop="true"></video>
        <section id="sectioncan" class="sect">
            <div class="fico-candidatos">
                <div class="fico">
                    <img src="<?php echo URL_IMAGENES ?>/fico.jpg">
                </div>
                <div class="fico-details">
                    <h3>Federico Gutiérrez</h3>
                    </a>
                    <p class="fico-description">Federico Gutiérrez es un político colombiano que fue alcalde de Medellín entre los años 2016 y 2019. Antes de su carrera política, trabajó como abogado y se desempeñó como director de seguridad en la misma ciudad.</p>
                </div>
            </div>
            <div class="petro-candidatos">
                <div class="petro">
                    <img src="<?php echo URL_IMAGENES ?>/petro.jpg">
                </div>
                <div class="petro-details">
                    <h3>Gustavo Petro</h3>
                    </a>
                    <p class="petro-description">Gustavo Petro es un político y economista colombiano fue senador y representante a la Cámara por diferentes partidos de izquierda Petro se destacó por su lucha contra la corrupción y la defensa de los derechos humanos y los derechos de los trabajadores en Colombia.</p>
                </div>
            </div>
            <div class="fajardo-candidatos">
                <div class="fajardo">
                    <img src="<?php echo URL_IMAGENES ?>/fajardo.jpg">
                </div>
                <div class="fajardo-details">
                    <h3>Sergio Fajardo</h3>
                    </a>
                    <p class="fajardo-description">Sergio Fajardo es un matemático, político y académico colombiano. Se desempeñó como rector de la Universidad de Antioquia y como alcalde de Medellín.</p>
                </div>
            </div>
            <div class="rodolfo-candidatos">
                <div class="rodolfo">
                    <img src="<?php echo URL_IMAGENES ?>/rodolfo.jpg">
                </div>
                <div class="rodolfo-details">
                    <h3>Rodolfo Hernández</h3>
                    </a>
                    <p class="rodolfo-description">Rodolfo Hernández fue un médico y empresario colombiano que se desempeñó como alcalde de la ciudad de Bucaramanga antes de su incursión en la política nacional.</p>
                </div>
            </div>
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