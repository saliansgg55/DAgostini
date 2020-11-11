<?php
include_once "accesso_bd.php";

/*
$respuestaOK = false;
$mensajeError = "No se puede ejecutar la aplicación";
$contenidoOK = "";  
*/

$nomape = trim($_POST['nomape']);
$dni 	= trim($_POST['dni']);


	
// Cambio de variables
$mysqli = conexionBD();

$consulta = $mysqli->query("SELECT sor_dni,sor_nomape FROM sorteo WHERE sor_dni ='".$dni."' AND sor_nomape ='".$nomape."'");
//$cons_nom = $mysqli->query("SELECT sor_nomape FROM sorteo WHERE sor_nomape ='".$nomape."' ");
$rowcount=mysqli_num_rows($consulta);

if ($rowcount = 1 ) {

		$respuestaOK = false;
		$mensajeError = "";
		$contenidoOK = "Ya estas participando, Muchas suerte!";	

}else{
		$ins_part = $mysqli->query("INSERT INTO sorteo (sor_nomape,sor_dni) VALUES ('".$nomape."','".$dni."' )");

		$respuestaOK = true;
		$mensajeError = "";
		$contenidoOK = "Gracias por participar, Muchas suerte!";	
}	



$salidaJson = array("respuesta" => $respuestaOK,
                    "mensaje" => $mensajeError,
                    "contenido" => $contenidoOK );

echo json_encode($salidaJson);   

?>