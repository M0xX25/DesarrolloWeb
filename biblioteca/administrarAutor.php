<?php
require_once('crud.php');
require_once('biblioteca.php');

$crud = new CrudAutor();
$autor = new Autor();

if (isset($_POST['insertar'])) {
    $autor->setNombre($_POST['nombre']);
    $autor->setApellido($_POST['apellido']);
    $autor->setDireccion($_POST['direccion']);
    $autor->setTelefono($_POST['telefono']);
    $autor->setEmail($_POST['email']);
    $autor->setCiudad($_POST['ciudad']);

    $crud->insertar($autor);
    header('Location: index.php');
} elseif (isset($_POST['actualizar'])) {
    $autor->setId($_POST['id']);
    $autor->setNombre($_POST['nombre']);
    $autor->setApellido($_POST['apellido']);
    $autor->setDireccion($_POST['direccion']);
    $autor->setTelefono($_POST['telefono']);
    $autor->setEmail($_POST['email']);
    $autor->setCiudad($_POST['ciudad']);

    $crud->actualizar($autor);
    header('Location: index.php');
} elseif ($_GET['accion'] == 'e') {
    $crud->eliminar($_GET['id']);
    header('Location: index.php');
} elseif ($_GET['accion'] == 'a') {
    header('Location: index.php');
}
