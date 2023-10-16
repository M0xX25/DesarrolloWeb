<!DOCTYPE html>
<html lang="en">
<?php
    include_once dirname(__DIR__) . '/../config/config.php';
    include_once URL_APP . '/views/custom/header.php';
    include_once URL_APP . '/views/custom/navbar.php';
?>
<center>
<body><br>
    <h1 style="color: black;font-size: 32px;">Inicio de sesion</h1><br>
    <img class="imagenlogin" src="<?php echo URL_IMAGENES?>/perfil.png"><br><br>
    <article class="col-3">
        <form>
            <label>Usuario</label>
                <input class="form-control" type="text" name="id" placeholder="Escriba su usuario">
            <label>Contraseña</label>
            <input class="form-control"  type="password" name="pass" placeholder="Escriba su contraseña">
            <br>
            <a href="<?php echo URL_VIEWS?>/productos.php" class="btn btn-primary">Iniciar Sesion</a>
            <a href="#" class="btn btn-primary">Registrate</a>
        </form>
</center>
</body>
<?php
  
  include_once URL_APP . '/views/custom/footer.php';

?>