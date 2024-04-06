<?php
require_once('conexion.php');

class CrudLibro
{
    public function __construct()
    {
    }

    public function insertar($libro)
    {
        $db = Db::conectar();
        $insert = $db->prepare('INSERT INTO libros values(NULL,:nombre)');
        $insert->bindValue('nombre', $libro->getNombre());
        $insert->execute();
    }

    public function mostrar()
    {
        $db = Db::conectar();
        $listaLibros = [];
        $select = $db->query('SELECT * FROM libros');

        foreach ($select->fetchAll() as $libro) {
            $myLibro = new Libro();
            $myLibro->setID($libro['id']);
            $myLibro->setNombre($libro['nombre']);
            $listaLibros[] = $myLibro;
        }
        return $listaLibros;
    }

    public function eliminar($id)
    {
        $db = Db::conectar();
        $eliminar = $db->prepare('DELETE FROM libros WHERE ID=:id');
        $eliminar->bindValue('id', $id);
        $eliminar->execute();
    }

    public function obtenerLibro($id)
    {
        $db = Db::conectar();
        $select = $db->prepare('SELECT * FROM libros WHERE ID=:id');
        $select->bindValue('id', $id);
        $select->execute();
        $libro = $select->fetch();
        $myLibro = new Libro();
        $myLibro->setID($libro['id']);
        $myLibro->setNombre($libro['nombre']);
        return $myLibro;
    }

    public function actualizar($libro)
    {
        $db = Db::conectar();
        $actualizar = $db->prepare('UPDATE libros SET nombre=:nombre WHERE ID=:id');
        $actualizar->bindValue('id', $libro->getId());
        $actualizar->bindValue('nombre', $libro->getNombre());
        $actualizar->execute();
    }
}

class CrudAutor
{
    public function __construct()
    {
    }

    public function insertar($autor)
    {
        $db = Db::conectar();
        $insert = $db->prepare('INSERT INTO autor (nombre, apellido, direccion, telefono, email, ciudad) VALUES (:nombre, :apellido, :direccion, :telefono, :email, :ciudad)');
        $insert->bindValue('nombre', $autor->getNombre());
        $insert->bindValue('apellido', $autor->getApellido());
        $insert->bindValue('direccion', $autor->getDireccion());
        $insert->bindValue('telefono', $autor->getTelefono());
        $insert->bindValue('email', $autor->getEmail());
        $insert->bindValue('ciudad', $autor->getCiudad());
        $insert->execute();
    }

    public function mostrar()
    {
        $db = Db::conectar();
        $listaAutores = [];
        $select = $db->query('SELECT * FROM autor');

        foreach ($select->fetchAll() as $autor) {
            $myAutor = new Autor();
            $myAutor->setID($autor['id']);
            $myAutor->setNombre($autor['nombre']);
            $myAutor->setApellido($autor['apellido']);
            $myAutor->setDireccion($autor['direccion']);
            $myAutor->setTelefono($autor['telefono']);
            $myAutor->setEmail($autor['email']);
            $myAutor->setCiudad($autor['ciudad']);
            $listaAutores[] = $myAutor;
        }
        return $listaAutores;
    }

    public function eliminar($id)
    {
        $db = Db::conectar();
        $eliminar = $db->prepare('DELETE FROM autor WHERE id=:id');
        $eliminar->bindValue('id', $id);
        $eliminar->execute();
    }

    public function obtenerAutor($id)
    {
        $db = Db::conectar();
        $select = $db->prepare('SELECT * FROM autor WHERE id=:id');
        $select->bindValue('id', $id);
        $select->execute();
        $autor = $select->fetch();
        $myAutor = new Autor();
        $myAutor->setID($autor['id']);
        $myAutor->setNombre($autor['nombre']);
        $myAutor->setApellido($autor['apellido']);
        $myAutor->setDireccion($autor['direccion']);
        $myAutor->setTelefono($autor['telefono']);
        $myAutor->setEmail($autor['email']);
        $myAutor->setCiudad($autor['ciudad']);
        return $myAutor;
    }

    public function actualizar($autor)
    {
        $db = Db::conectar();
        $actualizar = $db->prepare('UPDATE autor SET nombre=:nombre, apellido=:apellido, direccion=:direccion, telefono=:telefono, email=:email, ciudad=:ciudad WHERE id=:id');
        $actualizar->bindValue('id', $autor->getID());
        $actualizar->bindValue('nombre', $autor->getNombre());
        $actualizar->bindValue('apellido', $autor->getApellido());
        $actualizar->bindValue('direccion', $autor->getDireccion());
        $actualizar->bindValue('telefono', $autor->getTelefono());
        $actualizar->bindValue('email', $autor->getEmail());
        $actualizar->bindValue('ciudad', $autor->getCiudad());
        $actualizar->execute();
    }
}
