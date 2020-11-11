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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .colorin{color:red;}
    </style>

<script type="text/javascript">


$("#ver_discografia").click(function(){
    $(".service-box").hide();
});

$("#probeta").click(function(){
    alert("probando");
});
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
                <a class="navbar-brand page-scroll" href="#page-top">DANIEL AGOSTINI</a>
            </div>

            <!--portfolio-->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#page-top">Novedades</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Discografia</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Historia</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#ineditos">Ineditos</a>
                    </li>                       
                    <li>
                        <a class="page-scroll" href="#contact">Contacto</a>
                    </li>
                 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">NOVEDADES</h1>
                <hr>
                <h2>Nuevo Material Discografico</h2>
                <p class="colorin"> <strong>Daniel Agostini</strong> y su Banda se encuentra Grabando en los Estudios Hormiga Sound lo que será
                    el nuevo material discografico titulado <strong> PARTE DE TU VIDA</strong></p>
                   
                <p class="bg-primary">
                    <strong>Nuevo contenido
                    <h5>Ahora podes escuchar el CD completo y ver sus video clips</h5>
                    </strong>
                    

<button id="probeta" class="btn btn-info"></button>

                </p>
               <!--
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Abrir</a>
                -->
            </div>
        </div>
    </header>


<div class="well"><?php include('soytufan.php'); ?></div>


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
                    <small><?php echo hist_completa();?></small>
                    <a href="" id="h_cerrar" class="btn btn-default">Cerrar</a>

                    </div>

                </div>
            </div>
        </div>
    </section>
<!--
    <section id="services">

    </section>
-->    

<div class="container"><?php //echo soytufan();?></div>

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
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">

                    <div class="service-box" >
                        
                    <img src="http://images.coveralia.com/audio/d/Daniel_Agostini-Solo-Frontal.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                                                    
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
                        <img src="http://images.coveralia.com/audio/d/Daniel_Agostini-Como_Sera-Frontal.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
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
                        <img src="http://images.coveralia.com/audio/d/Daniel_Agostini-Simplemente-Frontal.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
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
                        <img src="http://images.coveralia.com/audio/d/Daniel_Agostini-Amarte-Frontal.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
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
                        <img src="http://images.coveralia.com/audio/d/Daniel_Agostini-20-20-Frontal.jpg" class="img-responsive img-thumbnail" width="200" heigth="200">
                        <h3>Daniel Agostini</h3>
                        <p class="text-muted">20-20 (2013)
                        <a href="#ver_cdsolo" id="btn-veinte" data-toggle="collapse" data-target="#cd_caca" class="btn btn-info btn-xs">Abrir Disco</a>   
                        </p>
                        <a href="#ver_cdsolo" id="btn-veintecerrar" data-toggle="collapse" data-target="#cd_caca" class="btn btn-info btn-xs hidden">Cerrar Disco</a>        
                        <?php echo veinte(); ?>
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
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Daniel Agostini - <strong>Parte de tu vida</strong></h2>
                <a href="#" class="btn btn-default btn-xl sr-button">PROXIMAMENTE NUEVO CD</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Dinamic IT</h2>
                    <hr class="primary">
                    <p>Empresa Desarrolladora de Software</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                   <!-- <p>Gerardo Salinas: 15-2536-1795</p>
                    <p>Rafael Monfort: 15-3877-3322</p>-->
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="gsalinas@dinamicit.com.ar">gsalinas@dinamicit.com.ar</a></p>
                    <p><a href="rmonfort@dinamicit.com.ar">rmonfort@dinamicit.com.ar</a></p>
                </div>
            </div>
        </div>
    </section>





    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflar