<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Banco HBC</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'interfaz.php'; ?>
</head>

<body>
    <video src="imagenes/Fondo.mp4" autoplay="true" muted="true" loop="true"></video>
    <h1>Bienvenido al Banco HBC</h1>
    <ul>
        <form method="post" action="">
            <li id="cuentaahorros">
                <h2>Cuentas de Ahorros</h2>
                <input type="hidden" name="tipo_cuenta" value="ahorros">
                <label for="numero_cuenta">Número de Cuenta:</label>
                <input type="number" name="numero_cuenta" id="numero_cuenta" value="<?php echo (isset($numero_cuenta) && $numero_cuenta !== '') ? $numero_cuenta : ''; ?>" onlyread><br><br>
                <label for="nombre_cliente">Nombre del Cliente:</label>
                <input type="text" name="nombre_cliente" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" id="nombre_cliente" value="<?php echo isset($nombre_cliente) ? $nombre_cliente : ''; ?>" onlyread><br><br>
                <label for="saldo">Saldo:</label>
                <input type="number" step="any" name="saldo" id="saldo" value="<?php echo isset($saldo) ? $saldo : ''; ?>" onlyread><br><br>
                <input type="submit" name="crear_cuenta" value="Aceptar"></input>
            </li>
            <li id="operaciones">
                <h2>Operaciones</h2>
                <label for="numero_cuenta">Número de Cuenta:</label>
                <input type="number" name="numero_cuenta_operaciones" id="numero_cuenta_operaciones" required><br><br>
                <label for="cantidad">Cantidad:</label>
                <input type="number" step="any" name="cantidad" id="cantidad" required><br><br>
                <select name="operacion">
                    <option name="depositar" value="depositar">Depositar</option>
                    <option name="retirar" value="retirar">Retirar</option>
                </select><br><br>
            </li>
        </form>
    </ul>
</body>
<script>
    document.querySelector('form').addEventListener('submit', function(e) {
        var numeroCuenta = document.getElementById('numero_cuenta').value;
        var numeroCuentaOperaciones = document.getElementById('numero_cuenta_operaciones').value;

        if (numeroCuenta !== numeroCuentaOperaciones) {
            e.preventDefault();
            alert('El número de cuenta debe ser el mismo para realizar una operación');
        }
    });
</script>

</html>