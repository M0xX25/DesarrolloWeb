<!DOCTYPE html>
<html lang="en">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parcial";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$candidato = $_POST['voto'];

$sql = "UPDATE votos SET voto = voto + 1 WHERE candidato = '$candidato'";

if ($conn->query($sql) === TRUE) {
    // Redireccionar al usuario a la página de resultados
    header('Location: informes_votacion.php');
} else {
    echo "Error al actualizar votos: " . $conn->error;
}

$conn->close();

?>

</html>