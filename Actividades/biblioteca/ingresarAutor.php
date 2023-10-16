<!DOCTYPE html>
<html>

<head>
    <title>Ingresar Autor</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <video src="imagenes/Fondo.mp4" autoplay="true" muted="true" loop="true"></video>
    <h1>Ingresar los datos del Autor</h1>
    <form action="administrarAutor.php" method="post">
        <div class="mainIndex">
            <table>
                <tr>
                    <td>Nombre</td>
                    <td> <input type="text" name="nombre"> </td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td> <input type="text" name="apellido"> </td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td> <input type="text" name="direccion"> </td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td> <input type="text" name="telefono"> </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td> <input type="text" name="email"> </td>
                </tr>
                <tr>
                    <td>Ciudad</td>
                    <td> <input type="text" name="ciudad"> </td>
                </tr>
                <input type="hidden" name="insertar" value="insertar">
            </table>
        </div>
        <div class="mainIndex" id="volver">
            <input type="submit" value="Guardar">
            <a href="index.php" name="volver">Volver</a>
        </div>
    </form>
</body>

</html>