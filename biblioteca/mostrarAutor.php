<?php
require_once('crud.php');
require_once('biblioteca.php');
$crud = new CrudAutor();
$autor = new Autor();
$listaAutores = $crud->mostrar();
?>

<html>

<head>
    <title>Mostrar Autores</title>
    <link rel="stylesheet" href="CSS/style.css?sfedsds1111s">
</head>

<body>
    <video src="imagenes/Fondo.mp4" autoplay="true" muted="true" loop="true"></video>
    <div class="mainIndex">
        <table>

            <head>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Direccion</td>
                <td>Telefono</td>
                <td>Email</td>
                <td>Ciudad</td>
                <td>Actualizar</td>
                <td>Eliminar</td>
            </head>

            <body>
                <?php foreach ($listaAutores as $autor) { ?>
                    <tr>
                        <td><?php echo $autor->getNombre() ?></td>
                        <td><?php echo $autor->getApellido() ?></td>
                        <td><?php echo $autor->getDireccion() ?></td>
                        <td><?php echo $autor->getTelefono() ?></td>
                        <td><?php echo $autor->getEmail() ?></td>
                        <td><?php echo $autor->getCiudad() ?></td>
                        <td>
                            <a href="actualizarAutor.php?id=<?php echo $autor->getID() ?>&accion=a">Actualizar</a>
                        </td>
                        <td>
                            <a href="administrarAutor.php?id=<?php echo $autor->getID() ?>&accion=e">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </body>
        </table>
    </div>
    <div class="mainIndex" id="volver">
        <a href="index.php" name="volver">Volver</a>
    </div>
</body>

</html>