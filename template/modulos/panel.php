<?php  

include('global/sessiones.php');
include('global/conexion.php');
 ///echo "hola soy panel en modulos";

 $sentenciaSQL = $pdo->prepare("select count(*) totalventas from tblventas where PaypalDatos<>'' ");
 $sentenciaSQL->execute();
 $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);
 $totalVentas=$registro['totalventas'];

 $sentenciaSQL = $pdo->prepare("select count(*) totalventasPendientes from tblventas where PaypalDatos='' ");
 $sentenciaSQL->execute();
 $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);
 $totalVentasPendientes=$registro['totalventasPendientes'];

 $sentenciaSQL = $pdo->prepare("select count(*) totalventas, sum(total) as ingresoTotal from tblventas where PaypalDatos='' ");
 $sentenciaSQL->execute();
 $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);
 $ingresoTotal=$registro['ingresoTotal'];


?>