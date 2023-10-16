<?php
require_once('crud.php');
require_once('biblioteca.php');
$crud = new CrudLibro();
$libro = new Libro();
$listaLibros = $crud->mostrar();
?>

<html>

<head>
    <title>Mostrar Libros</title>
    <link rel="stylesheet" href="CSS/style.css?sfedddaswe">
</head>

<body>
    <video src="imagenes/Fondo.mp4" autoplay="true" muted="true" loop="true"></video>
    <div class="mainIndex">
        <table>

            <head>
                <td>Nombre</td>
                <td>Actualizar</td>
                <td>Eliminar</td>
            </head>

            <body>
                <?php foreach ($listaLibros as $libro) { ?>
                    <tr>
                        <td><?php echo $libro->getNombre() ?></td>
                        <td><a href="actualizarLibro.php?id=<?php echo $libro->getId() ?>&accion=a">Actualizar</a></td>
                        <td><a href="administrarLibro.php?id=<?php echo $libro->getId() ?>&accion=e">Eliminar</a></td>
                    </tr>
                <?php } ?>
        </table>
    </div>
    <div class="mainIndex" id="volver">
        <a href="index.php">Volver</a>
    </div>
</body>

</html>