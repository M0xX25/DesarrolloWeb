<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="stylesheet" href="style.css">
   <title>Nomina</title>
</head>

<?php

class Empleado
{
   private $nombre;
   private $salario_mensual;

   public function __construct($nombre, $salario_mensual)
   {
      $this->nombre = $nombre;
      $this->salario_mensual = $salario_mensual;
   }

   public function getNombre()
   {
      return $this->nombre;
   }

   public function getSalarioMensual()
   {
      return $this->salario_mensual;
   }
}

$empleados = [
   new Empleado('MARIO ORTIZ', 1200000),
   new Empleado('CLEMENTE CONTRERAS', 580000),
   new Empleado('LILIANA MAYORGA', 1000000),
   new Empleado('JOSE GERMAN  RUIZ', 650000),
   new Empleado('LUCY PORTACIO', 2000000),
   new Empleado('HERNANDO  FORERO', 1800000)
];

$nombre_empleado = '';
$salario_mensual = '';
$dias_laborados = '';
$total_salario = '';

if (isset($_POST['Nombre'])) {
   $empleado_seleccionado = $_POST['Nombre'] - 1;
   $nombre_empleado = $empleados[$empleado_seleccionado]->getNombre();
   $salario_mensual = $empleados[$empleado_seleccionado]->getSalarioMensual();
   $dias_laborados = $_POST['Dias_lab'];
   $total_salario = ($dias_laborados / 30) * $salario_mensual;
}

$Hdia = isset($_POST['HD']) ? $_POST['HD'] : 0;
$Hnoche = isset($_POST['HN']) ? $_POST['HN'] : 0;
$Hdom = isset($_POST['HDOM']) ? $_POST['HDOM'] : 0;
$vComision = isset($_POST['COMNISIONES']) ? $_POST['COMNISIONES'] : 0;

$Val_HD = $Hdia * 1500;
$Val_HN = $Hnoche * 2000;
$Val_HDOM = $Hdom * 2500;
$Val_totalH = $Val_HDOM + $Val_HN + $Val_HD;
$vTOT_DEVENGADO = $total_salario + $Val_totalH + $vComision;

$Libranza = isset($_POST['LIBRANZA']) ? $_POST['LIBRANZA'] : 0;
$Salud = $vTOT_DEVENGADO * 0.08;
$Pension = $vTOT_DEVENGADO * 0.04;
$sindicatos = $vTOT_DEVENGADO * 0.02;
$TotalDecucidos = $Libranza + $Salud + $Pension + $sindicatos;
$NetoPagar = $vTOT_DEVENGADO - $TotalDecucidos;

?>

<body class="nominabody">
   <video src="imagenes/Fondo.mp4" autoplay="true" muted="true" loop="true"></video>
   <section class="Informacion">
      <ul>
         <li>
            <h1>INFORMACION</h1>
            <ul>
               <li>
                  <h2>Nombre Empleado</h2>
                  <input name="HN" value="<?php echo $nombre_empleado; ?>" readonly>
               </li>
               <li>
                  <h2>Salario Mensual</h2>
                  <input name="HN" value="<?php echo $salario_mensual; ?>" readonly>
               </li>
               <li>
                  <h2>Dias Laborados</h2>
                  <input name="HN" value="<?php echo $dias_laborados; ?>" readonly>
               </li>
               <li>
                  <h2>Total Salario</h2>
                  <input name="HN" value="<?php echo $total_salario; ?>" readonly>
               </li>
            </ul>
         </li>
         <section id="Devengado">
            <ul>
               <li>
                  <h1>DEVENGADO</h1>
                  <ul>
                     <li>
                        <h2>HD</h2>
                        <input name="HD" value="<?php echo $Hdia; ?>" readonly>
                     </li>
                     <li>
                        <h2>HN</h2>
                        <input name="HN" value="<?php echo $Hnoche; ?>" readonly>
                     </li>
                     <li>
                        <h2>HDOM</h2>
                        <input name="HDOM" value="<?php echo $Hdom; ?>" readonly>
                     </li>
                     <li>
                        <h2>VHD</h2>
                        <input name="VHD" value="<?php echo $Val_HD; ?>" readonly>
                     </li>
                     <li>
                        <h2>VHN</h2>
                        <input name="VHD" value="<?php echo $Val_HN; ?>" readonly>
                     </li>
                     <li>
                        <h2>VHDOM</h2>
                        <input name="VHDOM" value="<?php echo $Val_HDOM; ?>" readonly>
                     </li>
                     <li>
                        <h2>Valor Total</h2>
                        <input name="ValorTotal" value="<?php echo $Val_totalH; ?>" readonly>
                     </li>
                     <li>
                        <h2>Comisiones</h2>
                        <input name="Comisiones" value="<?php echo $vComision; ?>" readonly>
                     </li>
                     <li>
                        <h2>TOTAL DEVENGADO</h2>
                        <input name="TOTALDEVENGADO" value="<?php echo $vTOT_DEVENGADO; ?>" readonly>
                     </li>
                  </ul>
               </li>
            </ul>
         </section>
         <section id="Deduccionoes">
            <ul>
               <li>
                  <h1>DEDUCCIONES</h1>
                  <ul>
                     <li>
                        <h2>LIBRANZA</h2>
                        <input name="LIBRANZA" value="<?php echo $Libranza; ?>" readonly>
                     </li>
                     <li>
                        <h2>SALUD 8%</h2>
                        <input name="HN" value="<?php echo $Salud; ?>" readonly>
                     </li>
                     <li>
                        <h2>PENSION 4%</h2>
                        <input name="HDOM" value="<?php echo $Pension; ?>" readonly>
                     </li>
                     <li>
                        <h2>SINDICATOS 2%</h2>
                        <input name="VHD" value="<?php echo $sindicatos; ?>" readonly>
                     </li>
                     <li>
                        <h2>TOTDEDUCIDO</h2>
                        <input name="VHD" value="<?php echo $TotalDecucidos; ?>" readonly>
                     </li>
                     <li>
                        <h2>NETO A PAGAR</h2>
                        <input name="VHDOM" value="<?php echo $NetoPagar; ?>" readonly>
                     </li>
                  </ul>
               </li>
            </ul>
         </section>
      </ul>
   </section>
</body>

</html>