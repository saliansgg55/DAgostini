<?php
include_once "accesso_bd.php";

/*
$respuestaOK = false;
$mensajeError = "No se puede ejecutar la aplicación";
$contenidoOK = "";  
*/




	
// Cambio de variables
$mysqli = conexionBD();

//$consulta = $mysqli->query("TRUNCATE TABLE sorteo");
//$cons_nom = $mysqli->query("SELECT sor_nomape FROM sorteo WHERE sor_nomape ='".$nomape."' ");
//$rowcount=mysqli_num_rows($consulta);
		
$respuestaOK = true;
$mensajeError = "";
$contenidoOK = "Sorteo listo";	



$salidaJson = array("respuesta" => $respuestaOK,
                    "mensaje" => $mensajeError,
                    "contenido" => $contenidoOK );

echo json_encode($salidaJson);   

?>