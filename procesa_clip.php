<?php
include_once "accesso_bd.php";
//include_once "accesso_bd.php"; // Conexion a la Base Hackaton
// Cambio de variables
$mysqli = conexionBD();



//Variables Fijas
$respuestaOK = false;
$mensajeError = "No se puede ejecutar la aplicación";
$contenidoOK = "";  


$clip_disco = trim($_POST['clip_disco']);
$clip = trim($_POST['clip']);
$a="clip";
        
$video_clip="";

$result_video_clip = $mysqli->query("SELECT clip_url,clip_nombre FROM videoclips WHERE id_disco = '".$clip_disco."' ");
while($res = $result_video_clip -> fetch_array(MYSQLI_ASSOC))
		{

			//$video_c = $res['clip_url'];
			//$video_n = $res['clip_nombre'];
			//$video_d = $res['clip_desc'];
					$video_clip.=  "<h3>".$res['clip_nombre']."</h3>" ."<br>". $res['clip_url'];

			//$salida .= ' <p>'.$video.'</p> ';
				
		}



			$respuestaOK = true;
			$mensajeError = "";
			$contenidoOK = $video_clip;





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