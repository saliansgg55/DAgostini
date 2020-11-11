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

$query_cd_solo = $mysqli->query("SELECT disco_completo FROM discos WHERE id_disco = '".$variable."'  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
		{
			$video = $res['disco_completo'];
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;
case 2:

$query_cd_csera = $mysqli->query("SELECT disco_completo FROM discos WHERE id_disco = '".$variable."'  ");
while($res = $query_cd_csera -> fetch_array(MYSQLI_ASSOC))
		{
			$video = $res['disco_completo'];
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 
break;
case 3:

$query_cd_simplemente = $mysqli->query("SELECT disco_completo FROM discos WHERE id_disco = '".$variable."'  ");
while($res = $query_cd_simplemente -> fetch_array(MYSQLI_ASSOC))
		{
			$video = $res['disco_completo'];
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 
break;

case 4:

$query_cd_amarte = $mysqli->query("SELECT disco_completo FROM discos WHERE id_disco = '".$variable."'  ");
while($res = $query_cd_amarte -> fetch_array(MYSQLI_ASSOC))
		{
			$video = $res['disco_completo'];
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 
break;

case 5:
$query_cd_siempre = $mysqli->query("SELECT disco_completo FROM discos WHERE id_disco = '".$variable."'  ");
while($res = $query_cd_siempre -> fetch_array(MYSQLI_ASSOC))
		{
			$video = $res['disco_completo'];
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 
break;

case 6:
$query_cd_sentimientos1 = $mysqli->query("SELECT disco_completo FROM discos WHERE id_disco = '".$variable."'  ");
while($res = $query_cd_sentimientos1 -> fetch_array(MYSQLI_ASSOC))
		{
			$video = $res['disco_completo'];
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 
break;

case 7:
$query_cd_sinlimite = $mysqli->query("SELECT disco_completo FROM discos WHERE id_disco = '".$variable."'  ");
while($res = $query_cd_sinlimite -> fetch_array(MYSQLI_ASSOC))
		{
			$video = $res['disco_completo'];
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 
break;

case 8:
$query_cd_verdaderoamor = $mysqli->query("SELECT disco_completo FROM discos WHERE id_disco = '".$variable."'  ");
while($res = $query_cd_verdaderoamor -> fetch_array(MYSQLI_ASSOC))
		{
			$video = $res['disco_completo'];
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 
break;


case 9:
$query_cd_voypormas = $mysqli->query("SELECT disco_completo FROM discos WHERE id_disco = '".$variable."'  ");
while($res = $query_cd_voypormas -> fetch_array(MYSQLI_ASSOC))
		{
			$video = $res['disco_completo'];
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 
break;

case 10:
$query_cd_cclase = $mysqli->query("SELECT disco_completo FROM discos WHERE id_disco = '".$variable."'  ");
while($res = $query_cd_cclase -> fetch_array(MYSQLI_ASSOC))
		{
			$video = $res['disco_completo'];
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 
break;

case 11:
$query_cd_ustedes = $mysqli->query("SELECT disco_completo FROM discos WHERE id_disco = '".$variable."'  ");
while($res = $query_cd_ustedes -> fetch_array(MYSQLI_ASSOC))
		{
			$video = $res['disco_completo'];
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 
break;

case 12:
$query_cd_renovado = $mysqli->query("SELECT disco_completo FROM discos WHERE id_disco = '".$variable."'  ");
while($res = $query_cd_renovado -> fetch_array(MYSQLI_ASSOC))
		{
			$video = $res['disco_completo'];
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 
break;

case 13:
$query_cd_veinte = $mysqli->query("SELECT disco_completo FROM discos WHERE id_disco = '".$variable."'  ");
while($res = $query_cd_veinte -> fetch_array(MYSQLI_ASSOC))
		{
			$video = $res['disco_completo'];
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 
break;


case 14:
$query_cd_sentimientos2 = $mysqli->query("SELECT disco_completo FROM discos WHERE id_disco = '".$variable."'  ");
while($res = $query_cd_sentimientos2 -> fetch_array(MYSQLI_ASSOC))
		{
			$video = $res['disco_completo'];
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 
break;

case 16:
$query_cd_caprichosa = $mysqli->query("SELECT disco_completo FROM discos WHERE id_disco = '".$variable."'  ");
while($res = $query_cd_scaprichosa -> fetch_array(MYSQLI_ASSOC))
		{
			$video = $res['disco_completo'];
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 
break;


case 17:
$query_cd_caprichosa = $mysqli->query("SELECT disco_completo FROM discos WHERE id_disco = '".$variable."'  ");
while($res = $query_cd_scaprichosa -> fetch_array(MYSQLI_ASSOC))
		{
			$video = $res['disco_completo'];
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 
break;

case 18:
$query_cd_caprichosa = $mysqli->query("SELECT disco_completo FROM discos WHERE id_disco = '".$variable."'  ");
while($res = $query_cd_scaprichosa -> fetch_array(MYSQLI_ASSOC))
		{
			$video = $res['disco_completo'];
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 
break;















/* RECUPERACION DE TEMAS INEDITOS */
case 111:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>

		    <p><small><h5></h5></small></p>
		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;

case 222:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5>  

		    <p><small><h5>Tema a duo con Eugenia Quevedo grabado en 2016</h5></small></p>
		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;

case 333:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>Que Quieres de Mi [Septiembre 2015]</h5></small></p>
		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;

case 444:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
		    Tema grabado para el disco "Parte de tu vida" en homenaje a Daniel Cardozo como Artista, 
		    a su mama "Rosa" y para todos nuestros seres queridos que viven dentro de nuestros corazones.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;

case 555:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
		   	Tema Grabado a duo con Martin Gallo de Media Naranja.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 666:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
		   	Cover del tema "La incondicional" se grabo en el disco en el 2015 y salio en el disco "Momentos" del Chili Fernandez.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;

case 777:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
		   	Los Avilas sacan disco nuevo en el que incluyen "Murmullo descuidado" ,
		   	deciden grabarlo a duo interpretando una excelente version con Daniel Agostini, 
		   	ambos ex vocalistas del Grupo sombras.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;

case 888:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			A duo con Tony Angel.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 999:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Este tema se grabo a duo con "javito" Lider del Grupo Red  del Album Evolution, 
			el mismo tema grabado por la banda y la voz de Daniel Agostini va a ser parte del disco "Parte de tu vida".
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;

case 1010:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Este tema se grabo a duo con "javito" Lider del Grupo Red  del Album Evolution, 
			el mismo tema grabado por la banda y la voz de Daniel Agostini va a ser parte del disco "Parte de tu vida".
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 1111:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			En esta oportunidad vuelve a cantar un tema a duo con el grupo Megapuesta de chile, 
			en el disco 20-20 fue "Hija de mi vida" en Parte de tu vida sale el tema "Te amo" 
			solo con la voz de Agostini y cantan a duo el mismo tema.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 1212:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Daniel Agostini Producciones lanza una artista de excelente nivel "Yanina Hernandez" 
			ex participante del programa televisivo "La voz" le produce un disco en el que cantan un tema juntos, 
			cover de Marc Anthony "Escapemosno" interpretando una bella version del tema original.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 1313:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Uno de los primeros encuentros entre Daniel Agostini y Rodrigo Tapari, 
			ahora grandes amigos, en esta oportunidad corria el ano 2009 en donde 
			cantaron un tema de Rafaga juntos elegido por el mismo Agostini.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 1414:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Es un cover que tambien interpreta Chayanne, esta vez por el grupo uno y como invitado Daniel Agostini
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;

case 1515:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Panam y Agostini escriben juntos un tema para los mas chicos "Tengo celos" del mismo realizan un video clip , se puede ver en el programa de panam.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 1616:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Luego de que Jorge Avila dejara el Grupo Sombras para hacer su Banda "Los Avila" invito a Daniel Agostini 
			a Participar en un tema juntos " Vamos a amarla los dos" salio en el disco de Los avila.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 1717:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Disco inedito Hernan Rodriguez , Grupo red y Daniel Agostini cantan juntos los 3 una cancion.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 1818:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Cancion a duo con el Grupo Luz
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 1919:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Con Guillermo a duo.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 2020:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Los unicos es un grupo para eventos especiales en el cual lo integra , 
			Gaston Angrisani, Edgar de "volvan", el lider de Comanche, Juancito de "La Cumbia", 
			Daniel Agostini, grabaron un cover de Cesar Banana "No quiero ser tu amigo".
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;

case 2121:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Dos dias , es un grupo que fundo Antonio Carabajal Ex Bajista del Grupo Sombras , 
			tambien formo La clave norteña, en el grupo dos dias el guitarrista es Andes Lescano 
			quien estaba en la banda de Agostini cuando inicio su carrera como solista.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 2222:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Despues de que el Grupo Sombras se disolviera por una disputa interna entre los creadores 
			y musicos que marcaron una epoca Excelente, Juan Zapana Registra el nombre "Grupo Sombras" 
			y sigue con la marca registrada, el resto de los musicos, Pascual Benitez (Baterista), 
			Walter "pocho" Calderon (Percusion), Antonio Carabajal (Bajista) y "Pila" 
			Mansilla en Guitarra son quienes poseen el Sonido intacto y original de aquel Grupo sombras, 
			solo que ahora se llama "Sombras nada mas", cantan un tema con Daniel Agostini "Cuentame".
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 2323:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media" id="media">
		  <div class="media-body">

		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5>  

		    <p><small><h5>
			Se edita un disco "Historia" del Grupo sombras abarcando tres cantantes en particular, 
			Jorge Avila, Daniel Agostini y Hernan Rodriguez los mas influyentes en la epoca de sombras 
			y cada uno graba un tema inedito a Daniel Agostini le toco Puertas cerradas , una excelente cancion.</h5>
		    </small></p>

		    

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div >'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;

case 2424:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Lucerito sale en un disco Tropi Hits Vol.1 , fue un exito sin ninguna duda. 
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;



case 2525:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Canta un tema con cacho castaña "Para vivir un gran amor". 
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 2626:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Karina Agostini lanzo un disco como solista en el canta con su Hermano Daniel un tema que pocos conocen. 
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 2727:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Disco de cachacas Daniel presenta un tema Inedito ya en etapa como solista, 
			el tema se llama "como olvidarte" y no salio en ningun disco grabado en estudio, salvo este compilado.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 2828:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			En un programa de television Argentina es invitado para interpretar varios temas entre ellos "Cancion del Adios".
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 2929:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 
		    <p><small><h5>
			En el mismo programa de TV donde canta Cancion del adios,  nos deleita a todos con Entra a mi hogar.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;



case 3030:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Trago de sombra una version al estilo Agostini.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 3131:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Fantastico TV recital en vivo canta "Te necesito" tema del disco "Solo" , version balada.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;

case 3232:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			La Barca version Agostini.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 3333:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Tema Inedito que no salio en ningun disco pero que Daniel interpreto para todos sus fans.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 3434:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Cancion que queo en el tintero y que no formara parte del disco Parte de tu vida (Ensayo).
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
				
		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;

case 3535:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Tema grabado con Panam.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 
break;

case 3636:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Homenaje a Gilda.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 
break;			

case 3737:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Homenaje a Leo Mattioli.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';

		}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 3838:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			En vivo.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div>'.$res['i_video'].' </div>
';
}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;

case 3939:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Cover de la ventanita version comica.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div class="container">'.$res['i_video'].' </div>
';
}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;

case 4040:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Cover de la ventanita version comica.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div class="container">'.$res['i_video'].' </div>
';
}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;

case 4141:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Cover de la ventanita version comica.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div class="container">'.$res['i_video'].' </div>
';
}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;


case 4242:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Cover de la ventanita version comica.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div class="container">'.$res['i_video'].' </div>
';
}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;

case 4343:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Cover de la ventanita version comica.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div class="container">'.$res['i_video'].' </div>
';
}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;

case 4444:

$ineditos = $mysqli->query("SELECT * FROM ineditos WHERE i_cod = '".$variable."'  ");
while($res = $ineditos -> fetch_array(MYSQLI_ASSOC))
		{
			$descripcion = $res['i_desc'];

			$video ='<div class="media">
		  <div class="media-body">
		    <h5 class="media-heading"><strong>'.$res['i_interprete'].'</strong></h5>
		    <h5 style="color:blue;">'.$res['i_titulo'].': Duracion: '.$res['i_duracion'].'</h5> 

		    <p><small><h5>
			Cover de la ventanita version comica.
		    </h5></small></p>

		  </div>
		  <!-- 
		  <div class="media-right">
		    <img src="'.$res['i_imagenurl'].'" class="media-object" style="width:100px">
		  </div>
		  -->
		</div>
			<div class="container">'.$res['i_video'].' </div>
';
}

		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = $video; 

break;

default:
echo '$variable no es igual a 1, 2 o 3.';
}

/*
$salidaJson = array("respuesta" => $respuestaOK,
                    "mensaje" => $mensajeError,
                    "contenido" => $contenidoOK);

echo json_encode($salidaJson);   
*/

$salidaJson = array("respuesta" => $respuestaOK,
                    "mensaje" => $mensajeError,
                    "contenido" => $contenidoOK);

echo json_encode($salidaJson); 
?>