<?php
require_once('crud.php');
require_once('biblioteca.php');

$crud = new CrudAutor();
$autor = new Autor();

$autor = $crud->obtenerAutor($_GET['id']);
?>
<html>

<head>
    <title>Actualizar Autor</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <video src="imagenes/Fondo.mp4" autoplay="true" muted="true" loop="true"></video>
    <form action="administrarAutor.php" method="post">
        <div class="mainIndex">
            <table>
                <input type="hidden" name="id" value="<?php echo $autor->getId() ?>">
                <tr>
                    <td>Nombre</td>
                    <td> <input type="text" name="nombre" value="<?php echo $autor->getNombre() ?>"> </td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td> <input type="text" name="apellido" value="<?php echo $autor->getApellido() ?>"> </td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td> <input type="text" name="direccion" value="<?php echo $autor->getDireccion() ?>"> </td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td> <input type="text" name="telefono" value="<?php echo $autor->getTelefono() ?>"> </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td> <input type="text" name="email" value="<?php echo $autor->getEmail() ?>"> </td>
                </tr>
                <tr>
                    <td>Ciudad</td>
                    <td> <input type="text" name="ciudad" value="<?php echo $autor->getCiudad() ?>"> </td>
                </tr>
                <input type="hidden" name="actualizar" value="actualizar">
            </table>
        </div>
        <div class="mainIndex" id="volver">
            <input type="submit" value="Guardar">
            <a href="index.php" name="volver">Volver</a>
        </div>
    </form>
</body>

</html>