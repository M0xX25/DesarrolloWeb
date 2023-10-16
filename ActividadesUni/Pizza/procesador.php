<!DOCTYPE html>
<html>

<head>
	<title>Procesando pedido de pizza</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<video src="imagenes/pizza.mp4" autoplay="true" muted="true" loop="true"></video>
	<ul>
		<li class="personal">
			<div id="pedidoprocesadodiv">
				<h2>Procesando pedido de pizza</h2>
				<?php
				class Pedido
				{
					protected $nombre;
					protected $direccion;
					protected $telefono;
					protected $email;
					protected $detalles;
					protected $cantidad_jamonqueso = 0;
					protected $cantidad_napolitana = 0;
					protected $cantidad_muzzarella = 0;

					public function __construct($datos)
					{
						$this->nombre = $datos['nombre'];
						$this->direccion = $datos['direccion'];
						$this->telefono = $datos['telefono'];
						$this->email = $datos['email'];
						$this->detalles = $datos['detalles'];
						$this->cantidad_jamonqueso = isset($datos['JamonQueso']) ? $datos['JamonQueso'] : 0;
						$this->cantidad_napolitana = isset($datos['Napolitana']) ? $datos['Napolitana'] : 0;
						$this->cantidad_muzzarella = isset($datos['Muzzarella']) ? $datos['Muzzarella'] : 0;
					}

					public function mostrarDetalles()
					{
						echo "<p> Nombre: {$this->nombre}<br>";
						echo "Dirección: {$this->direccion}<br>";
						echo "Teléfono: {$this->telefono}<br>";
						echo "Email: {$this->email}<br>";
						echo "Detalles: {$this->detalles}<br>";
						$pizzas = array_filter([
							'jamonqueso' => $this->cantidad_jamonqueso,
							'napolitana' => $this->cantidad_napolitana,
							'muzzarella' => $this->cantidad_muzzarella,
						]);
						if (!empty($pizzas)) {
							echo "Pizzas: " ;
							foreach ($pizzas as $nombre => $cantidad) {
								echo "{$nombre}: {$cantidad}, ";
							}
						}
						echo "<br>";
					}

					public function calcularSubtotal()
					{
						$precio_jamonqueso = 100;
						$precio_napolitana = 120;
						$precio_muzzarella = 90;

						$subtotal = ($precio_jamonqueso * intval($this->cantidad_jamonqueso)) +
							($precio_napolitana * intval($this->cantidad_napolitana)) +
							($precio_muzzarella * intval($this->cantidad_muzzarella));

						return $subtotal;
					}

					public function calcularIva()
					{
						return $this->calcularSubtotal() * 0.21;
					}

					public function calcularTotal()
					{
						return $this->calcularSubtotal() + $this->calcularIva();
					}
				}

				$pedido = new Pedido($_POST);

				$pedido->mostrarDetalles();

				echo "Subtotal: $" . intval($pedido->calcularSubtotal()) . "<br>";
				echo "IVA: $" . intval($pedido->calcularIva()) . "<br>";
				echo "Total a pagar: $" . intval($pedido->calcularTotal()) . "</p>";
				?>
		</li>
	</ul>
</body>

</html>