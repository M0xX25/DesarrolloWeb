<!DOCTYPE html>
<html lang="en">
<?php
include_once dirname(__DIR__) . '/../config/config.php';
include_once URL_APP . '/views/custom/header.php';
include_once URL_APP . '/views/custom/navbar.php';
?>

<body class="productos">
    <center style="margin-top: 20px">
        <div class="product-container">
            <div class="product-image">
                <img src="<?php echo URL_IMAGENES ?>/tesla.jpg">
            </div>
            <div class="product-details">
                <a href="<?php echo URL_VIEWS ?>/producto1.php">
                    <h3>Tesla 2023 Model 3</h3>
                </a>
                <p class="product-description">Este Automovil 2023 Model 3 es el auto perfecto para aquellos que buscan un vehículo confiable, eficiente y seguro. Con tan solo 25,000 kilómetros recorridos, este auto está en excelentes condiciones y cuenta con todas las comodidades necesarias para un manejo cómodo y seguro...</p>
                <p class="product-price">$559'856.700,000</p>
                <a href="<?php echo URL_VIEWS ?>/producto1.php"><button class="add-to-cart">Ver mas</button></a>
            </div>
        </div>

        <div class="product-container">
            <div class="product-image">
                <img src="<?php echo URL_IMAGENES ?>/anillo.png">
            </div>
            <div class="product-details">
                <a href="<?php echo URL_VIEWS ?>/producto2.php">
                    <h3>Anillo Trinity Cerámica Clásico</h3>
                </a>
                <p class="product-description">Este elegante anillo está diseñado para aquellos que buscan una pieza única y sofisticada para complementar su estilo personal. Fabricado con cerámica de alta calidad, el Anillo Trinity presenta un diseño clásico de tres bandas entrelazadas en oro, plata y negro...</p>
                <p class="product-price">$7'539.795,94</p>
                <a href="<?php echo URL_VIEWS ?>/producto2.php"><button class="add-to-cart">Ver mas</button></a>
            </div>
        </div>

        <div class="product-container">
            <div class="product-image">
                <img src="<?php echo URL_IMAGENES ?>/televisor.png">
            </div>
            <div class="product-details">
                <a href="<?php echo URL_VIEWS ?>/producto3.php">
                    <h3>Televisor Samsung 65" Smart TV OLED UHD 4K QN65S95BA</h3>
                </a>
                <p class="product-description">Disfruta del TV SAMSUNG OLED 65” S95B, la primera pantalla OLED con certificación
                    Pantone*, te llevara del negro absoluto al brillo intenso en todas las escenas con una resolución
                    4K, su diseño es súper......</p>
                <p class="product-price">$13'999,900</p>
                <a href="<?php echo URL_VIEWS ?>/producto3.php"><button class="add-to-cart">Ver mas</button></a>
            </div>
        </div>
    </center>
</body>
<?php

include_once URL_APP . '/views/custom/footer.php';

?>

</html>