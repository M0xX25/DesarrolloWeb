<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Banco HBC</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <video src="imagenes/Fondo.mp4" autoplay="true" muted="true" loop="true"></video>
    <h1>Bienvenido al Banco HBC</h1>
    <ul>
        <li id="ahorros">
            <form method="post" action="interfazAhorros.php">
                <h2>Cuentas de Ahorros</h2>
                <input type="hidden" name="tipo_cuenta" value="ahorros"></input>
                <label for="numero_cuenta">Número de Cuenta:</label>
                <input type="number" name="numero_cuenta" id="numero_cuenta" required></input><br><br>
                <label for="nombre_cliente">Nombre del Cliente:</label>
                <input type="text" name="nombre_cliente" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" id="nombre_cliente" required></input><br><br>
                <label for="saldo">Saldo:</label>
                <input type="number" step="any" name="saldo" id="saldo" required></input><br><br>
                <label for="interes">Porcentaje de interés mensual:</label>
                <input type="number" step="any" name="interes" id="interes" required></input><br><br>
                <input type="submit" name="crear_cuenta" value="Crear Cuenta">
            </form>
        </li>
        <li id="corrientes">
            <h2>Cuentas Corrientes</h2>
            <form method="post" action="interfazCorriente.php">
                <input type="hidden" name="tipo_cuenta" value="corriente"></input>
                <label for="numero_cuenta">Número de Cuenta:</label>
                <input type="number" name="numero_cuenta" id="numero_cuenta" required></input><br><br>
                <label for="nombre_cliente">Nombre del Cliente:</label>
                <input type="text" name="nombre_cliente" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" id="nombre_cliente" required></input><br><br>
                <label for="saldo">Saldo:</label>
                <input type="number" step="any" name="saldo" id="saldo" required></input><br><br>
                <input type="submit" name="crear_cuenta" value="Crear Cuenta"></input>
            </form>
        </li>
    </ul>
</body>
</html>