<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Descripción del producto - Televisor Samsung 65" Smart TV OLED UHD 4K QN65S95BA</title>
</head>
<?php
    include_once dirname(__DIR__) . '/../config/config.php';
    include_once URL_APP . '/views/custom/header.php';
    include_once URL_APP . '/views/custom/navbar.php';
?>
<body>	
	<body>
    <main>
        <div class="producto">
            <div class="imagen">
                <img src="<?php echo URL_IMAGENES?>/televisor.png" alt="TelevisorSamsung">
            </div>
            <div class="informacion">
                <h1>Televisor Samsung 65" Smart TV OLED UHD 4K QN65S95BA</h1>
                <p class="precio">$13'999.900</p>
                <p class="descripcion">Disfruta del TV SAMSUNG OLED 65” S95B, la primera pantalla OLED con certificación
                    Pantone*, te llevara del negro absoluto al brillo intenso en todas las escenas con una resolución
                    4K, su diseño es súper delgado y combinará con tus espacios, te sumergirás en las escenas gracias al
                    sonido inmersivo de la tecnologia Dolby Atmos</p>
                <div class="caracteristicas">
                    <h2>Especificaiones Tecnicas</h2>
                    <ul>
                        <li>EAN 8806094769654</li>
                        <li>Marca SAMSUNG</li>
                        <li>Garantía 12 meses</li>                       
                        <li>Material principal PLASTICO</li>                       
                        <li>Tecnología OLED</li>                      
                        <li>Peso del producto (kg) 15.2 kg</li>                      
                        <li>Color Principal Plateado</li>                     
                        <li>WI-FI Si</li>                   
                        <li>Resolución UHD</li>                   
                        <li>Número de entradas HDMI 4</li>                    
                        <li>Smart TV Si</li>                 
                        <li>Pulgadas 65</li> 
                        <li>Bluetooth Si</li>
                        <li>Envío Gratis Si</li>
                        <li>Dimensiones sin base cm (AltoxAnchoxProfundidad) 83,17 X 144,43 X 3,99 cm</li>
                        <li>Entrada coaxial Si</li>
                        <li>Dimensiones con base cm (AltoxAnchoxProfundidad) 89,76 X 144,43 X 28,82 CM</li>
                    </ul>
                </div>
                <div class="opciones">
                    <h2>Opciones de compra</h2>
                    <form>
                        <label for="Cantidad">Cantidad:</label>
                        <select id="Cantidad" name="Cantidad">
                            <option value="None"></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <br>
                        <button type="submit">Agregar al carrito</button>
                    </form>
                    <div>
						<br>
						<br>
                        <video src="<?php echo URL_IMAGENES?>/samsung.mp4 "preload="auto" width="290px" controls></video>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<?php
  
  include_once URL_APP . '/views/custom/footer.php';

?>