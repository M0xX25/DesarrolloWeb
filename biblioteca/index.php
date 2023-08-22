<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Bliblioteca</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <video src="imagenes/Fondo.mp4" autoplay="true" muted="true" loop="true"></video>
    <h1>BIBLIOTECA</h1>
    <ul>
        <form method="post" action="interfazAhorros.php">
            <h2>Cuentas de Ahorros</h2>
            <input type="hidden" name="tipo_cuenta" value="ahorros"></input>
            <label for="numero_cuenta">Número de Cuenta:</label>
            <input type="number" name="numero_cuenta" id="numero_cuenta" required></input><br><br>                <label for="nombre_cliente">Nombre del Cliente:</label>
            <input type="text" name="nombre_cliente" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" id="nombre_cliente" required></input><br><br>
            <input type="submit" name="crear_cuenta" value="Crear Cuenta">
        </form>
    </ul>
</body>
</html>