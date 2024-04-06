<!DOCTYPE html>
<html>

<head>
    <title>Ingresar Libro</title>
    <link rel="stylesheet" href="CSS/style.css?dsnnjd">
</head>

<body>
    <video src="imagenes/Fondo.mp4" autoplay="true" muted="true" loop="true"></video>
    <h1>Ingresar los datos del Libro</h1>
    <form action="administrarLibro.php" method="post">
        <div class="mainIndex">
            <table>
                <tr>
                    <td>Nombre libro</td>
                    <td> <input type="text" name="nombre"> </td>
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