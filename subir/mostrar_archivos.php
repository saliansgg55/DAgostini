
<div class="container"><p><h5>Galería de imágenes</h5></p></div>
<?php

 $NAMEFILE = "galeria.php";
 $dir = opendir("archivos_subidos/");
 while ($file = readdir($dir)) {
 if ($file != "." && $file != ".." && $file != "$NAMEFILE") {
 $data[$file]='<div class="grid_3 imagen "><a href="subir/archivos_subidos/'.$file.'" target="_parent"><img src="subir/archivos_subidos/'.$file.'" alt="'.$file.'" title="'.$file.'" width="300px" height="100px" class="img-thumbnail"/></a></div>';
 }}
 rsort($data);
 while(list($k,$v) = each($data)) { echo $v; }
 clearstatcache();
     echo "<br />";

/*$directorio_escaneado = scandir('./archivos_subidos');
$archivos = array();
foreach ($directorio_escaneado as $item) {
    if ($item != '.' and $item != '..') {
        $archivos[] = $item;
    }
}
echo json_encode($archivos);*/
?>
