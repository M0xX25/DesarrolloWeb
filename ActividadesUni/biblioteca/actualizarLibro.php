<?php
require_once('crud.php');
require_once('biblioteca.php');

$crud = new CrudLibro();
$libro = new Libro();

$libro = $crud->obtenerlibro($_GET['id']);
?>
<html>

<head>
    <title>Actualizar Libro</title>
    <link rel="stylesheet" href="CSS/style.css?v=13">
</head>

<body>
    <video src="imagenes/Fondo.mp4" autoplay="true" muted="true" loop="true"></video>
    <h1>Actualizar los datos del Libro</h1>
    <form action="administrarLibro.php" method="post">
        <div class="mainIndex">
            <table>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $libro->getId() ?>">
                    <td>
                        <h3> Nombre Libro </h3>
                    </td>
                    <td> <input type="text" name="nombre" value="<?php echo $libro->getNombre() ?>"></td>
                </tr>
                <input type="hidden" name="actualizar" value="actualizar">
            </table>
        </div>
        <div class="mainIndex" id="volver">
            <input type="submit" value="Guardar">
            <a href="index.php">Volver</a>
        </div>
    </form>
</body>

</html>