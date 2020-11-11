<!DOCTYPE html>
<html>
    <head>
        <title> Subida y precarga ajax </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Css -->
        <!--<link href="subir/css/bootstrap.css" rel="stylesheet" media="screen">-->
        <!-- Javascript -->
        <script src="subir/js/jquery-2.0.2.js"></script>
        <script src="subir/js/upload.js"></script>
        <script src="subir/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            function subirArchivos() {
                $("#archivo").upload('subir/subir_archivo.php',
                {
                    nombre_archivo: $("#nombre_archivo").val()
                },
                function(respuesta) {
                    //Subida finalizada.
                    $("#barra_de_progreso").val(0);
                    if (respuesta === 1) {
                        mostrarRespuesta('El archivo ha sido subido correctamente.', true);
                        $("#nombre_archivo, #archivo").val('');
                    } else {
                        mostrarRespuesta('El archivo NO se ha podido subir.', false);
                    }
                    mostrarArchivos();
                }, function(progreso, valor) {
                    //Barra de progreso.
                    $("#barra_de_progreso").val(valor);
                });
            }
            function eliminarArchivos(archivo) {
                $.ajax({
                    url: 'subir/eliminar_archivo.php',
                    type: 'POST',
                    timeout: 10000,
                    data: {archivo: archivo},
                    error: function() {
                        mostrarRespuesta('Error al intentar eliminar el archivo.', false);
                    },
                    success: function(respuesta) {
                        if (respuesta == 1) {
                            mostrarRespuesta('El archivo ha sido eliminado.', true);
                        } else {
                            mostrarRespuesta('Error al intentar eliminar el archivo.', false);                            
                        }
                        mostrarArchivos();
                    }
                });
            }
            function mostrarArchivos() {
                $.ajax({
                    url: 'subir/mostrar_archivos.php',
                    dataType: 'JSON',
                    success: function(respuesta) {
                        if (respuesta) {
                            var html = '';
                            for (var i = 0; i < respuesta.length; i++) {
                                if (respuesta[i] != undefined) {
                                    html += '<div class="row"> <span class="col-lg-2"> ' + respuesta[i] + ' </span> <div class="col-lg-2"> <a class="eliminar_archivo btn btn-danger" href="javascript:void(0);"> Eliminar </a> </div> </div> <hr />';
                                }
                            }
                            $("#archivos_subidos").html(html);
                        }
                    }
                });
            }
            function mostrarRespuesta(mensaje, ok){
                $("#respuesta").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
                if(ok){
                    $("#respuesta").addClass('alert-success');
                        setTimeout(function() {
                            $("#respuesta").fadeOut(1500);
                        },2000);
                }else{
                    $("#respuesta").addClass('alert-danger');
                      setTimeout(function() {
                            $("#respuesta").fadeOut(1500);
                        },2000);
                }
            }
            $(document).ready(function() {
                mostrarArchivos();
                $("#boton_subir").on('click', function() {
                    subirArchivos();
                });
                $("#archivos_subidos").on('click', '.eliminar_archivo', function() {
                    var archivo = $(this).parents('.row').eq(0).find('span').text();
                    archivo = $.trim(archivo);
                    eliminarArchivos(archivo);
                });


            });
        </script>
    </head>
    <body>

        <style type="text/css">
        .colornegro{color:black;}
        </style>

        <div class="container">
            <h5>Albúm de fotos Daniel Agostini , subi tu foto y comparti con los fans momentos inolvidables.</h5>
            <br>
            <h5><strong>Daniel Agostini</strong> es Parte de tu vida</h5>
            <div id="respuesta" class="alert"></div>
            <form action="javascript:void(0);">
                <div class="row">
                    <div class="col-lg-2"> 
                        <label> Elegir fotografia: </label> 
                    </div>
                    <!--<div class="col-lg-2">
                        <input type="text" name="nombre_archivo" id="nombre_archivo" class="input-lg"/>
                    </div>-->
                    <div class="col-lg-2 col-xs-12">
                        <input type="file" name="archivo" id="archivo" class="input-xs" />
                    </div>                    
                </div>
               <!-- <hr /> -->
                <div class="row">
                    <div class="col-lg-2">
                        <input type="submit" id="boton_subir" value="Subir Foto" class="btn btn-success btn-md btn-block" />
                    </div>
                    <div class="col-lg-4"><br>
                        <!--<progress id="barra_de_progreso" value="0" max="100"></progress>-->
                        <div class="progress">
                          <div class="progress-bar colornegro" role="progressbar" aria-valuenow="0"
                          aria-valuemin="0" aria-valuemax="100" style="width:0%">
                            0%
                          </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- <hr /> -->
            <div id="archivos_subidos"></div>
        </div>
    </body>
</html>
