<?php
include_once "accesso_bd.php";
//include_once "accesso_bd.php"; // Conexion a la Base Hackaton





//Variables Fijas
$respuestaOK = false;
$mensajeError = "No se puede ejecutar la aplicación";
$contenidoOK = "";  


$id_disco = trim($_POST['disco']);
$id_video = trim($_POST['video']);



         

	
// Cambio de variables
$mysqli = conexionBD();
$result_video_cd_solo = $mysqli->query("SELECT * FROM canciones WHERE id_disco = '".$id_disco."' and c_track = '".$id_video."' ");

while($res = $result_video_cd_solo -> fetch_array(MYSQLI_ASSOC))
		{
			$video = $res['c_video'];
			//$salida .= ' <p>'.$video.'</p> ';


				
	}

			$respuestaOK = true;
			$mensajeError = "";
			$contenidoOK = $video;


/*



$result_clave = $mysqli->query("SELECT password,username FROM user WHERE username = '".$usuario."' and password = '".$pass."' ");
    $row_cnt_clave = $result_clave->num_rows;    
    $result_clave->close();


// OBTIENE DATOS DE LA TABLA USUARIO   
$info = $mysqli->query("SELECT * FROM user  WHERE username = '".$usuario."' ");

if($info -> num_rows != 0){
while($res = $info -> fetch_array(MYSQLI_ASSOC))
		{
			$user = $res['username'];
			$tipodni = $res['tipodocumento'];
			$documento = $res['documento'];
			$idmember = $res['idmember'];

	}


	// Creamos las variables de session
	$_SESSION["nombre_usuario"] = $user;
	$_SESSION["tipo_documento"] = $tipodni;
	$_SESSION["documento"] 		= $documento;
	$_SESSION["idmember"] = $idmember;


	/* liberar la serie de resultados */

	//$info->free();

	/* cerrar la conexión */
	//$mysqli->close();
//}

                





$salidaJson = array("respuesta" => $respuestaOK,
                    "mensaje" => $mensajeError,
                    "contenido" => $contenidoOK );

echo json_encode($salidaJson);   
?>