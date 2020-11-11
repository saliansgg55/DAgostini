<?php
include_once "accesso_bd.php"; // Archivo de Conexion
$mysqli = conexionBD(); // Conecta a la BD


$respuestaOK = false;
$mensajeError = "No se puede ejecutar la aplicación";
$contenidoOK = "";  

// Recibimos el Id referente al disco
$variable= $_POST['valorCaja1'];


switch($variable) {
case 1:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-4" style="color:red;"><strong>   '.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;

case 2:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 3:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 4:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 5:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 6:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 7:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 8:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 9:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 10:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 11:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 12:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 13:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 14:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 15:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 16:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 17:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 18:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 19:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 20:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 21:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 22:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 23:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 24:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


case 25:

$query_cd_solo = $mysqli->query("SELECT e_titulo, e_video FROM entrevista WHERE id_entrevista = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
        $video ='<div class="media">
          <div class="media-body">
            <h5 class="media-heading col-xs-offset-2" style="color:red;"><strong>'.$res['e_titulo'].'</strong></h5> <br>           
          </div>

        </div>
            <div class="container col-xs-offset-1">'.$res['e_video'].' <br>
        </div>
    ';
                        
            }

            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

break;


default:
echo '$variable no es igual a 1, 2 o 3.';
}



$salidaJson = array("respuesta" => $respuestaOK,
                    "mensaje" => $mensajeError,
                    "contenido" => $contenidoOK);

echo json_encode($salidaJson); 