
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



    <!-- Bootstrap Core CSS 
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/bootstrap.css">-->

    <!--Alertify CSS-->
    <link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">


    <!-- Custom Fonts 
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    -->

    <!-- Plugin CSS 
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    -->

    <!-- Theme CSS 
    <link href="css/creative.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>  -->
    <script type="text/javascript" src="js/sorteo.js"></script>
  

    <!--  Alertify JS   -->
    <script type="text/javascript" src="alertifyjs/alertify.js"></script>
    <!--<script type="text/javascript" src="alertifyjs/css/alertify.css"></script>-->
 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!--    
<script type="text/javascript">
</script>
-->
</head>

<style type="text/css">

#header_sorteo {
    
    background: black;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}
    
label{color: white;}

</style>
<!--
<body id="page-top">-->

<div class="container-fluid" >

    <div class="row">
        <div id="header_sorteo">
          <p id="gan"> <h3>SORTEO DANIEL AGOSTINI:</h3> <h4>Hoy Viernes de 20 a 22hs podes participar</h4> <h5>Anunciamos ganador a las 21:50hs </h5> </p>

          <div id="cacabella" class=""></div>
        </div>
    </div><br>

<!--
 <button data-toggle="collapse" data-target="#demo" id="form_sorteo" class="btn btn-info">Quiero Participar</button>
 <div id="demo" class="collapse"></div> 
 -->


    <div class="row ">
        <a href="#" class="btn btn-info " id="form_sorteo"> Quiero Participar</a>
    </div>




    <div class="row col-lg-6 col-xs-12 col-md-12 col-sm-12 " align="center">
         <form id="sorteo">
          <div class="form-group">
            <label for="text">Nombre y Apellido:</label>
            <input type="text" class="form-control" id="nomape" name="nomape" placeholder="Nombre y Apellido">
          </div>
          
          <div class="form-group">
            <label for="dni">Ultimos 3 numeros del DNI:</label>
            <input type="numbre" class="form-control" id="dni" name="dni" placeholder="Ultimos 3 num de tu DNI">
          </div>

          <a href="#" class=" btn btn-info" id="participar"> Participar </a><br>
        </form> 
    </div>

</div>


</html>
<!--
</body>
-->
    <!-- jQuery 
    <script src="vendor/jquery/jquery.min.js"></script>-->

    <!-- Bootstrap Core JavaScript 
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>-->

    <!-- Plugin JavaScript 
    <script src="http://cdnjs.cloudflar-->