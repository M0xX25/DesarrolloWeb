<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Descripción del producto - Anillo Trinity Cerámica Clásico</title>
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
                <img src="<?php echo URL_IMAGENES?>/anillo.png" alt="AnilloCartier">
            </div>
            <div class="informacion">
                <h1>Anillo Trinity Cerámica Clásico</h1>
                <p class="precio">$7'539.795,94</p>
                <p class="descripcion">Anillo Trinity, tamaño mediano, oro blanco de 750/1000, cerámica negra. Ancho del
                    anillo TTO y anillo de cerámica: 3,53 mm (para la talla 52). o Anillo Trinity, tamaño mediano, oro
                    blanco 750/1000, oro rosa 750/1000, oro amarillo 750/1000. Ancho: 3,53 mm (para la talla 52).</p>
                <div class="caracteristicas">
                    <h2>Sobre La colección</h2>
                    <p>La sortija Trinity, fruto de la imaginación de Louis Cartier en 1924, es una joya icónica de la
                        Maison. Una joya atemporal, sus tres anillos móviles y entrelazados, cuya interpretación es
                        única,
                        caracterizan una colección emblemática, símbolo de estilo y elegancia. </p>
                </div>
                <div class="opciones">
                    <h2>Opciones de compra</h2>
                    <form>
                        <label for="Grabado">Grabado:</label>
                        <input type="checkbox" id="checkbox1" name="checkbox1" value="valorCheckbox">
                        <label for="checkbox1">Si</label>
                        <input type="checkbox" id="checkbox2" name="checkbox2" value="valorCheckbox">
                        <label for="checkbox2">No</label>
                        <br>
                        <label for="Descripción">Descripción del Grabado:</label>
                        <input class="form-control" type="id" name="id">
                        <label for="Tamaño">Tamaño:</label>
                        <select id="Tamaño" name="Tamaño">
                            <option value="None"></option>
                            <option value="Tamaño">46</option>
                            <option value="Tamaño">47</option>
                            <option value="Tamaño">48</option>
                            <option value="Tamaño">49</option>
                            <option value="Tamaño">50</option>
                            <option value="Tamaño">51</option>
                            <option value="Tamaño">52</option>
                            <option value="Tamaño">53</option>
                            <option value="Tamaño">54</option>
                            <option value="Tamaño">55</option>
                            <option value="Tamaño">56</option>
                        </select>
                        <br>
                        <label for="color">Material:</label>
                        <select id="color" name="color">
                            <option value="None"></option>
                            <option value="Oro Blanco">Oro Blanco, Cerámica</option>
                            <option value="Oro Amarillo">Oro Blanco, Oro Amarillo, Oro Rosa</option>
                        </select>
                        <br>
                        <button type="submit">Agregar al carrito</button>
                    </form>
                    <div>
						<br>
						<br>
                        <video src="<?php echo URL_IMAGENES?>/Cartier.mp4 "preload="auto" width="290px" controls></video>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<?php
  
  include_once URL_APP . '/views/custom/footer.php';

?>