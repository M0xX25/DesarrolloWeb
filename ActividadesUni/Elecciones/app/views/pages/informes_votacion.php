<!DOCTYPE html>
<html lang="en">

<?php
include_once dirname(__DIR__) . '/../config/config.php';
include_once URL_APP . '/views/custom/header.php';
include_once URL_APP . '/views/custom/navbar.php';
include_once URL_APP . '/views/pages/informes_votacion.php';
?>

<body>
    <video src="<?php echo URL_IMAGENES ?>/fondo.mp4" autoplay="true" muted="true" loop="true"></video>
    <section id="section" class="sect">
        <div class="resultados">
            <h1> Resultados:</h1>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "parcial";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            $sqlpetro = "SELECT voto FROM votos WHERE id=1";
            $resultadopetro = mysqli_query($conn, $sqlpetro);
            $rowpetro = mysqli_fetch_assoc($resultadopetro);

            $sqlrodolfo = "SELECT voto FROM votos WHERE id=2";
            $resultadorodolfo = mysqli_query($conn, $sqlrodolfo);
            $rowrodolfo = mysqli_fetch_assoc($resultadorodolfo);

            $sqlfico = "SELECT voto FROM votos WHERE id=3";
            $resultadofico = mysqli_query($conn, $sqlfico);
            $rowfico = mysqli_fetch_assoc($resultadofico);

            $sqlfajardo = "SELECT voto FROM votos WHERE id=4";
            $resultadofajardo = mysqli_query($conn, $sqlfajardo);
            $rowfajardo = mysqli_fetch_assoc($resultadofajardo);

            $conn->close();
            ?>
            <ul class="horizontal-list-result">
                <li>
                    <div id="infogustavoyrodolfo">
                        <p> Gustavo Petro: <?= $rowpetro['voto'] ?> </br> <img id='imagenvotoresult' src="<?= URL_IMAGENES ?>/petro.jpg"> </br></p>
                        <p> Rodolfo Hernandez: <?= $rowrodolfo['voto'] ?> </br> <img id='imagenvotoresult' src="<?= URL_IMAGENES ?>/Rodolfo.jpg"> </br></p>
                    </div>
                </li>
                <li>
                    <div id="infoficoyfajardo">
                        <p> Federico Gutierrez: <?= $rowfico['voto'] ?> </br> <img id='imagenvotoresult' src="<?= URL_IMAGENES ?>/fico.jpg"> </br></p>
                        <p> Sergio Fajardo: <?= $rowfajardo['voto'] ?> </br> <img id='imagenvotoresult' src="<?= URL_IMAGENES ?>/fajardo.jpg"> </br></p>
                    </div>
                </li>
                <li>
                    <canvas id="barras">
                        <script>
                            var canvas = document.getElementById('barras');

                            // Crear una instancia de la gráfica de barras
                            var graficaBarras = new Chart(canvas, {
                                type: 'bar',
                                data: {
                                    labels: ['Candidato 1', 'Candidato 2', 'Candidato 3', 'Candidato 4'],
                                    datasets: [{
                                        label: 'Votos',
                                        data: [120, 75, 50, 30],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>

                    </canvas>
                </li>
            </ul>
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