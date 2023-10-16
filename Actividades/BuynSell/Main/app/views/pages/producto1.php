<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Descripción del producto - 2023 Model 3</title>
</head>
<?php
    include_once dirname(__DIR__) . '/../config/config.php';
    include_once URL_APP . '/views/custom/header.php';
    include_once URL_APP . '/views/custom/navbar.php';
?>
<body>	
<main>
		<div class="producto">
			<div class="imagen">
			<img src="<?php echo URL_IMAGENES?>/tesla.jpg">
			</div>
			<div class="informacion">
				<h1>2023 Model 3</h1>
				<p class="precio">$559'856.700,000</p>
				<p class="descripcion">Model 3 Motor dual de Autonomía Mayor con tracción en todas las ruedas
                    Odómetro con 858 km.</p>
				<div class="caracteristicas">
					<h2>Características clave</h2>
					<ul>
						<li>Pintura multicapas roja </li>
                        <li>Rines deportivos de 19"</li>
                        <li>Interior premium completamente negro</li>    
                        <li>Autopilot</li>    
                        <li>Asientos delanteros y traseros con calefacción</li>   
                        <li>Prueba de Conectividad premium de Día 30</li>  
					</ul>
				</div>
				<div class="opciones">
					<h2>Opciones de compra</h2>
					<form>
						<label for="Autopilot">Autopilot:</label>
                        <input type="checkbox" id="checkbox1" name="checkbox1" value="valorCheckbox">
                        <label for="checkbox1">Si</label>
                        <input type="checkbox" id="checkbox2" name="checkbox2" value="valorCheckbox">
                        <label for="checkbox2">No</label>
						<br>
						<label for="Asientos">Asientos:</label>
						<select id="Asientos" name="Asientos">
                            <option value="None"></option>
							<option value="calefacción">Asientos traseros con calefacción.</option>
						</select>
						<br>
						<label for="color">Color Exterior:</label>
						<select id="color" name="color">
                            <option value="None"></option>
							<option value="negro">Negro</option>
							<option value="blanco">Blanco</option>
							<option value="rojo">Rojo</option>
						</select>
                        <label for="color">Color Interior:</label>
						<select id="color" name="color">
                            <option value="None"></option>
							<option value="negro">Negro</option>
							<option value="blanco">Blanco</option>
							<option value="rojo">Rojo</option>
						</select>
						<br>
						<button type="submit">Agregar al carrito</button>
					</form>
					<div>
						<br>
						<br>
                        <video src="<?php echo URL_IMAGENES?>/tesla.mp4 "preload="auto" width="330px" controls></video>
                    </div>
				</div>
			</div>
		</div>
	</main>
</body>
<?php
  
  include_once URL_APP . '/views/custom/footer.php';

?>