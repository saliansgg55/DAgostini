<?php
include_once "accesso_bd.php";

	
// Cambio de variables
$mysqli = conexionBD();

$con_gan = $mysqli->query("select sor_dni from sorteo where sor_win = 'x' ");

$rowcount=mysqli_num_rows($con_gan);

if ($rowcount == 1) {
	
	$con_gan = $mysqli->query("select * from sorteo where sor_win = 'x' ");
    
    while($res = $con_gan -> fetch_array(MYSQLI_ASSOC))
		           {
		           		$win = $res['sor_dni'].' '.$res['sor_nomape'];
		           		$nom = $res['sor_nomape'];
		           		$num = $res['sor_dni'];
		           	}	
	echo $win;		           

}else{



$consulta = $mysqli->query("SELECT * FROM sorteo ORDER BY RAND() LIMIT 1");
//$cons_nom = $mysqli->query("SELECT sor_nomape FROM sorteo WHERE sor_nomape ='".$nomape."' ");
	             while($res = $consulta -> fetch_array(MYSQLI_ASSOC))
		           {
		           		$win = $res['sor_dni'].' '.$res['sor_nomape'];
		           		$nom = $res['sor_nomape'];
		           		$num = $res['sor_dni'];

		           	}
$mod_ganador = $mysqli->query("UPDATE sorteo SET sor_win = 'X' where sor_nomape = '".$nom."' AND sor_dni = '".$num."' ");


echo $win;
}


//echo  $dni .':'. $nombre;
//echo $dni;

?>