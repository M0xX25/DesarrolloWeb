<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pedido Pizza</title>
    <link rel="stylesheet" href="style.css">
    <script>
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        const cantidadDivs = document.querySelectorAll('.cantidad');

        checkboxes.forEach((checkbox, index) => {
            checkbox.addEventListener('change', () => {
                if (checkbox.checked) {
                    cantidadDivs[index].querySelector('input').disabled = false;
                } else {
                    cantidadDivs[index].querySelector('input').disabled = true;
                }
            });
        });
    </script>
</head>

<body>
    <video src="imagenes/pizza.mp4" autoplay="true" muted="true" loop="true"></video>
    <form class="form" method="post" action="procesador.php">
        <ul>
            <li class="personal">
                <div id="personaldiv">
                    <h2>Informacion Personal</h2>
                    <label for="Nombre">Nombre</label>
                    <input type="text" name="nombre" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" title="Ingresa un nombre válido" required>
                    <label for="Direccion">Escribe tu Direccion</label>
                    <input type="text" name="direccion" id="Direccion" require>
                    <label for="Telefono">Escribe tu Telefono</label>
                    <input type="Telefono" name="telefono" id="Telefono" pattern="[0-9]+" title="Ingresa un numero de teléfono válido" required>
                    <label>Correo electrónico:</label>
                    <input type="email" name="email" required>
                </div>
            </li>
            <li class="pizza">
                <div id="pizzadiv">
                    <h2>Tipo de Pizza</h2>
                    <ul class="pizzaclass">
                        <li>
                            <input id="jamonqueso" type="checkbox" onclick="toggleCantidad('jamonqueso')">Jamon y Queso</input>
                            <div class="cantidad" id="cantidad-jamonqueso" style="display: none;">
                                <label for="cantidad-jamonqueso">Cantidad</label>
                                <input type="number" name="JamonQueso" min="0" max="10"></input>
                            </div>
                        </li>
                        <li>
                            <input id="napolitana" type="checkbox" onclick="toggleCantidad('napolitana')">Napolitana</input>
                            <div class="cantidad" id="cantidad-napolitana" style="display: none;">
                                <label for="cantidad-napolitana">Cantidad</label>
                                <input type="number" name="Napolitana" min="0" max="10"></input>
                            </div>
                        </li>
                        <li>
                            <input id="muzzarella" type="checkbox" onclick="toggleCantidad('muzzarella')">Muzzarella</input>
                            <div class="cantidad" id="cantidad-muzzarella" style="display: none;">
                                <label for="cantidad-muzzarella">Cantidad</label>
                                <input type="number" name="Muzzarella" min="0" max="10"></input>
                            </div>
                        </li>
                    </ul>
                    <div class="Detalles">
                        <label for="mensaje">Detalles del Pedido</label>
                        <textarea class="box" name="detalles" id="mensaje" cols="30" rows="10"></textarea><br>
                        <input id="Confirmar" type="submit" name="enviar" value="Confirmar">
                    </div>
                </div>
                <script>
                    function toggleCantidad(tipo) {
                        var cantidad = document.getElementById('cantidad-' + tipo);
                        cantidad.style.display = (cantidad.style.display == 'none') ? 'block' : 'none';
                    }
                </script>
            </li>
        </ul>
    </form>
</body>

</html>