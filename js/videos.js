$(document).ready(function(){
//$("#cc_solo").hide();


// CD SOLO TEMA 1 -  SOLO
    $("#cd_solo").click(function(){

        var string = $("#cd_solo_track_1").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#solo").html(response.contenido); // Agrega el Video


                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SOLO TEMA 2 - COMO OLVIDARTE
    $("#tema2").click(function(){

        var string = $("#cd_solo_track_2").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#colvidarte").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SOLO TEMA 3
    $("#tema3").click(function(){

        var string = $("#cd_solo_track_3").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#tnecesito").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SOLO TEMA 4
   $("#tema4").click(function(){

        var string = $("#cd_solo_track_4").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#todquieres").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SOLO TEMA 5
   $("#tema5").click(function(){

        var string = $("#cd_solo_track_5").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#donde").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SOLO TEMA 6
    $("#tema6").click(function(){

        var string = $("#cd_solo_track_6").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#jconmigo").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SOLO TEMA 7
    $("#tema7").click(function(){

        var string = $("#cd_solo_track_7").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#tantov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema
 
// CD SOLO TEMA 8
    $("#tema8").click(function(){

        var string = $("#cd_solo_track_8").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#nochemasv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SOLO TEMA 9
    $("#tema9").click(function(){

        var string = $("#cd_solo_track_9").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#tesigoamandov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SOLO TEMA 10
    $("#tema10").click(function(){

        var string = $("#cd_solo_track_10").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#quierov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SOLO TEMA 11
    $("#tema11").click(function(){

        var string = $("#cd_solo_track_11").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#dejasv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SOLO TEMA 12
    $("#tema12").click(function(){

        var string = $("#cd_solo_track_12").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#senosmuerev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

////////////////////////////////////////////////////////////////


// CD COMO SERA TEMA 1
    $("#tema_csera_1").click(function(){

        var string = $("#cd_csera_track_1").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#tema1").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD COMO SERA TEMA 2
    $("#tema_csera_2").click(function(){

        var string = $("#cd_csera_track_2").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#dimev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD COMO SERA TEMA 3
    $("#tema_csera_3").click(function(){

        var string = $("#cd_csera_track_3").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#vtportiv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD COMO SERA TEMA 4
    $("#tema_csera_4").click(function(){

        var string = $("#cd_csera_track_4").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#ptenganov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD COMO SERA TEMA 5
    $("#tema_csera_5").click(function(){

        var string = $("#cd_csera_track_5").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#eramosv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD COMO SERA TEMA 6
    $("#tema_csera_6").click(function(){

        var string = $("#cd_csera_track_6").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#mucartav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD COMO SERA TEMA 7
    $("#tema_csera_7").click(function(){

        var string = $("#cd_csera_track_7").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#qserav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD COMO SERA TEMA 8
    $("#tema_csera_8").click(function(){

        var string = $("#cd_csera_track_8").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#llpmiv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD COMO SERA TEMA 9
    $("#tema_csera_9").click(function(){

        var string = $("#cd_csera_track_9").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#camorv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD COMO SERA TEMA 10
    $("#tema_csera_10").click(function(){

        var string = $("#cd_csera_track_10").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#svuelvesv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD COMO SERA TEMA 11
    $("#tema_csera_11").click(function(){

        var string = $("#cd_csera_track_11").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#mfuev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD COMO SERA TEMA 12
    $("#tema_csera_12").click(function(){

        var string = $("#cd_csera_track_12").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#muchachitav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema


////////////////////////////////////////////////////////////////
/// CD SIMPLEMENTE 2000

// CD SIMPLEMENTE TEMA 1
    $("#tema_simplemente_1").click(function(){

        var string = $("#cd_simplemente_track_1").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#amarev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SIMPLEMENTE TEMA 2
    $("#tema_simplemente_2").click(function(){

        var string = $("#cd_simplemente_track_2").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#destarasv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SIMPLEMENTE TEMA 3
    $("#tema_simplemente_3").click(function(){

        var string = $("#cd_simplemente_track_3").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#llportiv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SIMPLEMENTE TEMA 4
    $("#tema_simplemente_4").click(function(){

        var string = $("#cd_simplemente_track_4").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#textrav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SIMPLEMENTE TEMA 5
    $("#tema_simplemente_5").click(function(){

        var string = $("#cd_simplemente_track_5").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#confiev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SIMPLEMENTE TEMA 6
    $("#tema_simplemente_6").click(function(){

        var string = $("#cd_simplemente_track_6").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#amigav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SIMPLEMENTE TEMA 7
    $("#tema_simplemente_7").click(function(){

        var string = $("#cd_simplemente_track_7").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#nadiev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SIMPLEMENTE TEMA 8
    $("#tema_simplemente_8").click(function(){

        var string = $("#cd_simplemente_track_8").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#contigov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SIMPLEMENTE TEMA 9
    $("#tema_simplemente_9").click(function(){

        var string = $("#cd_simplemente_track_9").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#quisev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SIMPLEMENTE TEMA 10
    $("#tema_simplemente_10").click(function(){

        var string = $("#cd_simplemente_track_10").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#espev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

//////////////////////////////////////////////////////////////
/// CD AMARTE 2001

// CD AMARTE TEMA 1
    $("#tema_amarte_1").click(function(){

        var string = $("#cd_amarte_track_1").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#dolorv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD AMARTE TEMA 2
    $("#tema_amarte_2").click(function(){

        var string = $("#cd_amarte_track_2").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#hijov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD AMARTE TEMA 3
    $("#tema_amarte_3").click(function(){

        var string = $("#cd_amarte_track_3").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#tuquierav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD AMARTE TEMA 4
    $("#tema_amarte_4").click(function(){

        var string = $("#cd_amarte_track_4").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#tnochesv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD AMARTE TEMA 5
    $("#tema_amarte_5").click(function(){

        var string = $("#cd_amarte_track_5").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#lltuv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD AMARTE TEMA 6
    $("#tema_amarte_6").click(function(){

        var string = $("#cd_amarte_track_6").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#tvamoarv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD AMARTE TEMA 7
    $("#tema_amarte_7").click(function(){

        var string = $("#cd_amarte_track_7").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#yaverasv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD AMARTE TEMA 8
    $("#tema_amarte_8").click(function(){

        var string = $("#cd_amarte_track_8").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#portuamorv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD AMARTE TEMA 9
    $("#tema_amarte_9").click(function(){

        var string = $("#cd_amarte_track_9").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#destinov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD AMARTE TEMA 10
    $("#tema_amarte_10").click(function(){

        var string = $("#cd_amarte_track_10").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#tamarev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD AMARTE TEMA 11
    $("#tema_amarte_11").click(function(){

        var string = $("#cd_amarte_track_11").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#doyamorv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD AMARTE TEMA 12
    $("#tema_amarte_12").click(function(){

        var string = $("#cd_amarte_track_12").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#comohacerv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD AMARTE TEMA 13
    $("#tema_amarte_13").click(function(){

        var string = $("#cd_amarte_track_13").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#celv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD AMARTE TEMA 14
    $("#tema_amarte_14").click(function(){

        var string = $("#cd_amarte_track_14").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#comotuv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

////////////////////////////////
/// CD SIEMPRE

// CD SIEMPRE TEMA 1
    $("#tema_siempre_1").click(function(){

        var string = $("#cd_siempre_track_1").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#corazonv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SIEMPRE TEMA 2
    $("#tema_siempre_2").click(function(){

        var string = $("#cd_siempre_track_2").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#ptiempov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SIEMPRE TEMA 3
    $("#tema_siempre_3").click(function(){

        var string = $("#cd_siempre_track_3").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                        $("#huellasv").html(response.contenido); // Agrega el Video
                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SIEMPRE TEMA 4
    $("#tema_siempre_4").click(function(){

        var string = $("#cd_siempre_track_4").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       

                    $("#aeloamiv").html(response.contenido); // Agrega el Video
                        }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema
                 
// CD SIEMPRE TEMA 5
    $("#tema_siempre_5").click(function(){

        var string = $("#cd_siempre_track_5").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       

                    $("#volveramiv").html(response.contenido); // Agrega el Video
                        }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema
         
// CD SIEMPRE TEMA 6
    $("#tema_siempre_6").click(function(){

        var string = $("#cd_siempre_track_6").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       

                    $("#sufrov").html(response.contenido); // Agrega el Video
                        }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema
         
// CD SIEMPRE TEMA 7
    $("#tema_siempre_7").click(function(){

        var string = $("#cd_siempre_track_7").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       

                    $("#gamorv").html(response.contenido); // Agrega el Video
                        }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema
       
// CD SIEMPRE TEMA 8
    $("#tema_siempre_8").click(function(){

        var string = $("#cd_siempre_track_8").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       

                    $("#todotiempov").html(response.contenido); // Agrega el Video
                        }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema
       
// CD SIEMPRE TEMA 9
    $("#tema_siempre_9").click(function(){

        var string = $("#cd_siempre_track_9").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       

                    $("#lloranv").html(response.contenido); // Agrega el Video
                        }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema
       
// CD SIEMPRE TEMA 10
    $("#tema_siempre_10").click(function(){

        var string = $("#cd_siempre_track_10").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       

                    $("#llantodolorv").html(response.contenido); // Agrega el Video
                        }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema
       
// CD SIEMPRE TEMA 11
    $("#tema_siempre_11").click(function(){

        var string = $("#cd_siempre_track_11").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       

                    $("#vuelvev").html(response.contenido); // Agrega el Video
                        }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema

// CD SIEMPRE TEMA 12
    $("#tema_siempre_12").click(function(){

        var string = $("#cd_siempre_track_12").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       

                    $("#perderv").html(response.contenido); // Agrega el Video
                        }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema
   
////////////////////////////////
/// CD SENTIMIENTOS  1

// CD SENTIMIENTOS1 TEMA 1
    $("#tema_sentimientos_1").click(function(){

        var string = $("#cd_sentimientos_track_1").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#uvezmasv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SENTIMIENTOS1 TEMA 2
    $("#tema_sentimientos_2").click(function(){

        var string = $("#cd_sentimientos_track_2").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#erestuv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SENTIMIENTOS1 TEMA 3
    $("#tema_sentimientos_3").click(function(){

        var string = $("#cd_sentimientos_track_3").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#yconvosv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SENTIMIENTOS1 TEMA 4
    $("#tema_sentimientos_4").click(function(){

        var string = $("#cd_sentimientos_track_4").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#stamorv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SENTIMIENTOS1 TEMA 5
    $("#tema_sentimientos_5").click(function(){

        var string = $("#cd_sentimientos_track_5").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#sentidov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SENTIMIENTOS1 TEMA 6
    $("#tema_sentimientos_6").click(function(){

        var string = $("#cd_sentimientos_track_6").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#teviv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SENTIMIENTOS1 TEMA 7
    $("#tema_sentimientos_7").click(function(){

        var string = $("#cd_sentimientos_track_7").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#contigovv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SENTIMIENTOS1 TEMA 8
    $("#tema_sentimientos_8").click(function(){

        var string = $("#cd_sentimientos_track_8").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#eternov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SENTIMIENTOS1 TEMA 9
    $("#tema_sentimientos_9").click(function(){

        var string = $("#cd_sentimientos_track_9").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#asiasiv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema    

// CD SENTIMIENTOS1 TEMA 10
    $("#tema_sentimientos_10").click(function(){

        var string = $("#cd_sentimientos_track_10").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#buscandotev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  

// CD SENTIMIENTOS1 TEMA 11
    $("#tema_sentimientos_11").click(function(){

        var string = $("#cd_sentimientos_track_11").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#medastuamorv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  

// CD SENTIMIENTOS1 TEMA 12
    $("#tema_sentimientos_12").click(function(){

        var string = $("#cd_sentimientos_track_12").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#qfelizv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  

////////////////////////////////
/// CD SIN LIMITE  

// CD SIN LIMITE   TEMA 1
    $("#tema_limite_1").click(function(){

        var string = $("#cd_limite_track_1").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#corazoncitov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SIN LIMITE   TEMA 2
    $("#tema_limite_2").click(function(){

        var string = $("#cd_limite_track_2").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#atrevev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SIN LIMITE   TEMA 3
    $("#tema_limite_3").click(function(){

        var string = $("#cd_limite_track_3").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#damev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SIN LIMITE   TEMA 4
    $("#tema_limite_4").click(function(){

        var string = $("#cd_limite_track_4").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#amamosvv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SIN LIMITE   TEMA 5
    $("#tema_limite_5").click(function(){

        var string = $("#cd_limite_track_5").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#namartev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SIN LIMITE   TEMA 6
    $("#tema_limite_6").click(function(){

        var string = $("#cd_limite_track_6").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#intentarv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SIN LIMITE   TEMA 7
    $("#tema_limite_7").click(function(){

        var string = $("#cd_limite_track_7").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#enganchados1v").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SIN LIMITE   TEMA 8
    $("#tema_limite_8").click(function(){

        var string = $("#cd_limite_track_8").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#quedesintiv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SIN LIMITE   TEMA 9
    $("#tema_limite_9").click(function(){

        var string = $("#cd_limite_track_9").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#medaamorv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SIN LIMITE   TEMA 10
    $("#tema_limite_10").click(function(){

        var string = $("#cd_limite_track_10").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#nfinalv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SIN LIMITE   TEMA 11
    $("#tema_limite_11").click(function(){

        var string = $("#cd_limite_track_11").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#soyyov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD SIN LIMITE   TEMA 12
    $("#tema_limite_12").click(function(){

        var string = $("#cd_limite_track_12").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#enganchado2v").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema    


//////////////////////////////
/// CD VERDADERO AMOR 2005

// CD VERDADERO AMOR   TEMA 1
    $("#tema_verdadero_1").click(function(){

        var string = $("#cd_verdadero_track_1").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#apartirv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema        

// CD VERDADERO AMOR   TEMA 2
    $("#tema_verdadero_2").click(function(){

        var string = $("#cd_verdadero_track_2").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#penasv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema            

// CD VERDADERO AMOR   TEMA 3
    $("#tema_verdadero_3").click(function(){

        var string = $("#cd_verdadero_track_3").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#diganmev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema       

// CD VERDADERO AMOR   TEMA 4
    $("#tema_verdadero_4").click(function(){

        var string = $("#cd_verdadero_track_4").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#podrev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema       

// CD VERDADERO AMOR   TEMA 5
    $("#tema_verdadero_5").click(function(){

        var string = $("#cd_verdadero_track_5").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#yosev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD VERDADERO AMOR   TEMA 6
    $("#tema_verdadero_6").click(function(){

        var string = $("#cd_verdadero_track_6").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#chicav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

// CD VERDADERO AMOR   TEMA 7
    $("#tema_verdadero_7").click(function(){

        var string = $("#cd_verdadero_track_7").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#amarteasiv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

// CD VERDADERO AMOR   TEMA 8
    $("#tema_verdadero_8").click(function(){

        var string = $("#cd_verdadero_track_8").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#diav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

// CD VERDADERO AMOR   TEMA 9
    $("#tema_verdadero_9").click(function(){

        var string = $("#cd_verdadero_track_9").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#procurov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  

// CD VERDADERO AMOR   TEMA 10
    $("#tema_verdadero_10").click(function(){

        var string = $("#cd_verdadero_track_10").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#yoamarv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  

// CD VERDADERO AMOR   TEMA 11
    $("#tema_verdadero_11").click(function(){

        var string = $("#cd_verdadero_track_11").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#imposiblev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema 

// CD VERDADERO AMOR   TEMA 12
    $("#tema_verdadero_12").click(function(){

        var string = $("#cd_verdadero_track_12").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#arrepentidav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema 


//////////////////////////////
/// CD VOY POR MAS 2007

// CD VOY POR MAS  TEMA 1
    $("#tema_voypormas_1").click(function(){

        var string = $("#cd_voypormas_track_1").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#tratarev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema        

// CD VOY POR MAS  TEMA 2
    $("#tema_voypormas_2").click(function(){

        var string = $("#cd_voypormas_track_2").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#chiquitav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD VOY POR MAS  TEMA 3
    $("#tema_voypormas_3").click(function(){

        var string = $("#cd_voypormas_track_3").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#rockv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD VOY POR MAS  TEMA 4
    $("#tema_voypormas_4").click(function(){

        var string = $("#cd_voypormas_track_4").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#prisiov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD VOY POR MAS  TEMA 5
    $("#tema_voypormas_5").click(function(){

        var string = $("#cd_voypormas_track_5").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#pamartev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

// CD VOY POR MAS  TEMA 6
    $("#tema_voypormas_6").click(function(){

        var string = $("#cd_voypormas_track_6").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#poquitov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

// CD VOY POR MAS  TEMA 7
    $("#tema_voypormas_7").click(function(){

        var string = $("#cd_voypormas_track_7").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#venabailarv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

// CD VOY POR MAS  TEMA 8
    $("#tema_voypormas_8").click(function(){

        var string = $("#cd_voypormas_track_8").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#cariciasv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

// CD VOY POR MAS  TEMA 9
    $("#tema_voypormas_9").click(function(){

        var string = $("#cd_voypormas_track_9").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#hcuandov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

// CD VOY POR MAS  TEMA 10
    $("#tema_voypormas_10").click(function(){

        var string = $("#cd_voypormas_track_10").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#ayamorv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

// CD VOY POR MAS  TEMA 11
    $("#tema_voypormas_11").click(function(){

        var string = $("#cd_voypormas_track_11").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#seremostresv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  

// CD VOY POR MAS  TEMA 12
    $("#tema_voypormas_12").click(function(){

        var string = $("#cd_voypormas_track_12").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#wawav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  

// CD VOY POR MAS  TEMA 13
    $("#tema_voypormas_13").click(function(){

        var string = $("#cd_voypormas_track_13").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#caramelov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  

// CD VOY POR MAS  TEMA 14
    $("#tema_voypormas_14").click(function(){

        var string = $("#cd_voypormas_track_14").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#fantasmasv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  

// CD VOY POR MAS  TEMA 15
    $("#tema_voypormas_15").click(function(){

        var string = $("#cd_voypormas_track_15").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#nadiemasv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  


//////////////////////////////
/// CD CLASICOS CON CLASE 2007

// CD CLASICOS CON CLASE  TEMA 1
    $("#tema_cclase_1").click(function(){

        var string = $("#cd_cclase_track_1").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#bastarav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema        

// CD CLASICOS CON CLASE  TEMA 2
    $("#tema_cclase_2").click(function(){

        var string = $("#cd_cclase_track_2").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#besosfuegov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema            

// CD CLASICOS CON CLASE  TEMA 3
    $("#tema_cclase_3").click(function(){

        var string = $("#cd_cclase_track_3").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#rosalesv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema                

// CD CLASICOS CON CLASE  TEMA 4
    $("#tema_cclase_4").click(function(){

        var string = $("#cd_cclase_track_4").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#cuentamev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema          

// CD CLASICOS CON CLASE  TEMA 5
    $("#tema_cclase_5").click(function(){

        var string = $("#cd_cclase_track_5").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#enamoratev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema           

// CD CLASICOS CON CLASE  TEMA 6
    $("#tema_cclase_6").click(function(){

        var string = $("#cd_cclase_track_6").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#fuistemiav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema           

// CD CLASICOS CON CLASE  TEMA 7
    $("#tema_cclase_7").click(function(){

        var string = $("#cd_cclase_track_7").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#mientesv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema       

// CD CLASICOS CON CLASE  TEMA 8
    $("#tema_cclase_8").click(function(){

        var string = $("#cd_cclase_track_8").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#paisajev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD CLASICOS CON CLASE  TEMA 9
    $("#tema_cclase_9").click(function(){

        var string = $("#cd_cclase_track_9").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#brindev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD CLASICOS CON CLASE  TEMA 10
    $("#tema_cclase_10").click(function(){

        var string = $("#cd_cclase_track_10").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#llamasv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD CLASICOS CON CLASE  TEMA 11
    $("#tema_cclase_11").click(function(){

        var string = $("#cd_cclase_track_11").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#cervezav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD CLASICOS CON CLASE  TEMA 12
    $("#tema_cclase_12").click(function(){

        var string = $("#cd_cclase_track_12").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#volverasv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     


//////////////////////////////
/// CD PENSANDO EN USTEDES 2009

// CD PENSANDO EN USTEDES  TEMA 1
    $("#tema_ustedes_1").click(function(){

        var string = $("#cd_ustedes_track_1").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#sufrorecordarv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema        

// CD PENSANDO EN USTEDES  TEMA 2
    $("#tema_ustedes_2").click(function(){

        var string = $("#cd_ustedes_track_2").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#corazoncorazonv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema        

// CD PENSANDO EN USTEDES  TEMA 3
    $("#tema_ustedes_3").click(function(){

        var string = $("#cd_ustedes_track_3").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#dimetuv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema        

// CD PENSANDO EN USTEDES  TEMA 4
    $("#tema_ustedes_4").click(function(){

        var string = $("#cd_ustedes_track_4").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#historiav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

// CD PENSANDO EN USTEDES  TEMA 5
    $("#tema_ustedes_5").click(function(){

        var string = $("#cd_ustedes_track_5").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#hojitav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

// CD PENSANDO EN USTEDES  TEMA 6
    $("#tema_ustedes_6").click(function(){

        var string = $("#cd_ustedes_track_6").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#soledadv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

// CD PENSANDO EN USTEDES  TEMA 7
    $("#tema_ustedes_7").click(function(){

        var string = $("#cd_ustedes_track_7").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#nuncav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

// CD PENSANDO EN USTEDES  TEMA 8
    $("#tema_ustedes_8").click(function(){

        var string = $("#cd_ustedes_track_8").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#tnochev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

// CD PENSANDO EN USTEDES  TEMA 9
    $("#tema_ustedes_9").click(function(){

        var string = $("#cd_ustedes_track_9").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#quieresolv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

// CD PENSANDO EN USTEDES  TEMA 10
    $("#tema_ustedes_10").click(function(){

        var string = $("#cd_ustedes_track_10").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#stuyov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

// CD PENSANDO EN USTEDES  TEMA 11
    $("#tema_ustedes_11").click(function(){

        var string = $("#cd_ustedes_track_11").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#tvolverasv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

// CD PENSANDO EN USTEDES  TEMA 11
    $("#tema_ustedes_12").click(function(){

        var string = $("#cd_ustedes_track_12").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#yoquierov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   


/// CD PENSANDO EN RENOVADO 2011

// CD PENSANDO EN RENOVADO  TEMA 1
    $("#tema_renovado_1").click(function(){

        var string = $("#cd_renovado_track_1").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#teamov").html(response.contenido); // Agrega el Video                            

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD PENSANDO EN RENOVADO  TEMA 2
    $("#tema_renovado_2").click(function(){

        var string = $("#cd_renovado_track_2").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#malditav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD PENSANDO EN RENOVADO  TEMA 3
    $("#tema_renovado_3").click(function(){

        var string = $("#cd_renovado_track_3").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#tesientov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  

// CD PENSANDO EN RENOVADO  TEMA 4
    $("#tema_renovado_4").click(function(){

        var string = $("#cd_renovado_track_4").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#teregalov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  

// CD PENSANDO EN RENOVADO  TEMA 5
    $("#tema_renovado_5").click(function(){

        var string = $("#cd_renovado_track_5").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#soloturv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  

// CD PENSANDO EN RENOVADO  TEMA 6
    $("#tema_renovado_6").click(function(){

        var string = $("#cd_renovado_track_6").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#eresv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  

// CD PENSANDO EN RENOVADO  TEMA 7
    $("#tema_renovado_7").click(function(){

        var string = $("#cd_renovado_track_7").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#citav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  

// CD PENSANDO EN RENOVADO  TEMA 8
    $("#tema_renovado_8").click(function(){

        var string = $("#cd_renovado_track_8").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#mamav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  

// CD PENSANDO EN RENOVADO  TEMA 9
    $("#tema_renovado_9").click(function(){

        var string = $("#cd_renovado_track_9").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#dondeestasv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  

// CD PENSANDO EN RENOVADO  TEMA 9
    $("#tema_renovado_10").click(function(){

        var string = $("#cd_renovado_track_10").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#hijovaronv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  

// CD PENSANDO EN RENOVADO  TEMA 9
    $("#tema_renovado_11").click(function(){

        var string = $("#cd_renovado_track_11").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#cuantapenav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  

// CD PENSANDO EN RENOVADO  TEMA 9
    $("#tema_renovado_12").click(function(){

        var string = $("#cd_renovado_track_12").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#mefaltav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema  




// CD  EN 2020  TEMA 1
    $("#tema_2020_1").click(function(){

        var string = $("#cd_2020_track_1").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#yllegastetuv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD  EN 2020  TEMA 2
    $("#tema_2020_2").click(function(){

        var string = $("#cd_2020_track_2").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#porquetuamorv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema       

// CD  EN 2020  TEMA 3
    $("#tema_2020_3").click(function(){

        var string = $("#cd_2020_track_3").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#comoyoteamov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema          

     // CD  EN 2020  TEMA 4
    $("#tema_2020_4").click(function(){

        var string = $("#cd_2020_track_4").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#venv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema      

 // CD  EN 2020  TEMA 5
    $("#tema_2020_5").click(function(){

        var string = $("#cd_2020_track_5").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#amamev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  EN 2020  TEMA 6
    $("#tema_2020_6").click(function(){

        var string = $("#cd_2020_track_6").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#nosevendev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   


 // CD  EN 2020  TEMA 7
    $("#tema_2020_7").click(function(){

        var string = $("#cd_2020_track_7").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#ayudav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  EN 2020  TEMA 8
    $("#tema_2020_8").click(function(){

        var string = $("#cd_2020_track_8").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#clandestinov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  EN 2020  TEMA 9
    $("#tema_2020_9").click(function(){

        var string = $("#cd_2020_track_9").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#buscv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  EN 2020  TEMA 10
    $("#tema_2020_10").click(function(){

        var string = $("#cd_2020_track_10").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#dejadepensarv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  EN 2020  TEMA 11
    $("#tema_2020_11").click(function(){

        var string = $("#cd_2020_track_11").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#vasallorarv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  EN 2020  TEMA 12
    $("#tema_2020_12").click(function(){

        var string = $("#cd_2020_track_12").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#tedirev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema       

 // CD  EN 2020  TEMA 13
    $("#tema_2020_13").click(function(){

        var string = $("#cd_2020_track_13").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#amoramorv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema          

 // CD  EN 2020  TEMA 14
    $("#tema_2020_14").click(function(){

        var string = $("#cd_2020_track_14").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#hijaduov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema           

 // CD  EN 2020  TEMA 15
    $("#tema_2020_15").click(function(){

        var string = $("#cd_2020_track_15").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#hijasolov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema         

 // CD  EN 2020  TEMA 16
    $("#tema_2020_16").click(function(){

        var string = $("#cd_2020_track_16").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#fuistetuarjonav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema               





// CD PARTE DE TU VIDA

// CD  PARTE DE TU VIDA  TEMA 1
    $("#tema_1_partedetuvida").click(function(){

        var string = $("#cd_partedetuvida_1").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#amantesv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD  PARTE DE TU VIDA  TEMA 2
   $("#tema_2_partedetuvida").click(function(){

        var string = $("#cd_partedetuvida_2").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#caceriav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema       

// CD  PARTE DE TU VIDA  TEMA 3
     $("#tema_3_partedetuvida").click(function(){

        var string = $("#cd_partedetuvida_3").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#yquedemiv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema          

     // CD  PARTE DE TU VIDA  TEMA 4
   $("#tema_4_partedetuvida").click(function(){

        var string = $("#cd_partedetuvida_4").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#dimeparaquev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema      

 // CD  PARTE DE TU VIDA  TEMA 5
    $("#tema_5_partedetuvida").click(function(){

        var string = $("#cd_partedetuvida_5").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#despedidav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  PARTE DE TU VIDA  TEMA 6
   $("#tema_6_partedetuvida").click(function(){

        var string = $("#cd_partedetuvida_6").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#dejameamartev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   


 // CD  PARTE DE TU VIDA  TEMA 7
    $("#tema_7_partedetuvida").click(function(){

        var string = $("#cd_partedetuvida_7").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#porquehoyv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  PARTE DE TU VIDA  TEMA 8
    $("#tema_8_partedetuvida").click(function(){

        var string = $("#cd_partedetuvida_8").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#humov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  PARTE DE TU VIDA  TEMA 9
    $("#tema_9_partedetuvida").click(function(){

        var string = $("#cd_partedetuvida_9").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#hacermefelizv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  PARTE DE TU VIDA TEMA 10
    $("#tema_10_partedetuvida").click(function(){

        var string = $("#cd_partedetuvida_10").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#queimportav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  PARTE DE TU VIDA  TEMA 11
    $("#tema_11_partedetuvida").click(function(){

        var string = $("#cd_partedetuvida_11").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#cuentaleaelv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  PARTE DE TU VIDA  TEMA 12
    $("#tema_12_partedetuvida").click(function(){

        var string = $("#cd_partedetuvida_12").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#solomiav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema       

 // CD  PARTE DE TU VIDA  TEMA 13
   $("#tema_13_partedetuvida").click(function(){

        var string = $("#cd_partedetuvida_13").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#nadaentrev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema          

 // CD  PARTE DE TU VIDA  TEMA 14
    $("#tema_14_partedetuvida").click(function(){

        var string = $("#cd_partedetuvida_14").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#perdonv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema           

 // CD  PARTE DE TU VIDA  TEMA 15
    $("#tema_15_partedetuvida").click(function(){

        var string = $("#cd_partedetuvida_15").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#amanecerv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema         

 // CD  PARTE DE TU VIDA  TEMA 16
    $("#tema_16_partedetuvida").click(function(){

        var string = $("#cd_partedetuvida_16").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#hsoledadv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema             






/////////////////////////////////////////////////////////////////////////////
// CD GRUPO SOMBRAS NIÑA CAPRICHOSA

// CD  GRUPO SOMBRAS NIÑA CAPRICHOSA TEMA 1
    $("#tema_1_caprichosa").click(function(){

        var string = $("#cd_caprichosa_1").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#chicabailev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD  GRUPO SOMBRAS NIÑA CAPRICHOSA  TEMA 2
   $("#tema_2_caprichosa").click(function(){

        var string = $("#cd_caprichosa_2").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#capriv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema       

// CD  GRUPO SOMBRAS NIÑA CAPRICHOSA  TEMA 3
     $("#tema_3_caprichosa").click(function(){

        var string = $("#cd_caprichosa_3").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#estrelladav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema          

     // CD  GRUPO SOMBRAS NIÑA CAPRICHOSA TEMA 4
   $("#tema_4_caprichosa").click(function(){

        var string = $("#cd_caprichosa_4").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#enamorarv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema      

 // CD  GRUPO SOMBRAS NIÑA CAPRICHOSA  TEMA 5
    $("#tema_5_caprichosa").click(function(){

        var string = $("#cd_caprichosa_5").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#inolvidablev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  GRUPO SOMBRAS NIÑA CAPRICHOSA  TEMA 6
   $("#tema_6_caprichosa").click(function(){

        var string = $("#cd_caprichosa_6").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#regalitov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   


 // CD  GRUPO SOMBRAS NIÑA CAPRICHOSA  TEMA 7
    $("#tema_7_caprichosa").click(function(){

        var string = $("#cd_caprichosa_7").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#besosv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  GRUPO SOMBRAS NIÑA CAPRICHOSA  TEMA 8
    $("#tema_8_caprichosa").click(function(){

        var string = $("#cd_caprichosa_8").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#venenov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  GRUPO SOMBRAS NIÑA CAPRICHOSA  TEMA 9
    $("#tema_9_caprichosa").click(function(){

        var string = $("#cd_caprichosa_9").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#regresaamantev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  GRUPO SOMBRAS NIÑA CAPRICHOSA TEMA 10
    $("#tema_10_caprichosa").click(function(){

        var string = $("#cd_caprichosa_10").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#nuncaolvidartev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   



///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///
/// CD BOQUITA DE CARAMELO 1995
///
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////


// CD  GRUPO SOMBRAS BOQUITA DE CARAMELO TEMA 1
    $("#tema_boquita_1").click(function(){

        var string = $("#cd_boquita_1").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#tristenovelav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD  GRUPO SOMBRAS BOQUITA DE CARAMELO  TEMA 2
   $("#tema_boquita_2").click(function(){

        var string = $("#cd_boquita_2").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#besoabesov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema       

// CD  GRUPO SOMBRAS BOQUITA DE CARAMELO  TEMA 3
     $("#tema_boquita_3").click(function(){

        var string = $("#cd_boquita_3").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#dime_amorv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema          

     // CD  GRUPO SOMBRAS BOQUITA DE CARAMELO TEMA 4
   $("#tema_boquita_4").click(function(){

        var string = $("#cd_boquita_4").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#laventanitav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema      

 // CD  GRUPO SOMBRAS BOQUITA DE CARAMELO  TEMA 5
    $("#tema_boquita_5").click(function(){

        var string = $("#cd_boquita_5").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#boquitacaramelov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  GRUPO SOMBRAS BOQUITA DE CARAMELO  TEMA 6
   $("#tema_boquita_6").click(function(){

        var string = $("#cd_boquita_6").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#yquehashechodemiv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   


 // CD  GRUPO SOMBRAS BOQUITA DE CARAMELO  TEMA 7
    $("#tema_boquita_7").click(function(){

        var string = $("#cd_boquita_7").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#otranochedeamorrv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  GRUPO SOMBRAS BOQUITA DE CARAMELO  TEMA 8
    $("#tema_boquita_8").click(function(){

        var string = $("#cd_boquita_8").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#pegalavueltav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  GRUPO SOMBRAS BOQUITA DE CARAMELO  TEMA 9
    $("#tema_boquita_9").click(function(){

        var string = $("#cd_boquita_9").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#porqueyov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  GRUPO SOMBRAS BOQUITA DE CARAMELO TEMA 10
    $("#tema_boquita_10").click(function(){

        var string = $("#cd_boquita_10").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#unacopitamasv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   


 // CD  GRUPO SOMBRAS BOQUITA DE CARAMELO TEMA 11
    $("#tema_boquita_11").click(function(){

        var string = $("#cd_boquita_11").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#mientemesv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

     // CD  GRUPO SOMBRAS BOQUITA DE CARAMELO TEMA 12
    $("#tema_boquita_12").click(function(){

        var string = $("#cd_boquita_12").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#teconozcov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   








///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///
/// CD GRUPO SOMBRAS - SOMBRAS NADA MAS 1996
///
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////


// CD  GRUPO SOMBRAS nadamas  TEMA 1
    $("#tema_nadamas_1").click(function(){

        var string = $("#cd_nadamas_1").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#tontascartasv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema     

// CD  GRUPO SOMBRAS nadamas   TEMA 2
   $("#tema_nadamas_2").click(function(){

        var string = $("#cd_nadamas_2").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#pieguerrav").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema       

// CD  GRUPO SOMBRAS nadamas   TEMA 3
     $("#tema_nadamas_3").click(function(){

        var string = $("#cd_nadamas_3").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#falsoamorv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema          

     // CD  GRUPO SOMBRAS nadamas  TEMA 4
   $("#tema_nadamas_4").click(function(){

        var string = $("#cd_nadamas_4").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#ladrondetuamorv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema      

 // CD  GRUPO SOMBRAS nadamas   TEMA 5
    $("#tema_nadamas_5").click(function(){

        var string = $("#cd_nadamas_5").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#paraquev").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  GRUPO SOMBRAS nadamas   TEMA 6
   $("#tema_nadamas_6").click(function(){

        var string = $("#cd_nadamas_6").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#chacerv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   


 // CD  GRUPO SOMBRAS nadamas   TEMA 7
    $("#tema_nadamas_7").click(function(){

        var string = $("#cd_nadamas_7").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#pdv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  GRUPO SOMBRAS nadamas   TEMA 8
    $("#tema_nadamas_8").click(function(){

        var string = $("#cd_nadamas_8").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#contandohorasvv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  GRUPO SOMBRAS nadamas   TEMA 9
    $("#tema_nadamas_9").click(function(){

        var string = $("#cd_nadamas_9").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#soyv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

 // CD  GRUPO SOMBRAS nadamas  TEMA 10
    $("#tema_nadamas_10").click(function(){

        var string = $("#cd_nadamas_10").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#sinquererv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   


 // CD  GRUPO SOMBRAS nadamas  TEMA 11
    $("#tema_nadamas_11").click(function(){

        var string = $("#cd_nadamas_11").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#vuelveamiv").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   

     // CD  GRUPO SOMBRAS nadamas  TEMA 12
    $("#tema_nadamas_12").click(function(){

        var string = $("#cd_nadamas_12").serialize();


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_video.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            $("#turecuerdov").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX
        
    }); // Cierra Click boton abrir escuchar tema   














// VIDEO CLIP - ALBUM SIMPLEMENTE - TEMA: SIEMPRE TE AMARE
$("#clip_cd3").click(function(){
    var string = $("#cd_simplemente_clip_1").serialize();
    //alert(string);

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_clip.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#ca").html(response.contenido); // Agrega el Video
                            //$("#ca").html("zaraza"); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});


// VIDEO CLIP - ALBUM AMARTE -  TEMA: HIJO
$("#clip_cd4").click(function(){
    var string = $("#cd_amarte_clip_1").serialize();
    //alert(string);

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_clip.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#cacd4").html(response.contenido); // Agrega el Video
                            //$("#ca").html("zaraza"); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});

// VIDEO CLIP - ALBUM AMARTE -  TEMA: TE PIDO AYUDA /  HIJA DE MI VIDA
$("#clip_cd13").click(function(){
    //$("#ayuda").removeClass("hidden");
    var string = $("#cd_veinte_clip_1").serialize();
    //alert(string);

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_clip.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#cacd13").html(response.contenido); // Agrega el Video
                            //$("#ca").html("zaraza"); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});






////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
///
/// COMIENZA ESCUCHA CD COMPLETO
///
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////


// ESCUCHAR CD COMPLETO CD SOLO
$("#cd_solo_full").click(function(){   

    var caca = $("#cd_solo_full").attr("valor");
            var parametros = {
                "valorCaja1" : caca
                             };

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "prueba.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#full_cd_solo").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});

// ESCUCHAR CD COMPLETO CD COMO SERA
$("#cd_csera_full").click(function(){   

    var caca = $("#cd_csera_full").attr("valor");
            var parametros = {
                "valorCaja1" : caca
                             };

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "prueba.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#full_cd_csera").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});

// ESCUCHAR CD COMPLETO CD SIMPLEMENTE
$("#cd_simplemente_full").click(function(){   

    var caca = $("#cd_simplemente_full").attr("valor");
            var parametros = {
                "valorCaja1" : caca
                             };

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "prueba.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#full_cd_simplemente").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});

// ESCUCHAR CD COMPLETO CD AMARTE
$("#cd_amarte_full").click(function(){   

    var caca = $("#cd_amarte_full").attr("valor");
            var parametros = {
                "valorCaja1" : caca
                             };

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "prueba.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#full_cd_amarte").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});

// ESCUCHAR CD COMPLETO CD siempre
$("#cd_siempre_full").click(function(){   

    var caca = $("#cd_siempre_full").attr("valor");
            var parametros = {
                "valorCaja1" : caca
                             };

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "prueba.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#full_cd_siempre").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});

// ESCUCHAR CD COMPLETO CD SENTIMIENTOS1
$("#cd_sentimientos1_full").click(function(){   

    var caca = $("#cd_sentimientos1_full").attr("valor");
            var parametros = {
                "valorCaja1" : caca
                             };

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "prueba.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#full_cd_sentimientos1").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});

// ESCUCHAR CD COMPLETO CD SIN LIMITE
$("#cd_sinlimite_full").click(function(){   

    var caca = $("#cd_sinlimite_full").attr("valor");
            var parametros = {
                "valorCaja1" : caca
                             };

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "prueba.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#full_cd_sinlimite").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});

// ESCUCHAR CD COMPLETO CD Sverdaderoamor
$("#cd_verdaderoamor_full").click(function(){   

    var caca = $("#cd_verdaderoamor_full").attr("valor");
            var parametros = {
                "valorCaja1" : caca
                             };

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "prueba.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#full_cd_verdaderoamor").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});

// ESCUCHAR CD COMPLETO CD VOY POR MAS
$("#cd_voypormas_full").click(function(){   

    var caca = $("#cd_voypormas_full").attr("valor");
            var parametros = {
                "valorCaja1" : caca
                             };

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "prueba.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#full_cd_voypormas").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});


// ESCUCHAR CD COMPLETO CD CLASICOS CON CLASE
$("#cd_cclase_full").click(function(){   

    var caca = $("#cd_cclase_full").attr("valor");
            var parametros = {
                "valorCaja1" : caca
                             };

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "prueba.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#full_cd_cclase").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});

// ESCUCHAR CD COMPLETO CD PENSANDO EN USTEDES
$("#cd_ustedes_full").click(function(){   

    var caca = $("#cd_ustedes_full").attr("valor");
            var parametros = {
                "valorCaja1" : caca
                             };

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "prueba.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#full_cd_ustedes").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});

// ESCUCHAR CD COMPLETO CD RENOVADO
$("#cd_renovado_full").click(function(){   

    var caca = $("#cd_renovado_full").attr("valor");
            var parametros = {
                "valorCaja1" : caca
                             };

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "prueba.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#full_cd_renovado").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});


// ESCUCHAR CD COMPLETO CD SENTIMIENTOS2
$("#cd_sentimientos2_full").click(function(){   

    var caca = $("#cd_sentimientos2_full").attr("valor");
            var parametros = {
                "valorCaja1" : caca
                             };

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "prueba.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#full_cd_sentimientos2").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});


// ESCUCHAR CD COMPLETO CD 20-20
$("#cd_veinte_full").click(function(){   

    var caca = $("#cd_veinte_full").attr("valor");
            var parametros = {
                "valorCaja1" : caca
                             };

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "prueba.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#full_cd_veinte").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});


// ESCUCHAR CD COMPLETO CD NIÑA CAPRICHOSA
$("#cd_caprichosa_full").click(function(){   

    var caca = $("#cd_caprichosa_full").attr("valor");
            var parametros = {
                "valorCaja1" : caca
                             };

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "prueba.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#full_cd_caprichosa").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});



// ESCUCHAR CD COMPLETO CD BOQUITA DE CARAMELO
$("#cd_boquita_full").click(function(){   

    var caca = $("#cd_boquita_full").attr("valor");
            var parametros = {
                "valorCaja1" : caca
                             };

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "prueba.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#full_cd_boquita").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});



// ESCUCHAR CD COMPLETO CD SOMBRAS NADA MAS
$("#cd_nadamas_full").click(function(){   

    var caca = $("#cd_nadamas_full").attr("valor");
            var parametros = {
                "valorCaja1" : caca
                             };

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "prueba.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 //cd3_clip
                            $("#full_cd_nadamas").html(response.contenido); // Agrega el Video

                            }

                } // Cierra Success
             }); //cierra AJAX

});


/* 28-09-2016 TEMAS INEDITOS */
$('body').on('click','#listatemas a',function (e){
            e.preventDefault();

            // alert($(this).attr('data-accion'));
            // Id Usuario
            id_inedito = $(this).attr('tema');
             var parametros = {
                "valorCaja1" : id_inedito
                             };
            //alert(id_inedito);

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "prueba.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true)
                    {  
                       
                    $('#cacaroto').html(response.contenido); // Agrega el Video
                    //$("#cerrar_tema").removeClass('hidden');
                    //$("#ine").hide();  
                    //$('#gg').html(response.contenido); 
                    }

                } // Cierra Success
             }); //cierra AJAX            
            
});
/* 28-09-2016 TEMAS INEDITOS */




/* 04-10-2016 ENTREVISTAS Y NOTAS */
$('body').on('click','#listaentrevista a',function (e){
            e.preventDefault();

            // alert($(this).attr('data-accion'));
            // Id Usuario
            id_entrevista = $(this).attr('tema');
             var parametros = {
                "valorCaja1" : id_entrevista
                             };
            //alert(id_entrevista);

     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_entrevista.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true)
                    {  
                       
                    $('#ventrevista').html(response.contenido); // Agrega el Video
                    //$("#cerrar_tema").removeClass('hidden');
                    //$("#ine").hide();  
                    //$('#gg').html(response.contenido); 
                    }

                } // Cierra Success
             }); //cierra AJAX            
            
});
/* 04-10-2016 ENTREVISTAS Y NOTAS */


























/*
$("#cerrar_tema").click(function(){
    $("#cerrar_tema").addClass('hidden');
    $("#cacaroto").hide();
    $("#ine").show();   
});
*/



$("#ver_subir_foto").click(function(){
    $("#fotin").load('subir/index.php');
    //alert("dsads");
});
//////////////////////////////////////////////
///// CERRAR CANCION A ESCUCHAR //////////////
   /* $("#cerreti").click(function(){
        $("#solo").empty();
        $("#solo").hide();
        //$("#cc_solo").hide();
        //$("#cd_solo").show();
    });*/
//////////////////////////////////////////////    



// TOMAR VALOR DE LA IMAGEN ELEGIDA A SUBIR
/*$("#cocina").click(function()
var foto = $("#uploadedfile").val();
alert(foto);
});*/



}); // Cierra Document

