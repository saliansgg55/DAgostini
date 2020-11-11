<?php include("clase/clase.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daniel Agostini</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="subir/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="js/discos.js"></script>
    <script type="text/javascript" src="js/videos.js"></script>


<!--    <script type="text/javascript" src="js/sorteo.js"></script>
    <script type="text/javascript" src="alertifyjs/alertify.js"></script>
    <script type="text/javascript" src="alertifyjs/css/alertify.css"></script>
    -->

    <script src="js/jquery-2.0.2.js"></script>
    <script src="js/upload.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .colorin{color:red;}
        .tex{color:black;}
        #cartel{border: 1px solid  black;}

        .navbar-default{background: rgba(255,93,177,1);
background: -moz-linear-gradient(left, rgba(255,93,177,1) 0%, rgba(230,87,213,1) 39%, rgba(245,103,228,1) 64%, rgba(239,1,124,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(255,93,177,1)), color-stop(39%, rgba(230,87,213,1)), color-stop(64%, rgba(245,103,228,1)), color-stop(100%, rgba(239,1,124,1)));
background: -webkit-linear-gradient(left, rgba(255,93,177,1) 0%, rgba(230,87,213,1) 39%, rgba(245,103,228,1) 64%, rgba(239,1,124,1) 100%);
background: -o-linear-gradient(left, rgba(255,93,177,1) 0%, rgba(230,87,213,1) 39%, rgba(245,103,228,1) 64%, rgba(239,1,124,1) 100%);
background: -ms-linear-gradient(left, rgba(255,93,177,1) 0%, rgba(230,87,213,1) 39%, rgba(245,103,228,1) 64%, rgba(239,1,124,1) 100%);
background: linear-gradient(to right, rgba(255,93,177,1) 0%, rgba(230,87,213,1) 39%, rgba(245,103,228,1) 64%, rgba(239,1,124,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff5db1', endColorstr='#ef017c', GradientType=1 );
}

.btn-info{
    background: rgba(255,93,177,1);
background: -moz-linear-gradient(left, rgba(255,93,177,1) 0%, rgba(230,87,213,1) 39%, rgba(245,103,228,1) 64%, rgba(239,1,124,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(255,93,177,1)), color-stop(39%, rgba(230,87,213,1)), color-stop(64%, rgba(245,103,228,1)), color-stop(100%, rgba(239,1,124,1)));
background: -webkit-linear-gradient(left, rgba(255,93,177,1) 0%, rgba(230,87,213,1) 39%, rgba(245,103,228,1) 64%, rgba(239,1,124,1) 100%);
background: -o-linear-gradient(left, rgba(255,93,177,1) 0%, rgba(230,87,213,1) 39%, rgba(245,103,228,1) 64%, rgba(239,1,124,1) 100%);
background: -ms-linear-gradient(left, rgba(255,93,177,1) 0%, rgba(230,87,213,1) 39%, rgba(245,103,228,1) 64%, rgba(239,1,124,1) 100%);
background: linear-gradient(to right, rgba(255,93,177,1) 0%, rgba(230,87,213,1) 39%, rgba(245,103,228,1) 64%, rgba(239,1,124,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff5db1', endColorstr='#ef017c', GradientType=1 );

border-radius: 5px;
}


.bg-primary{
    background: rgba(255,93,177,1);
background: -moz-linear-gradient(left, rgba(255,93,177,1) 0%, rgba(230,87,213,1) 39%, rgba(245,103,228,1) 64%, rgba(239,1,124,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(255,93,177,1)), color-stop(39%, rgba(230,87,213,1)), color-stop(64%, rgba(245,103,228,1)), color-stop(100%, rgba(239,1,124,1)));
background: -webkit-linear-gradient(left, rgba(255,93,177,1) 0%, rgba(230,87,213,1) 39%, rgba(245,103,228,1) 64%, rgba(239,1,124,1) 100%);
background: -o-linear-gradient(left, rgba(255,93,177,1) 0%, rgba(230,87,213,1) 39%, rgba(245,103,228,1) 64%, rgba(239,1,124,1) 100%);
background: -ms-linear-gradient(left, rgba(255,93,177,1) 0%, rgba(230,87,213,1) 39%, rgba(245,103,228,1) 64%, rgba(239,1,124,1) 100%);
background: linear-gradient(to right, rgba(255,93,177,1) 0%, rgba(230,87,213,1) 39%, rgba(245,103,228,1) 64%, rgba(239,1,124,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff5db1', endColorstr='#ef017c', GradientType=1 );
}

#daniel{color: white;}
.navbar-nav{color: white;}

/*ACA VA EL SLIDER*/
body {
    padding-top: 50px; /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
}

.business-header {
    height: 400px;
    background: url('img/header.jpg') center center no-repeat scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}

/* Customize the text color and shadow color and to optimize text legibility. */

.tagline {
    text-shadow: 0 0 10px #000;
    color: #fff;
}

.img-center {
    margin: 0 auto;
}

footer {
    margin: 50px 0;
}


@font-face{
    font-family: "agostini";
    font-style: normal ;
    font-weight: normal;
    src: local("?"), url("font/nazeefa-demo.ttf") format("woff"), url("font/nazeefa-demo.ttf") format("truetype");
}
.letra{
    font-family: "agostini";
    font-style: normal ;
    font-weight: normal;
    font-size: 30px;
    src: local("?"), url("font/nazeefa-demo.ttf") format("woff"), url("font/nazeefa-demo.ttf") format("truetype");
}
/*ACA VA EL SLIDER*/


.fondo_sorteo{background-image:url("img/fondo_sorteo.jpg");}
    </style>


<script type="text/javascript">
$(document).ready(function(){
$("#formsubir").hide();
$("#ver_gal").hide();
//$("#c_gal").hide();
//$("#c_fan").hide();


$("#ver_discografia").click(function(){
    $(".service-box").hide();
});

    $("#fan").click(function(){
        $("#formsubir").show();
        $("#formsubir").load('subir/index.php');
        $("#fan").hide();
        $("#c_fan").removeClass("hidden");
    });

    $("#c_fan").click(function(){
        $("#formsubir").fadeOut();
        $("#c_fan").addClass("hidden");
        $("#fan").show();
    });

    $("#boton_cerrar").click(function(){
        $("#formsubir").fadeOut();
    });

    $("#gal").click(function(){
        $("#ver_gal").load('subir/mostrar_archivos.php');
        $("#ver_gal").show();
        $("#c_gal").removeClass("hidden");
        $("#gal").hide();
    });

    $("#c_gal").click(function(){
        $("#ver_gal").fadeOut();
        $("#c_gal").addClass("hidden");
        $("#gal").show();
    });


});


/*
$("#ver_discografia").click(function(){
    $(".service-box").hide();
});
*/


</script>

</head>

<body id="page-top">



    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll " href="#page-top" id="daniel">DANIEL AGOSTINI</a>
            </div>

            <!--portfolio-->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#page-top"><span class="glyphicon glyphicon-th-list"></span> Novedades</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services"><span class="glyphicon glyphicon-cd"></span> Discografia</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about"><span class="glyphicon glyphicon-hourglass"></span> Historia</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#ineditos"><span class="glyphicon glyphicon-star"></span> Ineditos</a>
                    </li>                       
                   <!-- <li>
                        <a class="page-scroll" href="#contact"><span class="glyphicon glyphicon-phone"></span> Contacto</a>
                    </li>-->
                 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"><br>
                    <h1 class="tagline letra">Daniel Agostini</h1><br>
                    <h4 class="tagline">Parte de tu vida</h4>
                </div>

                <div class="col-lg-12">
                    <h5 class="tagline"><strong>Todos los viernes de 20 a 22hs FM RADIO FEDERAL 98.1 y Domingos de 22 a 00hs <br>
                    Descarga la APP y escucha la radio</strong><br><br>
      
                    <div id="radio" >
                        <!--<a href="https://play.google.com/store/apps/details?id=com.federal.radio" target="_blank" class="btn btn-info btn-xs ">Descargar APP RADIO</a>
           -->
                   </div>
                        <br>


                        <br><br>
                    </h5>
                </div>                
            </div>
        </div>
    </header>


<section  class="fondo_sorteo" id="first_sort"> <!-- SORTEO -->
    
    <div class="container-fluid ">
        <div class="row" align="center">
        <?php //Winclude('form_sorteo.php'); ?>        
        </div>
    </div>

</section>

<div id="botones">
<!-- MOSTRAR VIDEO CANCION ESCUCHAR 
<button id="btnvideo" class="btn btn-info btn-xs">Escuchar</button>     -->          

<form id="cd_solo_video">
    <input id="id_disco" name="disco" value="1" class="hidden">
    <input id="id_video" name="video" value="1" class="hidden">
</form>
<div id="video_ver" class="hidden">


</div>

<div id="botoncerrar" class="hidden">
<button id="btn_cn_cerrar"  class="btn btn-info btn-xs ">Cerrar Cancion</button>   
</div>
<!-- MOSTRAR VIDEO CANCION ESCUCHAR -->

</div>


    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Historia</h2>
                    <hr class="light">
                    <p class="text-faded">
                       <div id="hc"> <small><?php echo historia_corta();?></small> </div>
                    </p>
                    
                    <button data-toggle="collapse" data-target="#demo" class="page-scroll btn btn-default btn-md sr-button " id="leer-historia">Leer mas</button>
                    

                    <div id="demo" class="collapse" >
                    <small><h5><?php echo hist_completa();?></h5></small>
                    <a href="" id="h_cerrar" class="btn btn-default">Cerrar</a>

                    </div>

                </div>
            </div>
        </div>
    </section>








        <?php 
        /*
        COMIENZA
        FUNCION INEDITOS 28/09/2016 MUESTRA LOS TEMAS INEDITOS EL LISTADO
        */
    function ii(){
        $salida = "";
        $mysqli = conexionBD();
        $contenido_inedito = $mysqli->query("SELECT * FROM ineditos ");
        while($row_i = $contenido_inedito -> fetch_array(MYSQLI_ASSOC))
        {            

            $salida.='
                  <tr>
                    <td><small>'.$row_i['id_inedito'].'</small></td>
                    <td><small>'.$row_i['i_titulo'].'</small>

                    </td>
                    <td>
                    <a  tema="'.$row_i['i_cod'].'" id="inedito_apretar" data-toggle="collapse" data-target="#escucha_inedito" class="btn btn-info btn-xs">Escuchar</a>
                    </td>
                  </tr>
               

                ';
            } // Cierra While
            return $salida;

        }// Cierra funcion ii

        /*
        TERMINA
        FUNCION INEDITOS 28/09/2016 MUESTRA LOS TEMAS INEDITOS EL LISTADO
        */
                  ?>




<!-- TEMAS INEDITOS DE DANIEL AGOSTINI -->
<!-- 28-09-2016 -->
<section id="ineditos">
        <div class="container">
            <div class="container">
              <div class="page-header">
                <h4>CANCIONES INEDITAS  <span class="glyphicon glyphicon-music" aria-hidden="true"> </span></h4>
                
              </div>
              <p><small><h5>Listado de temas ineditos que no salieron en ningun disco de Estudio.</h5></small></p>

              
              <button data-toggle="collapse" data-target="#ine" class="btn btn-info btn-block">Ineditos</button>
            </div>

                   <!-- 
                   <div id="escucha_inedito" class="collapse"> <br>
                        <div id="cacaroto2"></div>
                    </div>
                    -->
                    <div id="escucha_inedito" class="collapse"> <br>
                        <button id="cerrar_tema" class="btn btn-info btn-block hidden">Ineditos</button>
                        <div id="cacaroto"></div>
                    </div>

              <div id="ine" class="collapse">
                <div id="listado-ineditos"> <?php //echo ineditos(); ?>

            <div class="container ">
              <h4><strong>Lista de temas</strong></h4>
              <p><small>Canciones a duo con otros artistas e ineditos</small></p>
                    <!--
                    <div id="escucha_inedito" class="collapse"> <br>
                        <div id="cacaroto"></div>
                    </div>
                    -->
              <table class="table " cellpadding="0" cellspacing="0" border="0" width="auto" id="listatemas">
                <thead>
                  <tr>
                    <th>Nº</th>
                    <th>Nombre</th>
                    <th>Accion</th>
                  </tr>
                </thead>


                <tbody>
                    <?php echo ii();?>

              </tbody>

                

              </table>
            </div>

                </div>
              </div>
            


     

<!-- ENTREVISTAS DE DANIEL AGOSTINI 04-10-2016 -->
<!-- FUNCION PARA RECUPERAR TODAS LAS ENTREVISTAS DE LA BD -->
<?php
    function ee(){ // FUNCION ENTREVISTA
        $entrevista = "";
        $mysqli = conexionBD();
        $contenido_inedito = $mysqli->query("SELECT * FROM entrevista ");
        while($row_i = $contenido_inedito -> fetch_array(MYSQLI_ASSOC))
        {            

            $entrevista.='
                  <tr>
                    <td><small>'.$row_i['id_entrevista'].'</small></td>
                    <td><small>'.$row_i['e_titulo'].'</small>

                    </td>
                    <td>
                    <a  tema="'.$row_i['id_entrevista'].'" id="entrevista_apretar" data-toggle="collapse" data-target="#escucha_entrevista" class="btn btn-info btn-xs">ver video</a>
                    </td>
                  </tr>
               

                ';
            } // Cierra While
            return $entrevista;

        }// Cierra funcion ii
?>
<!-- FUNCION PARA RECUPERAR TODAS LAS ENTREVISTAS DE LA BD -->








         <div class="container">
              <div class="page-header">
                <h4>ENTREVISTAS <span class="glyphicon glyphicon-facetime-video" aria-hidden="true"> </span></h4>
                
              </div>
              <p><small><h5>Diversas notas y entrevistas realizadas a Daniel Agostini.</h5></small></p>

              
              <button data-toggle="collapse" data-target="#entre" class="btn btn-info btn-block">Notas y Entrevistas</button>
            </div>

            <!-- VIDEO DE LA ENTREVISTA -->
            <div id="escucha_entrevista" class="collapse"> <br>
                <!--<button id="cerrar_tema" class="btn btn-info btn-block hidden">Ineditos</button>-->
                <div id="ventrevista"></div>
            </div>
            <!-- VIDEO DE LA ENTREVISTA -->

              <div id="entre" class="collapse">
                <div id="listado-ineditos"> <?php //echo ineditos(); ?>

            <div class="container ">
              <h4><strong>Lista de notas</strong></h4>
              <p><small>Varidad de entrevistas en diferentes canales de TV</small></p>
                    <!--
                    <div id="escucha_inedito" class="collapse"> <br>
                        <div id="cacaroto"></div>
                    </div>
                    -->
              <table class="table " cellpadding="0" cellspacing="0" border="0" width="auto" id="listaentrevista">
                <thead>
                <tr>
                <th>Nº</th>
                <th>Nombre</th>
                <th>Accion</th>
                </tr>
                </thead>


                <tbody>
                    <?php echo ee();?>
                </tbody>
              </table>
            </div>

                </div>
              </div>
<!-- ENTREVISTAS DE DANIEL AGOSTINI 04-10-2016 -->




        



        </div> <!-- Cierra Conainer Principal del section -->
</section>
<!-- TEMAS INEDITOS DE DANIEL AGOSTINI -->
















     <!--   <div class="panel panel-default">
        <div class="panel-heading"><small>Subi tu foto con Daniel Agostini</small></div>
        <div class="panel-body"> -->
       
    <!--
        <div class="container">
            <div class="container">
              <div class="page-header">
                <h3>SOY TU FAN  <span class="glyphicon glyphicon-camera" aria-hidden="true"> </span></h3>

              </div>
              <p><small>Subi tu foto de Daniel Agostini para compartirla con toda la comunidad Agostinera !</small></p>
            </div>
            
        </div>


    
        <a class="btn btn-info btn-block " id="fan" >Soy tu fan <span class="label label-danger"> Nuevo</span></a>   
        <a class="btn btn-info btn-block hidden" id="c_fan" >Cerrar carga <span class="label label-danger"> Nuevo</span></a>  </a> 
            <div id="formsubir" class="collapse">
             <?php //include_once('subir/index.php');?>
            </div>
                -->

          <!--  </div>
        </div> -->

     
   <style type="text/css">
/* 
   .newStyle1 {
   font-family: Arial, Helvetica, sans-serif;
}
    .imagen{
        width:300px;
        padding:2em;
        float:left; 
    }*/
</style>

<!--
<button data-toggle="collapse" data-target="#galeria" class="btn btn-info btn-block">Ver Galeria</button>
-->

<!--
        <a  class="btn btn-info btn-block" id="gal" >Ver Galeria <span class="label label-danger">  Nuevo</span></a>  </a>
        <a  class="btn btn-info btn-block hidden" id="c_gal">Cerrar Galeria <span class="label label-danger">  Nuevo</span></a>  </a>


<div id="ver_gal" class="galeria ">
<div class="container"><p><h5>Galería de imágenes</h5></p></div>
                <?php
//Solo tienen que cambiar el directorio de las imagenes en "dir", y en el link del archivo
// y ajustar los divs a su diseño, lo importante es el codigo php
              /*  $NAMEFILE = "galeria.php";
                $dir = opendir("subir/archivos_subidos/");
                while ($file = readdir($dir)) {
                if ($file != "." && $file != ".." && $file != "$NAMEFILE") {
                $data[$file]='<div class="grid_3 imagen "><a href="subir/archivos_subidos/'.$file.'" target="_parent"><img src="subir/archivos_subidos/'.$file.'" alt="'.$file.'" title="'.$file.'" width="90%" height="90%" class="img-thumbnail"/></a></div>';
                }}
                rsort($data);
                while(list($k,$v) = each($data)) { echo $v; }
                clearstatcache();
                    echo "<br />";*/
                ?>
</div>  
-->

   <?php



        /*$ruta = "subir/archivos_subidos/"; // Indicar ruta
         $filehandle = opendir($ruta); // Abrir archivos
          while ($file = readdir($filehandle)) {
           if ($file != "." && $file != "..") {
            $tamanyo = GetImageSize($ruta . $file);
                    ?>
             <img src="<?php echo $ruta.$file ?>" width="100px"><br> <br>    
                    <?php
           } 
          } 
        closedir($filehandle); // Fin lectura archivos*/
    ?>

        <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">DANIEL AGOSTINI</h2>
                    <h4>Discografia Completa</h4>
                    <hr class="primary">
                   <!--  <p class="text-muted"> <a href="#ver_cdsolo" id="ver_discografia" data-toggle="collapse" data-target="#cd_solo" class="btn btn-info btn-xs">Ver Discografia</a></p>     -->
                </div>
            </div>
        </div>


        <div class="container" ><!--  DISCOGRAFIA COMPLETA -->



                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="https://i.ytimg.com/vi/jRGaZQg9Og4/maxresdefault.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Ni&ntilde;a Caprichosa</h3>
                        <p class="text-muted"> (1994)
                        <a href="#ncaprichosa" id="btn-nina" data-toggle="collapse" data-target="#cdnina" class="btn btn-info btn-xs">Abrir Disco</a>   
                        </p>
                        <a href="#ncaprichosa" id="btn-ninacerrar" data-toggle="collapse" data-target="#cdnina" class="btn btn-info btn-xs hidden">Cerrar Disco</a>        
                        <?php echo ninacaprichosa(); ?>
                    </div>
                </div>  


                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="https://i.ytimg.com/vi/rbu86WMKv-g/maxresdefault.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Boquita de caramelo</h3>
                        <p class="text-muted"> (1995)
                        <a href="#bcaramelo" id="btn-boquita" data-toggle="collapse" data-target="#cd_caramelo" class="btn btn-info btn-xs">Abrir Disco</a>   
                        </p>
                        <a href="#bcaramelo" id="btn-boquitacerrar" data-toggle="collapse" data-target="#cd_caramelo" class="btn btn-info btn-xs hidden">Cerrar Disco</a>        
                        <?php echo boquitadecaramelo(); ?>
                    </div>
                </div>                  


                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="http://k42.kn3.net/taringa/1/8/8/7/5/1/86/kpodelnea/3EE.jpg?2775" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Sombras nada mas</h3>
                        <p class="text-muted"> (1996)
                        <a href="#snadamas" id="btn-nadamas" data-toggle="collapse" data-target="#cdnadamas" class="btn btn-info btn-xs">Abrir Disco</a>   
                        </p>
                        <a href="#snadamas" id="btn-nadamascerrar" data-toggle="collapse" data-target="#cdnadamas" class="btn btn-info btn-xs hidden">Cerrar Disco</a>        
                        <?php echo sombrasnadamas(); ?>
                    </div>
                </div>                  




            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">

                    <div class="service-box" >
                        
                    <img src="https://www.cmtv.com.ar/tapas-cd/agostinisolo.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                                                    
                        <h3>Daniel Agostini</h3>
                        <p class="text-muted">Solo (1997) <a href="#ver_cdsolo" id="solin" data-toggle="collapse" data-target="#cd_solo" class="btn btn-info btn-xs">Abrir Disco</a></p>     
                        <a href="#ver_cdsolo" id="cdsolo_cerrar" data-toggle="collapse" data-target="#cd_solo" class="btn btn-info btn-xs hidden">Cerrar Disco</a>               
                        
                        <!-- Mostramos el Contenido del Disco SOLO -->
                   <?php echo solo(); ?> 
                        <!-- Mostramos el Contenido del Disco SOLO -->

                        </div> <!-- Cierra class="service-box" -->
<!--
                        <div id="menu2" class="tab-pane fade">
                          <h3>Menu 2</h3>
                          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                          <h3>Menu 3</h3>
                          <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                      </div>
                    -->

                    </div> <!-- Cierra row -->
                    </div> <!-- Cierra container -->






                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="https://1.bp.blogspot.com/-9wLuuSAnmIM/VthTndhcHFI/AAAAAAAAC5M/rSc3skGLUus/s320/daniel-agostini-como-sera-1998.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Daniel Agostini</h3>
                        <p class="text-muted">Como sera (1998) 
                        <a href="#ver_cdsolo" id="btn-comosera" data-toggle="collapse" data-target="#cd_csera" class="btn btn-info btn-xs">Abrir Disco</a>                            
                        </p>
                        <a href="#ver_cdsolo" id="cdsera_cerrar" data-toggle="collapse" data-target="#cd_csera" class="btn btn-info btn-xs hidden">Cerrar Disco</a>               

                        <?php echo como_sera(); ?>  
                      
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="https://www.cmtv.com.ar/tapas-cd/agostinisimplemente.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Daniel Agostini</h3>
                        <p class="text-muted">Simplemente (1999-2000)
                        <a href="#ver_cdsolo" id="btn-simplemente" data-toggle="collapse" data-target="#cd_sim" class="btn btn-info btn-xs">Abrir Disco</a>   
                        </p>
                        <a href="#ver_cdsolo" id="cdsim_cerrar" data-toggle="collapse" data-target="#cd_csera" class="btn btn-info btn-xs hidden">Cerrar Disco</a>               

                        <?php echo simplemente();  ?>                      
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="https://www.cmtv.com.ar/tapas-cd/agostiniamarte.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Daniel Agostini</h3>
                        <p class="text-muted">Amarte (2001)
                        <a href="#ver_cdsolo" id="btn-amarte" data-toggle="collapse" data-target="#cd_amarte" class="btn btn-info btn-xs">Abrir Disco</a>  
                        </p>
                        <a href="#ver_cdsolo" id="cdamarte_cerrar" data-toggle="collapse" data-target="#cd_csera" class="btn btn-info btn-xs hidden">Cerrar Disco</a>               
                        <?php echo amarte();  ?>               
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="http://www.cmtv.com.ar/tapas-cd/agostinimivida.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Daniel Agostini</h3>
                        <p class="text-muted">Mi Vida... En vivo (2001)</p>
                    </div>
                </div>  
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="http://www.cmtv.com.ar/tapas-cd/agostinisiempre.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Daniel Agostini</h3>
                        <p class="text-muted">Siempre (2002)
                        <a href="#ver_cdsolo" id="btn-siempre" data-toggle="collapse" data-target="#cd_siempre" class="btn btn-info btn-xs">Abrir Disco</a>  
                        </p>
                        <a href="#ver_cdsolo" id="cdsiempre_cerrar" data-toggle="collapse" data-target="#cd_csera" class="btn btn-info btn-xs hidden">Cerrar Disco</a>               
                         <?php echo siempre();  ?> 
                    </div>
                </div>  
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="http://www.cmtv.com.ar/tapas-cd/agostinisentimientosuno.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Daniel Agostini</h3>
                        <p class="text-muted">Sentimientos 1 (2003)
                        <a href="#ver_cdsolo" id="btn-sentimientos" data-toggle="collapse" data-target="#cd_sentimientos" class="btn btn-info btn-xs">Abrir Disco</a>    
                        </p>
                        <a href="#ver_cdsolo" id="cdsentimientos_cerrar" data-toggle="collapse" data-target="#cd_csera" class="btn btn-info btn-xs hidden">Cerrar Disco</a>               
                        <?php echo sentimientos();  ?> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="http://www.cmtv.com.ar/tapas-cd/agostinisentimientosdos.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Daniel Agostini</h3>
                        <p class="text-muted">Sentimientos 2 (2003)
                        <a href="#ver_cdsolo" id="btn-sentimientos2" data-toggle="collapse" data-target="#cd_sentimientos2" class="btn btn-info btn-xs">Abrir Disco</a>        
                        </p>
                        <a href="#ver_cdsolo" id="btn-sentimientos2_cerrar" data-toggle="collapse" data-target="#cd_sinlimite" class="btn btn-info btn-xs hidden">Cerrar Disco</a>        
                        <?php echo sentimientos2();  ?>                             
                    </div>
                </div>         
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="http://www.cmtv.com.ar/tapas-cd/agostinisinlimite.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Daniel Agostini</h3>
                        <p class="text-muted">Sin limite (2004)
                        <a href="#ver_cdsolo" id="btn-sinlimite" data-toggle="collapse" data-target="#cd_sinlimite" class="btn btn-info btn-xs">Abrir Disco</a>                                
                        </p>
                        <a href="#ver_cdsolo" id="btn-limitecerrar" data-toggle="collapse" data-target="#cd_sinlimite" class="btn btn-info btn-xs hidden">Cerrar Disco</a>        
                        <?php echo sinlimite();  ?> 
                    </div>
                </div>   
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="http://www.cmtv.com.ar/tapas-cd/agostiniverdaderoamor.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Daniel Agostini</h3>
                        <p class="text-muted">Verdadero amor (2005-2006)
                        <a href="#ver_cdsolo" id="btn-verdadero" data-toggle="collapse" data-target="#cd_verdadero " class="btn btn-info btn-xs">Abrir Disco</a>                                                            
                        </p>
                        <a href="#ver_cdsolo" id="btn-verdaderocerrar" data-toggle="collapse" data-target="#cd_verdadero" class="btn btn-info btn-xs hidden">Cerrar Disco</a>        
                        <?php echo verdaderoamor(); ?>
                    </div>
                </div>   
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="http://www.cmtv.com.ar/tapas-cd/agostinivoypormas.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Daniel Agostini</h3>
                        <p class="text-muted">Voy por mas (2007)
                        <a href="#ver_cdsolo" id="btn-voypormas" data-toggle="collapse" data-target="#cd_voypormas " class="btn btn-info btn-xs">Abrir Disco</a>                                                                
                        </p>
                        <a href="#ver_cdsolo" id="btn-vemascerrar" data-toggle="collapse" data-target="#cd_voypormas" class="btn btn-info btn-xs hidden">Cerrar Disco</a>        
                        <?php echo voypormas(); ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="http://www.cmtv.com.ar/tapas-cd/agostiniclasicos.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Daniel Agostini</h3>
                        <p class="text-muted">Clasicos con clase (2008)
                        <a href="#ver_cdsolo" id="btn-clase" data-toggle="collapse" data-target="#cd_conclase " class="btn btn-info btn-xs">Abrir Disco</a>                                                                    
                        </p>
                        <a href="#ver_cdsolo" id="btn-cclasecerrar" data-toggle="collapse" data-target="#cd_conclase" class="btn btn-info btn-xs hidden">Cerrar Disco</a>        
                        <?php echo cclase(); ?>
                    </div>
                </div>         
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="http://www.cmtv.com.ar/tapas-cd/agostinipensandoenustedes.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Daniel Agostini</h3>
                        <p class="text-muted">Pensando en ustedes (2009-2010)
                        <a href="#ver_cdsolo" id="btn-ustedes" data-toggle="collapse" data-target="#cd_ustedes " class="btn btn-info btn-xs">Abrir Disco</a>   
                        </p>
                        <a href="#ver_cdsolo" id="btn-ustedescerrar" data-toggle="collapse" data-target="#cd_conclase" class="btn btn-info btn-xs hidden">Cerrar Disco</a>        
                        <?php echo pustedes(); ?>
                    </div>
                </div>  
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="http://www.cmtv.com.ar/tapas-cd/danielagostinirenovado.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Daniel Agostini</h3>
                        <p class="text-muted">Renovado (2011-2012)
                        <a href="#ver_cdsolo" id="btn-renovado" data-toggle="collapse" data-target="#cd_renovado " class="btn btn-info btn-xs">Abrir Disco</a>   
                        </p>
                        <a href="#ver_cdsolo" id="btn-renovadocerrar" data-toggle="collapse" data-target="#cd_renovado" class="btn btn-info btn-xs hidden">Cerrar Disco</a>        
                        <?php echo renovado(); ?>
                    </div>
                </div>    

                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="https://www.buenamusica.com/media/fotos/discos/d/daniel-agostini/daniel-agostini_20-20.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Daniel Agostini</h3>
                        <p class="text-muted">20-20 (2013)
                        <a href="#ver_cdsolo" id="btn-veinte" data-toggle="collapse" data-target="#cd_caca" class="btn btn-info btn-xs">Abrir Disco</a>   
                        </p>
                        <a href="#ver_cdsolo" id="btn-veintecerrar" data-toggle="collapse" data-target="#cd_caca" class="btn btn-info btn-xs hidden">Cerrar Disco</a>        
                        <?php echo veinte(); ?>
                    </div>
                </div>      



                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="img/partedetuvida.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Daniel Agostini</h3>
                        <p class="text-muted">Parte de tu vida (2017)
                        <a href="#partevida" id="btn-partevida" data-toggle="collapse" data-target="#cdpartevida" class="btn btn-info btn-xs">Abrir Disco</a>   
                        </p>
                        <a href="#partevida" id="btn-partevidacerrar" data-toggle="collapse" data-target="#cdpartevida" class="btn btn-info btn-xs hidden">Cerrar Disco</a>        
                        <?php echo partedetuvida(); ?>
                    </div>
                </div>  







               <!-- <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="http://vignette1.wikia.nocookie.net/mirrorsedge/images/d/d2/Silueta.png/revision/latest?cb=20090720132345&path-prefix=es" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Daniel Agostini</h3>
                        <p class="text-muted">Parte de tu vida (2016)</p>
                    </div>
                </div> -->      

            </div>
        </div>
    </section>

  <!-- SECCION DE INEDITOS -->
    <section id="ineditos">
        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </section>
<!-- SECCION DE INEDITOS -->  

    <section class="no-padding" id="portfolio">

        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <!--
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
-->


            </div>
        </div>

    </section>
<br><br><br>
    <!--<aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Daniel Agostini - <strong>Parte de tu vida</strong></h2>
                <a href="#" class="btn btn-default btn-xl sr-button">PROXIMAMENTE NUEVO CD</a>
            </div>
        </div>
    </aside>-->

   <!-- <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Dinamic IT</h2>
                    <hr class="primary">
                    <p>Empresa Desarrolladora de Software</p>
                    <p><a href="http://www.dinamicit.com.ar">www.dinamicit.com.ar</a></p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>Gerardo Salinas: 15-2536-1795</p>
                    <p>Rafael Monfort: 15-3877-3322</p>-->
               <!-- </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="">gsalinas@dinamicit.com.ar</a></p>
                    <p><a href="">rmonfort@dinamicit.com.ar</a></p>
                </div>
            </div>
        </div>
    </section>
-->




    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflar	