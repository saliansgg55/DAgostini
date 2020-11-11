<?php
//"mysql.hostinger.com.ar", "u374994852_agost", "bgt5bgt", "u374994852_agost"
$mysqli = new mysqli("localhost", "root", "", "agostini");


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}else{
	//echo "Conexion OK";
}


function conexionBD(){
	$mysqli = new mysqli("localhost", "root", "", "agostini");

	/* check connection */
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}else{
		//echo "Conexion OK";
	}

	return $mysqli;
}
?>