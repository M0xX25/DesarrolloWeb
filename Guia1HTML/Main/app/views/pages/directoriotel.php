<!DOCTYPE html>
<html lang="en">
<?php
include_once dirname(__DIR__) . '/../config/config.php';
include_once URL_APP . '/views/custom/header.php';
include_once URL_APP . '/views/custom/navbar.php';
?>

<body>
  <h2>Directorio telefónico</h2>
  <?php
  $directorioTelefonico = array(
    1 => array(
      'nombre' => 'Andrés García',
      'direccion' => 'Calle 123, Ciudad',
      'telefono' => '555-1234',
      'fecha_cumpleanos' => '11/12/2003'
    ),
    2 => array(
      'nombre' => 'Maria Perez',
      'direccion' => 'Avenida 456, Ciudad',
      'telefono' => '555-5678',
      'fecha_cumpleanos' => '01/08/1990'
    ),
    3 => array(
      'nombre' => 'Pedro Ramirez',
      'direccion' => 'Plaza 789, Ciudad',
      'telefono' => '555-9012',
      'fecha_cumpleanos' => '03/03/2000'
    )
  );
  ?>
  <p>
  <div id="contactouno">
    <img id="imagencontact" src="<?php echo URL_IMAGENES ?>/perfil.png" alt="">
    <?php
    echo "  Nombre: " . $directorioTelefonico[1]['nombre'] . "<br />";
    echo "   Dirección: " . $directorioTelefonico[1]['direccion'] . "<br />";
    echo "   Teléfono: " . $directorioTelefonico[1]['telefono'] . "<br />";
    echo "   Fecha de cumpleaños: " . $directorioTelefonico[1]['fecha_cumpleanos'] . "<br /><br />";
    ?>
  </div>
  <div id="contactodos">
    <img id="imagencontact" src="<?php echo URL_IMAGENES ?>/perfil.png" alt="">
    <?php
    echo "  Nombre: " . $directorioTelefonico[2]['nombre'] . "<br />";
    echo " Dirección: " . $directorioTelefonico[2]['direccion'] . "<br />";
    echo " Teléfono: " . $directorioTelefonico[2]['telefono'] . "<br />";
    echo " Fecha de cumpleaños: " . $directorioTelefonico[2]['fecha_cumpleanos'] . "<br /><br />";
    ?>
  </div>
  <div id="contactotres">
    <img id="imagencontact" src="<?php echo URL_IMAGENES ?>/perfil.png" alt="">
    <?php
    echo "  Nombre: " . $directorioTelefonico[3]['nombre'] . "<br />";
    echo " Dirección: " . $directorioTelefonico[3]['direccion'] . "<br />";
    echo " Teléfono: " . $directorioTelefonico[3]['telefono'] . "<br />";
    echo " Fecha de cumpleaños: " . $directorioTelefonico[3]['fecha_cumpleanos'] . "<br /><br />";
    ?>
  </div>
  </p>
</body>
<?php

include_once URL_APP . '/views/custom/footer.php';

?>

</html>