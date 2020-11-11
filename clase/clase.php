<?php
header("Content-Type: text/html;charset=utf-8");
include_once "accesso_bd.php";
//class discografia {

    function solo(){
        $mysqli = conexionBD(); // Conexion a la Base Hackaton
        $d_solo= "";
        
        $disco_solo = $mysqli->query("SELECT * FROM discos  WHERE id_disco = 1 ");        
        // SOLO
        $contenido_cdsolo = $mysqli->query("SELECT * FROM canciones where id_disco = 1 and c_track = 1");
        while($row_solo = $contenido_cdsolo -> fetch_array(MYSQLI_ASSOC))
        {            
            $letra_solo_1 = $row_solo['c_letra'];
            $c_nombre = $row_solo['c_nombre'];
            $c_duracion = $row_solo['c_duracion'];
            $c_colaborador = $row_solo['c_colaborador'];
            //$c_video_s1 = $row_solo['c_video'];
        }

        // COMO OLVIDARTE
        $contenido_track2 = $mysqli->query("SELECT * FROM canciones where id_disco = 1 and c_track = 2");
        while($row2 = $contenido_track2 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_2 = $row2['c_track'];
            $letra_solo_2 = $row2['c_letra'];
            $c_nombre_s2 = $row2['c_nombre'];
            $c_duracion_s2 = $row2['c_duracion'];
            $c_colaborador_s2 = $row2['c_colaborador'];
            //$c_video_s2 = $row2['c_video'];
        }

        // TE NECESITO
        $contenido_track3 = $mysqli->query("SELECT * FROM canciones where id_disco = 1 and c_track = 3");
        while($row3 = $contenido_track3 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_3 = $row3['c_track'];
            $letra_solo_3 = $row3['c_letra'];
            $c_nombre_s3 = $row3['c_nombre'];
            $c_duracion_s3 = $row3['c_duracion'];
            $c_colaborador_s3 = $row3['c_colaborador'];
            //$c_video_s3 = $row3['c_video'];
        }        

        $contenido_track4 = $mysqli->query("SELECT * FROM canciones where id_disco = 1 and c_track = 4");
        while($row4 = $contenido_track4 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_4 = $row4['c_track'];
            $letra_solo_4 = $row4['c_letra'];
            $c_nombre_s4 = $row4['c_nombre'];
            $c_duracion_s4 = $row4['c_duracion'];
            $c_colaborador_s4 = $row4['c_colaborador'];
            //$c_video_s4 = $row4['c_video'];
        }         

        $contenido_track5 = $mysqli->query("SELECT * FROM canciones where id_disco = 1 and c_track = 5");
        while($row5 = $contenido_track5 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_5 = $row5['c_track'];
            $letra_solo_5 = $row5['c_letra'];
            $c_nombre_s5 = $row5['c_nombre'];
            $c_duracion_s5 = $row5['c_duracion'];
            $c_colaborador_s5 = $row5['c_colaborador'];
            //$c_video_s5 = $row5['c_video'];
        }  

        $contenido_track6 = $mysqli->query("SELECT * FROM canciones where id_disco = 1 and c_track = 6");
        while($row6 = $contenido_track6 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_6 = $row6['c_track'];
            $letra_solo_6 = $row6['c_letra'];
            $c_nombre_s6 = $row6['c_nombre'];
            $c_duracion_s6 = $row6['c_duracion'];
            $c_colaborador_s6 = $row6['c_colaborador'];
            //$c_video_s6 = $row6['c_video'];
        }   

        $contenido_track7 = $mysqli->query("SELECT * FROM canciones where id_disco = 1 and c_track = 7");
        while($row7 = $contenido_track7 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_7 = $row7['c_track'];
            $letra_solo_7 = $row7['c_letra'];
            $c_nombre_s7 = $row7['c_nombre'];
            $c_duracion_s7 = $row7['c_duracion'];
            $c_colaborador_s7 = $row7['c_colaborador'];
            //$c_video_s7 = $row7['c_video'];
        }    

        $contenido_track8 = $mysqli->query("SELECT * FROM canciones where id_disco = 1 and c_track = 8");
        while($row8 = $contenido_track8 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_8 = $row8['c_track'];
            $letra_solo_8 = $row8['c_letra'];
            $c_nombre_s8 = $row8['c_nombre'];
            $c_duracion_s8 = $row8['c_duracion'];
            $c_colaborador_s8 = $row8['c_colaborador'];
            //$c_video_s8 = $row8['c_video'];
        }   

        $contenido_track9 = $mysqli->query("SELECT * FROM canciones where id_disco = 1 and c_track = 9");
        while($row9 = $contenido_track9 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_9 = $row9['c_track'];
            $letra_solo_9 = $row9['c_letra'];
            $c_nombre_s9 = $row9['c_nombre'];
            $c_duracion_s9 = $row9['c_duracion'];
            $c_colaborador_s9 = $row9['c_colaborador'];
            //$c_video_s9 = $row9['c_video'];
        }     

        $contenido_track10 = $mysqli->query("SELECT * FROM canciones where id_disco = 1 and c_track = 10");
        while($row10 = $contenido_track10 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_10 = $row10['c_track'];
            $letra_solo_10 = $row10['c_letra'];
            $c_nombre_s10 = $row10['c_nombre'];
            $c_duracion_s10 = $row10['c_duracion'];
            $c_colaborador_s10 = $row10['c_colaborador'];
            //$c_video_s10 = $row10['c_video'];
        }                                            

        $contenido_track11 = $mysqli->query("SELECT * FROM canciones where id_disco = 1 and c_track = 11");
        while($row11 = $contenido_track11 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_11 = $row11['c_track'];
            $letra_solo_11 = $row11['c_letra'];
            $c_nombre_s11 = $row11['c_nombre'];
            $c_duracion_s11 = $row11['c_duracion'];
            $c_colaborador_s11 = $row11['c_colaborador'];
            //$c_video_s11 = $row11['c_video'];
        }    

        $contenido_track12 = $mysqli->query("SELECT * FROM canciones where id_disco = 1 and c_track = 12");
        while($row12 = $contenido_track12 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_12 = $row12['c_track'];
            $letra_solo_12 = $row12['c_letra'];
            $c_nombre_s12 = $row12['c_nombre'];
            $c_duracion_s12 = $row12['c_duracion'];
            $c_colaborador_s12 = $row12['c_colaborador'];
            //$c_video_s12 = $row12['c_video'];
        }   


        while($res = $disco_solo -> fetch_array(MYSQLI_ASSOC))
    {
      $agradecimientos = $res['cd_gracias'];
      $nombredisco  = $res['cd_nombre'];
      
      //$documento = $res['documento'];
      //$idmember = $res['idmember'];

        $d_solo .='
                        <div id="cd_solo" class="collapse hidden"> <!--  Comienza disco SOLO -->
                        <!-- Abre id#cd_solo -->
                        <h2>Album '.$nombredisco.'</h2>

                        <!-- COMIENZA PESTAnAS -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home">Inicio</a></li>
                          <li><a data-toggle="tab" href="#cd">CD</a></li>
                          <!--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
                        </ul>

                        <div class="tab-content">
                        <!-- COMIENZA TAB HOME -->    
                          <div id="home" class="tab-pane fade in active">
                            <h3>Agradecimientos</h3>
                            <p><small><h5>
                                '.$agradecimientos.'
                            </small></p></h5> 
                            <br>
                            <small><strong>Daniel Agostini</strong></small>
                                                                                
                          </div>
                          <!-- TERMINA TAB HOME -->    

                          <!-- COMIENZA TAB CD -->    
                          <div id="cd" class="tab-pane fade">
                            
                            <h3>Lista de canciones</h3>
                          
        
                              <h4>Daniel Agostini</h4>
                              <p><small>Disco compuesto por 12 temas de la Autoria de Daniel Agostini y un Cover
                                el Nº11 de Camilo Blanes (Camilo Sexto) </small></p><br>

                                <br>

                                <!-- COMIENZA ESCUCHAR CD COMPLETO "SOLO" -->
                                <a href="#solo" id="cd_solo_full" valor="1" data-toggle="collapse" data-target="#cdcompleto" class="btn btn-info btn-xs">Escuchar CD Completo</a>

                                <div id="cdcompleto" class="col-xs-12 collapse ">
                                    <h4>Disco Completo</h4>

                                    <p id="full_cd_solo" > </p>

                                </div>
                                <!-- TERMINA ESCUCHAR CD COMPLETO "SOLO" -->


                              <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Nombre de la cancion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                <!-- TEMA 1 SOLO -->
                                <tr>
                                   <td>1</td>
                                   <td><small>'.$c_nombre.'</small> 
                                   
                                    <a href="#solo" id="cd_solo" data-toggle="collapse" data-target="#solo" class="btn btn-info btn-xs">Escuchar</a>  | 
                            
                                   <!-- <button id="cerreti"  class="btn btn-info btn-xs ">Cerrar</button>  -->
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#letra" class="btn btn-info btn-xs">Letra</a></p>

    <form id="cd_solo_track_1">
        <input id="id_disco" name="disco" value="1" class="hidden">
        <input id="id_video" name="video" value="1" class="hidden">
    </form>                                   

                                    <!-- VIDEO --> <br>
                                    <div id="solo" class="col-xs-12 collapse ">
                                        <div id="video_solo_track1"></div>

                                    </div>
                                    <!-- VIDEO -->

                                    <!-- LETRA  -->
                                    <div id="letra" class="col-xs-12 collapse "><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre.' <small>Duracion: <b>'.$c_duracion.'</b></small></h3><small>'.$c_colaborador.'</small></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                      '.$letra_solo_1.'  
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA  -->

                                   </td>
                                </tr> 
                                <!-- TEMA 1 SOLO -->  


                                <!-- TEMA 2 COMO OLVIDARTE -->
                                <tr>
                                    <td>'.$cd_track_2.'</td>
                                    <td><small>'.$c_nombre_s2.'</small> 
                                        <a href="#ver_cdsolo" id="tema2" data-toggle="collapse" data-target="#colvidarte" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#temaii" class="btn btn-info btn-xs">Letra</a>


<form id="cd_solo_track_2">
    <input id="id_disco" name="disco" value="1" class="hidden">
    <input id="id_video" name="video" value="2" class="hidden">
</form>   
                                    <!-- VIDEO COMO OLVIDARTE --> <br>
                                    <div id="colvidarte" class="col-xs-12 collapse ">                              
                                    </div>
                                    <!-- VIDEO COMO OLVIDARTE -->


                                    <!-- LETRA  -->
                                    <div id="temaii" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s2.' <small>Duracion: <b>'.$c_duracion_s2.'
                                                </b></small></h3><small>'.$c_colaborador_s2.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                    <br>
                                    <p>
                                        '.$letra_solo_2.'
                                    </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                    <!-- LETRA -->

                                    </td>
                                </tr>    
                                <!-- TEMA 2 COMO OLVIDARTE -->      

                                <!-- TEMA 3 TE NECESITO -->
                                <tr>
                                   <td>'.$cd_track_3.'</td>
                                   <td><small>'.$c_nombre_s3.'</small>
                                   <a href="#ver_cdsolo" id="tema3" data-toggle="collapse" data-target="#tnecesito" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#te_necesito" class="btn btn-info btn-xs">Letra</a>


<form id="cd_solo_track_3">
    <input id="id_disco" name="disco" value="1" class="hidden">
    <input id="id_video" name="video" value="3" class="hidden">
</form>   
                                    <br>
                                   <div id="tnecesito" class="col-xs-12 collapse "><br>                                  
                                    </div>
                                    
                                    <div id="te_necesito" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s3.' <small>Duracion: <b>'.$c_duracion_s3.'
                                                </b></small></h3><small>'.$c_colaborador_s3.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                     
                                                <p>
                                                '.$letra_solo_3.'
                                                </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                   </td> 
                                </tr> 
                                <!-- TEMA 3 TE NECESITO -->  
                              
                                <!-- TEMA 4 SI TODAVIA ME QUIERES --> 
                                <tr>
                                    <td>'.$cd_track_4.'</td>
                                    <td><small>'.$c_nombre_s4.'</small>
                                    <a href="#ver_cdsolo" id="tema4" data-toggle="collapse" data-target="#todquieres" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#todavia" class="btn btn-info btn-xs">Letra</a>

<form id="cd_solo_track_4">
    <input id="id_disco" name="disco" value="1" class="hidden">
    <input id="id_video" name="video" value="4" class="hidden">
</form>   

                                    <!-- VIDEO --> <br>
                                    <div id="todquieres" class="col-xs-12 collapse ">                                 
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="todavia" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s4.' <small>Duracion: <b>'.$c_duracion_s4.'
                                                </b></small></h3><small>'.$c_colaborador_s4.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_4.'
                                                </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>    

                                    </td>
                                </tr> 
                                <!-- TEMA 4 SI TODAVIA ME QUIERES --> 

                                <!-- TEMA 5 DONDE TE HAS IDO --> 
                                <tr>
                                    <td>'.$cd_track_5.'</td>
                                    <td><small>'.$c_nombre_s5.'</small>

                                    <a href="#ver_cdsolo" id="tema5" data-toggle="collapse" data-target="#donde" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#tehasido" class="btn btn-info btn-xs">Letra</a>
                                    
<form id="cd_solo_track_5">
    <input id="id_disco" name="disco" value="1" class="hidden">
    <input id="id_video" name="video" value="5" class="hidden">
</form>   
                                    <!-- VIDEO --><br>
                                    <div id="donde" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="tehasido" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s5.' <small>Duracion: <b>'.$c_duracion_s5.'
                                                </b></small></h3><small>'.$c_colaborador_s5.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_5.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>                                                                    
                                <!-- TEMA 5 DONDE TE HAS IDO --> 

                                <!-- TEMA 6 JUGASTE CONMIGO --> 
                                <tr>
                                    <td>'.$cd_track_6.'</td>
                                    <td><small>'.$c_nombre_s6.'</small>
                                    <a href="#ver_cdsolo" id="tema6" data-toggle="collapse" data-target="#jconmigo" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#jconmigol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_solo_track_6">
    <input id="id_disco" name="disco" value="1" class="hidden">
    <input id="id_video" name="video" value="6" class="hidden">
</form>
                                    <!-- VIDEO --> <br>
                                    <div id="jconmigo" class="col-xs-12 collapse "><br>                                  
                                    </div>

                                    <!-- LETRA  -->
                                    <div id="jconmigol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s6.' <small>Duracion: <b>'.$c_duracion_s6.'
                                                </b></small></h3><small>'.$c_colaborador_s6.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_6.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 6 JUGASTE CONMIGO --> 

                                <!-- TEMA 7 POR QUE TE QUISE TANTO --> 
                                <tr>
                                    <td>'.$cd_track_7.'</td>
                                    <td><small>'.$c_nombre_s7.'</small>

                                    <a href="#ver_cdsolo" id="tema7" data-toggle="collapse" data-target="#tantov" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#tantol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_solo_track_7">
    <input id="id_disco" name="disco" value="1" class="hidden">
    <input id="id_video" name="video" value="7" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="tantov" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="tantol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s7.' <small>Duracion: <b>'.$c_duracion_s7.'
                                                </b></small></h3><small>'.$c_colaborador_s7.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_7.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>
                                <!-- TEMA 7 POR QUE TE QUISE TANTO -->

                                <!-- TEMA 8 UNA NOCHE MAS -->
                                <tr>
                                    <td>'.$cd_track_8.'</td>
                                    <td><small>'.$c_nombre_s8.'</small>
                                    
                                    <a href="#ver_cdsolo" id="tema8" data-toggle="collapse" data-target="#nochemasv" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#nochemasl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_solo_track_8">
    <input id="id_disco" name="disco" value="1" class="hidden">
    <input id="id_video" name="video" value="8" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="nochemasv" class="col-xs-12 collapse "><br>       
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="nochemasl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s8.' <small>Duracion: <b>'.$c_duracion_s8.'
                                                </b></small></h3><small>'.$c_colaborador_s8.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_8.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr> 
                                <!-- TEMA 8 UNA NOCHE MAS -->

                                <!-- TEMA 9 TE SIGO AMANDO -->
                                <tr>
                                    <td>'.$cd_track_9.'</td>
                                    <td><small>'.$c_nombre_s9.'</small>
                                    
                                    <a href="#ver_cdsolo" id="tema9" data-toggle="collapse" data-target="#tesigoamandov" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#tesigoamandol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_solo_track_9">
    <input id="id_disco" name="disco" value="1" class="hidden">
    <input id="id_video" name="video" value="9" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="tesigoamandov" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="tesigoamandol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s9.' <small>Duracion: <b>'.$c_duracion_s9.'
                                                </b></small></h3><small>'.$c_colaborador_s9.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_9.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 9 TE SIGO AMANDO -->

                                <!-- TEMA 10 QUIERO -->
                                <tr>
                                    <td>'.$cd_track_10.'</td>
                                    <td><small>'.$c_nombre_s10.'</small>

                                    <a href="#ver_cdsolo" id="tema10" data-toggle="collapse" data-target="#quierov" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#quierol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_solo_track_10">
    <input id="id_disco" name="disco" value="1" class="hidden">
    <input id="id_video" name="video" value="10" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="quierov" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="quierol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s10.' <small>Duracion: <b>'.$c_duracion_s10.'
                                                </b></small></h3><small>'.$c_colaborador_s10.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_10.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 10 QUIERO -->

                                <!-- TEMA 11 SI ME DEJAS AHORA -->
                                <tr>
                                    <td>'.$cd_track_11.'</td>
                                    <td><small>'.$c_nombre_s11.'</small>

                                    <a href="#ver_cdsolo" id="tema11" data-toggle="collapse" data-target="#dejasv" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#dejasl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_solo_track_11">
    <input id="id_disco" name="disco" value="1" class="hidden">
    <input id="id_video" name="video" value="11" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="dejasv" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="dejasl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                 <th><h3>'.$c_nombre_s11.' <small>Duracion: <b>'.$c_duracion_s11.'
                                                </b></small></h3><small>'.$c_colaborador_s11.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_11.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 11 SI ME DEJAS AHORA -->

                                <!-- TEMA 12 SE NOS MUERE EL AMOR -->
                                <tr>
                                  <td>'.$cd_track_12.'</td>
                                    <td><small>'.$c_nombre_s12.'</small>

                                    <a href="#ver_cdsolo" id="tema12" data-toggle="collapse" data-target="#senosmuerev" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#senosmuerel" class="btn btn-info btn-xs">Letra</a>

<form id="cd_solo_track_12">
    <input id="id_disco" name="disco" value="1" class="hidden">
    <input id="id_video" name="video" value="12" class="hidden">
</form>


                                    <!-- VIDEO --> <br>
                                    <div id="senosmuerev" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="senosmuerel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s12.' <small>Duracion: <b>'.$c_duracion_s12.'
                                                </b></small></h3><small>'.$c_colaborador_s12.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_12.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>
                                <!-- TEMA 12 SE NOS MUERE EL AMOR -->

                                <!--
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                              -->
                                </tbody>
                              </table>
                            </div> <!-- Cierra CD -->                           


                           
                          </div>
                          <!-- TERMINA TAB HOME -->    



                          <!--
                          <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                          </div>
                          -->

                        </div>
                        <!-- TERMINA PESTAnAS -->


                        <!-- Cierra id#cd_solo -->    
                        </div>                   

              ';

        }
    return $d_solo;          
    }

   function como_sera(){
        $mysqli = conexionBD(); // Conexion a la Base Hackaton
        $d_comosera= "";

         $disco_csera = $mysqli->query("SELECT * FROM discos  WHERE id_disco = 2 ");   
         while($res = $disco_csera -> fetch_array(MYSQLI_ASSOC))
            {
                $agradecimientos = $res['cd_gracias'];
                $nombredisco  = $res['cd_nombre'];


        // COMO SERA
        $contenido_track1_cs = $mysqli->query("SELECT * FROM canciones where id_disco = 2 and c_track = 1");
        while($row_cs1 = $contenido_track1_cs -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cs1 = $row_cs1['c_track'];
            $letra_cs_1 = $row_cs1['c_letra'];
            $c_nombre_cs1 = $row_cs1['c_nombre'];
            $c_duracion_cs1 = $row_cs1['c_duracion'];
            $c_colaborador_cs1 = $row_cs1['c_colaborador'];
            //$c_video_cs1 = $row_cs1['c_video'];
        }   

        // DIME
        $contenido_track2_cs = $mysqli->query("SELECT * FROM canciones where id_disco = 2 and c_track = 2");
        while($row_cs2 = $contenido_track2_cs -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cs2 = $row_cs2['c_track'];
            $letra_cs_2 = $row_cs2['c_letra'];
            $c_nombre_cs2 = $row_cs2['c_nombre'];
            $c_duracion_cs2 = $row_cs2['c_duracion'];
            $c_colaborador_cs2 = $row_cs2['c_colaborador'];
            //$c_video_cs2 = $row_cs2['c_video'];
        }  

        // VOY A TOMAR POR TI
        $contenido_track3_cs = $mysqli->query("SELECT * FROM canciones where id_disco = 2 and c_track = 3");
        while($row_cs3 = $contenido_track3_cs -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cs3 = $row_cs3['c_track'];
            $letra_cs_3 = $row_cs3['c_letra'];
            $c_nombre_cs3 = $row_cs3['c_nombre'];
            $c_duracion_cs3 = $row_cs3['c_duracion'];
            $c_colaborador_cs3 = $row_cs3['c_colaborador'];
            //$c_video_cs3 = $row_cs3['c_video'];
        }  

        // POR TU ENGAnO

        $contenido_track4_cs = $mysqli->query("SELECT * FROM canciones where id_disco = 2 and c_track = 4");
        while($row_cs4 = $contenido_track4_cs -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cs4 = $row_cs4['c_track'];
            $letra_cs_4 = $row_cs4['c_letra'];
            $c_nombre_cs4 = $row_cs4['c_nombre'];
            $c_duracion_cs4 = $row_cs4['c_duracion'];
            $c_colaborador_cs4 = $row_cs4['c_colaborador'];
            //$c_video_cs4 = $row_cs4['c_video'];
        }  

        // ERAMOS
        $contenido_track5_cs = $mysqli->query("SELECT * FROM canciones where id_disco = 2 and c_track = 5");
        while($row_cs5 = $contenido_track5_cs -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cs5 = $row_cs5['c_track'];
            $letra_cs_5 = $row_cs5['c_letra'];
            $c_nombre_cs5 = $row_cs5['c_nombre'];
            $c_duracion_cs5 = $row_cs5['c_duracion'];
            $c_colaborador_cs5 = $row_cs5['c_colaborador'];
            //$c_video_cs5 = $row_cs5['c_video'];
        }  

        // MI ULTIMA CARTA
        $contenido_track6_cs = $mysqli->query("SELECT * FROM canciones where id_disco = 2 and c_track = 6");
        while($row_cs6 = $contenido_track6_cs -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cs6 = $row_cs6['c_track'];
            $letra_cs_6 = $row_cs6['c_letra'];
            $c_nombre_cs6 = $row_cs6['c_nombre'];
            $c_duracion_cs6 = $row_cs6['c_duracion'];
            $c_colaborador_cs6 = $row_cs6['c_colaborador'];
            //$c_video_cs6 = $row_cs6['c_video'];
        }  

        // QUIEN SERA
        $contenido_track7_cs = $mysqli->query("SELECT * FROM canciones where id_disco = 2 and c_track = 7");
        while($row_cs7 = $contenido_track7_cs -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cs7 = $row_cs7['c_track'];
            $letra_cs_7 = $row_cs7['c_letra'];
            $c_nombre_cs7 = $row_cs7['c_nombre'];
            $c_duracion_cs7 = $row_cs7['c_duracion'];
            $c_colaborador_cs7 = $row_cs7['c_colaborador'];
            //$c_video_cs7 = $row_cs7['c_video'];
        }     

        // LLORARAS POR MI      
        $contenido_track8_cs = $mysqli->query("SELECT * FROM canciones where id_disco = 2 and c_track = 8");
        while($row_cs8 = $contenido_track8_cs -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cs8 = $row_cs8['c_track'];
            $letra_cs_8 = $row_cs8['c_letra'];
            $c_nombre_cs8 = $row_cs8['c_nombre'];
            $c_duracion_cs8 = $row_cs8['c_duracion'];
            $c_colaborador_cs8 = $row_cs8['c_colaborador'];
            //$c_video_cs8 = $row_cs8['c_video'];
        }  

        // CUENTALE A MI AMOR
        $contenido_track9_cs = $mysqli->query("SELECT * FROM canciones where id_disco = 2 and c_track = 9");
        while($row_cs9 = $contenido_track9_cs -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cs9 = $row_cs9['c_track'];
            $letra_cs_9 = $row_cs9['c_letra'];
            $c_nombre_cs9 = $row_cs9['c_nombre'];
            $c_duracion_cs9 = $row_cs9['c_duracion'];
            $c_colaborador_cs9 = $row_cs9['c_colaborador'];
            //$c_video_cs9 = $row_cs9['c_video'];
        }  

        // SI VUELVES
        $contenido_track10_cs = $mysqli->query("SELECT * FROM canciones where id_disco = 2 and c_track = 10");
        while($row_cs10 = $contenido_track10_cs -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cs10 = $row_cs10['c_track'];
            $letra_cs_10 = $row_cs10['c_letra'];
            $c_nombre_cs10 = $row_cs10['c_nombre'];
            $c_duracion_cs10 = $row_cs10['c_duracion'];
            $c_colaborador_cs10 = $row_cs10['c_colaborador'];
            //$c_video_cs10 = $row_cs10['c_video'];
        }  

        // MURIENDO FUE
        $contenido_track11_cs = $mysqli->query("SELECT * FROM canciones where id_disco = 2 and c_track = 11");
        while($row_cs11 = $contenido_track11_cs -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cs11 = $row_cs11['c_track'];
            $letra_cs_11 = $row_cs11['c_letra'];
            $c_nombre_cs11 = $row_cs11['c_nombre'];
            $c_duracion_cs11 = $row_cs11['c_duracion'];
            $c_colaborador_cs11 = $row_cs11['c_colaborador'];
            //$c_video_cs11 = $row_cs11['c_video'];
        }  

        // MUCHACHITA
        $contenido_track12_cs = $mysqli->query("SELECT * FROM canciones where id_disco = 2 and c_track = 12");
        while($row_cs12 = $contenido_track12_cs -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cs12 = $row_cs12['c_track'];
            $letra_cs_12 = $row_cs12['c_letra'];
            $c_nombre_cs12 = $row_cs12['c_nombre'];
            $c_duracion_cs12 = $row_cs12['c_duracion'];
            $c_colaborador_cs12 = $row_cs12['c_colaborador'];
            //$c_video_cs12 = $row_cs12['c_video'];
        }                                  

                                                  


        $d_comosera .='
                        <div id="cd_csera" class="collapse hidden"> <!--  Comienza disco COMO SERA -->
                        <!-- Abre id#cd_csera -->
                        <h2>Album '.$nombredisco.'</h2>

                        <!-- COMIENZA PESTAnAS -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home_csera">Inicio</a></li>
                          <li><a data-toggle="tab" href="#cd2">CD</a></li>
                          <!--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
                        </ul>

                        <div class="tab-content">
                        <!-- COMIENZA TAB HOME -->    
                          <div id="home_csera" class="tab-pane fade in active">
                            <h3>Agradecimientos</h3>
                            
                            <h5><p><small>
                            '.$agradecimientos.'                                
                            <strong>Daniel Agostini</strong>
                            </small></p></h5>
                          
                          </div>
                          <!-- TERMINA TAB HOME -->    

                          <!-- COMIENZA TAB CD -->    
                          <div id="cd2" class="tab-pane fade">
                            
                            <h3>Lista de canciones</h3>
                          
        
                              <h4>Daniel Agostini</h4>
                              <p><small>Disco compuesto por 12 temas de la Autoria de Daniel Agostini y un Cover
                                el Nº12 llamado "Muchachita" </small></p><br>


                                <!-- **************************************** -->    
                                <!-- COMIENZA ESCUCHAR CD COMPLETO "SOLO" -->
                                <a href="#solo" id="cd_csera_full" valor="2" data-toggle="collapse" data-target="#cdcompleto2" class="btn btn-info btn-xs">Escuchar CD Completo</a>

                                <div id="cdcompleto2" class="col-xs-12 collapse ">
                                    <h4>Disco Completo</h4>

                                    <p id="full_cd_csera" > </p>

                                </div>
                                <!-- TERMINA ESCUCHAR CD COMPLETO "SOLO" -->
                                <!-- **************************************** -->    




                              <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Nombre de la cancion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                <!-- TEMA 1 COMO SERA -->
                                <tr>
                                   <td>'.$cd_track_cs1.'</td>
                                   <td>'.$c_nombre_cs1.'
                                   <a href="#solo" id="tema_csera_1" data-toggle="collapse" data-target="#tema1" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#tema1l" class="btn btn-info btn-xs">Letra</a></p>

<form id="cd_csera_track_1">
    <input id="id_disco" name="disco" value="2" class="hidden">
    <input id="id_video" name="video" value="1" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="tema1" class="col-xs-12 collapse">

                                    </div>
                                    <!-- VIDEO -->

                                    <!-- LETRA  -->
                                    <div id="tema1l" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_cs1.' <small>Duracion: <b>'.$c_duracion_cs1.'
                                                </b></small></h3><small>'.$c_colaborador_cs1.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_cs_1.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA  -->

                                   </td>
                                </tr> 
                                <!-- TEMA 1 COMO SERA -->  

                                <!-- TEMA 2 DIME -->
                                <tr>
                                   <td>'.$cd_track_cs2.'</td>
                                   <td>'.$c_nombre_cs2.'
                                        <a href="#ver_cdsolo" id="tema_csera_2" data-toggle="collapse" data-target="#dimev" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#dimel" class="btn btn-info btn-xs">Letra</a>

<form id="cd_csera_track_2">
    <input id="id_disco" name="disco" value="2" class="hidden">
    <input id="id_video" name="video" value="2" class="hidden">
</form>
                                    <!-- VIDEO DIME --> <br>
                                    <div id="dimev" class="col-xs-12 collapse">                                  
                                    </div>
                                    <!-- VIDEO DIME -->


                                    <!-- LETRA  -->
                                    <div id="dimel" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_cs2.' <small>Duracion: <b>'.$c_duracion_cs2.'
                                                </b></small></h3><small>'.$c_colaborador_cs2.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                    <br>
                                    <p>
                                    '.$letra_cs_2.'
                                    </p>
                                    
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                    <!-- LETRA -->

                                    </td>
                                </tr>    
                                <!-- TEMA 2 DIME-->      

                                <!-- TEMA 3 VOY A TOMAR POR TI -->
                                <tr>
                                   <td>'.$cd_track_cs3.'</td>
                                   <td>'.$c_nombre_cs3.'
                                   <a href="#ver_cdsolo" id="tema_csera_3" data-toggle="collapse" data-target="#vtportiv" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#vtportil" class="btn btn-info btn-xs">Letra</a>

<form id="cd_csera_track_3">
    <input id="id_disco" name="disco" value="2" class="hidden">
    <input id="id_video" name="video" value="3" class="hidden">
</form>
                                    <br>
                                   <div id="vtportiv" class="col-xs-12 collapse">                                  
                                    </div>
                                    
                                    <div id="vtportil" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_cs3.' <small>Duracion: <b>'.$c_duracion_cs3.'
                                                </b></small></h3><small>'.$c_colaborador_cs3.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                     
                                        <p>
                                            '.$letra_cs_3.'
                                        </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                   </td> 
                                </tr> 
                                <!-- TEMA 3 VOY A TOMAR POR TI -->  
                              
                                <!-- TEMA 4 POR TU ENGAnO --> 
                                <tr>
                                   <td>'.$cd_track_cs4.'</td>
                                   <td>'.$c_nombre_cs4.'
                                    <a href="#ver_cdsolo" id="tema_csera_4" data-toggle="collapse" data-target="#ptenganov" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#ptenganol" class="btn btn-info btn-xs">Letra</a>
                                    
<form id="cd_csera_track_4">
    <input id="id_disco" name="disco" value="2" class="hidden">
    <input id="id_video" name="video" value="4" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="ptenganov" class="col-xs-12 collapse">                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="ptenganol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_cs4.' <small>Duracion: <b>'.$c_duracion_cs4.'
                                                </b></small></h3><small>'.$c_colaborador_cs4.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_cs_4.'
                                                </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>    

                                    </td>
                                </tr> 
                                <!-- TEMA 4 POR TU ENGAnO --> 

                                <!-- TEMA 5 ERAMOS--> 
                                <tr>
                                   <td>'.$cd_track_cs5.'</td>
                                   <td>'.$c_nombre_cs5.'

                                    <a href="#ver_cdsolo" id="tema_csera_5" data-toggle="collapse" data-target="#eramosv" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#eramosl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_csera_track_5">
    <input id="id_disco" name="disco" value="2" class="hidden">
    <input id="id_video" name="video" value="5" class="hidden">
</form>


                                    <!-- VIDEO --><br>
                                    <div id="eramosv" class="col-xs-12 collapse">                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="eramosl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_cs5.' <small>Duracion: <b>'.$c_duracion_cs5.'
                                                </b></small></h3><small>'.$c_colaborador_cs5.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_cs_5.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>                                                                    
                                <!-- TEMA 5 ERAMOS --> 

                                <!-- TEMA 6 MI ULTIMA CARTA --> 
                                <tr>
                                   <td>'.$cd_track_cs6.'</td>
                                   <td>'.$c_nombre_cs6.'
                                    <a href="#ver_cdsolo" id="tema_csera_6" data-toggle="collapse" data-target="#mucartav" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#mucartal" class="btn btn-info btn-xs">Letra</a>

<form id="cd_csera_track_6">
    <input id="id_disco" name="disco" value="2" class="hidden">
    <input id="id_video" name="video" value="6" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="mucartav" class="col-xs-12 collapse">                                  
                                    </div>

                                    <!-- LETRA  -->
                                    <div id="mucartal" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_cs6.' <small>Duracion: <b>'.$c_duracion_cs6.'
                                                </b></small></h3><small>'.$c_colaborador_cs6.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_cs_6.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 6 MI ULTIMA CARTA--> 

                                <!-- TEMA 7 QUIEN SERA --> 
                                <tr>
                                   <td>'.$cd_track_cs7.'</td>
                                   <td>'.$c_nombre_cs7.'

                                    <a href="#ver_cdsolo" id="tema_csera_7" data-toggle="collapse" data-target="#qserav" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#qseral" class="btn btn-info btn-xs">Letra</a>

<form id="cd_csera_track_7">
    <input id="id_disco" name="disco" value="2" class="hidden">
    <input id="id_video" name="video" value="7" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="qserav" class="col-xs-12 collapse">                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="qseral" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_cs7.' <small>Duracion: <b>'.$c_duracion_cs7.'
                                                </b></small></h3><small>'.$c_colaborador_cs7.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_cs_7.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>
                                <!-- TEMA 7 QUIEN SERA -->

                                <!-- TEMA 8 LLORARAS POR MI -->
                                <tr>
                                   <td>'.$cd_track_cs8.'</td>
                                   <td>'.$c_nombre_cs8.'
                                    
                                    <a href="#ver_cdsolo" id="tema_csera_8" data-toggle="collapse" data-target="#llpmiv" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#llpmil" class="btn btn-info btn-xs">Letra</a>

<form id="cd_csera_track_8">
    <input id="id_disco" name="disco" value="2" class="hidden">
    <input id="id_video" name="video" value="8" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="llpmiv" class="col-xs-12 collapse">                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="llpmil" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_cs8.' <small>Duracion: <b>'.$c_duracion_cs8.'
                                                </b></small></h3><small>'.$c_colaborador_cs8.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_cs_8.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr> 
                                <!-- TEMA 8 LLORARAS POR MI -->

                                <!-- TEMA 9 CUENTALE A MI AMOR -->
                                <tr>
                                   <td>'.$cd_track_cs9.'</td>
                                   <td>'.$c_nombre_cs9.'
                                    
                                    <a href="#ver_cdsolo" id="tema_csera_9" data-toggle="collapse" data-target="#camorv" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#camorl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_csera_track_9">
    <input id="id_disco" name="disco" value="2" class="hidden">
    <input id="id_video" name="video" value="9" class="hidden">
</form>


                                    <!-- VIDEO --><br>
                                    <div id="camorv" class="col-xs-12 collapse">                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="camorl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                              <th><h3>'.$c_nombre_cs9.' <small>Duracion: <b>'.$c_duracion_cs9.'
                                                </b></small></h3><small>'.$c_colaborador_cs9.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_cs_9.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 9 CUENTALE A MI AMOR -->

                                <!-- TEMA 10 SI VUELVES -->
                                <tr>
                                   <td>'.$cd_track_cs10.'</td>
                                   <td>'.$c_nombre_cs10.'

                                    <a href="#ver_cdsolo" id="tema_csera_10" data-toggle="collapse" data-target="#svuelvesv" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#svuelvesl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_csera_track_10">
    <input id="id_disco" name="disco" value="2" class="hidden">
    <input id="id_video" name="video" value="10" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="svuelvesv" class="col-xs-12 collapse">                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="svuelvesl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                             <th><h3>'.$c_nombre_cs10.' <small>Duracion: <b>'.$c_duracion_cs10.'
                                                </b></small></h3><small>'.$c_colaborador_cs10.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_cs_10.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 10 SI VUELVES --> 

                                <!-- TEMA 11 MUERIENDO FUE -->
                                <tr>
                                   <td>'.$cd_track_cs11.'</td>
                                   <td>'.$c_nombre_cs11.'

                                    <a href="#ver_cdsolo" id="tema_csera_11" data-toggle="collapse" data-target="#mfuev" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#mfuel" class="btn btn-info btn-xs">Letra</a>

<form id="cd_csera_track_11">
    <input id="id_disco" name="disco" value="2" class="hidden">
    <input id="id_video" name="video" value="11" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="mfuev" class="col-xs-12 collapse">                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="mfuel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                               <th><h3>'.$c_nombre_cs11.' <small>Duracion: <b>'.$c_duracion_cs11.'
                                                </b></small></h3><small>'.$c_colaborador_cs11.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_cs_11.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 11 MUERIENDO FUE -->

                                <!-- TEMA 12 MUCHACHITA-->
                                <tr>
                                   <td>'.$cd_track_cs12.'</td>
                                   <td>'.$c_nombre_cs12.'

                                    <a href="#ver_cdsolo" id="tema_csera_12" data-toggle="collapse" data-target="#muchachitav" class="btn btn-info btn-xs">Escuchar</a> | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#muchachital" class="btn btn-info btn-xs">Letra</a>
<form id="cd_csera_track_12">
    <input id="id_disco" name="disco" value="2" class="hidden">
    <input id="id_video" name="video" value="12" class="hidden">
</form>


                                    <!-- VIDEO --><br>
                                    <div id="muchachitav" class="col-xs-12 collapse">                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="muchachital" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                               <th><h3>'.$c_nombre_cs12.' <small>Duracion: <b>'.$c_duracion_cs12.'
                                                </b></small></h3><small>'.$c_colaborador_cs12.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_cs_12.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>
                                <!-- TEMA 12 SE NOS MUERE EL AMOR -->

                                <!--
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                              -->
                                </tbody>
                              </table>
                            </div> <!-- Cierra CD -->                           


                           
                          </div>
                          <!-- TERMINA TAB HOME -->    



                          <!--
                          <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                          </div>
                          -->

                        </div>
                        <!-- TERMINA PESTAnAS -->


                        <!-- Cierra id#cd_solo -->    
                        </div>                   

              ';
    }              
    return $d_comosera;          
    }    

    function simplemente(){
        $d_simplemente= "";

        $mysqli = conexionBD(); // Conexion a la Base Hackaton

         $disco_simplemente = $mysqli->query("SELECT * FROM discos  WHERE id_disco = 3 ");   
         while($res = $disco_simplemente -> fetch_array(MYSQLI_ASSOC))
            {
                $agradecimientos = $res['cd_gracias'];
                $nombredisco  = $res['cd_nombre'];


        // SIMEPRE TE AMARE
        $contenido_track1_sim = $mysqli->query("SELECT * FROM canciones where id_disco = 3 and c_track = 1");
        while($row_sim1 = $contenido_track1_sim -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sim1 = $row_sim1['c_track'];
            $letra_sim_1 = $row_sim1['c_letra'];
            $c_nombre_sim1 = $row_sim1['c_nombre'];
            $c_duracion_sim1 = $row_sim1['c_duracion'];
            $c_colaborador_sim1 = $row_sim1['c_colaborador'];
            //$c_video_sim1 = $row_sim1['c_video'];
        }   
        // DONDE ESTARAS
        $contenido_track2_sim = $mysqli->query("SELECT * FROM canciones where id_disco = 3 and c_track = 2");
        while($row_sim2 = $contenido_track2_sim -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sim2 = $row_sim2['c_track'];
            $letra_sim_2 = $row_sim2['c_letra'];
            $c_nombre_sim2 = $row_sim2['c_nombre'];
            $c_duracion_sim2 = $row_sim2['c_duracion'];
            $c_colaborador_sim2 = $row_sim2['c_colaborador'];
            //$c_video_sim2 = $row_sim2['c_video'];
        }   

        // LLORO POR TI
        $contenido_track3_sim = $mysqli->query("SELECT * FROM canciones where id_disco = 3 and c_track = 3");
        while($row_sim3 = $contenido_track3_sim -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sim3 = $row_sim3['c_track'];
            $letra_sim_3 = $row_sim3['c_letra'];
            $c_nombre_sim3 = $row_sim3['c_nombre'];
            $c_duracion_sim3 = $row_sim3['c_duracion'];
            $c_colaborador_sim3 = $row_sim3['c_colaborador'];
            //$c_video_sim3 = $row_sim3['c_video'];
        }   

        // TE VOY A EXTRAnAR
        $contenido_track4_sim = $mysqli->query("SELECT * FROM canciones where id_disco = 3 and c_track = 4");
        while($row_sim4 = $contenido_track4_sim -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sim4 = $row_sim4['c_track'];
            $letra_sim_4 = $row_sim4['c_letra'];
            $c_nombre_sim4 = $row_sim4['c_nombre'];
            $c_duracion_sim4 = $row_sim4['c_duracion'];
            $c_colaborador_sim4 = $row_sim4['c_colaborador'];
            //$c_video_sim4 = $row_sim4['c_video'];
        }   

        // EN TI CONFIE
        $contenido_track5_sim = $mysqli->query("SELECT * FROM canciones where id_disco = 3 and c_track = 5");
        while($row_sim5 = $contenido_track5_sim -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sim5 = $row_sim5['c_track'];
            $letra_sim_5 = $row_sim5['c_letra'];
            $c_nombre_sim5 = $row_sim5['c_nombre'];
            $c_duracion_sim5 = $row_sim5['c_duracion'];
            $c_colaborador_sim5 = $row_sim5['c_colaborador'];
            //$c_video_sim5 = $row_sim5['c_video'];
        }   

        // AMIGA
        $contenido_track6_sim = $mysqli->query("SELECT * FROM canciones where id_disco = 3 and c_track = 6");
        while($row_sim6 = $contenido_track6_sim -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sim6 = $row_sim6['c_track'];
            $letra_sim_6 = $row_sim6['c_letra'];
            $c_nombre_sim6 = $row_sim6['c_nombre'];
            $c_duracion_sim6 = $row_sim6['c_duracion'];
            $c_colaborador_sim6 = $row_sim6['c_colaborador'];
            //$c_video_sim6 = $row_sim6['c_video'];
        }   

        // NADIE
        $contenido_track7_sim = $mysqli->query("SELECT * FROM canciones where id_disco = 3 and c_track = 7");
        while($row_sim7 = $contenido_track7_sim -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sim7 = $row_sim7['c_track'];
            $letra_sim_7 = $row_sim7['c_letra'];
            $c_nombre_sim7 = $row_sim7['c_nombre'];
            $c_duracion_sim7 = $row_sim7['c_duracion'];
            $c_colaborador_sim7 = $row_sim7['c_colaborador'];
            //$c_video_sim7 = $row_sim7['c_video'];
        }   

        // QUIERO ESTAR CONTIGO
        $contenido_track8_sim = $mysqli->query("SELECT * FROM canciones where id_disco = 3 and c_track = 8");
        while($row_sim8 = $contenido_track8_sim -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sim8 = $row_sim8['c_track'];
            $letra_sim_8 = $row_sim8['c_letra'];
            $c_nombre_sim8 = $row_sim8['c_nombre'];
            $c_duracion_sim8 = $row_sim8['c_duracion'];
            $c_colaborador_sim8 = $row_sim8['c_colaborador'];
            //$c_video_sim8 = $row_sim8['c_video'];
        }   

        // COMO YO TE QUISE
        $contenido_track9_sim = $mysqli->query("SELECT * FROM canciones where id_disco = 3 and c_track = 9");
        while($row_sim9 = $contenido_track9_sim -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sim9 = $row_sim9['c_track'];
            $letra_sim_9 = $row_sim9['c_letra'];
            $c_nombre_sim9 = $row_sim9['c_nombre'];
            $c_duracion_sim9 = $row_sim9['c_duracion'];
            $c_colaborador_sim9 = $row_sim9['c_colaborador'];
            //$c_video_sim9 = $row_sim9['c_video'];
        }   

        // MIS ESPERANZAS
        $contenido_track10_sim = $mysqli->query("SELECT * FROM canciones where id_disco = 3 and c_track = 10");
        while($row_sim10 = $contenido_track10_sim -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sim10 = $row_sim10['c_track'];
            $letra_sim_10 = $row_sim10['c_letra'];
            $c_nombre_sim10 = $row_sim10['c_nombre'];
            $c_duracion_sim10 = $row_sim10['c_duracion'];
            $c_colaborador_sim10 = $row_sim10['c_colaborador'];
            //$c_video_sim10 = $row_sim10['c_video'];
        }     

        $contenido_track1_sim_clip = $mysqli->query("SELECT * FROM videoclips where id_disco = 3 ");
        while($row_sim_clip1 = $contenido_track1_sim_clip -> fetch_array(MYSQLI_ASSOC))
        {            
            $clip_nombre = $row_sim_clip1['clip_nombre'];
            //$url_sim_clip_1 = $row_sim_clip1['clip_url'];
            
        }                                                                                


        $d_simplemente .='
                        <div id="cd_sim" class="collapse hidden"> <!--  Comienza disco SIMPLEMENTE -->
                        <!-- Abre id#cd_sim -->
                        <h2>Album '.$nombredisco.'</h2>

                        <!-- COMIENZA PESTAnAS -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home_sim">Inicio</a></li>
                          <li><a data-toggle="tab" href="#cd3">CD</a></li>
                          <li><a data-toggle="tab" href="#clipcd3" id="clip_cd3">CLIP</a></li>
                        </ul>

                        <div class="tab-content">
                        <!-- COMIENZA TAB HOME -->    
                          <div id="home_sim" class="tab-pane fade in active">
                            <h3>Agradecimientos</h3>
                            <p>
                            <small><h5>
                            '.$agradecimientos.'
                            <strong>Daniel Agostini</strong>
                            </small></h5>
                            </p>
                          </div>
                          <!-- TERMINA TAB HOME -->    

                          <form id="cd_simplemente_clip_1">
                                <input id="id_disco" name="clip_disco" value="3" class="hidden">
                                <input id="id_video" name="clip" value="clip" class="hidden"> 
                          </form>

                          <!-- VIDEO CLIPS -->
                        <div id="clipcd3" class="tab-pane fade">

                        <h3>'.$clip_nombre.'</h3>
                        <div id="ca" class="img-thumbnail"></div>
                        <p id="cd3_clip"></p>
                        </div>



                          <!-- COMIENZA TAB CD -->    
                          <div id="cd3" class="tab-pane fade">
                            
                            <h3>Lista de canciones</h3>
                          
        
                              <h4>Daniel Agostini</h4>
                              <p><small>Este disco nos trae 10 temas.<br>
                                       <strong> Daniel </strong> implementa ritmos nuevos pero manteniendo el estilo que lo caracteriza
                                        compone este disco con (9 Cumbias) y una balada (Nº10).
                               </small></p><br>

                                <!-- **************************************** -->    
                                <!-- COMIENZA ESCUCHAR CD COMPLETO "SIMPLEMENTE" -->
                                <a href="#solo" id="cd_simplemente_full" valor="3" data-toggle="collapse" data-target="#cdcompleto3" class="btn btn-info btn-xs">Escuchar CD Completo</a>

                                <div id="cdcompleto3" class="col-xs-12 collapse ">
                                    <h4>Disco Completo</h4>

                                    <p id="full_cd_simplemente" > </p>

                                </div>
                                <!-- TERMINA ESCUCHAR CD COMPLETO "SIMPLEMENTE" -->
                                <!-- **************************************** --> 


                              <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Nombre de la cancion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                <!-- TEMA 1 SIMPLEMENTE -->
                                <tr>
                                   <td>'.$cd_track_sim1.'</td>
                                   <td>'.$c_nombre_sim1.'
                                   <a href="#sim" id="tema_simplemente_1" data-toggle="collapse" data-target="#amarev" class="btn btn-info btn-xs">Escuchar</a>
                                    | <a href="#ver_cdsolo" id="dc_sim" data-toggle="collapse" data-target="#amarel" class="btn btn-info btn-xs">Letra</a></p>

<form id="cd_simplemente_track_1">
    <input id="id_disco" name="disco" value="3" class="hidden">
    <input id="id_video" name="video" value="1" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="amarev" class="col-xs-12 collapse">                                  

                                    </div>
                                    <!-- VIDEO -->

                                    <!-- LETRA  -->
                                    <div id="amarel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_sim1.' <small>Duracion: <b>'.$c_duracion_sim1.'
                                                </b></small></h3><small>'.$c_colaborador_sim1.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_sim_1.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA  -->

                                   </td>
                                </tr> 
                                <!-- TEMA 1 SIEMPRE TE AMARE -->  

                                <!-- TEMA 2 NADIE -->
                                <tr>
                                   <td>'.$cd_track_sim2.'</td>
                                   <td>'.$c_nombre_sim2.'
                                        <a href="#ver_cdsolo" id="tema_simplemente_2" data-toggle="collapse" data-target="#destarasv" class="btn btn-info btn-xs">Escuchar</a> | 
                                        <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#destarasl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_simplemente_track_2">
    <input id="id_disco" name="disco" value="3" class="hidden">
    <input id="id_video" name="video" value="2" class="hidden">
</form>

                                    <!-- VIDEO DIME --><br>
                                    <div id="destarasv" class="col-xs-12 collapse">                                  

                                    </div>
                                    <!-- VIDEO DIME -->


                                    <!-- LETRA  -->
                                    <div id="destarasl" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                 <th><h3>'.$c_nombre_sim2.' <small>Duracion: <b>'.$c_duracion_sim2.'
                                                </b></small></h3><small>'.$c_colaborador_sim2.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                    <br>
                                    <p>
                                    '.$letra_sim_2.'
                                    </p>
                                    
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                    <!-- LETRA -->

                                    </td>
                                </tr>    
                                <!-- TEMA 2 DONDE ESTARAS-->      

                                <!-- TEMA 3 LLORO POR TI -->
                                <tr>
                                   <td>'.$cd_track_sim3.'</td>
                                   <td>'.$c_nombre_sim3.'
                                   <a href="#ver_cdsolo" id="tema_simplemente_3" data-toggle="collapse" data-target="#llportiv" class="btn btn-info btn-xs">Escuchar</a> | 
                                   <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#llportil" class="btn btn-info btn-xs">Letra</a>

<form id="cd_simplemente_track_3">
    <input id="id_disco" name="disco" value="3" class="hidden">
    <input id="id_video" name="video" value="3" class="hidden">
</form>
                                    <br>
                                   <div id="llportiv" class="col-xs-12 collapse">                                  

                                    </div>
                                    
                                    <div id="llportil" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_sim3.' <small>Duracion: <b>'.$c_duracion_sim3.'
                                                </b></small></h3><small>'.$c_colaborador_sim3.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                     
                                        <p>
                                        '.$letra_sim_3.'
                                        </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                   </td> 
                                </tr> 
                                <!-- TEMA 3 LLORO POR TI -->  
                              
                                <!-- TEMA 4 TE VOY A EXTRAnAR --> 
                                <tr>
                                   <td>'.$cd_track_sim4.'</td>
                                   <td>'.$c_nombre_sim4.'
                                    <a href="#ver_cdsolo" id="tema_simplemente_4" data-toggle="collapse" data-target="#textrav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#textral" class="btn btn-info btn-xs">Letra</a>

<form id="cd_simplemente_track_4">
    <input id="id_disco" name="disco" value="3" class="hidden">
    <input id="id_video" name="video" value="4" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="textrav" class="col-xs-12 collapse">                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="textral" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_sim4.' <small>Duracion: <b>'.$c_duracion_sim4.'
                                                </b></small></h3><small>'.$c_colaborador_sim4.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_sim_4.'
                                                </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>    

                                    </td>
                                </tr> 
                                <!-- TEMA 4 TE VOY A EXTRAnAR --> 

                                <!-- TEMA 5 EN TI CONFIE--> 
                                <tr>
                                   <td>'.$cd_track_sim5.'</td>
                                   <td>'.$c_nombre_sim5.'

                                    <a href="#ver_cdsolo" id="tema_simplemente_5" data-toggle="collapse" data-target="#confiev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#confiel" class="btn btn-info btn-xs">Letra</a>
<form id="cd_simplemente_track_5">
    <input id="id_disco" name="disco" value="3" class="hidden">
    <input id="id_video" name="video" value="5" class="hidden">
</form>                               

                                    <!-- VIDEO --><br>
                                    <div id="confiev" class="col-xs-12 collapse">                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="confiel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_sim5.' <small>Duracion: <b>'.$c_duracion_sim5.'
                                                </b></small></h3><small>'.$c_colaborador_sim5.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_sim_5.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>                                                                    
                                <!-- TEMA 5 EN TI CONFIE --> 

                                <!-- TEMA 6 AMIGA --> 
                                <tr>
                                   <td>'.$cd_track_sim6.'</td>
                                   <td>'.$c_nombre_sim6.'
                                    <a href="#ver_cdsolo" id="tema_simplemente_6" data-toggle="collapse" data-target="#amigav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#amigal" class="btn btn-info btn-xs">Letra</a>
<form id="cd_simplemente_track_6">
    <input id="id_disco" name="disco" value="3" class="hidden">
    <input id="id_video" name="video" value="6" class="hidden">
</form>   


                                    <!-- VIDEO --><br>
                                    <div id="amigav" class="col-xs-12 collapse">                                  
                                    </div>

                                    <!-- LETRA  -->
                                    <div id="amigal" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_sim6.' <small>Duracion: <b>'.$c_duracion_sim6.'
                                                </b></small></h3><small>'.$c_colaborador_sim6.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                            '.$letra_sim_6.'
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 6 AMIGA--> 

                                <!-- TEMA 7 NADIE --> 
                                <tr>
                                   <td>'.$cd_track_sim7.'</td>
                                   <td>'.$c_nombre_sim7.'

                                    <a href="#ver_cdsolo" id="tema_simplemente_7" data-toggle="collapse" data-target="#nadiev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#nadiel" class="btn btn-info btn-xs">Letra</a>

<form id="cd_simplemente_track_7">
    <input id="id_disco" name="disco" value="3" class="hidden">
    <input id="id_video" name="video" value="7" class="hidden">
</form>   

                                    <!-- VIDEO --><br>
                                    <div id="nadiev" class="col-xs-12 collapse">                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="nadiel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_sim7.' <small>Duracion: <b>'.$c_duracion_sim7.'
                                                </b></small></h3><small>'.$c_colaborador_sim7.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                    '.$letra_sim_7.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>
                                <!-- TEMA 7 NADIE -->

                                <!-- TEMA 8 QUIERO ESTAR CONTIGO -->
                                <tr>
                                   <td>'.$cd_track_sim8.'</td>
                                   <td>'.$c_nombre_sim8.'
                                    
                                    <a href="#ver_cdsolo" id="tema_simplemente_8" data-toggle="collapse" data-target="#contigov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#contigol" class="btn btn-info btn-xs">Letra</a>
<form id="cd_simplemente_track_8">
    <input id="id_disco" name="disco" value="3" class="hidden">
    <input id="id_video" name="video" value="8" class="hidden">
</form>   

                                    <!-- VIDEO --><br>
                                    <div id="contigov" class="col-xs-12 collapse">                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="contigol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_sim8.' <small>Duracion: <b>'.$c_duracion_sim8.'
                                                </b></small></h3><small>'.$c_colaborador_sim8.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_sim_8.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr> 
                                <!-- TEMA 8 QUIERO ESTAR CONTIGO -->

                                <!-- TEMA 9 COMO YO TE QUISE -->
                                <tr>
                                   <td>'.$cd_track_sim9.'</td>
                                   <td>'.$c_nombre_sim9.'
                                    
                                    <a href="#ver_cdsolo" id="tema_simplemente_9" data-toggle="collapse" data-target="#quisev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#quisel" class="btn btn-info btn-xs">Letra</a>
<form id="cd_simplemente_track_9">
    <input id="id_disco" name="disco" value="3" class="hidden">
    <input id="id_video" name="video" value="9" class="hidden">
</form>   

                                    <!-- VIDEO --><br>
                                    <div id="quisev" class="col-xs-12 collapse">                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="quisel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_sim9.' <small>Duracion: <b>'.$c_duracion_sim9.'
                                                </b></small></h3><small>'.$c_colaborador_sim9.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_sim_9.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 9 COMO YO TE QUISE -->

                                <!-- TEMA 10 MIS ESPERANZAS -->
                                <tr>
                                   <td>'.$cd_track_sim10.'</td>
                                   <td>'.$c_nombre_sim10.'

                                    <a href="#ver_cdsolo" id="tema_simplemente_10" data-toggle="collapse" data-target="#espev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#espel" class="btn btn-info btn-xs">Letra</a>
<form id="cd_simplemente_track_10">
    <input id="id_disco" name="disco" value="3" class="hidden">
    <input id="id_video" name="video" value="10" class="hidden">
</form>   

                                    <!-- VIDEO --><br>
                                    <div id="espev" class="col-xs-12 collapse">                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="espel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                               <th><h3>'.$c_nombre_sim10.' <small>Duracion: <b>'.$c_duracion_sim10.'
                                                </b></small></h3><small>'.$c_colaborador_sim10.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_sim_10.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 10 MIS ESPERANZAS --> 

                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>

                                <!--
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                              -->
                                </tbody>
                              </table>
                            </div> <!-- Cierra CD -->                           


                           
                          </div>
                          <!-- TERMINA TAB HOME -->    



                          <!--
                          <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                          </div>
                          -->

                        </div>
                        <!-- TERMINA PESTAnAS -->


                        <!-- Cierra id#cd_solo -->    
                        </div>                   

              ';
              }
    return $d_simplemente;          
    }    

    function amarte(){
        $d_amarte= "";

                $mysqli = conexionBD(); // Conexion a la Base Hackaton

         $disco_amarte = $mysqli->query("SELECT * FROM discos  WHERE id_disco = 4 ");   
         while($res = $disco_amarte -> fetch_array(MYSQLI_ASSOC))
            {
                $agradecimientos = $res['cd_gracias'];
                $nombredisco  = $res['cd_nombre'];


        // A PURO DOLOR
        $contenido_track1_amarte = $mysqli->query("SELECT * FROM canciones where id_disco = 4 and c_track = 1");
        while($row_amarte1 = $contenido_track1_amarte -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_amarte1 = $row_amarte1['c_track'];
            $letra_amarte_1 = $row_amarte1['c_letra'];
            $c_nombre_amarte1 = $row_amarte1['c_nombre'];
            $c_duracion_amarte1 = $row_amarte1['c_duracion'];
            $c_colaborador_amarte1 = $row_amarte1['c_colaborador'];
            //$c_video_amarte1 = $row_amarte1['c_video'];
        }   

        // HIJO
        $contenido_track2_amarte = $mysqli->query("SELECT * FROM canciones where id_disco = 4 and c_track = 2");
        while($row_amarte2 = $contenido_track2_amarte -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_amarte2 = $row_amarte2['c_track'];
            $letra_amarte_2 = $row_amarte2['c_letra'];
            $c_nombre_amarte2 = $row_amarte2['c_nombre'];
            $c_duracion_amarte2 = $row_amarte2['c_duracion'];
            $c_colaborador_amarte2 = $row_amarte2['c_colaborador'];
            //$c_video_amarte2 = $row_amarte2['c_video'];
        }

        // COMO TU QUIERAS
        $contenido_track3_amarte = $mysqli->query("SELECT * FROM canciones where id_disco = 4 and c_track = 3");
        while($row_amarte3 = $contenido_track3_amarte -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_amarte3 = $row_amarte3['c_track'];
            $letra_amarte_3 = $row_amarte3['c_letra'];
            $c_nombre_amarte3 = $row_amarte3['c_nombre'];
            $c_duracion_amarte3 = $row_amarte3['c_duracion'];
            $c_colaborador_amarte3 = $row_amarte3['c_colaborador'];
            //$c_video_amarte3 = $row_amarte3['c_video'];
        }

        // AnORANZAS / TODAS LAS NOCHES
        $contenido_track4_amarte = $mysqli->query("SELECT * FROM canciones where id_disco = 4 and c_track = 4");
        while($row_amarte4 = $contenido_track4_amarte -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_amarte4 = $row_amarte4['c_track'];
            $letra_amarte_4 = $row_amarte4['c_letra'];
            $c_nombre_amarte4 = $row_amarte4['c_nombre'];
            $c_duracion_amarte4 = $row_amarte4['c_duracion'];
            $c_colaborador_amarte4 = $row_amarte4['c_colaborador'];
            //$c_video_amarte4 = $row_amarte4['c_video'];
        }                        

        // LLEGASTE TU
        $contenido_track5_amarte = $mysqli->query("SELECT * FROM canciones where id_disco = 4 and c_track = 5");
        while($row_amarte5 = $contenido_track5_amarte -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_amarte5 = $row_amarte5['c_track'];
            $letra_amarte_5 = $row_amarte5['c_letra'];
            $c_nombre_amarte5 = $row_amarte5['c_nombre'];
            $c_duracion_amarte5 = $row_amarte5['c_duracion'];
            $c_colaborador_amarte5 = $row_amarte5['c_colaborador'];
            //$c_video_amarte5 = $row_amarte5['c_video'];
        }

        // TE VOY A AMAR
        $contenido_track6_amarte = $mysqli->query("SELECT * FROM canciones where id_disco = 4 and c_track = 6");
        while($row_amarte6 = $contenido_track6_amarte -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_amarte6 = $row_amarte6['c_track'];
            $letra_amarte_6 = $row_amarte6['c_letra'];
            $c_nombre_amarte6 = $row_amarte6['c_nombre'];
            $c_duracion_amarte6 = $row_amarte6['c_duracion'];
            $c_colaborador_amarte6 = $row_amarte6['c_colaborador'];
            //$c_video_amarte6 = $row_amarte6['c_video'];
        }                

        // YA VERAS
        $contenido_track7_amarte = $mysqli->query("SELECT * FROM canciones where id_disco = 4 and c_track = 7");
        while($row_amarte7 = $contenido_track7_amarte -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_amarte7 = $row_amarte7['c_track'];
            $letra_amarte_7 = $row_amarte7['c_letra'];
            $c_nombre_amarte7 = $row_amarte7['c_nombre'];
            $c_duracion_amarte7 = $row_amarte7['c_duracion'];
            $c_colaborador_amarte7 = $row_amarte7['c_colaborador'];
            //$c_video_amarte7 = $row_amarte7['c_video'];
        }

        // LLORO POR TU AMOR
        $contenido_track8_amarte = $mysqli->query("SELECT * FROM canciones where id_disco = 4 and c_track = 8");
        while($row_amarte8 = $contenido_track8_amarte -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_amarte8 = $row_amarte8['c_track'];
            $letra_amarte_8 = $row_amarte8['c_letra'];
            $c_nombre_amarte8 = $row_amarte8['c_nombre'];
            $c_duracion_amarte8 = $row_amarte8['c_duracion'];
            $c_colaborador_amarte8 = $row_amarte8['c_colaborador'];
            //$c_video_amarte8 = $row_amarte8['c_video'];
        }        

        // NUESTRO DESTINO
        $contenido_track9_amarte = $mysqli->query("SELECT * FROM canciones where id_disco = 4 and c_track = 9");
        while($row_amarte9 = $contenido_track9_amarte -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_amarte9 = $row_amarte9['c_track'];
            $letra_amarte_9 = $row_amarte9['c_letra'];
            $c_nombre_amarte9 = $row_amarte9['c_nombre'];
            $c_duracion_amarte9 = $row_amarte9['c_duracion'];
            $c_colaborador_amarte9 = $row_amarte9['c_colaborador'];
            //$c_video_amarte9 = $row_amarte9['c_video'];
        }

        // TE AMARE
        $contenido_track10_amarte = $mysqli->query("SELECT * FROM canciones where id_disco = 4 and c_track = 10");
        while($row_amarte10 = $contenido_track10_amarte -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_amarte10 = $row_amarte10['c_track'];
            $letra_amarte_10 = $row_amarte10['c_letra'];
            $c_nombre_amarte10 = $row_amarte10['c_nombre'];
            $c_duracion_amarte10 = $row_amarte10['c_duracion'];
            $c_colaborador_amarte10 = $row_amarte10['c_colaborador'];
            //$c_video_amarte10 = $row_amarte10['c_video'];
        }                

        // TE DOY MI AMOR
        $contenido_track11_amarte = $mysqli->query("SELECT * FROM canciones where id_disco = 4 and c_track = 11");
        while($row_amarte11 = $contenido_track11_amarte -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_amarte11 = $row_amarte11['c_track'];
            $letra_amarte_11 = $row_amarte11['c_letra'];
            $c_nombre_amarte11 = $row_amarte11['c_nombre'];
            $c_duracion_amarte11 = $row_amarte11['c_duracion'];
            $c_colaborador_amarte11 = $row_amarte11['c_colaborador'];
            //$c_video_amarte11 = $row_amarte11['c_video'];
        }

        // COMO HACER
        $contenido_track12_amarte = $mysqli->query("SELECT * FROM canciones where id_disco = 4 and c_track = 12");
        while($row_amarte12 = $contenido_track12_amarte -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_amarte12 = $row_amarte12['c_track'];
            $letra_amarte_12 = $row_amarte12['c_letra'];
            $c_nombre_amarte12 = $row_amarte12['c_nombre'];
            $c_duracion_amarte12 = $row_amarte12['c_duracion'];
            $c_colaborador_amarte12 = $row_amarte12['c_colaborador'];
            //$c_video_amarte12 = $row_amarte12['c_video'];
        }                

        // CUANDO ESTE CON EL
        $contenido_track13_amarte = $mysqli->query("SELECT * FROM canciones where id_disco = 4 and c_track = 13");
        while($row_amarte13 = $contenido_track13_amarte -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_amarte13 = $row_amarte13['c_track'];
            $letra_amarte_13 = $row_amarte13['c_letra'];
            $c_nombre_amarte13 = $row_amarte13['c_nombre'];
            $c_duracion_amarte13 = $row_amarte13['c_duracion'];
            $c_colaborador_amarte13 = $row_amarte13['c_colaborador'];
            //$c_video_amarte13 = $row_amarte13['c_video'];
        }

        // COMO TU
        $contenido_track14_amarte = $mysqli->query("SELECT * FROM canciones where id_disco = 4 and c_track = 14");
        while($row_amarte14 = $contenido_track14_amarte -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_amarte14 = $row_amarte14['c_track'];
            $letra_amarte_14 = $row_amarte14['c_letra'];
            $c_nombre_amarte14 = $row_amarte14['c_nombre'];
            $c_duracion_amarte14 = $row_amarte14['c_duracion'];
            $c_colaborador_amarte14 = $row_amarte14['c_colaborador'];
            //$c_video_amarte14 = $row_amarte14['c_video'];
        }                

        $d_amarte .='
                        <div id="cd_amarte" class="collapse hidden"> <!--  Comienza disco AMARTE -->
                        <!-- Abre id#cd_sim -->
                        <h2>Album '.$nombredisco.'</h2>

                        <!-- COMIENZA PESTAnAS -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home_amarte">Inicio</a></li>
                          <li><a data-toggle="tab" href="#cd4">CD</a></li>
                          <li><a data-toggle="tab" href="#clipcd4" id="clip_cd4">CLIP</a></li>
                        </ul>

                        <div class="tab-content">
                        <!-- COMIENZA TAB HOME -->    
                          <div id="home_amarte" class="tab-pane fade in active">
                            <h3>Agradecimientos</h3>
                            <p><small><h5>
                            '.$agradecimientos.'
                            <strong> Daniel Agostini </strong>
                            </h5></small></p>
                          </div>
                          <!-- TERMINA TAB HOME -->    




                          <form id="cd_amarte_clip_1">
                                <input id="id_disco" name="clip_disco" value="4" class="hidden">
                                <input id="id_video" name="clip" value="clip" class="hidden"> 
                          </form><br>

                          <!-- VIDEO CLIPS -->
                        <div id="clipcd4" class="tab-pane fade">

                        
                        <div id="cacd4" class="img-thumbnail"></div>
                        </div> 





                          <!-- COMIENZA TAB CD -->    
                          <div id="cd4" class="tab-pane fade">
                            
                            <h3>Lista de canciones</h3>
                          
        
                              <h4>Daniel Agostini</h4>
                              <p><small>En esta ocasion tenemos un disco con 14 temas, es el primer disco en incluir 14 canciones.<br>
                                       <strong> Disco Amarte </strong> Trae 2 Covers (Nº1 A puro dolor) y (Nº4 Anoranzas/Todas las noches.
                               </small></p><br>

                                <!-- **************************************** -->    
                                <!-- COMIENZA ESCUCHAR CD COMPLETO "AMARTE" -->
                                <a href="#solo" id="cd_amarte_full" valor="4" data-toggle="collapse" data-target="#cdcompleto4" class="btn btn-info btn-xs">Escuchar CD Completo</a>

                                <div id="cdcompleto4" class="col-xs-12 collapse ">
                                    <h4>Disco Completo</h4>

                                    <p id="full_cd_amarte" > </p>

                                </div>
                                <!-- TERMINA ESCUCHAR CD COMPLETO "AMARTE" -->
                                <!-- **************************************** --> 


                              <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Nombre de la cancion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                <!-- TEMA 1 A PURO DOLOR -->
                                <tr>
                                    <td>'.$cd_track_amarte1.'</td>
                                    <td>'.$c_nombre_amarte1.'
                                   <a href="#sim" id="tema_amarte_1" data-toggle="collapse" data-target="#dolorv" class="btn btn-info btn-xs">Escuchar</a>
                                    | <a href="#ver_cdsolo" id="dc_sim" data-toggle="collapse" data-target="#dolorl" class="btn btn-info btn-xs">Letra</a></p>

<form id="cd_amarte_track_1">
    <input id="id_disco" name="disco" value="4" class="hidden">
    <input id="id_video" name="video" value="1" class="hidden">
</form>   


                                    <!-- VIDEO --><br>
                                    <div id="dolorv" class="col-xs-12 collapse">                                  

                                    </div>
                                    <!-- VIDEO -->

                                    <!-- LETRA  -->
                                    <div id="dolorl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_amarte1.' <small>Duracion: <b>'.$c_duracion_amarte1.'
                                                </b></small></h3><small>'.$c_colaborador_amarte1.'</small></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                        '.$letra_amarte_1.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA  -->

                                   </td>
                                </tr> 
                                <!-- TEMA 1 A PURO DOLOR -->  

                                <!-- TEMA 2 HIJO -->
                                <tr>
                                    <td>'.$cd_track_amarte2.'</td>
                                    <td>'.$c_nombre_amarte2.'
                                        <a href="#ver_cdsolo" id="tema_amarte_2" data-toggle="collapse" data-target="#hijov" class="btn btn-info btn-xs">Escuchar</a> | 
                                        <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#hijol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_amarte_track_2">
    <input id="id_disco" name="disco" value="4" class="hidden">
    <input id="id_video" name="video" value="2" class="hidden">
</form>   

                                    <!-- VIDEO HIJO --><br>
                                    <div id="hijov" class="col-xs-12 collapse">                                  

                                    </div>
                                    <!-- VIDEO HIJO -->


                                    <!-- LETRA  -->
                                    <div id="hijol" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_amarte2.' <small>Duracion: <b>'.$c_duracion_amarte2.'
                                                </b></small></h3><small>'.$c_colaborador_amarte2.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                    <br>
                                    <p>
                                    '.$letra_amarte_2.'
                                    </p>
                                    
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                    <!-- LETRA -->

                                    </td>
                                </tr>    
                                <!-- TEMA 2 HIJO-->      

                                <!-- TEMA 3 COMO TU QUIERAS -->
                                <tr>
                                    <td>'.$cd_track_amarte3.'</td>
                                    <td>'.$c_nombre_amarte3.'
                                   <a href="#ver_cdsolo" id="tema_amarte_3" data-toggle="collapse" data-target="#tuquierav" class="btn btn-info btn-xs">Escuchar</a> | 
                                   <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#tuquierasl" class="btn btn-info btn-xs">Letra</a>


<form id="cd_amarte_track_3">
    <input id="id_disco" name="disco" value="4" class="hidden">
    <input id="id_video" name="video" value="3" class="hidden">
</form>
                                    <br>
                                    <div id="tuquierav" class="col-xs-12 collapse">                                  

                                    </div> 
                                    
                                    <div id="tuquierasl" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_amarte3.' <small>Duracion: <b>'.$c_duracion_amarte3.'
                                                </b></small></h3><small>'.$c_colaborador_amarte3.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                     
                                        <p>
                                        '.$letra_amarte_3.'
                                        </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                   </td> 
                                </tr> 
                                <!-- TEMA 3 COMO TU QUIERAS -->  
                              
                                <!-- TEMA 4 AnORANZAS/TODAS LAS NOCHES --> 
                                <tr>
                                    <td>'.$cd_track_amarte4.'</td>
                                    <td>'.$c_nombre_amarte4.'
                                    <a href="#ver_cdsolo" id="tema_amarte_4" data-toggle="collapse" data-target="#tnochesv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#tnochesl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_amarte_track_4">
    <input id="id_disco" name="disco" value="4" class="hidden">
    <input id="id_video" name="video" value="4" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="tnochesv" class="col-xs-12 collapse">                                  

                                    </div>


                                    <!-- LETRA  -->
                                    <div id="tnochesl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_amarte4.' <small>Duracion: <b>'.$c_duracion_amarte4.'
                                                </b></small></h3><small>'.$c_colaborador_amarte4.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>

                                                <h4>Anoranzas</h4><br>
                                                <p>
                                                '.$letra_amarte_4.'
                                                </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>    

                                    </td>
                                </tr> 
                                <!-- TEMA 4 TE VOY A EXTRAnAR --> 

                                <!-- TEMA 5 LLEGASTE TU--> 
                                <tr>
                                    <td>'.$cd_track_amarte5.'</td>
                                    <td>'.$c_nombre_amarte5.'

                                    <a href="#ver_cdsolo" id="tema_amarte_5" data-toggle="collapse" data-target="#lltuv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#lltul" class="btn btn-info btn-xs">Letra</a>
                                    
<form id="cd_amarte_track_5">
    <input id="id_disco" name="disco" value="4" class="hidden">
    <input id="id_video" name="video" value="5" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="lltuv" class="col-xs-12 collapse">                                  

                                    </div>


                                    <!-- LETRA  -->
                                    <div id="lltul" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_amarte5.' <small>Duracion: <b>'.$c_duracion_amarte5.'
                                                </b></small></h3><small>'.$c_colaborador_amarte5.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_amarte_5.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>                                                                    
                                <!-- TEMA 5 LLEGASTE TU --> 

                                <!-- TEMA 6 TE VOY A AMAR --> 
                                <tr>
                                    <td>'.$cd_track_amarte6.'</td>
                                    <td>'.$c_nombre_amarte6.'
                                    <a href="#ver_cdsolo" id="tema_amarte_6" data-toggle="collapse" data-target="#tvamoarv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#tvamoarl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_amarte_track_6">
    <input id="id_disco" name="disco" value="4" class="hidden">
    <input id="id_video" name="video" value="6" class="hidden">
</form>



                                    <!-- VIDEO --><br>
                                    <div id="tvamoarv" class="col-xs-12 collapse">                                  

                                    </div>

                                    <!-- LETRA  -->
                                    <div id="tvamoarl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_amarte6.' <small>Duracion: <b>'.$c_duracion_amarte6.'
                                                </b></small></h3><small>'.$c_colaborador_amarte6.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_amarte_6.'
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 6 TE VOY A AMAR --> 

                                <!-- TEMA 7 YA VERAS --> 
                                <tr>
                                    <td>'.$cd_track_amarte7.'</td>
                                    <td>'.$c_nombre_amarte7.'

                                    <a href="#ver_cdsolo" id="tema_amarte_7" data-toggle="collapse" data-target="#yaverasv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#yaverasl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_amarte_track_7">
    <input id="id_disco" name="disco" value="4" class="hidden">
    <input id="id_video" name="video" value="7" class="hidden">
</form>


                                    <!-- VIDEO --><br>
                                    <div id="yaverasv" class="col-xs-12 collapse">                                  

                                    </div>


                                    <!-- LETRA  -->
                                    <div id="yaverasl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_amarte7.' <small>Duracion: <b>'.$c_duracion_amarte7.'
                                                </b></small></h3><small>'.$c_colaborador_amarte7.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_amarte_7.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>
                                <!-- TEMA 7 YA VERAS -->

                                <!-- TEMA 8 LLORO POR TU AMOR -->
                                <tr>
                                    <td>'.$cd_track_amarte8.'</td>
                                    <td>'.$c_nombre_amarte8.'
                                    
                                    <a href="#ver_cdsolo" id="tema_amarte_8" data-toggle="collapse" data-target="#portuamorv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#portuamorl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_amarte_track_8">
    <input id="id_disco" name="disco" value="4" class="hidden">
    <input id="id_video" name="video" value="8" class="hidden">
</form>

                                    <!-- VIDEO --><br>

                                    <div id="portuamorv" class="col-xs-12 collapse">                                  

                                    </div>                                    


                                    <!-- LETRA  -->
                                    <div idportuamorl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_amarte8.' <small>Duracion: <b>'.$c_duracion_amarte8.'
                                                </b></small></h3><small>'.$c_colaborador_amarte8.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_amarte_8.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr> 
                                <!-- TEMA 8 LLORO POR TU AMOR -->

                                <!-- TEMA 9 NUESTRO DESTINO -->
                                <tr>
                                    <td>'.$cd_track_amarte9.'</td>
                                    <td>'.$c_nombre_amarte9.'
                                    
                                    <a href="#ver_cdsolo" id="tema_amarte_9" data-toggle="collapse" data-target="#destinov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#destinol" class="btn btn-info btn-xs">Letra</a>
<form id="cd_amarte_track_9">
    <input id="id_disco" name="disco" value="4" class="hidden">
    <input id="id_video" name="video" value="9" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="destinov" class="col-xs-12 collapse">                                  
                                       
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="destinol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_amarte9.' <small>Duracion: <b>'.$c_duracion_amarte9.'
                                                </b></small></h3><small>'.$c_colaborador_amarte9.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_amarte_9.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 9 NUESTRO DESTINO -->

                                <!-- TEMA 10 TE AMARE-->
                                <tr>
                                    <td>'.$cd_track_amarte10.'</td>
                                    <td>'.$c_nombre_amarte10.'

                                    <a href="#ver_cdsolo" id="tema_amarte_10" data-toggle="collapse" data-target="#tamarev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#tamarel" class="btn btn-info btn-xs">Letra</a>

<form id="cd_amarte_track_10">
    <input id="id_disco" name="disco" value="4" class="hidden">
    <input id="id_video" name="video" value="10" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="tamarev" class="col-xs-12 collapse">                                  

                                    </div>


                                    <!-- LETRA  -->
                                    <div id="tamarel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                               <th><h3>'.$c_nombre_amarte10.' <small>Duracion: <b>'.$c_duracion_amarte10.'
                                                </b></small></h3><small>'.$c_colaborador_amarte10.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_amarte_10.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 10 TE AMARE --> 

                                <!-- TEMA 11 TE DOY AMOR-->
                                <tr>
                                    <td>'.$cd_track_amarte11.'</td>
                                    <td>'.$c_nombre_amarte11.'

                                    <a href="#ver_cdsolo" id="tema_amarte_11" data-toggle="collapse" data-target="#doyamorv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#doyamorl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_amarte_track_11">
    <input id="id_disco" name="disco" value="4" class="hidden">
    <input id="id_video" name="video" value="11" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="doyamorv" class="col-xs-12 collapse">                                  

                                    </div>


                                    <!-- LETRA  -->
                                    <div id="doyamorl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_amarte11.' <small>Duracion: <b>'.$c_duracion_amarte11.'
                                                </b></small></h3><small>'.$c_colaborador_amarte11.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_amarte_11.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 11 TE DOY AMOR -->     

                                <!-- TEMA 12 COMO HACER-->
                                <tr>
                                    <td>'.$cd_track_amarte12.'</td>
                                    <td>'.$c_nombre_amarte12.'

                                    <a href="#ver_cdsolo" id="tema_amarte_12" data-toggle="collapse" data-target="#comohacerv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#comohacerl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_amarte_track_12">
    <input id="id_disco" name="disco" value="4" class="hidden">
    <input id="id_video" name="video" value="12" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="comohacerv" class="col-xs-12 collapse">                                  

                                    </div>


                                    <!-- LETRA  -->
                                    <div id="comohacerl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                           <th><h3>'.$c_nombre_amarte12.' <small>Duracion: <b>'.$c_duracion_amarte12.'
                                                </b></small></h3><small>'.$c_colaborador_amarte12.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_amarte_12.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 12 COMO HACER -->    

                                <!-- TEMA 13 CUANDO ESTES CON EL-->
                                <tr>
                                    <td>'.$cd_track_amarte13.'</td>
                                    <td>'.$c_nombre_amarte13.'

                                    <a href="#ver_cdsolo" id="tema_amarte_13" data-toggle="collapse" data-target="#celv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#cell" class="btn btn-info btn-xs">Letra</a>
<form id="cd_amarte_track_13">
    <input id="id_disco" name="disco" value="4" class="hidden">
    <input id="id_video" name="video" value="13" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="celv" class="col-xs-12 collapse">                                  

                                    </div>


                                    <!-- LETRA  -->
                                    <div id="cell" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_amarte13.' <small>Duracion: <b>'.$c_duracion_amarte13.'
                                                </b></small></h3><small>'.$c_colaborador_amarte13.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_amarte_13.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 13 CUANDO ESTES CON EL -->       

                                <!-- TEMA 14 COMO TU-->
                                <tr>
                                    <td>'.$cd_track_amarte14.'</td>
                                    <td>'.$c_nombre_amarte14.'

                                    <a href="#ver_cdsolo" id="tema_amarte_14" data-toggle="collapse" data-target="#comotuv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#comotul" class="btn btn-info btn-xs">Letra</a>
<form id="cd_amarte_track_14">
    <input id="id_disco" name="disco" value="4" class="hidden">
    <input id="id_video" name="video" value="14" class="hidden">
</form>


                                    <!-- VIDEO --><br>
                                    <div id="comotuv" class="col-xs-12 collapse">                                  

                                    </div>


                                    <!-- LETRA  -->
                                    <div id="comotul" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_amarte14.' <small>Duracion: <b>'.$c_duracion_amarte14.'
                                                </b></small></h3><small>'.$c_colaborador_amarte14.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_amarte_14.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 14 COMO TU -->                                                                                                                         

                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>

                                <!--
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                              -->
                                </tbody>
                              </table>
                            </div> <!-- Cierra CD -->                           


                           
                          </div>
                          <!-- TERMINA TAB HOME -->    



                          <!--
                          <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                          </div>
                          -->

                        </div>
                        <!-- TERMINA PESTAnAS -->


                        <!-- Cierra id#cd_solo -->    
                        </div>                   

              ';
          }
    return $d_amarte;          
    }   

    function siempre(){
        $d_siempre= "";

          $mysqli = conexionBD(); // Conexion a la Base Hackaton

         $disco_siempre = $mysqli->query("SELECT * FROM discos  WHERE id_disco = 5 ");   
         while($res = $disco_siempre -> fetch_array(MYSQLI_ASSOC))
            {
                $agradecimientos = $res['cd_gracias'];
                $nombredisco  = $res['cd_nombre'];


        // A PURO DOLOR
        $contenido_track1_siempre = $mysqli->query("SELECT * FROM canciones where id_disco = 5 and c_track = 1");
        while($row_siempre1 = $contenido_track1_siempre -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_siempre1 = $row_siempre1['c_track'];
            $letra_siempre_1 = $row_siempre1['c_letra'];
            $c_nombre_siempre1 = $row_siempre1['c_nombre'];
            $c_duracion_siempre1 = $row_siempre1['c_duracion'];
            $c_colaborador_siempre1 = $row_siempre1['c_colaborador'];
            //$c_video_siempre1 = $row_siempre1['c_video'];
        }  

        $contenido_track2_siempre = $mysqli->query("SELECT * FROM canciones where id_disco = 5 and c_track = 2");
        while($row_siempre2 = $contenido_track2_siempre -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_siempre2 = $row_siempre2['c_track'];
            $letra_siempre_2 = $row_siempre2['c_letra'];
            $c_nombre_siempre2 = $row_siempre2['c_nombre'];
            $c_duracion_siempre2 = $row_siempre2['c_duracion'];
            $c_colaborador_siempre2 = $row_siempre2['c_colaborador'];
            //$c_video_siempre2 = $row_siempre2['c_video'];
        }  

        $contenido_track3_siempre = $mysqli->query("SELECT * FROM canciones where id_disco = 5 and c_track = 3");
        while($row_siempre3 = $contenido_track3_siempre -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_siempre3 = $row_siempre3['c_track'];
            $letra_siempre_3 = $row_siempre3['c_letra'];
            $c_nombre_siempre3 = $row_siempre3['c_nombre'];
            $c_duracion_siempre3 = $row_siempre3['c_duracion'];
            $c_colaborador_siempre3 = $row_siempre3['c_colaborador'];
            //$c_video_siempre3 = $row_siempre3['c_video'];
        }  

        $contenido_track4_siempre = $mysqli->query("SELECT * FROM canciones where id_disco = 5 and c_track = 4");
        while($row_siempre4 = $contenido_track4_siempre -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_siempre4 = $row_siempre4['c_track'];
            $letra_siempre_4 = $row_siempre4['c_letra'];
            $c_nombre_siempre4 = $row_siempre4['c_nombre'];
            $c_duracion_siempre4 = $row_siempre4['c_duracion'];
            $c_colaborador_siempre4 = $row_siempre4['c_colaborador'];
            //$c_video_siempre4 = $row_siempre4['c_video'];
        }  

        $contenido_track5_siempre = $mysqli->query("SELECT * FROM canciones where id_disco = 5 and c_track = 5");
        while($row_siempre5 = $contenido_track5_siempre -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_siempre5 = $row_siempre5['c_track'];
            $letra_siempre_5 = $row_siempre5['c_letra'];
            $c_nombre_siempre5 = $row_siempre5['c_nombre'];
            $c_duracion_siempre5 = $row_siempre5['c_duracion'];
            $c_colaborador_siempre5 = $row_siempre5['c_colaborador'];
            //$c_video_siempre5 = $row_siempre5['c_video'];
        }  

        $contenido_track6_siempre = $mysqli->query("SELECT * FROM canciones where id_disco = 5 and c_track = 6");
        while($row_siempre6 = $contenido_track6_siempre -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_siempre6 = $row_siempre6['c_track'];
            $letra_siempre_6 = $row_siempre6['c_letra'];
            $c_nombre_siempre6 = $row_siempre6['c_nombre'];
            $c_duracion_siempre6 = $row_siempre6['c_duracion'];
            $c_colaborador_siempre6 = $row_siempre6['c_colaborador'];
            $c_video_siempre6 = $row_siempre6['c_video'];
        }  

        $contenido_track7_siempre = $mysqli->query("SELECT * FROM canciones where id_disco = 5 and c_track = 7");
        while($row_siempre7 = $contenido_track7_siempre -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_siempre7 = $row_siempre7['c_track'];
            $letra_siempre_7 = $row_siempre7['c_letra'];
            $c_nombre_siempre7 = $row_siempre7['c_nombre'];
            $c_duracion_siempre7 = $row_siempre7['c_duracion'];
            $c_colaborador_siempre7 = $row_siempre7['c_colaborador'];
            //$c_video_siempre7 = $row_siempre7['c_video'];
        }  

        $contenido_track8_siempre = $mysqli->query("SELECT * FROM canciones where id_disco = 5 and c_track = 8");
        while($row_siempre8 = $contenido_track8_siempre -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_siempre8 = $row_siempre8['c_track'];
            $letra_siempre_8 = $row_siempre8['c_letra'];
            $c_nombre_siempre8 = $row_siempre8['c_nombre'];
            $c_duracion_siempre8 = $row_siempre8['c_duracion'];
            $c_colaborador_siempre8 = $row_siempre8['c_colaborador'];
            //$c_video_siempre8 = $row_siempre8['c_video'];
        }  

        $contenido_track9_siempre = $mysqli->query("SELECT * FROM canciones where id_disco = 5 and c_track = 9");
        while($row_siempre9 = $contenido_track9_siempre -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_siempre9 = $row_siempre9['c_track'];
            $letra_siempre_9 = $row_siempre9['c_letra'];
            $c_nombre_siempre9 = $row_siempre9['c_nombre'];
            $c_duracion_siempre9 = $row_siempre9['c_duracion'];
            $c_colaborador_siempre9 = $row_siempre9['c_colaborador'];
            //$c_video_siempre9 = $row_siempre9['c_video'];
        }  

        $contenido_track10_siempre = $mysqli->query("SELECT * FROM canciones where id_disco = 5 and c_track = 10");
        while($row_siempre10 = $contenido_track10_siempre -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_siempre10 = $row_siempre10['c_track'];
            $letra_siempre_10 = $row_siempre10['c_letra'];
            $c_nombre_siempre10 = $row_siempre10['c_nombre'];
            $c_duracion_siempre10 = $row_siempre10['c_duracion'];
            $c_colaborador_siempre10 = $row_siempre10['c_colaborador'];
            //$c_video_siempre10 = $row_siempre10['c_video'];
        }  

        $contenido_track11_siempre = $mysqli->query("SELECT * FROM canciones where id_disco = 5 and c_track = 11");
        while($row_siempre11 = $contenido_track11_siempre -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_siempre11 = $row_siempre11['c_track'];
            $letra_siempre_11 = $row_siempre11['c_letra'];
            $c_nombre_siempre11 = $row_siempre11['c_nombre'];
            $c_duracion_siempre11 = $row_siempre11['c_duracion'];
            $c_colaborador_siempre11 = $row_siempre11['c_colaborador'];
            //$c_video_siempre11 = $row_siempre11['c_video'];
        }  

        $contenido_track12_siempre = $mysqli->query("SELECT * FROM canciones where id_disco = 5 and c_track = 12");
        while($row_siempre12 = $contenido_track12_siempre -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_siempre12 = $row_siempre12['c_track'];
            $letra_siempre_12 = $row_siempre12['c_letra'];
            $c_nombre_siempre12 = $row_siempre12['c_nombre'];
            $c_duracion_siempre12 = $row_siempre12['c_duracion'];
            $c_colaborador_siempre12 = $row_siempre12['c_colaborador'];
            //$c_video_siempre12 = $row_siempre12['c_video'];
        }                                                                                          

        $d_siempre .='
                        <div id="cd_siempre" class="collapse hidden"> <!--  Comienza disco SIEMPRE -->
                        <!-- Abre id#cd_sim -->
                        <h2>Album '.$nombredisco.'</h2>

                        <!-- COMIENZA PESTAnAS -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home_siempre">Inicio</a></li>
                          <li><a data-toggle="tab" href="#cd5">CD</a></li>
                          <!--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
                        </ul>

                        <div class="tab-content">
                        <!-- COMIENZA TAB HOME -->    
                          <div id="home_siempre" class="tab-pane fade in active">
                            <h3>Agradecimientos</h3>
                            <p><small><h5>
                            '.$agradecimientos.'
                            <strong>Daniel Agostini</strong>
                            </h5></small></p>
                          </div></div>
                          <!-- TERMINA TAB HOME -->    

                          <!-- COMIENZA TAB CD -->    
                          <div id="cd5" class="tab-pane fade">
                            
                            <h3>Lista de canciones</h3>
                          
        
                              <h4>Daniel Agostini</h4>
                              <p><small>Disco <strong>SIEMPRE</strong> se compone de 12 temas de la Autoria de Daniel Agostini.<br>
                                       En ese mismo ano Daniel realiza un show Inolvidable en la calle Corrientes mas precisamente en el Teatro "Gran REX".
                               </small></p><br>

                                <!-- **************************************** -->    
                                <!-- COMIENZA ESCUCHAR CD COMPLETO "AMARTE" -->
                                <a href="#solo" id="cd_siempre_full" valor="5" data-toggle="collapse" data-target="#cdcompleto5" class="btn btn-info btn-xs">Escuchar CD Completo</a>

                                <div id="cdcompleto5" class="col-xs-12 collapse ">
                                    <h4>Disco Completo</h4>

                                    <p id="full_cd_siempre" > </p>

                                </div>
                                <!-- TERMINA ESCUCHAR CD COMPLETO "AMARTE" -->
                                <!-- **************************************** --> 

                              <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Nombre de la cancion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                <!-- TEMA 1 CORAZON-->
                                <tr>
                                    <td>'.$cd_track_siempre1.'</td>
                                    <td>'.$c_nombre_siempre1.'
                                   <a href="#sim" id="tema_siempre_1" data-toggle="collapse" data-target="#corazonv" class="btn btn-info btn-xs">Escuchar</a>
                                    | <a href="#ver_cdsolo" id="dc_sim" data-toggle="collapse" data-target="#corazonl" class="btn btn-info btn-xs">Letra</a></p>

<form id="cd_siempre_track_1">
    <input id="id_disco" name="disco" value="5" class="hidden">
    <input id="id_video" name="video" value="1" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="corazonv" class="col-xs-12 collapse">                                  

                                    </div>
                                    <!-- VIDEO -->

                                    <!-- LETRA  -->
                                    <div id="corazonl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_siempre1.' <small>Duracion: <b>'.$c_duracion_siempre1.'
                                                </b></small></h3><small>'.$c_colaborador_siempre1.'</small></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                        '.$letra_siempre_1.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA  -->

                                   </td>
                                </tr> 
                                <!-- TEMA 1 CORAZON-->  

                                <!-- TEMA 2 PASA EL TIEMPO -->
                                <tr>
                                    <td>'.$cd_track_siempre2.'</td>
                                    <td>'.$c_nombre_siempre2.'
                                        <a href="#ver_cdsolo" id="tema_siempre_2" data-toggle="collapse" data-target="#ptiempov" class="btn btn-info btn-xs">Escuchar</a> | 
                                        <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#ptiempol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_siempre_track_2">
    <input id="id_disco" name="disco" value="5" class="hidden">
    <input id="id_video" name="video" value="2" class="hidden">
</form>

                                    <!-- VIDEO HIJO --><br>
                                    <div id="ptiempov" class="col-xs-12 collapse">                                  

                                    </div>
                                    <!-- VIDEO HIJO -->


                                    <!-- LETRA  -->
                                    <div id="ptiempol" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_siempre2.' <small>Duracion: <b>'.$c_duracion_siempre2.'
                                                </b></small></h3><small>'.$c_colaborador_siempre2.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                    <br>
                                    <p>
                                    '.$letra_siempre_2.'
                                    </p>
                                    
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                    <!-- LETRA -->

                                    </td>
                                </tr>    
                                <!-- TEMA 2 PASA EL TIEMPO-->      

                                <!-- TEMA 3 QUE NO QUEDEN HUELLAS / MENTISTE -->
                                <tr>
                                    <td>'.$cd_track_siempre3.'</td>
                                    <td>'.$c_nombre_siempre3.'
                                   <a href="#ver_cdsolo" id="tema_siempre_3" data-toggle="collapse" data-target="#huellasv" class="btn btn-info btn-xs">Escuchar</a> | 
                                   <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#huellasl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_siempre_track_3">
    <input id="id_disco" name="disco" value="5" class="hidden">
    <input id="id_video" name="video" value="3" class="hidden">
</form>
                                    <br>
                                    <div id="huellasv" class="col-xs-12 collapse">                                  

                                    </div> 
                                    
                                    <div id="huellasl" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_siempre3.' <small>Duracion: <b>'.$c_duracion_siempre3.'
                                                </b></small></h3><small>'.$c_colaborador_siempre3.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                     
                                        <p>
                                        '.$letra_siempre_3.'
                                        </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                   </td> 
                                </tr> 
                                <!-- TEMA 3 QUE NO QUEDEN HUELLAS / MENTISTE  -->  
                              
                                <!-- TEMA 4 ES A eL O ES A Mi --> 
                                <tr>
                                    <td>'.$cd_track_siempre4.'</td>
                                    <td>'.$c_nombre_siempre4.'
                                    <a href="#ver_cdsolo" id="tema_siempre_4" data-toggle="collapse" data-target="#aeloamiv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#aeloamil" class="btn btn-info btn-xs">Letra</a>

<form id="cd_siempre_track_4">
    <input id="id_disco" name="disco" value="5" class="hidden">
    <input id="id_video" name="video" value="4" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="aeloamiv" class="col-xs-12 collapse">                                  

                                    </div>


                                    <!-- LETRA  -->
                                    <div id="aeloamil" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_siempre4.' <small>Duracion: <b>'.$c_duracion_siempre4.'
                                                </b></small></h3><small>'.$c_colaborador_siempre4.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>

                                              
                                                <p>
                                                '.$letra_siempre_4.'        
                                                </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>    

                                    </td>
                                </tr> 
                                <!-- TEMA 4 ES A eL O ES A Mi --> 

                                <!-- TEMA 5 VOLVERAS A MI--> 
                                <tr>
                                    <td>'.$cd_track_siempre5.'</td>
                                    <td>'.$c_nombre_siempre5.'

                                    <a href="#ver_cdsolo" id="tema_siempre_5" data-toggle="collapse" data-target="#volveramiv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#volveramil" class="btn btn-info btn-xs">Letra</a>
<form id="cd_siempre_track_5">
    <input id="id_disco" name="disco" value="5" class="hidden">
    <input id="id_video" name="video" value="5" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="volveramiv" class="col-xs-12 collapse">                                  

                                    </div>


                                    <!-- LETRA  -->
                                    <div id="volveramil" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_siempre5.' <small>Duracion: <b>'.$c_duracion_siempre5.'
                                                </b></small></h3><small>'.$c_colaborador_siempre5.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_siempre_5.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>                                                                    
                                <!-- TEMA 5 VOLVERAS A MI --> 

                                <!-- TEMA 6 NO SUFRO MAS --> 
                                <tr>
                                    <td>'.$cd_track_siempre6.'</td>
                                    <td>'.$c_nombre_siempre6.'

                                    <a href="#ver_cdsolo" id="tema_siempre_6" data-toggle="collapse" data-target="#sufrov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#sufrol" class="btn btn-info btn-xs">Letra</a>
<form id="cd_siempre_track_6">
    <input id="id_disco" name="disco" value="5" class="hidden">
    <input id="id_video" name="video" value="6" class="hidden">
</form>


                                    <!-- VIDEO --><br>
                                    <div id="sufrov" class="col-xs-12 collapse">                                  
                                    //'.$c_video_siempre6.'
                                    </div>

                                    <!-- LETRA  -->
                                    <div id="sufrol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_siempre6.' <small>Duracion: <b>'.$c_duracion_siempre6.'
                                                </b></small></h3><small>'.$c_colaborador_siempre6.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_siempre_6.'
                                                </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 6 NO SUFRO MAS --> 

                                <!-- TEMA 7 MI GAN AMOR --> 
                                <tr>
                                    <td>'.$cd_track_siempre7.'</td>
                                    <td>'.$c_nombre_siempre7.'

                                    <a href="#ver_cdsolo" id="tema_siempre_7" data-toggle="collapse" data-target="#gamorv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#gamorl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_siempre_track_7">
    <input id="id_disco" name="disco" value="5" class="hidden">
    <input id="id_video" name="video" value="7" class="hidden">
</form>


                                    <!-- VIDEO --><br>
                                    <div id="gamorv" class="col-xs-12 collapse">                                  

                                    </div>


                                    <!-- LETRA  -->
                                    <div id="gamorl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_siempre7.' <small>Duracion: <b>'.$c_duracion_siempre7.'
                                                </b></small></h3><small>'.$c_colaborador_siempre7.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                <small>'.$letra_siempre_7.'</small>
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>
                                <!-- TEMA 7 MI GAN AMOR -->

                                <!-- TEMA 8 TODO EL TIEMPO -->
                                <tr>
                                    <td>'.$cd_track_siempre8.'</td>
                                    <td>'.$c_nombre_siempre8.'
                                    
                                    <a href="#ver_cdsolo" id="tema_siempre_8" data-toggle="collapse" data-target="#todotiempov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#todotiempol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_siempre_track_8">
    <input id="id_disco" name="disco" value="5" class="hidden">
    <input id="id_video" name="video" value="8" class="hidden">
</form>

                                    <!-- VIDEO --><br>

                                    <div id="todotiempov" class="col-xs-12 collapse">                                  

                                    </div>                                    


                                    <!-- LETRA  -->
                                    <div id="todotiempol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_siempre8.' <small>Duracion: <b>'.$c_duracion_siempre8.'
                                                </b></small></h3><small>'.$c_colaborador_siempre8.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_siempre_8.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr> 
                                <!-- TEMA 8 TODO EL TIEMPO -->

                                <!-- TEMA 9 HOMBRES QUE LLORAN -->
                                <tr>
                                    <td>'.$cd_track_siempre9.'</td>
                                    <td>'.$c_nombre_siempre9.'
                                    
                                    <a href="#ver_cdsolo" id="tema_siempre_9" data-toggle="collapse" data-target="#lloranv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#lloranl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_siempre_track_9">
    <input id="id_disco" name="disco" value="5" class="hidden">
    <input id="id_video" name="video" value="9" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="lloranv" class="col-xs-12 collapse">                                  

                                    </div>


                                    <!-- LETRA  -->
                                    <div id="lloranl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_siempre9.' <small>Duracion: <b>'.$c_duracion_siempre9.'
                                                </b></small></h3><small>'.$c_colaborador_siempre9.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_siempre_9.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 9 HOMBRES QUE LLORAN -->

                                <!-- TEMA 10 LLANTO Y DOLOR-->
                                <tr>
                                    <td>'.$cd_track_siempre10.'</td>
                                    <td>'.$c_nombre_siempre10.'

                                    <a href="#ver_cdsolo" id="tema_siempre_10" data-toggle="collapse" data-target="#llantodolorv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#llantodolorl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_siempre_track_10">
    <input id="id_disco" name="disco" value="5" class="hidden">
    <input id="id_video" name="video" value="10" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="llantodolorv" class="col-xs-12 collapse">                                  

                                    </div>


                                    <!-- LETRA  -->
                                    <div id="llantodolorl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_siempre10.' <small>Duracion: <b>'.$c_duracion_siempre10.'
                                                </b></small></h3><small>'.$c_colaborador_siempre10.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                    '.$letra_siempre_10.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 10 LLANTO Y DOLOR --> 

                                <!-- TEMA 11 VUELVE-->
                                <tr>
                                    <td>'.$cd_track_siempre11.'</td>
                                    <td>'.$c_nombre_siempre11.'

                                    <a href="#ver_cdsolo" id="tema_siempre_11" data-toggle="collapse" data-target="#vuelvev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#vuelvel" class="btn btn-info btn-xs">Letra</a>
<form id="cd_siempre_track_11">
    <input id="id_disco" name="disco" value="5" class="hidden">
    <input id="id_video" name="video" value="11" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="vuelvev" class="col-xs-12 collapse">                                  

                                    </div>


                                    <!-- LETRA  -->
                                    <div id="vuelvel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_siempre11.' <small>Duracion: <b>'.$c_duracion_siempre11.'
                                                </b></small></h3><small>'.$c_colaborador_siempre11.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                    '.$letra_siempre_11.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 11 VUELVE-->     

                                <!-- TEMA 12 NADA POR PERDER-->
                                <tr>
                                    <td>'.$cd_track_siempre12.'</td>
                                    <td>'.$c_nombre_siempre12.'

                                    <a href="#ver_cdsolo" id="tema_siempre_12" data-toggle="collapse" data-target="#perderv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#perderl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_siempre_track_12">
    <input id="id_disco" name="disco" value="5" class="hidden">
    <input id="id_video" name="video" value="12" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="perderv" class="col-xs-12 collapse">                                  

                                    </div>


                                    <!-- LETRA  -->
                                    <div id="perderl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                            <th><h3>'.$c_nombre_siempre12.' <small>Duracion: <b>'.$c_duracion_siempre12.'
                                                </b></small></h3><small>'.$c_colaborador_siempre12.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_siempre_12.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 12 NADA POR PERDER -->    

                                                                                                                                                  

                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>

                                <!--
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                              -->
                                </tbody>
                              </table>
                            </div> <!-- Cierra CD -->                           


                           
                          </div>
                          <!-- TERMINA TAB HOME -->    



                          <!--
                          <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                          </div>
                          -->

                        </div>
                        <!-- TERMINA PESTAnAS -->


                        <!-- Cierra id#cd_solo -->    
                        </div>                   
              ';
          }
    return $d_siempre;          
    }   
 
    function sentimientos(){
        $d_sentmientos= "";
          $mysqli = conexionBD(); // Conexion a la Base Hackaton
          $disco_sentimientos = $mysqli->query("SELECT * FROM discos  WHERE id_disco = 6 ");   
         while($res_sen = $disco_sentimientos -> fetch_array(MYSQLI_ASSOC))
            {
                $agradecimientos = $res_sen['cd_gracias'];
                $nombredisco  = $res_sen['cd_nombre'];


        // A PURO DOLOR
        $contenido_track1_sentimientos = $mysqli->query("SELECT * FROM canciones where id_disco = 6 and c_track = 1");
        while($row_sentimientos1 = $contenido_track1_sentimientos -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sentimientos1 = $row_sentimientos1['c_track'];
            $letra_sentimientos_1 = $row_sentimientos1['c_letra'];
            $c_nombre_sentimientos1 = $row_sentimientos1['c_nombre'];
            $c_duracion_sentimientos1 = $row_sentimientos1['c_duracion'];
            $c_colaborador_sentimientos1 = $row_sentimientos1['c_colaborador'];
            //$c_video_sentimientos1 = $row_sentimientos1['c_video'];
        }  

        $contenido_track2_sentimientos = $mysqli->query("SELECT * FROM canciones where id_disco = 6 and c_track = 2");
        while($row_sentimientos2 = $contenido_track2_sentimientos -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sentimientos2 = $row_sentimientos2['c_track'];
            $letra_sentimientos_2 = $row_sentimientos2['c_letra'];
            $c_nombre_sentimientos2 = $row_sentimientos2['c_nombre'];
            $c_duracion_sentimientos2 = $row_sentimientos2['c_duracion'];
            $c_colaborador_sentimientos2 = $row_sentimientos2['c_colaborador'];
            //$c_video_sentimientos2 = $row_sentimientos2['c_video'];
        }  

        $contenido_track3_sentimientos = $mysqli->query("SELECT * FROM canciones where id_disco = 6 and c_track = 3");
        while($row_sentimientos3 = $contenido_track3_sentimientos -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sentimientos3 = $row_sentimientos3['c_track'];
            $letra_sentimientos_3 = $row_sentimientos3['c_letra'];
            $c_nombre_sentimientos3 = $row_sentimientos3['c_nombre'];
            $c_duracion_sentimientos3 = $row_sentimientos3['c_duracion'];
            $c_colaborador_sentimientos3 = $row_sentimientos3['c_colaborador'];
            //$c_video_sentimientos3 = $row_sentimientos3['c_video'];
        }  

        $contenido_track4_sentimientos = $mysqli->query("SELECT * FROM canciones where id_disco = 6 and c_track = 4");
        while($row_sentimientos4 = $contenido_track4_sentimientos -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sentimientos4 = $row_sentimientos4['c_track'];
            $letra_sentimientos_4 = $row_sentimientos4['c_letra'];
            $c_nombre_sentimientos4 = $row_sentimientos4['c_nombre'];
            $c_duracion_sentimientos4 = $row_sentimientos4['c_duracion'];
            $c_colaborador_sentimientos4 = $row_sentimientos4['c_colaborador'];
            //$c_video_sentimientos4 = $row_sentimientos4['c_video'];
        }  

        $contenido_track5_sentimientos = $mysqli->query("SELECT * FROM canciones where id_disco = 6 and c_track = 5");
        while($row_sentimientos5 = $contenido_track5_sentimientos -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sentimientos5 = $row_sentimientos5['c_track'];
            $letra_sentimientos_5 = $row_sentimientos5['c_letra'];
            $c_nombre_sentimientos5 = $row_sentimientos5['c_nombre'];
            $c_duracion_sentimientos5 = $row_sentimientos5['c_duracion'];
            $c_colaborador_sentimientos5 = $row_sentimientos5['c_colaborador'];
            //$c_video_sentimientos5 = $row_sentimientos5['c_video'];
        }  

        $contenido_track6_sentimientos = $mysqli->query("SELECT * FROM canciones where id_disco = 6 and c_track = 6");
        while($row_sentimientos6 = $contenido_track6_sentimientos -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sentimientos6 = $row_sentimientos6['c_track'];
            $letra_sentimientos_6 = $row_sentimientos6['c_letra'];
            $c_nombre_sentimientos6 = $row_sentimientos6['c_nombre'];
            $c_duracion_sentimientos6 = $row_sentimientos6['c_duracion'];
            $c_colaborador_sentimientos6 = $row_sentimientos6['c_colaborador'];
            //$c_video_sentimientos6 = $row_sentimientos6['c_video'];
        }  

        $contenido_track7_sentimientos = $mysqli->query("SELECT * FROM canciones where id_disco = 6 and c_track = 7");
        while($row_sentimientos7 = $contenido_track7_sentimientos -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sentimientos7 = $row_sentimientos7['c_track'];
            $letra_sentimientos_7 = $row_sentimientos7['c_letra'];
            $c_nombre_sentimientos7 = $row_sentimientos7['c_nombre'];
            $c_duracion_sentimientos7 = $row_sentimientos7['c_duracion'];
            $c_colaborador_sentimientos7 = $row_sentimientos7['c_colaborador'];
            //$c_video_sentimientos7 = $row_sentimientos7['c_video'];
        }  

        $contenido_track8_sentimientos = $mysqli->query("SELECT * FROM canciones where id_disco = 6 and c_track = 8");
        while($row_sentimientos8 = $contenido_track8_sentimientos -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sentimientos8 = $row_sentimientos8['c_track'];
            $letra_sentimientos_8 = $row_sentimientos8['c_letra'];
            $c_nombre_sentimientos8 = $row_sentimientos8['c_nombre'];
            $c_duracion_sentimientos8 = $row_sentimientos8['c_duracion'];
            $c_colaborador_sentimientos8 = $row_sentimientos8['c_colaborador'];
            //$c_video_sentimientos8 = $row_sentimientos8['c_video'];
        }  

        $contenido_track9_sentimientos = $mysqli->query("SELECT * FROM canciones where id_disco = 6 and c_track = 9");
        while($row_sentimientos9 = $contenido_track9_sentimientos -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sentimientos9 = $row_sentimientos9['c_track'];
            $letra_sentimientos_9 = $row_sentimientos9['c_letra'];
            $c_nombre_sentimientos9 = $row_sentimientos9['c_nombre'];
            $c_duracion_sentimientos9 = $row_sentimientos9['c_duracion'];
            $c_colaborador_sentimientos9 = $row_sentimientos9['c_colaborador'];
            //$c_video_sentimientos9 = $row_sentimientos9['c_video'];
        }  

        $contenido_track10_sentimientos = $mysqli->query("SELECT * FROM canciones where id_disco = 6 and c_track = 10");
        while($row_sentimientos10 = $contenido_track10_sentimientos -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sentimientos10 = $row_sentimientos10['c_track'];
            $letra_sentimientos_10 = $row_sentimientos10['c_letra'];
            $c_nombre_sentimientos10 = $row_sentimientos10['c_nombre'];
            $c_duracion_sentimientos10 = $row_sentimientos10['c_duracion'];
            $c_colaborador_sentimientos10 = $row_sentimientos10['c_colaborador'];
            //$c_video_sentimientos10 = $row_sentimientos10['c_video'];
        }  

        $contenido_track11_sentimientos = $mysqli->query("SELECT * FROM canciones where id_disco = 6 and c_track = 11");
        while($row_sentimientos11 = $contenido_track11_sentimientos -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sentimientos11 = $row_sentimientos11['c_track'];
            $letra_sentimientos_11 = $row_sentimientos11['c_letra'];
            $c_nombre_sentimientos11 = $row_sentimientos11['c_nombre'];
            $c_duracion_sentimientos11 = $row_sentimientos11['c_duracion'];
            $c_colaborador_sentimientos11 = $row_sentimientos11['c_colaborador'];
            //$c_video_sentimientos11 = $row_sentimientos11['c_video'];
        }  

        $contenido_track12_sentimientos = $mysqli->query("SELECT * FROM canciones where id_disco = 6 and c_track = 12");
        while($row_sentimientos12 = $contenido_track12_sentimientos -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_sentimientos12 = $row_sentimientos12['c_track'];
            $letra_sentimientos_12 = $row_sentimientos12['c_letra'];
            $c_nombre_sentimientos12 = $row_sentimientos12['c_nombre'];
            $c_duracion_sentimientos12 = $row_sentimientos12['c_duracion'];
            $c_colaborador_sentimientos12 = $row_sentimientos12['c_colaborador'];
            //$c_video_sentimientos12 = $row_sentimientos12['c_video'];
        }                                                                                          

        $d_sentmientos .='
                        <div id="cd_sentimientos" class="collapse hidden"> <!--  Comienza disco SENTIMIENTOS 1 -->
                        <!-- Abre id#cd_sim -->
                        <h2>Album '.$nombredisco.' </h2>

                        <!-- COMIENZA PESTAnAS -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home_sentimientos">Inicio</a></li>
                          <li><a data-toggle="tab" href="#cd6">CD</a></li>
                          <!--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
                        </ul>

                        <div class="tab-content">
                        <!-- COMIENZA TAB HOME -->    
                          <div id="home_sentimientos" class="tab-pane fade in active">
                            <h3>Agradecimientos</h3>
                            <p><small><h5>
                            '.$agradecimientos.'
                            <strong>Daniel Agostini</strong>
                            </h5></small></p>
                          </div>
                          <!-- TERMINA TAB HOME -->    

                          <!-- COMIENZA TAB CD -->    
                          <div id="cd6" class="tab-pane fade">
                            
                            <h3>Lista de canciones</h3>
                          
        
                              <h4>Daniel Agostini</h4>
                              <p><small>Disco <strong>SENTIMIENTOS 1</strong> Disco de estudio con 12 temas.<br>
                                        Ese mismo ano realiza un teatro Gran Rex repasando todos sus exitos.<br>
                                        Este Compacto tiene 1 cover de Luciano Pereyra (NºY asi, asi).
                               </small></p><br>

                                <!-- **************************************** -->    
                                <!-- COMIENZA ESCUCHAR CD COMPLETO "AMARTE" -->
                                <a href="#solo" id="cd_sentimientos1_full" valor="6" data-toggle="collapse" data-target="#cdcompleto6" class="btn btn-info btn-xs">Escuchar CD Completo</a>

                                <div id="cdcompleto6" class="col-xs-12 collapse ">
                                    <h4>Disco Completo</h4>

                                    <p id="full_cd_sentimientos1" > </p>

                                </div>
                                <!-- TERMINA ESCUCHAR CD COMPLETO "AMARTE" -->
                                <!-- **************************************** --> 


                              <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Nombre de la cancion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                <!-- TEMA 1 UNA VEZ MAS-->
                                <tr>
                                    <td>'.$cd_track_sentimientos1.'</td>
                                    <td>'.$c_nombre_sentimientos1.'
                                   <a href="#sim" id="tema_sentimientos_1" data-toggle="collapse" data-target="#uvezmasv" class="btn btn-info btn-xs">Escuchar</a>
                                    | <a href="#ver_cdsolo" id="dc_sim" data-toggle="collapse" data-target="#uvezmasl" class="btn btn-info btn-xs">Letra</a></p>

<form id="cd_sentimientos_track_1">
    <input id="id_disco" name="disco" value="6" class="hidden">
    <input id="id_video" name="video" value="1" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="uvezmasv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>
                                    <!-- VIDEO -->

                                    <!-- LETRA  -->
                                    <div id="uvezmasl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_sentimientos1.' <small>Duracion: <b>'.$c_duracion_sentimientos1.'
                                                </b></small></h3><small>'.$c_colaborador_sentimientos1.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_sentimientos_1.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA  -->

                                   </td>
                                </tr> 
                                <!-- TEMA 1 UNA VEZ MAS-->  

                                <!-- TEMA 2 ERES TU -->
                                <tr>
                                    <td>'.$cd_track_sentimientos2.'</td>
                                    <td>'.$c_nombre_sentimientos2.'
                                        <a href="#ver_cdsolo" id="tema_sentimientos_2" data-toggle="collapse" data-target="#erestuv" class="btn btn-info btn-xs">Escuchar</a> | 
                                        <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#erestul" class="btn btn-info btn-xs">Letra</a>
<form id="cd_sentimientos_track_2">
    <input id="id_disco" name="disco" value="6" class="hidden">
    <input id="id_video" name="video" value="2" class="hidden">
</form>
                                    <!-- VIDEO HIJO --><br>
                                    <div id="erestuv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>
                                    <!-- VIDEO HIJO -->


                                    <!-- LETRA  -->
                                    <div id="erestul" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_sentimientos2.' <small>Duracion: <b>'.$c_duracion_sentimientos2.'
                                                </b></small></h3><small>'.$c_colaborador_sentimientos2.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_sentimientos_2.'
                                                    </p>
                                    
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                    <!-- LETRA -->

                                    </td>
                                </tr>    
                                <!-- TEMA 2 ERES TU-->      

                                <!-- TEMA 3 YO ME VOY CON VOS -->
                                <tr>
                                    <td>'.$cd_track_sentimientos3.'</td>
                                    <td>'.$c_nombre_sentimientos3.'
                                   <a href="#ver_cdsolo" id="tema_sentimientos_3" data-toggle="collapse" data-target="#yconvosv" class="btn btn-info btn-xs">Escuchar</a> | 
                                   <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#yconvosl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_sentimientos_track_3">
    <input id="id_disco" name="disco" value="6" class="hidden">
    <input id="id_video" name="video" value="3" class="hidden">
</form>
                                    <br>
                                    <div id="yconvosv" class="col-xs-12 collapse">                                  
                                     <!-- ACA VA EL VIDEO -->
                                    </div> 
                                    
                                    <div id="yconvosl" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_sentimientos3.' <small>Duracion: <b>'.$c_duracion_sentimientos3.'
                                                </b></small></h3><small>'.$c_colaborador_sentimientos3.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_sentimientos_3.'
                                                    </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                   </td> 
                                </tr> 
                                <!-- TEMA 3 YO ME VOY CON VOS  -->  
                              
                                <!-- TEMA 4 SE TERMINO EL AMOR --> 
                                <tr>
                                    <td>'.$cd_track_sentimientos4.'</td>
                                    <td>'.$c_nombre_sentimientos4.'
                                    <a href="#ver_cdsolo" id="tema_sentimientos_4" data-toggle="collapse" data-target="#stamorv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#stamorl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_sentimientos_track_4">
    <input id="id_disco" name="disco" value="6" class="hidden">
    <input id="id_video" name="video" value="4" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="stamorv" class="col-xs-12 collapse">                                  
                                     <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="stamorl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_sentimientos4.' <small>Duracion: <b>'.$c_duracion_sentimientos4.'
                                                </b></small></h3><small>'.$c_colaborador_sentimientos4.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_sentimientos_4.'
                                                    </p>                                                   
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>    

                                    </td>
                                </tr> 
                                <!-- TEMA 4 SE TERMINO EL AMOR --> 

                                <!-- TEMA 5 SIN SENTIDO --> 
                                <tr>
                                    <td>'.$cd_track_sentimientos5.'</td>
                                    <td>'.$c_nombre_sentimientos5.'

                                    <a href="#ver_cdsolo" id="tema_sentimientos_5" data-toggle="collapse" data-target="#sentidov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#sentidol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_sentimientos_track_5">
    <input id="id_disco" name="disco" value="6" class="hidden">
    <input id="id_video" name="video" value="5" class="hidden">
</form>
                                    <!-- Sin sentido --><br>
                                    <div id="sentidov" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="sentidol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_sentimientos5.' <small>Duracion: <b>'.$c_duracion_sentimientos5.'
                                                </b></small></h3><small>'.$c_colaborador_sentimientos5.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_sentimientos_5.'
                                                    </p>                                                   
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>                                                                    
                                <!-- TEMA 5 SIN SENTIDO --> 

                                <!-- TEMA 6 TE VI  --> 
                                <tr>
                                    <td>'.$cd_track_sentimientos6.'</td>
                                    <td>'.$c_nombre_sentimientos6.'
                                    <a href="#ver_cdsolo" id="tema_sentimientos_6" data-toggle="collapse" data-target="#teviv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#tevil" class="btn btn-info btn-xs">Letra</a>

<form id="cd_sentimientos_track_6">
    <input id="id_disco" name="disco" value="6" class="hidden">
    <input id="id_video" name="video" value="6" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="teviv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>

                                    <!-- LETRA  -->
                                    <div id="tevil" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_sentimientos6.' <small>Duracion: <b>'.$c_duracion_sentimientos6.'
                                                </b></small></h3><small>'.$c_colaborador_sentimientos6.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_sentimientos_6.'
                                                    </p> 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 6 TE VI  --> 

                                <!-- TEMA 7 POR ESTAR CONTIGO --> 
                                <tr>
                                    <td>'.$cd_track_sentimientos7.'</td>
                                    <td>'.$c_nombre_sentimientos7.'

                                    <a href="#ver_cdsolo" id="tema_sentimientos_7" data-toggle="collapse" data-target="#contigovv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#contigol" class="btn btn-info btn-xs">Letra</a>
<form id="cd_sentimientos_track_7">
    <input id="id_disco" name="disco" value="6" class="hidden">
    <input id="id_video" name="video" value="7" class="hidden">
</form>

                                    <!-- VIDEO --><br>

                                     <div id="contigovv" class="col-xs-12 collapse">                                  
                                     <!-- ACA VA EL VIDEO -->
                                     </div>


                                    <!-- LETRA  -->
                                    <div id="contigol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_sentimientos7.' <small>Duracion: <b>'.$c_duracion_sentimientos7.'
                                                </b></small></h3><small>'.$c_colaborador_sentimientos7.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_sentimientos_7.'
                                                    </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>
                                <!-- TEMA 7  POR ESTAR CONTIGO-->

                                <!-- TEMA 8 ETERNO AMOR -->
                                <tr>
                                    <td>'.$cd_track_sentimientos8.'</td>
                                    <td>'.$c_nombre_sentimientos8.'
                                    
                                    <a href="#ver_cdsolo" id="tema_sentimientos_8" data-toggle="collapse" data-target="#eternov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#eternol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_sentimientos_track_8">
    <input id="id_disco" name="disco" value="6" class="hidden">
    <input id="id_video" name="video" value="8" class="hidden">
</form>

                                    <!-- VIDEO --><br>

                                    <div id="eternov" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>                                    


                                    <!-- LETRA  -->
                                    <div id="eternol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_sentimientos8.' <small>Duracion: <b>'.$c_duracion_sentimientos8.'
                                                </b></small></h3><small>'.$c_colaborador_sentimientos8.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_sentimientos_8.'
                                                    </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr> 
                                <!-- TEMA 8 ETERNO AMOR -->

                                <!-- TEMA 9 Y ASI, ASI -->
                                <tr>
                                    <td>'.$cd_track_sentimientos9.'</td>
                                    <td>'.$c_nombre_sentimientos9.'
                                    
                                    <a href="#ver_cdsolo" id="tema_sentimientos_9" data-toggle="collapse" data-target="#asiasiv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#asiasil" class="btn btn-info btn-xs">Letra</a>

<form id="cd_sentimientos_track_9">
    <input id="id_disco" name="disco" value="6" class="hidden">
    <input id="id_video" name="video" value="9" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="asiasiv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="asiasil" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_sentimientos9.' <small>Duracion: <b>'.$c_duracion_sentimientos9.'
                                                </b></small></h3><small>'.$c_colaborador_sentimientos9.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_sentimientos_9.'
                                                    </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 9  Y ASI, ASI-->

                                <!-- TEMA 10 BUSCANDOTE-->
                                <tr>
                                    <td>'.$cd_track_sentimientos10.'</td>
                                    <td>'.$c_nombre_sentimientos10.'

                                    <a href="#ver_cdsolo" id="tema_sentimientos_10" data-toggle="collapse" data-target="#buscandotev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#buscandotel" class="btn btn-info btn-xs">Letra</a>

<form id="cd_sentimientos_track_10">
    <input id="id_disco" name="disco" value="6" class="hidden">
    <input id="id_video" name="video" value="10" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="buscandotev" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="buscandotel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                 <th><h3>'.$c_nombre_sentimientos10.' <small>Duracion: <b>'.$c_duracion_sentimientos10.'
                                                </b></small></h3><small>'.$c_colaborador_sentimientos10.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_sentimientos_10.'
                                                    </p>                                                 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 10 BUSCANDOTE --> 

                                <!-- TEMA 11 SI ME DAS TU AMOR -->
                                <tr>
                                    <td>'.$cd_track_sentimientos11.'</td>
                                    <td>'.$c_nombre_sentimientos11.'

                                    <a href="#ver_cdsolo" id="tema_sentimientos_11" data-toggle="collapse" data-target="#medastuamorv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#medastuamorl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_sentimientos_track_11">
    <input id="id_disco" name="disco" value="6" class="hidden">
    <input id="id_video" name="video" value="11" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="medastuamorv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="medastuamorl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                 <th><h3>'.$c_nombre_sentimientos11.' <small>Duracion: <b>'.$c_duracion_sentimientos11.'
                                                </b></small></h3><small>'.$c_colaborador_sentimientos11.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_sentimientos_11.'
                                                    </p>                                                   
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 11 SI ME DAS TU AMOR -->     

                                <!-- TEMA 12  QUE SEAS FELIZ -->
                                <tr>
                                    <td>'.$cd_track_sentimientos12.'</td>
                                    <td>'.$c_nombre_sentimientos12.'

                                    <a href="#ver_cdsolo" id="tema_sentimientos_12" data-toggle="collapse" data-target="#qfelizv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#qfelizl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_sentimientos_track_12">
    <input id="id_disco" name="disco" value="6" class="hidden">
    <input id="id_video" name="video" value="12" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="qfelizv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="qfelizl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                 <th><h3>'.$c_nombre_sentimientos12.' <small>Duracion: <b>'.$c_duracion_sentimientos12.'
                                                </b></small></h3><small>'.$c_colaborador_sentimientos12.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_sentimientos_12.'
                                                    </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 12  QUE SEAS FELIZ  -->    

                                                                                                                                                  

                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>

                                <!--
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                              -->
                                </tbody>
                              </table>
                            </div> <!-- Cierra CD -->                           


                           
                          </div>
                          <!-- TERMINA TAB HOME -->    



                          <!--
                          <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                          </div>
                          -->

                        </div>
                        <!-- TERMINA PESTAnAS -->


                        <!-- Cierra id#cd_solo -->    
                        </div>                   
              ';
            }
    return $d_sentmientos;          
    }      

    function sinlimite(){
        $d_sinlimite= "";

          $mysqli = conexionBD(); // Conexion a la Base Hackaton
          $disco_sentimientos = $mysqli->query("SELECT * FROM discos  WHERE id_disco = 7 ");   
         
            while($res_sen = $disco_sentimientos -> fetch_array(MYSQLI_ASSOC))
            {
                $agradecimientos = $res_sen['cd_gracias'];
                $nombredisco  = $res_sen['cd_nombre'];


        // CORAZONCITO
        $contenido_track1_limite = $mysqli->query("SELECT * FROM canciones where id_disco = 7 and c_track = 1");
        while($row_limite1 = $contenido_track1_limite -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_limite1 = $row_limite1['c_track'];
            $letra_limite_1 = $row_limite1['c_letra'];
            $c_nombre_limite1 = $row_limite1['c_nombre'];
            $c_duracion_limite1 = $row_limite1['c_duracion'];
            $c_colaborador_limite1 = $row_limite1['c_colaborador'];
            //$c_video_limite1 = $row_limite1['c_video'];
        }  

        // ATREVETE A MIRARME DE FRENTE
        $contenido_track2_limite = $mysqli->query("SELECT * FROM canciones where id_disco = 7 and c_track = 2");
        while($row_limite2 = $contenido_track2_limite -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_limite2 = $row_limite2['c_track'];
            $letra_limite_2 = $row_limite2['c_letra'];
            $c_nombre_limite2 = $row_limite2['c_nombre'];
            $c_duracion_limite2 = $row_limite2['c_duracion'];
            $c_colaborador_limite2 = $row_limite2['c_colaborador'];
            //$c_video_limite2 = $row_limite2['c_video'];
        }    

        // DAME
        $contenido_track3_limite = $mysqli->query("SELECT * FROM canciones where id_disco = 7 and c_track = 3");
        while($row_limite3 = $contenido_track3_limite -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_limite3 = $row_limite3['c_track'];
            $letra_limite_3 = $row_limite3['c_letra'];
            $c_nombre_limite3 = $row_limite3['c_nombre'];
            $c_duracion_limite3 = $row_limite3['c_duracion'];
            $c_colaborador_limite3 = $row_limite3['c_colaborador'];
            //$c_video_limite3 = $row_limite3['c_video'];
        }   

        // ASI NOS AMAMOS
        $contenido_track4_limite = $mysqli->query("SELECT * FROM canciones where id_disco = 7 and c_track = 4");
        while($row_limite4 = $contenido_track4_limite -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_limite4 = $row_limite4['c_track'];
            $letra_limite_4 = $row_limite4['c_letra'];
            $c_nombre_limite4 = $row_limite4['c_nombre'];
            $c_duracion_limite4 = $row_limite4['c_duracion'];
            $c_colaborador_limite4 = $row_limite4['c_colaborador'];
            //$c_video_limite4 = $row_limite4['c_video'];
        }                          

        // NUNCA DEJARE DE AMARTE
        $contenido_track5_limite = $mysqli->query("SELECT * FROM canciones where id_disco = 7 and c_track = 5");
        while($row_limite5 = $contenido_track5_limite -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_limite5 = $row_limite5['c_track'];
            $letra_limite_5 = $row_limite5['c_letra'];
            $c_nombre_limite5 = $row_limite5['c_nombre'];
            $c_duracion_limite5 = $row_limite5['c_duracion'];
            $c_colaborador_limite5 = $row_limite5['c_colaborador'];
            //$c_video_limite5 = $row_limite5['c_video'];
        }   

        // VOY A INTENTAR
        $contenido_track6_limite = $mysqli->query("SELECT * FROM canciones where id_disco = 7 and c_track = 6");
        while($row_limite6 = $contenido_track6_limite -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_limite6 = $row_limite6['c_track'];
            $letra_limite_6 = $row_limite6['c_letra'];
            $c_nombre_limite6 = $row_limite6['c_nombre'];
            $c_duracion_limite6 = $row_limite6['c_duracion'];
            $c_colaborador_limite6 = $row_limite6['c_colaborador'];
            //$c_video_limite6 = $row_limite6['c_video'];
        }   

        // ENGANCHADOS 1
        $contenido_track7_limite = $mysqli->query("SELECT * FROM canciones where id_disco = 7 and c_track = 7");
        while($row_limite7 = $contenido_track7_limite -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_limite7 = $row_limite7['c_track'];
            $letra_limite_7 = $row_limite7['c_letra'];
            $c_nombre_limite7 = $row_limite7['c_nombre'];
            $c_duracion_limite7 = $row_limite7['c_duracion'];
            $c_colaborador_limite7 = $row_limite7['c_colaborador'];
            //$c_video_limite7 = $row_limite7['c_video'];
        }         

        //  ME QUEDE SIN TI
        $contenido_track8_limite = $mysqli->query("SELECT * FROM canciones where id_disco = 7 and c_track = 8");
        while($row_limite8 = $contenido_track8_limite -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_limite8 = $row_limite8['c_track'];
            $letra_limite_8 = $row_limite8['c_letra'];
            $c_nombre_limite8 = $row_limite8['c_nombre'];
            $c_duracion_limite8 = $row_limite8['c_duracion'];
            $c_colaborador_limite8 = $row_limite8['c_colaborador'];
            //$c_video_limite8 = $row_limite8['c_video'];
        }  


        //  ELLA ME DA AMOR
        $contenido_track9_limite = $mysqli->query("SELECT * FROM canciones where id_disco = 7 and c_track = 9");
        while($row_limite9 = $contenido_track9_limite -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_limite9 = $row_limite9['c_track'];
            $letra_limite_9 = $row_limite9['c_letra'];
            $c_nombre_limite9 = $row_limite9['c_nombre'];
            $c_duracion_limite9 = $row_limite9['c_duracion'];
            $c_colaborador_limite9 = $row_limite9['c_colaborador'];
            //$c_video_limite9 = $row_limite9['c_video'];
        }  

        //  NUESTRO FINAL
        $contenido_track10_limite = $mysqli->query("SELECT * FROM canciones where id_disco = 7 and c_track = 10");
        while($row_limite10 = $contenido_track10_limite -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_limite10 = $row_limite10['c_track'];
            $letra_limite_10 = $row_limite10['c_letra'];
            $c_nombre_limite10 = $row_limite10['c_nombre'];
            $c_duracion_limite10 = $row_limite10['c_duracion'];
            $c_colaborador_limite10 = $row_limite10['c_colaborador'];
            //$c_video_limite10 = $row_limite10['c_video'];
        }  

        //  ESE SOY YO
        $contenido_track11_limite = $mysqli->query("SELECT * FROM canciones where id_disco = 7 and c_track = 11");
        while($row_limite11 = $contenido_track11_limite -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_limite11 = $row_limite11['c_track'];
            $letra_limite_11 = $row_limite11['c_letra'];
            $c_nombre_limite11 = $row_limite11['c_nombre'];
            $c_duracion_limite11 = $row_limite11['c_duracion'];
            $c_colaborador_limite11 = $row_limite11['c_colaborador'];
            //$c_video_limite11 = $row_limite11['c_video'];
        }  

        //  ENGANCHADOS 2
        $contenido_track12_limite = $mysqli->query("SELECT * FROM canciones where id_disco = 7 and c_track = 12");
        while($row_limite12 = $contenido_track12_limite -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_limite12 = $row_limite12['c_track'];
            $letra_limite_12 = $row_limite12['c_letra'];
            $c_nombre_limite12 = $row_limite12['c_nombre'];
            $c_duracion_limite12 = $row_limite12['c_duracion'];
            $c_colaborador_limite12 = $row_limite12['c_colaborador'];
            //$c_video_limite12 = $row_limite12['c_video'];
        }  


        $d_sinlimite .='
                        <div id="cd_sinlimite" class="collapse hidden"> <!--  Comienza disco SIN LIMITE -->
                        <!-- Abre id#cd_sim -->
                        <h2>Album '.$nombredisco.' </h2>

                        <!-- COMIENZA PESTAnAS -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home_sinlimite">Inicio</a></li>
                          <li><a data-toggle="tab" href="#cd7">CD</a></li>
                          <!--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
                        </ul>

                        <div class="tab-content">
                        <!-- COMIENZA TAB HOME -->    
                          <div id="home_sinlimite" class="tab-pane fade in active">
                            <h3>Agradecimientos</h3>
                            <p><small><h5>
                            '.$agradecimientos.'
                            <strong>Daniel Agostini</strong>

                            </h5></small></p>
                          </div>
                          <!-- TERMINA TAB HOME -->    

                          <!-- COMIENZA TAB CD -->    
                          <div id="cd7" class="tab-pane fade">
                            
                            <h3>Lista de canciones</h3>
                          
        
                              <h4>Daniel Agostini</h4>
                              <p><small>
                              Daniel vuelve a lanzar un disco con 10 temas, en los que nos brinda un cover
                              de los Wawanco "Atrevete a mirarme de frente". <strong>Dame</strong> es un tema con otro estilo muy bien logrado.
                               </small></p><br>

                                <!-- **************************************** -->    
                                <!-- COMIENZA ESCUCHAR CD COMPLETO "SIN LIMITE" -->
                                <a href="#solo" id="cd_sinlimite_full" valor="7" data-toggle="collapse" data-target="#cdcompleto7" class="btn btn-info btn-xs">Escuchar CD Completo</a>

                                <div id="cdcompleto7" class="col-xs-12 collapse ">
                                    <h4>Disco Completo</h4>

                                    <p id="full_cd_sinlimite" > </p>

                                </div>
                                <!-- TERMINA ESCUCHAR CD COMPLETO "SIN LIMITE" -->
                                <!-- **************************************** --> 



                              <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Nombre de la cancion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                <!-- TEMA 1 CORAZONCITO-->
                                <tr>
                                <td>'.$cd_track_limite1.'</td>
                                <td>'.$c_nombre_limite1.'
                                   <a href="#sim" id="tema_limite_1" data-toggle="collapse" data-target="#corazoncitov" class="btn btn-info btn-xs">Escuchar</a>
                                    | <a href="#ver_cdsolo" id="dc_sim" data-toggle="collapse" data-target="#corazoncitol" class="btn btn-info btn-xs">Letra</a></p>
<form id="cd_limite_track_1">
    <input id="id_disco" name="disco" value="7" class="hidden">
    <input id="id_video" name="video" value="1" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="corazoncitov" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>
                                    <!-- VIDEO -->

                                    <!-- LETRA  -->
                                    <div id="corazoncitol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                            <th><h3>'.$c_nombre_limite1.' <small>Duracion: <b>'.$c_duracion_limite1.'
                                             </b></small></h3><small>'.$c_colaborador_limite1.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_limite_1.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA  -->

                                   </td>
                                </tr> 
                                <!-- TEMA 1 CORAZONCITO-->  

                                <!-- TEMA 2 ATREVETE A MIRARME DE FRENTE -->
                                <tr>
                                <td>'.$cd_track_limite2.'</td>
                                <td>'.$c_nombre_limite2.'
                                        <a href="#ver_cdsolo" id="tema_limite_2" data-toggle="collapse" data-target="#atrevev" class="btn btn-info btn-xs">Escuchar</a> | 
                                        <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#atrevel" class="btn btn-info btn-xs">Letra</a>
<form id="cd_limite_track_2">
    <input id="id_disco" name="disco" value="7" class="hidden">
    <input id="id_video" name="video" value="2" class="hidden">
</form>

                                    <!-- VIDEO ATREVETE A MIRARME DE FRENTE --><br>
                                    <div id="atrevev" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>
                                    <!-- VIDEO ATREVETE A MIRARME DE FRENTE -->


                                    <!-- LETRA  -->
                                    <div id="atrevel" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                          <th><h3>'.$c_nombre_limite2.' <small>Duracion: <b>'.$c_duracion_limite2.'
                                             </b></small></h3><small>'.$c_colaborador_limite2.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_limite_2.'
                                                    </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                    <!-- LETRA -->

                                    </td>
                                </tr>    
                                <!-- TEMA 2 ATREVETE A MIRARME DE FRENTE->      

                                <!-- TEMA 3 DAME -->
                                <tr>
                                <td>'.$cd_track_limite3.'</td>
                                <td>'.$c_nombre_limite3.'
                                   <a href="#ver_cdsolo" id="tema_limite_3" data-toggle="collapse" data-target="#damev" class="btn btn-info btn-xs">Escuchar</a> | 
                                   <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#damel" class="btn btn-info btn-xs">Letra</a>
<form id="cd_limite_track_3">
    <input id="id_disco" name="disco" value="7" class="hidden">
    <input id="id_video" name="video" value="3" class="hidden">
</form>                             
                                    <br>    
                                    <div id="damev" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div> 
                                    
                                    <div id="damel" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                          <th><h3>'.$c_nombre_limite3.' <small>Duracion: <b>'.$c_duracion_limite3.'
                                             </b></small></h3><small>'.$c_colaborador_limite3.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_limite_3.'
                                                    </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                   </td> 
                                </tr> 
                                <!-- TEMA 3 DAME  -->  
                              
                                <!-- TEMA 4 ASI NOS AMAMOS --> 
                                <tr>
                                <td>'.$cd_track_limite4.'</td>
                                <td>'.$c_nombre_limite4.'
                                    <a href="#ver_cdsolo" id="tema_limite_4" data-toggle="collapse" data-target="#amamosvv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#amamosl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_limite_track_4">
    <input id="id_disco" name="disco" value="7" class="hidden">
    <input id="id_video" name="video" value="4" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="amamosvv" class="col-xs-12 collapse">                                  
                                     <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="amamosl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                          <th><h3>'.$c_nombre_limite4.' <small>Duracion: <b>'.$c_duracion_limite4.'
                                             </b></small></h3><small>'.$c_colaborador_limite4.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_limite_4.'
                                                    </p>                                                   
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>    

                                    </td>
                                </tr> 
                                <!-- TEMA 4 ASI NOS AMAMOS --> 

                                <!-- TEMA 5 NUNCA DEJARE DE AMARTE --> 
                                <tr>
                                <td>'.$cd_track_limite5.'</td>
                                <td>'.$c_nombre_limite5.'

                                    <a href="#ver_cdsolo" id="tema_limite_5" data-toggle="collapse" data-target="#namartev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#namartel" class="btn btn-info btn-xs">Letra</a>

<form id="cd_limite_track_5">
    <input id="id_disco" name="disco" value="7" class="hidden">
    <input id="id_video" name="video" value="5" class="hidden">
</form>
                                    <!-- Sin sentido --><br>
                                    <div id="namartev" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="namartel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                          <th><h3>'.$c_nombre_limite5.' <small>Duracion: <b>'.$c_duracion_limite5.'
                                             </b></small></h3><small>'.$c_colaborador_limite5.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_limite_5.'
                                                    </p>                                               
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>                                                                    
                                <!-- TEMA 5 NUNCA DEJARE DE AMARTE --> 

                                <!-- TEMA 6 VOY A INTENTAR --> 
                                <tr>
                                <td>'.$cd_track_limite6.'</td>
                                <td>'.$c_nombre_limite6.'
                                    <a href="#ver_cdsolo" id="tema_limite_6" data-toggle="collapse" data-target="#intentarv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#intentarl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_limite_track_6">
    <input id="id_disco" name="disco" value="7" class="hidden">
    <input id="id_video" name="video" value="6" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="intentarv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>

                                    <!-- LETRA  -->
                                    <div id="intentarl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                          <th><h3>'.$c_nombre_limite6.' <small>Duracion: <b>'.$c_duracion_limite6.'
                                             </b></small></h3><small>'.$c_colaborador_limite6.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_limite_6.'
                                                    </p> 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 6 VOY A INTENTAR  --> 

                                <!-- TEMA 7 ME QUEDe SIN TI/ ELLA ME DA AMOR/ ASi NOS AMAMOS --> 
                                <tr>
                                <td>'.$cd_track_limite7.'</td>
                                <td>'.$c_nombre_limite7.'

                                    <a href="#ver_cdsolo" id="tema_limite_7" data-toggle="collapse" data-target="#enganchados1v" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#enganchados1l" class="btn btn-info btn-xs">Letra</a>

<form id="cd_limite_track_7">
    <input id="id_disco" name="disco" value="7" class="hidden">
    <input id="id_video" name="video" value="7" class="hidden">
</form>

                                    <!-- VIDEO --><br>

                                     <div id="enganchados1v" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="enganchados1l" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                          <th><h3>'.$c_nombre_limite7.' <small>Duracion: <b>'.$c_duracion_limite7.'
                                             </b></small></h3><small>'.$c_colaborador_limite7.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_limite_7.'
                                                    </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>
                                <!-- TEMA 7  ME QUEDe SIN TI/ ELLA ME DA AMOR/ ASi NOS AMAMOS -->

                                <!-- TEMA 8 ME QUEDE SIN TI -->
                                <tr>
                                <td>'.$cd_track_limite8.'</td>
                                <td>'.$c_nombre_limite8.'
                                    
                                    <a href="#ver_cdsolo" id="tema_limite_8" data-toggle="collapse" data-target="#quedesintiv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#quedesintil" class="btn btn-info btn-xs">Letra</a>
<form id="cd_limite_track_8">
    <input id="id_disco" name="disco" value="7" class="hidden">
    <input id="id_video" name="video" value="8" class="hidden">
</form>

                                    <!-- VIDEO --><br>

                                    <div id="quedesintiv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>                                    


                                    <!-- LETRA  -->
                                    <div id="quedesintil" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                          <th><h3>'.$c_nombre_limite8.' <small>Duracion: <b>'.$c_duracion_limite8.'
                                             </b></small></h3><small>'.$c_colaborador_limite8.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_limite_8.'
                                                    </p>                                                 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr> 
                                <!-- TEMA 8 ME QUEDE SIN TI -->

                                <!-- TEMA 9 Y ASI, ASI -->
                                <tr>
                                <td>'.$cd_track_limite9.'</td>
                                <td>'.$c_nombre_limite9.'
                                    
                                    <a href="#ver_cdsolo" id="tema_limite_9" data-toggle="collapse" data-target="#medaamorv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#medaamorl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_limite_track_9">
    <input id="id_disco" name="disco" value="7" class="hidden">
    <input id="id_video" name="video" value="9" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="medaamorv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="medaamorl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                          <th><h3>'.$c_nombre_limite9.' <small>Duracion: <b>'.$c_duracion_limite9.'
                                             </b></small></h3><small>'.$c_colaborador_limite9.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_limite_9.'
                                                    </p>                                                          
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 9  ELLA ME DA AMOR -->

                                <!-- TEMA 10 NUESTRO FINAL-->
                                <tr>
                                <td>'.$cd_track_limite10.'</td>
                                <td>'.$c_nombre_limite10.'

                                    <a href="#ver_cdsolo" id="tema_limite_10" data-toggle="collapse" data-target="#nfinalv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#nfinall" class="btn btn-info btn-xs">Letra</a>

<form id="cd_limite_track_10">
    <input id="id_disco" name="disco" value="7" class="hidden">
    <input id="id_video" name="video" value="10" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="nfinalv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="nfinall" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                          <th><h3>'.$c_nombre_limite10.' <small>Duracion: <b>'.$c_duracion_limite10.'
                                             </b></small></h3><small>'.$c_colaborador_limite10.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_limite_10.'
                                                    </p>                                                
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 10 NUESTRO FINAL --> 

                                <!-- TEMA 11 ESE SOY YO -->
                                <tr>
                                <td>'.$cd_track_limite11.'</td>
                                <td>'.$c_nombre_limite11.'

                                    <a href="#ver_cdsolo" id="tema_limite_11" data-toggle="collapse" data-target="#soyyov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#soyyol" class="btn btn-info btn-xs">Letra</a>
<form id="cd_limite_track_11">
    <input id="id_disco" name="disco" value="7" class="hidden">
    <input id="id_video" name="video" value="11" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="soyyov" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="soyyol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                          <th><h3>'.$c_nombre_limite11.' <small>Duracion: <b>'.$c_duracion_limite11.'
                                             </b></small></h3><small>'.$c_colaborador_limite11.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_limite_11.'
                                                    </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 11 ESE SOY YO -->     

                                <!-- TEMA 12  NUNCA DEJARe DE AMARTE/ VOY A INTENTAR/ ESE SOY YO -->
                                <tr>
                                <td>'.$cd_track_limite12.'</td>
                                <td>'.$c_nombre_limite12.'

                                    <a href="#ver_cdsolo" id="tema_limite_12" data-toggle="collapse" data-target="#enganchado2v" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#enganchado2l" class="btn btn-info btn-xs">Letra</a>

<form id="cd_limite_track_12">
    <input id="id_disco" name="disco" value="7" class="hidden">
    <input id="id_video" name="video" value="12" class="hidden">
</form
                                    <!-- VIDEO --><br>
                                    <div id="enganchado2v" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="enganchado2l" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                          <th><h3>'.$c_nombre_limite12.' <small>Duracion: <b>'.$c_duracion_limite12.'
                                             </b></small></h3><small>'.$c_colaborador_limite12.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_limite_12.'
                                                    </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 12  NUNCA DEJARe DE AMARTE/ VOY A INTENTAR/ ESE SOY YO  -->    


                              

                                                                                                                                                  

                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>

                                <!--
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                              -->
                                </tbody>
                              </table>
                            </div> <!-- Cierra CD -->                           


                           
                          </div>
                          <!-- TERMINA TAB HOME -->    



                          <!--
                          <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                          </div>
                          -->

                        </div>
                        <!-- TERMINA PESTAnAS -->


                        <!-- Cierra id#cd_solo -->    
                        </div>                   
              ';
          }
    return $d_sinlimite;          
    }    

    function verdaderoamor(){
        $d_verdaderoamor= "";

          $mysqli = conexionBD(); // Conexion a la Base Hackaton
          $disco_verdadero = $mysqli->query("SELECT * FROM discos  WHERE id_disco = 8 ");   
         
            while($res_ver = $disco_verdadero -> fetch_array(MYSQLI_ASSOC))
            {
                $agradecimientos = $res_ver['cd_gracias'];
                $nombredisco  = $res_ver['cd_nombre'];


        // CORAZONCITO
        $contenido_track1_verdadero = $mysqli->query("SELECT * FROM canciones where id_disco = 8 and c_track = 1");
        while($row_verdadero1 = $contenido_track1_verdadero -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_verdadero1 = $row_verdadero1['c_track'];
            $letra_verdadero_1 = $row_verdadero1['c_letra'];
            $c_nombre_verdadero1 = $row_verdadero1['c_nombre'];
            $c_duracion_verdadero1 = $row_verdadero1['c_duracion'];
            $c_colaborador_verdadero1 = $row_verdadero1['c_colaborador'];
            //$c_video_verdadero1 = $row_verdadero1['c_video'];
        }  

        $contenido_track2_verdadero = $mysqli->query("SELECT * FROM canciones where id_disco = 8 and c_track = 2");
        while($row_verdadero2 = $contenido_track2_verdadero -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_verdadero2 = $row_verdadero2['c_track'];
            $letra_verdadero_2 = $row_verdadero2['c_letra'];
            $c_nombre_verdadero2 = $row_verdadero2['c_nombre'];
            $c_duracion_verdadero2 = $row_verdadero2['c_duracion'];
            $c_colaborador_verdadero2 = $row_verdadero2['c_colaborador'];
            //$c_video_verdadero2 = $row_verdadero2['c_video'];
        }  

        $contenido_track3_verdadero = $mysqli->query("SELECT * FROM canciones where id_disco = 8 and c_track = 3");
        while($row_verdadero3 = $contenido_track3_verdadero -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_verdadero3 = $row_verdadero3['c_track'];
            $letra_verdadero_3 = $row_verdadero3['c_letra'];
            $c_nombre_verdadero3 = $row_verdadero3['c_nombre'];
            $c_duracion_verdadero3 = $row_verdadero3['c_duracion'];
            $c_colaborador_verdadero3 = $row_verdadero3['c_colaborador'];
            //$c_video_verdadero3 = $row_verdadero3['c_video'];
        }  

        $contenido_track4_verdadero = $mysqli->query("SELECT * FROM canciones where id_disco = 8 and c_track = 4");
        while($row_verdadero4 = $contenido_track4_verdadero -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_verdadero4 = $row_verdadero4['c_track'];
            $letra_verdadero_4 = $row_verdadero4['c_letra'];
            $c_nombre_verdadero4 = $row_verdadero4['c_nombre'];
            $c_duracion_verdadero4 = $row_verdadero4['c_duracion'];
            $c_colaborador_verdadero4 = $row_verdadero4['c_colaborador'];
            //$c_video_verdadero4 = $row_verdadero4['c_video'];
        }  

        $contenido_track5_verdadero = $mysqli->query("SELECT * FROM canciones where id_disco = 8 and c_track = 5");
        while($row_verdadero5 = $contenido_track5_verdadero -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_verdadero5 = $row_verdadero5['c_track'];
            $letra_verdadero_5 = $row_verdadero5['c_letra'];
            $c_nombre_verdadero5 = $row_verdadero5['c_nombre'];
            $c_duracion_verdadero5 = $row_verdadero5['c_duracion'];
            $c_colaborador_verdadero5 = $row_verdadero5['c_colaborador'];
            //$c_video_verdadero5 = $row_verdadero5['c_video'];
        }  

        $contenido_track6_verdadero = $mysqli->query("SELECT * FROM canciones where id_disco = 8 and c_track = 6");
        while($row_verdadero6 = $contenido_track6_verdadero -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_verdadero6 = $row_verdadero6['c_track'];
            $letra_verdadero_6 = $row_verdadero6['c_letra'];
            $c_nombre_verdadero6 = $row_verdadero6['c_nombre'];
            $c_duracion_verdadero6 = $row_verdadero6['c_duracion'];
            $c_colaborador_verdadero6 = $row_verdadero6['c_colaborador'];
            //$c_video_verdadero6 = $row_verdadero6['c_video'];
        }  

        $contenido_track7_verdadero = $mysqli->query("SELECT * FROM canciones where id_disco = 8 and c_track = 7");
        while($row_verdadero7 = $contenido_track7_verdadero -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_verdadero7 = $row_verdadero7['c_track'];
            $letra_verdadero_7 = $row_verdadero7['c_letra'];
            $c_nombre_verdadero7 = $row_verdadero7['c_nombre'];
            $c_duracion_verdadero7 = $row_verdadero7['c_duracion'];
            $c_colaborador_verdadero7 = $row_verdadero7['c_colaborador'];
            //$c_video_verdadero7 = $row_verdadero7['c_video'];
        }  

        $contenido_track8_verdadero = $mysqli->query("SELECT * FROM canciones where id_disco = 8 and c_track = 8");
        while($row_verdadero8 = $contenido_track8_verdadero -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_verdadero8 = $row_verdadero8['c_track'];
            $letra_verdadero_8 = $row_verdadero8['c_letra'];
            $c_nombre_verdadero8 = $row_verdadero8['c_nombre'];
            $c_duracion_verdadero8 = $row_verdadero8['c_duracion'];
            $c_colaborador_verdadero8 = $row_verdadero8['c_colaborador'];
            //$c_video_verdadero8 = $row_verdadero8['c_video'];
        }  

        $contenido_track9_verdadero = $mysqli->query("SELECT * FROM canciones where id_disco = 8 and c_track = 9");
        while($row_verdadero9 = $contenido_track9_verdadero -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_verdadero9 = $row_verdadero9['c_track'];
            $letra_verdadero_9 = $row_verdadero9['c_letra'];
            $c_nombre_verdadero9 = $row_verdadero9['c_nombre'];
            $c_duracion_verdadero9 = $row_verdadero9['c_duracion'];
            $c_colaborador_verdadero9 = $row_verdadero9['c_colaborador'];
            //$c_video_verdadero9 = $row_verdadero9['c_video'];
        }  

        $contenido_track10_verdadero = $mysqli->query("SELECT * FROM canciones where id_disco = 8 and c_track = 10");
        while($row_verdadero10 = $contenido_track10_verdadero -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_verdadero10 = $row_verdadero10['c_track'];
            $letra_verdadero_10 = $row_verdadero10['c_letra'];
            $c_nombre_verdadero10 = $row_verdadero10['c_nombre'];
            $c_duracion_verdadero10 = $row_verdadero10['c_duracion'];
            $c_colaborador_verdadero10 = $row_verdadero10['c_colaborador'];
            //$c_video_verdadero10 = $row_verdadero10['c_video'];
        }  

        $contenido_track11_verdadero = $mysqli->query("SELECT * FROM canciones where id_disco = 8 and c_track = 11");
        while($row_verdadero11 = $contenido_track11_verdadero -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_verdadero11 = $row_verdadero11['c_track'];
            $letra_verdadero_11 = $row_verdadero11['c_letra'];
            $c_nombre_verdadero11 = $row_verdadero11['c_nombre'];
            $c_duracion_verdadero11 = $row_verdadero11['c_duracion'];
            $c_colaborador_verdadero11 = $row_verdadero11['c_colaborador'];
            //$c_video_verdadero11 = $row_verdadero11['c_video'];
        }  

        $contenido_track12_verdadero = $mysqli->query("SELECT * FROM canciones where id_disco = 8 and c_track = 12");
        while($row_verdadero12 = $contenido_track12_verdadero -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_verdadero12 = $row_verdadero12['c_track'];
            $letra_verdadero_12 = $row_verdadero12['c_letra'];
            $c_nombre_verdadero12 = $row_verdadero12['c_nombre'];
            $c_duracion_verdadero12 = $row_verdadero12['c_duracion'];
            $c_colaborador_verdadero12 = $row_verdadero12['c_colaborador'];
            //$c_video_verdadero12= $row_verdadero12['c_video'];
        }                                                                                          

        $d_verdaderoamor .='
                        <div id="cd_verdadero" class="collapse hidden"> <!--  Comienza disco SIN LIMITE -->
                        <!-- Abre id#cd_sim -->
                        <h2>Album '.$nombredisco.' </h2>

                        <!-- COMIENZA PESTAnAS -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home_verdadero">Inicio</a></li>
                          <li><a data-toggle="tab" href="#cd8">CD</a></li>
                          <!--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
                        </ul>

                        <div class="tab-content">
                        <!-- COMIENZA TAB HOME -->    
                          <div id="home_verdadero" class="tab-pane fade in active">
                            <h3>Agradecimientos</h3>
                            <p><small><h5>
                            '.$agradecimientos.'
                            <strong>Daniel Agostini</strong>
                            </h5></small></p>
                          </div>
                          <!-- TERMINA TAB HOME -->    

                          <!-- COMIENZA TAB CD -->    
                          <div id="cd8" class="tab-pane fade">
                            
                            <h3>Lista de canciones</h3>
                          
        
                              <h4>Daniel Agostini</h4>
                              <p><small>
                              Disco compacto VERDADERO AMOR ganador de los Premios Gardel.
                              Contiene 4 covers en dos canciones enganchados.<br>
                              <strong>Nada que ver/Chica sexy</strong>
                              <strong>Dime dime/Arrepentida en la vida andaras</strong> <br>
                              

                                <!-- **************************************** -->    
                                <!-- COMIENZA ESCUCHAR CD COMPLETO "SIN LIMITE" -->
                                <a href="#solo" id="cd_verdaderoamor_full" valor="8" data-toggle="collapse" data-target="#cdcompleto8" class="btn btn-info btn-xs">Escuchar CD Completo</a>

                                <div id="cdcompleto8" class="col-xs-12 collapse ">
                                    <h4>Disco Completo</h4>

                                    <p id="full_cd_verdaderoamor" > </p>

                                </div>
                                <!-- TERMINA ESCUCHAR CD COMPLETO "SIN LIMITE" -->
                                <!-- **************************************** --> 



                               </small></p><br>
                              <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Nombre de la cancion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                <!-- TEMA 1 A PARTIR DE HOY-->
                                <tr>
                                    <td>'.$cd_track_verdadero1.'</td>
                                    <td>'.$c_nombre_verdadero1.'
                                   <a href="#sim" id="tema_verdadero_1" data-toggle="collapse" data-target="#apartirv" class="btn btn-info btn-xs">Escuchar</a>
                                    | <a href="#ver_cdsolo" id="dc_sim" data-toggle="collapse" data-target="#apartirl" class="btn btn-info btn-xs">Letra</a></p>
<form id="cd_verdadero_track_1">
    <input id="id_disco" name="disco" value="8" class="hidden">
    <input id="id_video" name="video" value="1" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="apartirv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>
                                    <!-- VIDEO -->

                                    <!-- LETRA  -->
                                    <div id="apartirl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_verdadero1.' <small>Duracion: <b>'.$c_duracion_verdadero1.'
                                                </b></small></h3><small>'.$c_colaborador_verdadero1.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_verdadero_1.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA  -->

                                   </td>
                                </tr> 
                                <!-- TEMA 1 A PARTIR DE HOY-->  

                                <!-- TEMA 2 PENAS DE AMOR -->
                                <tr>
                                    <td>'.$cd_track_verdadero2.'</td>
                                    <td>'.$c_nombre_verdadero2.'
                                        <a href="#ver_cdsolo" id="tema_verdadero_2" data-toggle="collapse" data-target="#penasv" class="btn btn-info btn-xs">Escuchar</a> | 
                                        <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#penasl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_verdadero_track_2">
    <input id="id_disco" name="disco" value="8" class="hidden">
    <input id="id_video" name="video" value="2" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="penasv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>
                                    <!-- VIDEO  -->


                                    <!-- LETRA  -->
                                    <div id="penasl" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_verdadero2.' <small>Duracion: <b>'.$c_duracion_verdadero2.'
                                                </b></small></h3><small>'.$c_colaborador_verdadero2.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_verdadero_2.'
                                                    </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                    <!-- LETRA -->

                                    </td>
                                </tr>    
                                <!-- TEMA 2 PENAS DE AMOR->      

                                <!-- TEMA 3 DIGANME -->
                                <tr>
                                    <td>'.$cd_track_verdadero3.'</td>
                                    <td>'.$c_nombre_verdadero3.'
                                   <a href="#ver_cdsolo" id="tema_verdadero_3" data-toggle="collapse" data-target="#diganmev" class="btn btn-info btn-xs">Escuchar</a> | 
                                   <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#diganmel" class="btn btn-info btn-xs">Letra</a>
<form id="cd_verdadero_track_3">
    <input id="id_disco" name="disco" value="8" class="hidden">
    <input id="id_video" name="video" value="3" class="hidden">
</form>
                                    <br>
                                    <div id="diganmev" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div> 
                                    
                                    <div id="diganmel" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_verdadero3.' <small>Duracion: <b>'.$c_duracion_verdadero3.'
                                                </b></small></h3><small>'.$c_colaborador_verdadero3.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_verdadero_3.'
                                                    </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                   </td> 
                                </tr> 
                                <!-- TEMA 3 DIGANME  -->  
                              
                                <!-- TEMA 4 COMO PODRE OLVIDARTE --> 
                                <tr>
                                    <td>'.$cd_track_verdadero4.'</td>
                                    <td>'.$c_nombre_verdadero4.'
                                    <a href="#ver_cdsolo" id="tema_verdadero_4" data-toggle="collapse" data-target="#podrev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#podrel" class="btn btn-info btn-xs">Letra</a>

<form id="cd_verdadero_track_4">
    <input id="id_disco" name="disco" value="8" class="hidden">
    <input id="id_video" name="video" value="4" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="podrev" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="podrel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_verdadero4.' <small>Duracion: <b>'.$c_duracion_verdadero4.'
                                                </b></small></h3><small>'.$c_colaborador_verdadero4.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_verdadero_4.'
                                                    </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>    

                                    </td>
                                </tr> 
                                <!-- TEMA 4 COMO PODRE OLVIDARTE --> 

                                <!-- TEMA 5 YO SE --> 
                                <tr>
                                    <td>'.$cd_track_verdadero5.'</td>
                                    <td>'.$c_nombre_verdadero5.'

                                    <a href="#ver_cdsolo" id="tema_verdadero_5" data-toggle="collapse" data-target="#yosev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#yosel" class="btn btn-info btn-xs">Letra</a>
<form id="cd_verdadero_track_5">
    <input id="id_disco" name="disco" value="8" class="hidden">
    <input id="id_video" name="video" value="5" class="hidden">
</form>

                                    <!-- Sin sentido --><br>
                                    <div id="yosev" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="yosel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_verdadero5.' <small>Duracion: <b>'.$c_duracion_verdadero5.'
                                                </b></small></h3><small>'.$c_colaborador_verdadero5.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_verdadero_5.'
                                                    </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>                                                                    
                                <!-- TEMA 5 YO SE --> 

                                <!-- TEMA 6 NADA QUE VER / CHICA SEXY --> 
                                <tr>
                                    <td>'.$cd_track_verdadero6.'</td>
                                    <td>'.$c_nombre_verdadero6.'
                                    <a href="#ver_cdsolo" id="tema_verdadero_6" data-toggle="collapse" data-target="#chicav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#chical" class="btn btn-info btn-xs">Letra</a>
<form id="cd_verdadero_track_6">
    <input id="id_disco" name="disco" value="8" class="hidden">
    <input id="id_video" name="video" value="6" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="chicav" class="col-xs-12 collapse">                                  
                                   <!-- ACA VA EL VIDEO -->
                                    </div>

                                    <!-- LETRA  -->
                                    <div id="chical" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_verdadero6.' <small>Duracion: <b>'.$c_duracion_verdadero6.'
                                                </b></small></h3><small>'.$c_colaborador_verdadero6.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_verdadero_6.'
                                                    </p>  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 6 NADA QUE VER / CHICA SEXY  --> 

                                <!-- TEMA 7 AMARTE ASI --> 
                                <tr>
                                    <td>'.$cd_track_verdadero7.'</td>
                                    <td>'.$c_nombre_verdadero7.'

                                    <a href="#ver_cdsolo" id="tema_verdadero_7" data-toggle="collapse" data-target="#amarteasiv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#amarteasil" class="btn btn-info btn-xs">Letra</a>
                                    <!-- VIDEO -->
<form id="cd_verdadero_track_7">
    <input id="id_disco" name="disco" value="8" class="hidden">
    <input id="id_video" name="video" value="7" class="hidden">
</form>                              
                                    <br>
                                     <div id="amarteasiv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="amarteasil" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_verdadero7.' <small>Duracion: <b>'.$c_duracion_verdadero7.'
                                                </b></small></h3><small>'.$c_colaborador_verdadero7.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_verdadero_7.'
                                                    </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>
                                <!-- TEMA 7  AMARTE ASI -->

                                <!-- TEMA 8 ES UN BUEN DIA -->
                                <tr>
                                    <td>'.$cd_track_verdadero8.'</td>
                                    <td>'.$c_nombre_verdadero8.'
                                    
                                    <a href="#ver_cdsolo" id="tema_verdadero_8" data-toggle="collapse" data-target="#diav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#dial" class="btn btn-info btn-xs">Letra</a>
                                    <!-- VIDEO -->
<form id="cd_verdadero_track_8">
    <input id="id_disco" name="disco" value="8" class="hidden">
    <input id="id_video" name="video" value="8" class="hidden">
</form>
                                    <br>
                                    <div id="diav" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>                                    


                                    <!-- LETRA  -->
                                    <div id="dial" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                 <th><h3>'.$c_nombre_verdadero8.' <small>Duracion: <b>'.$c_duracion_verdadero8.'
                                                </b></small></h3><small>'.$c_colaborador_verdadero8.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_verdadero_8.'
                                                    </p>                                                               
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr> 
                                <!-- TEMA 8 ES UN BUEN DIA -->

                                <!-- TEMA 9 PROCURO OLVIDARTE -->
                                <tr>
                                    <td>'.$cd_track_verdadero9.'</td>
                                    <td>'.$c_nombre_verdadero9.'
                                    
                                    <a href="#ver_cdsolo" id="tema_verdadero_9" data-toggle="collapse" data-target="#procurov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#procurol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_verdadero_track_9">
    <input id="id_disco" name="disco" value="8" class="hidden">
    <input id="id_video" name="video" value="9" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="procurov" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="procurol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                 <th><h3>'.$c_nombre_verdadero9.' <small>Duracion: <b>'.$c_duracion_verdadero9.'
                                                </b></small></h3><small>'.$c_colaborador_verdadero9.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_verdadero_9.'
                                                    </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 9  PROCURO OLVIDARTE -->

                                <!-- TEMA 10 YO TE VOY A AMAR-->
                                <tr>
                                    <td>'.$cd_track_verdadero10.'</td>
                                    <td>'.$c_nombre_verdadero10.'

                                    <a href="#ver_cdsolo" id="tema_verdadero_10" data-toggle="collapse" data-target="#yoamarv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#yoamarl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_verdadero_track_10">
    <input id="id_disco" name="disco" value="8" class="hidden">
    <input id="id_video" name="video" value="10" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="yoamarv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="yoamarl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                 <th><h3>'.$c_nombre_verdadero10.' <small>Duracion: <b>'.$c_duracion_verdadero10.'
                                                </b></small></h3><small>'.$c_colaborador_verdadero10.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_verdadero_10.'
                                                    </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 10 YO TE VOY A AMAR --> 

                                <!-- TEMA 11 AMARTE ES IMPOSIBLE -->
                                <tr>
                                    <td>'.$cd_track_verdadero11.'</td>
                                    <td>'.$c_nombre_verdadero11.'

                                    <a href="#ver_cdsolo" id="tema_verdadero_11" data-toggle="collapse" data-target="#imposiblev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#imposiblel" class="btn btn-info btn-xs">Letra</a>

<form id="cd_verdadero_track_11">
    <input id="id_disco" name="disco" value="8" class="hidden">
    <input id="id_video" name="video" value="11" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="imposiblev" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="imposiblel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                 <th><h3>'.$c_nombre_verdadero11.' <small>Duracion: <b>'.$c_duracion_verdadero11.'
                                                </b></small></h3><small>'.$c_colaborador_verdadero11.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_verdadero_11.'
                                                    </p>                                                      
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 11 AMARTE ES IMPOSIBLE -->     

                                <!-- TEMA 12  DIME DIME / ARREPENTIDA EN LA VIDA ANDARaS -->
                                <tr>
                                    <td>'.$cd_track_verdadero12.'</td>
                                    <td>'.$c_nombre_verdadero12.'

                                    <a href="#ver_cdsolo" id="tema_verdadero_12" data-toggle="collapse" data-target="#arrepentidav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#arrepentidal" class="btn btn-info btn-xs">Letra</a>

<form id="cd_verdadero_track_12">
    <input id="id_disco" name="disco" value="8" class="hidden">
    <input id="id_video" name="video" value="12" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="arrepentidav" class="col-xs-12 collapse">                                  
                                      <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="arrepentidal" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                 <th><h3>'.$c_nombre_verdadero12.' <small>Duracion: <b>'.$c_duracion_verdadero12.'
                                                </b></small></h3><small>'.$c_colaborador_verdadero12.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_verdadero_12.'
                                                    </p>                                                   
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 12  DIME DIME / ARREPENTIDA EN LA VIDA ANDARaS  -->    


                              

                                                                                                                                                  

                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>

                                <!--
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                              -->
                                </tbody>
                              </table>
                            </div> <!-- Cierra CD -->                           


                           
                          </div>
                          <!-- TERMINA TAB HOME -->    



                          <!--
                          <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                          </div>
                          -->

                        </div>
                        <!-- TERMINA PESTAnAS -->


                        <!-- Cierra id#cd_solo -->    
                        </div>                   
              ';
          }
    return $d_verdaderoamor;          
    }           

    function voypormas(){
        $d_voypormas= "";

          $mysqli = conexionBD(); // Conexion a la Base Hackaton
          $disco_voypormas = $mysqli->query("SELECT * FROM discos  WHERE id_disco = 9 ");   
         
            while($res_vmas = $disco_voypormas -> fetch_array(MYSQLI_ASSOC))
            {
                $agradecimientos = $res_vmas['cd_gracias'];
                $nombredisco  = $res_vmas['cd_nombre'];


        // CORAZONCITO
        $contenido_track1_voypormas = $mysqli->query("SELECT * FROM canciones where id_disco = 9 and c_track = 1");
        while($row_voypormas1 = $contenido_track1_voypormas -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_voypormas1 = $row_voypormas1['c_track'];
            $letra_voypormas_1 = $row_voypormas1['c_letra'];
            $c_nombre_voypormas1 = $row_voypormas1['c_nombre'];
            $c_duracion_voypormas1 = $row_voypormas1['c_duracion'];
            $c_colaborador_voypormas1 = $row_voypormas1['c_colaborador'];
            //$c_video_voypormas1 = $row_voypormas1['c_video'];
        }  

        $contenido_track2_voypormas = $mysqli->query("SELECT * FROM canciones where id_disco = 9 and c_track = 2");
        while($row_voypormas2 = $contenido_track2_voypormas -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_voypormas2 = $row_voypormas2['c_track'];
            $letra_voypormas_2 = $row_voypormas2['c_letra'];
            $c_nombre_voypormas2 = $row_voypormas2['c_nombre'];
            $c_duracion_voypormas2 = $row_voypormas2['c_duracion'];
            $c_colaborador_voypormas2 = $row_voypormas2['c_colaborador'];
            //$c_video_voypormas2 = $row_voypormas2['c_video'];
        }  

        $contenido_track3_voypormas = $mysqli->query("SELECT * FROM canciones where id_disco = 9 and c_track = 3");
        while($row_voypormas3 = $contenido_track3_voypormas -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_voypormas3 = $row_voypormas3['c_track'];
            $letra_voypormas_3 = $row_voypormas3['c_letra'];
            $c_nombre_voypormas3 = $row_voypormas3['c_nombre'];
            $c_duracion_voypormas3 = $row_voypormas3['c_duracion'];
            $c_colaborador_voypormas3 = $row_voypormas3['c_colaborador'];
            //$c_video_voypormas3 = $row_voypormas3['c_video'];
        }  

        $contenido_track4_voypormas = $mysqli->query("SELECT * FROM canciones where id_disco = 9 and c_track = 4");
        while($row_voypormas4 = $contenido_track4_voypormas -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_voypormas4 = $row_voypormas4['c_track'];
            $letra_voypormas_4 = $row_voypormas4['c_letra'];
            $c_nombre_voypormas4 = $row_voypormas4['c_nombre'];
            $c_duracion_voypormas4 = $row_voypormas4['c_duracion'];
            $c_colaborador_voypormas4 = $row_voypormas4['c_colaborador'];
            //$c_video_voypormas4 = $row_voypormas4['c_video'];
        }  

        $contenido_track5_voypormas = $mysqli->query("SELECT * FROM canciones where id_disco = 9 and c_track = 5");
        while($row_voypormas5 = $contenido_track5_voypormas -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_voypormas5 = $row_voypormas5['c_track'];
            $letra_voypormas_5 = $row_voypormas5['c_letra'];
            $c_nombre_voypormas5 = $row_voypormas5['c_nombre'];
            $c_duracion_voypormas5 = $row_voypormas5['c_duracion'];
            $c_colaborador_voypormas5 = $row_voypormas5['c_colaborador'];
            //$c_video_voypormas5 = $row_voypormas5['c_video'];
        }  

        $contenido_track6_voypormas = $mysqli->query("SELECT * FROM canciones where id_disco = 9 and c_track = 6");
        while($row_voypormas6 = $contenido_track6_voypormas -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_voypormas6 = $row_voypormas6['c_track'];
            $letra_voypormas_6 = $row_voypormas6['c_letra'];
            $c_nombre_voypormas6 = $row_voypormas6['c_nombre'];
            $c_duracion_voypormas6 = $row_voypormas6['c_duracion'];
            $c_colaborador_voypormas6 = $row_voypormas6['c_colaborador'];
            //$c_video_voypormas6 = $row_voypormas6['c_video'];
        }  

        $contenido_track7_voypormas = $mysqli->query("SELECT * FROM canciones where id_disco = 9 and c_track = 7");
        while($row_voypormas7 = $contenido_track7_voypormas -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_voypormas7 = $row_voypormas7['c_track'];
            $letra_voypormas_7 = $row_voypormas7['c_letra'];
            $c_nombre_voypormas7 = $row_voypormas7['c_nombre'];
            $c_duracion_voypormas7 = $row_voypormas7['c_duracion'];
            $c_colaborador_voypormas7 = $row_voypormas7['c_colaborador'];
            //$c_video_voypormas7 = $row_voypormas7['c_video'];
        }  

        $contenido_track8_voypormas = $mysqli->query("SELECT * FROM canciones where id_disco = 9 and c_track = 8");
        while($row_voypormas8 = $contenido_track8_voypormas -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_voypormas8 = $row_voypormas8['c_track'];
            $letra_voypormas_8 = $row_voypormas8['c_letra'];
            $c_nombre_voypormas8 = $row_voypormas8['c_nombre'];
            $c_duracion_voypormas8 = $row_voypormas8['c_duracion'];
            $c_colaborador_voypormas8 = $row_voypormas8['c_colaborador'];
            //$c_video_voypormas8 = $row_voypormas8['c_video'];
        }  

        $contenido_track9_voypormas = $mysqli->query("SELECT * FROM canciones where id_disco = 9 and c_track = 9");
        while($row_voypormas9 = $contenido_track9_voypormas -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_voypormas9 = $row_voypormas9['c_track'];
            $letra_voypormas_9 = $row_voypormas9['c_letra'];
            $c_nombre_voypormas9 = $row_voypormas9['c_nombre'];
            $c_duracion_voypormas9 = $row_voypormas9['c_duracion'];
            $c_colaborador_voypormas9 = $row_voypormas9['c_colaborador'];
            //$c_video_voypormas9 = $row_voypormas9['c_video'];
        }  

        $contenido_track10_voypormas = $mysqli->query("SELECT * FROM canciones where id_disco = 9 and c_track = 10");
        while($row_voypormas10 = $contenido_track10_voypormas -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_voypormas10 = $row_voypormas10['c_track'];
            $letra_voypormas_10 = $row_voypormas10['c_letra'];
            $c_nombre_voypormas10 = $row_voypormas10['c_nombre'];
            $c_duracion_voypormas10 = $row_voypormas10['c_duracion'];
            $c_colaborador_voypormas10 = $row_voypormas10['c_colaborador'];
            //$c_video_voypormas10 = $row_voypormas10['c_video'];
        }  

        $contenido_track11_voypormas = $mysqli->query("SELECT * FROM canciones where id_disco = 9 and c_track = 11");
        while($row_voypormas11 = $contenido_track11_voypormas -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_voypormas11 = $row_voypormas11['c_track'];
            $letra_voypormas_11 = $row_voypormas11['c_letra'];
            $c_nombre_voypormas11 = $row_voypormas11['c_nombre'];
            $c_duracion_voypormas11 = $row_voypormas11['c_duracion'];
            $c_colaborador_voypormas11 = $row_voypormas11['c_colaborador'];
            //$c_video_voypormas11 = $row_voypormas11['c_video'];
        }  

         $contenido_track12_voypormas = $mysqli->query("SELECT * FROM canciones where id_disco = 9 and c_track = 12");
        while($row_voypormas12 = $contenido_track12_voypormas -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_voypormas12 = $row_voypormas12['c_track'];
            $letra_voypormas_12 = $row_voypormas12['c_letra'];
            $c_nombre_voypormas12 = $row_voypormas12['c_nombre'];
            $c_duracion_voypormas12 = $row_voypormas12['c_duracion'];
            $c_colaborador_voypormas12 = $row_voypormas12['c_colaborador'];
            //$c_video_voypormas12 = $row_voypormas12['c_video'];
        }  

        $contenido_track13_voypormas = $mysqli->query("SELECT * FROM canciones where id_disco = 9 and c_track = 13");
        while($row_voypormas13 = $contenido_track13_voypormas -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_voypormas13 = $row_voypormas13['c_track'];
            $letra_voypormas_13 = $row_voypormas13['c_letra'];
            $c_nombre_voypormas13 = $row_voypormas13['c_nombre'];
            $c_duracion_voypormas13 = $row_voypormas13['c_duracion'];
            $c_colaborador_voypormas13 = $row_voypormas13['c_colaborador'];
            //$c_video_voypormas13 = $row_voypormas13['c_video'];
        }  

        $contenido_track14_voypormas = $mysqli->query("SELECT * FROM canciones where id_disco = 9 and c_track = 14");
        while($row_voypormas14 = $contenido_track14_voypormas -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_voypormas14 = $row_voypormas14['c_track'];
            $letra_voypormas_14 = $row_voypormas14['c_letra'];
            $c_nombre_voypormas14 = $row_voypormas14['c_nombre'];
            $c_duracion_voypormas14 = $row_voypormas14['c_duracion'];
            $c_colaborador_voypormas14 = $row_voypormas14['c_colaborador'];
            //$c_video_voypormas14 = $row_voypormas14['c_video'];
        }                  

        $contenido_track15_voypormas = $mysqli->query("SELECT * FROM canciones where id_disco = 9 and c_track = 15");
        while($row_voypormas15 = $contenido_track15_voypormas -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_voypormas15 = $row_voypormas15['c_track'];
            $letra_voypormas_15 = $row_voypormas15['c_letra'];
            $c_nombre_voypormas15 = $row_voypormas15['c_nombre'];
            $c_duracion_voypormas15 = $row_voypormas15['c_duracion'];
            $c_colaborador_voypormas15 = $row_voypormas15['c_colaborador'];
            //$c_video_voypormas15 = $row_voypormas15['c_video'];
        } 

        $d_voypormas .='
            <div id="cd_voypormas" class="collapse hidden"> <!--  Comienza disco VOY POR MAS -->
                        <!-- Abre id#cd_sim -->
                        <h2>Album '.$nombredisco.' </h2>

                        <!-- COMIENZA PESTAnAS -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home_voypormas">Inicio</a></li>
                          <li><a data-toggle="tab" href="#cd9">CD</a></li>
                          <!--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
                        </ul>

                        <div class="tab-content">
                        <!-- COMIENZA TAB HOME -->    
                          <div id="home_voypormas" class="tab-pane fade in active">
                            <h3>Agradecimientos</h3>
                            <p><small><h5>
                           '.$agradecimientos.' 
                            <strong>Daniel Agostini</strong>
                            
                            </h5></small></p>
                          </div>
                          <!-- TERMINA TAB HOME -->    

                          <!-- COMIENZA TAB CD -->    
                          <div id="cd9" class="tab-pane fade">
                            
                            <h3>Lista de canciones</h3>
                          
        
                              <h4>Daniel Agostini</h4>
                              <p><small>

                              VOY POR MAS Disco con 15 temas, 1 cover y uno dedicado a su hijo Gonzalo.
                              <br>Nº7 VEN A BAILAR (cover)
                              <br>Nº15 NADIE MAS QUE TU (Para Gonzalo)     

                               </small></p><br>



                                <!-- **************************************** -->    
                                <!-- COMIENZA ESCUCHAR CD COMPLETO "SIN LIMITE" -->
                                <a href="#solo" id="cd_voypormas_full" valor="9" data-toggle="collapse" data-target="#cdcompleto9" class="btn btn-info btn-xs">Escuchar CD Completo</a>

                                <div id="cdcompleto9" class="col-xs-12 collapse ">
                                    <h4>Disco Completo</h4>

                                    <p id="full_cd_voypormas" > </p>

                                </div>
                                <!-- TERMINA ESCUCHAR CD COMPLETO "SIN LIMITE" -->
                                <!-- **************************************** --> 


                              <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Nombre de la cancion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                <!-- TEMA 1 TRATARE DE OLVIDARTE-->
                                <tr>
                                    <td>'.$cd_track_voypormas1.'</td>
                                    <td>'.$c_nombre_voypormas1.' 
                                   <a href="#sim" id="tema_voypormas_1" data-toggle="collapse" data-target="#tratarev" class="btn btn-info btn-xs">Escuchar</a>
                                    | <a href="#ver_cdsolo" id="dc_sim" data-toggle="collapse" data-target="#tratarel" class="btn btn-info btn-xs">Letra</a></p>
<form id="cd_voypormas_track_1">
    <input id="id_disco" name="disco" value="9" class="hidden">
    <input id="id_video" name="video" value="1" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="tratarev" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>
                                    <!-- VIDEO -->

                                    <!-- LETRA  -->
                                    <div id="tratarel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                          <th><h3>'.$c_nombre_voypormas1.' <small>Duracion: <b>'.$c_duracion_voypormas1.'
                                     </b></small></h3><small>'.$c_colaborador_voypormas1.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    <small>'.$letra_voypormas_1.'</small>
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA  -->

                                   </td>
                                </tr> 
                                <!-- TEMA 1 TRATARE DE OLVIDARTE-->  

                                <!-- TEMA 2 MUEVETE CHIQUITA -->
                                <tr>
                                    <td>'.$cd_track_voypormas2.'</td>
                                    <td>'.$c_nombre_voypormas2.' 
                                        <a href="#ver_cdsolo" id="tema_voypormas_2" data-toggle="collapse" data-target="#chiquitav" class="btn btn-info btn-xs">Escuchar</a> | 
                                        <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#chiquital" class="btn btn-info btn-xs">Letra</a>
<form id="cd_voypormas_track_2">
    <input id="id_disco" name="disco" value="9" class="hidden">
    <input id="id_video" name="video" value="2" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="chiquitav" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>
                                    <!-- VIDEO  -->


                                    <!-- LETRA  -->
                                    <div id="chiquital" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                          <th><h3>'.$c_nombre_voypormas2.' <small>Duracion: <b>'.$c_duracion_voypormas2.'
                                            </b></small></h3><small>'.$c_colaborador_voypormas2.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                    <br>
                                    <p>
                                <small>'.$letra_voypormas_2.'</small>
                                    </p>
                                    
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                    <!-- LETRA -->

                                    </td>
                                </tr>    
                                <!-- TEMA 2 MUEVETE CHIQUITA->      

                                <!-- TEMA 3 A VOS TE GUSTA EL ROCK -->
                                <tr>
                                    <td>'.$cd_track_voypormas3.'</td>
                                    <td>'.$c_nombre_voypormas3.' 
                                   <a href="#ver_cdsolo" id="tema_voypormas_3" data-toggle="collapse" data-target="#rockv" class="btn btn-info btn-xs">Escuchar</a> | 
                                   <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#rockl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_voypormas_track_3">
    <input id="id_disco" name="disco" value="9" class="hidden">
    <input id="id_video" name="video" value="3" class="hidden">
</form>                             <br>
                                    <div id="rockv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div> 
                                    
                                    <div id="rockl" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                          <th><h3>'.$c_nombre_voypormas3.' <small>Duracion: <b>'.$c_duracion_voypormas3.'
                                            </b></small></h3><small>'.$c_colaborador_voypormas3.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                    <br>
                                    <p>
                                <small>'.$letra_voypormas_3.'</small>
                                    </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                   </td> 
                                </tr> 
                                <!-- TEMA 3 A VOS TE GUSTA EL ROCK  -->  
                              
                                <!-- TEMA 4  Y YO SOY TU PRISIONERO / TRAICIONERA --> 
                                <tr>
                                    <td>'.$cd_track_voypormas4.'</td>
                                    <td>'.$c_nombre_voypormas4.' 
                                    <a href="#ver_cdsolo" id="tema_voypormas_4" data-toggle="collapse" data-target="#prisiov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#prisiol" class="btn btn-info btn-xs">Letra</a>
                                    <!-- VIDEO -->

<form id="cd_voypormas_track_4">
    <input id="id_disco" name="disco" value="9" class="hidden">
    <input id="id_video" name="video" value="4" class="hidden">
</form>                              <br>       
                                    <div id="prisiov" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="prisiol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                            <th><h3>'.$c_nombre_voypormas4.' <small>Duracion: <b>'.$c_duracion_voypormas4.'
                                            </b></small></h3><small>'.$c_colaborador_voypormas4.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                    <br>
                                    <p>
                                <small>'.$letra_voypormas_4.'</small>
                                    </p>                                               
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>    

                                    </td>
                                </tr> 
                                <!-- TEMA 4  Y YO SOY TU PRISIONERO / TRAICIONERA --> 

                                <!-- TEMA 5 PROMETO AMARTE --> 
                                <tr>
                                    <td>'.$cd_track_voypormas5.'</td>
                                    <td>'.$c_nombre_voypormas5.' 

                                    <a href="#ver_cdsolo" id="tema_voypormas_5" data-toggle="collapse" data-target="#pamartev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#pamartel" class="btn btn-info btn-xs">Letra</a>
<form id="cd_voypormas_track_5">
    <input id="id_disco" name="disco" value="9" class="hidden">
    <input id="id_video" name="video" value="5" class="hidden">
</form>

                                    <!-- Sin sentido --><br>
                                    <div id="pamartev" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="pamartel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                            <th><h3>'.$c_nombre_voypormas5.' <small>Duracion: <b>'.$c_duracion_voypormas5.'
                                            </b></small></h3><small>'.$c_colaborador_voypormas5.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                            <br>
                                            <p>
                                            <small>'.$letra_voypormas_5.'</small>
                                            </p>                                               
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>                                                                    
                                <!-- TEMA 5 PROMETO AMARTE --> 

                                <!-- TEMA 6 UN POQUITO MaS --> 
                                <tr>
                                    <td>'.$cd_track_voypormas6.'</td>
                                    <td>'.$c_nombre_voypormas6.'
                                    <a href="#ver_cdsolo" id="tema_voypormas_6" data-toggle="collapse" data-target="#poquitov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#poquitol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_voypormas_track_6">
    <input id="id_disco" name="disco" value="9" class="hidden">
    <input id="id_video" name="video" value="6" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="poquitov" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>

                                    <!-- LETRA  -->
                                    <div id="poquitol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                          <th><h3>'.$c_nombre_voypormas6.' <small>Duracion: <b>'.$c_duracion_voypormas6.'
                                            </b></small></h3><small>'.$c_colaborador_voypormas6.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                            <br>
                                            <p>
                                            <small>'.$letra_voypormas_6.'</small>
                                            </p>   
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 6 UN POQUITO MaS  --> 

                                <!-- TEMA 7 VEN A BAILAR --> 
                                <tr>
                                    <td>'.$cd_track_voypormas7.'</td>
                                    <td>'.$c_nombre_voypormas7.'

                                    <a href="#ver_cdsolo" id="tema_voypormas_7" data-toggle="collapse" data-target="#venabailarv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#venabailarl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_voypormas_track_7">
    <input id="id_disco" name="disco" value="9" class="hidden">
    <input id="id_video" name="video" value="7" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="venabailarv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="venabailarl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                             <th><h3>'.$c_nombre_voypormas7.' <small>Duracion: <b>'.$c_duracion_voypormas7.'
                                             </b></small></h3><small>'.$c_colaborador_voypormas7.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                            <br>
                                            <p>
                                            <small>'.$letra_voypormas_7.'</small>
                                            </p>                                                 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>
                                <!-- TEMA 7  VEN A BAILAR -->

                                <!-- TEMA 8 CARICIAS PRESTADAS -->
                                <tr>
                                    <td>'.$cd_track_voypormas8.'</td>
                                    <td>'.$c_nombre_voypormas8.'
                                    
                                    <a href="#ver_cdsolo" id="tema_voypormas_8" data-toggle="collapse" data-target="#cariciasv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#cariciasl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_voypormas_track_8">
    <input id="id_disco" name="disco" value="9" class="hidden">
    <input id="id_video" name="video" value="8" class="hidden">
</form>                                    
                                    <!-- VIDEO --><br>
                                    <div id="cariciasv" class="col-xs-12 collapse">                                  
                                      <!-- ACA VA EL VIDEO -->
                                    </div>                                    


                                    <!-- LETRA  -->
                                    <div id="cariciasl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                             <th><h3>'.$c_nombre_voypormas8.' <small>Duracion: <b>'.$c_duracion_voypormas8.'
                                             </b></small></h3><small>'.$c_colaborador_voypormas8.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                            <br>
                                            <p>
                                            <small>'.$letra_voypormas_8.'</small>
                                            </p>                                                   
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr> 
                                <!-- TEMA 8 CARICIAS PRESTADAS -->

                                <!-- TEMA 9 HASTA CUANDO -->
                                <tr>
                                    <td>'.$cd_track_voypormas9.'</td>
                                    <td>'.$c_nombre_voypormas9.'
                                    
                                    <a href="#ver_cdsolo" id="tema_voypormas_9" data-toggle="collapse" data-target="#hcuandov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#hcuandol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_voypormas_track_9">
    <input id="id_disco" name="disco" value="9" class="hidden">
    <input id="id_video" name="video" value="9" class="hidden">
</form>  

                                    <!-- VIDEO --><br>
                                    <div id="hcuandov" class="col-xs-12 collapse">                                  
                                      <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="hcuandol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                             <th><h3>'.$c_nombre_voypormas9.' <small>Duracion: <b>'.$c_duracion_voypormas9.'
                                             </b></small></h3><small>'.$c_colaborador_voypormas9.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                            <br>
                                            <p>
                                            <small>'.$letra_voypormas_9.'</small>
                                            </p>                                                 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 9  HASTA CUANDO -->

                                <!-- TEMA 10 AY AMOR-->
                                <tr>
                                    <td>'.$cd_track_voypormas10.'</td>
                                    <td>'.$c_nombre_voypormas10.'

                                    <a href="#ver_cdsolo" id="tema_voypormas_10" data-toggle="collapse" data-target="#ayamorv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#ayamorl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_voypormas_track_10">
    <input id="id_disco" name="disco" value="9" class="hidden">
    <input id="id_video" name="video" value="10" class="hidden">
</form> 
                                    <!-- VIDEO --><br>
                                    <div id="ayamorv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="ayamorl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                             <th><h3>'.$c_nombre_voypormas10.' <small>Duracion: <b>'.$c_duracion_voypormas10.'
                                             </b></small></h3><small>'.$c_colaborador_voypormas10.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                            <br>
                                            <p>
                                            <small>'.$letra_voypormas_10.'</small>
                                            </p>                                               
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 10 AY AMOR --> 

                                <!-- TEMA 11 SEREMOS TRES -->
                                <tr>
                                    <td>'.$cd_track_voypormas11.'</td>
                                    <td>'.$c_nombre_voypormas11.'

                                    <a href="#ver_cdsolo" id="tema_voypormas_11" data-toggle="collapse" data-target="#seremostresv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#seremostresl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_voypormas_track_11">
    <input id="id_disco" name="disco" value="9" class="hidden">
    <input id="id_video" name="video" value="11" class="hidden">
</form> 

                                    <!-- VIDEO --><br>
                                    <div id="seremostresv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="seremostresl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                             <th><h3>'.$c_nombre_voypormas11.' <small>Duracion: <b>'.$c_duracion_voypormas11.'
                                             </b></small></h3><small>'.$c_colaborador_voypormas11.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                            <br>
                                            <p>
                                            <small>'.$letra_voypormas_11.'</small>
                                            </p>                                                
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 11 SEREMOS TRES -->     

                                <!-- TEMA 12   LA WAWA -->
                                <tr>
                                    <td>'.$cd_track_voypormas12.'</td>
                                    <td>'.$c_nombre_voypormas12.'

                                    <a href="#ver_cdsolo" id="tema_voypormas_12" data-toggle="collapse" data-target="#wawav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#wawal" class="btn btn-info btn-xs">Letra</a>
<form id="cd_voypormas_track_12">
    <input id="id_disco" name="disco" value="9" class="hidden">
    <input id="id_video" name="video" value="12" class="hidden">
</form> 
                                    <!-- VIDEO --><br>
                                    <div id="wawav" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="wawal" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                             <th><h3>'.$c_nombre_voypormas12.' <small>Duracion: <b>'.$c_duracion_voypormas12.'
                                             </b></small></h3><small>'.$c_colaborador_voypormas12.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                            <br>
                                            <p>
                                            <small>'.$letra_voypormas_12.'</small>
                                            </p>                                                   
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 12   LA WAWA  -->    


                                <!-- TEMA 13   DULCE COMO CARAMELO -->
                                <tr>
                                    <td>'.$cd_track_voypormas13.'</td>
                                    <td>'.$c_nombre_voypormas13.'

                                    <a href="#ver_cdsolo" id="tema_voypormas_13" data-toggle="collapse" data-target="#caramelov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#caramelol" class="btn btn-info btn-xs">Letra</a>
<form id="cd_voypormas_track_13">
    <input id="id_disco" name="disco" value="9" class="hidden">
    <input id="id_video" name="video" value="13" class="hidden">
</form> 

                                    <!-- VIDEO --><br>
                                    <div id="caramelov" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="caramelol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                             <th><h3>'.$c_nombre_voypormas13.' <small>Duracion: <b>'.$c_duracion_voypormas13.'
                                             </b></small></h3><small>'.$c_colaborador_voypormas13.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                            <br>
                                            <p>
                                            <small>'.$letra_voypormas_13.'</small>
                                            </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 13   DULCE COMO CARAMELO  -->  

                                <!-- TEMA 14   FANTASMAS (DE AMOR) -->
                                <tr>
                                    <td>'.$cd_track_voypormas14.'</td>
                                    <td>'.$c_nombre_voypormas14.'

                                    <a href="#ver_cdsolo" id="tema_voypormas_14" data-toggle="collapse" data-target="#fantasmasv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#fantasmasl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_voypormas_track_14">
    <input id="id_disco" name="disco" value="9" class="hidden">
    <input id="id_video" name="video" value="14" class="hidden">
</form> 
                                    <!-- VIDEO --><br>
                                    <div id="fantasmasv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="fantasmasl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                             <th><h3>'.$c_nombre_voypormas14.' <small>Duracion: <b>'.$c_duracion_voypormas14.'
                                             </b></small></h3><small>'.$c_colaborador_voypormas14.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                            <br>
                                            <p>
                                            <small>'.$letra_voypormas_14.'</small>
                                            </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 14   FANTASMAS (DE AMOR)  -->    

                                <!-- TEMA 15    NADIE MaS QUE Tu -->
                                <tr>
                                    <td>'.$cd_track_voypormas15.'</td>
                                    <td>'.$c_nombre_voypormas15.'

                                    <a href="#ver_cdsolo" id="tema_voypormas_15" data-toggle="collapse" data-target="#nadiemasv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#nadiemasl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_voypormas_track_15">
    <input id="id_disco" name="disco" value="9" class="hidden">
    <input id="id_video" name="video" value="15" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="nadiemasv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="nadiemasl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                             <th><h3>'.$c_nombre_voypormas15.' <small>Duracion: <b>'.$c_duracion_voypormas15.'
                                             </b></small></h3><small>'.$c_colaborador_voypormas15.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                            <br>
                                            <p>
                                            <small>'.$letra_voypormas_15.'</small>
                                            </p>                                                
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 15    NADIE MaS QUE Tu -->                                                                 

                              

                                                                                                                                                  

                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>

                                <!--
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                              -->
                                </tbody>
                              </table>
                            </div> <!-- Cierra CD -->                           


                           
                          </div>
                          <!-- TERMINA TAB HOME -->    



                          <!--
                          <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                          </div>
                          -->

                        </div>
                        <!-- TERMINA PESTAnAS -->


                        <!-- Cierra id#cd_solo -->    
                        </div>                   
              ';
          }
    return $d_voypormas;          
    }      

    function cclase(){
        $d_cclase= "";

          $mysqli = conexionBD(); // Conexion a la Base Hackaton
          $disco_cclase = $mysqli->query("SELECT * FROM discos  WHERE id_disco = 10 ");   
         
            while($res_cclase = $disco_cclase -> fetch_array(MYSQLI_ASSOC))
            {
                $agradecimientos = $res_cclase['cd_gracias'];
                $nombredisco  = $res_cclase['cd_nombre'];


        // CORAZONCITO
        $contenido_track1_cclase = $mysqli->query("SELECT * FROM canciones where id_disco = 10 and c_track = 1");
        while($row_cclase1 = $contenido_track1_cclase -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cclase1 = $row_cclase1['c_track'];
            $letra_cclase_1 = $row_cclase1['c_letra'];
            $c_nombre_cclase1 = $row_cclase1['c_nombre'];
            $c_duracion_cclase1 = $row_cclase1['c_duracion'];
            $c_colaborador_cclase1 = $row_cclase1['c_colaborador'];
            //$c_video_cclase1 = $row_cclase1['c_video'];
        }  

        $contenido_track2_cclase = $mysqli->query("SELECT * FROM canciones where id_disco = 10 and c_track = 2");
        while($row_cclase2 = $contenido_track2_cclase -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cclase2 = $row_cclase2['c_track'];
            $letra_cclase_2 = $row_cclase2['c_letra'];
            $c_nombre_cclase2 = $row_cclase2['c_nombre'];
            $c_duracion_cclase2 = $row_cclase2['c_duracion'];
            $c_colaborador_cclase2 = $row_cclase2['c_colaborador'];
            //$c_video_cclase2 = $row_cclase2['c_video'];
        }  

        $contenido_track3_cclase = $mysqli->query("SELECT * FROM canciones where id_disco = 10 and c_track = 3");
        while($row_cclase3 = $contenido_track3_cclase -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cclase3 = $row_cclase3['c_track'];
            $letra_cclase_3 = $row_cclase3['c_letra'];
            $c_nombre_cclase3 = $row_cclase3['c_nombre'];
            $c_duracion_cclase3 = $row_cclase3['c_duracion'];
            $c_colaborador_cclase3 = $row_cclase3['c_colaborador'];
            //$c_video_cclase3 = $row_cclase3['c_video'];
        }  

        $contenido_track4_cclase = $mysqli->query("SELECT * FROM canciones where id_disco = 10 and c_track = 4");
        while($row_cclase4 = $contenido_track4_cclase -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cclase4 = $row_cclase4['c_track'];
            $letra_cclase_4 = $row_cclase4['c_letra'];
            $c_nombre_cclase4 = $row_cclase4['c_nombre'];
            $c_duracion_cclase4 = $row_cclase4['c_duracion'];
            $c_colaborador_cclase4 = $row_cclase4['c_colaborador'];
            //$c_video_cclase4 = $row_cclase4['c_video'];
        }  

        $contenido_track5_cclase = $mysqli->query("SELECT * FROM canciones where id_disco = 10 and c_track = 5");
        while($row_cclase5 = $contenido_track5_cclase -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cclase5 = $row_cclase5['c_track'];
            $letra_cclase_5 = $row_cclase5['c_letra'];
            $c_nombre_cclase5 = $row_cclase5['c_nombre'];
            $c_duracion_cclase5 = $row_cclase5['c_duracion'];
            $c_colaborador_cclase5 = $row_cclase5['c_colaborador'];
            //$c_video_cclase5 = $row_cclase5['c_video'];
        }  

        $contenido_track6_cclase = $mysqli->query("SELECT * FROM canciones where id_disco = 10 and c_track = 6");
        while($row_cclase6 = $contenido_track6_cclase -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cclase6 = $row_cclase6['c_track'];
            $letra_cclase_6 = $row_cclase6['c_letra'];
            $c_nombre_cclase6 = $row_cclase6['c_nombre'];
            $c_duracion_cclase6 = $row_cclase6['c_duracion'];
            $c_colaborador_cclase6 = $row_cclase6['c_colaborador'];
            //$c_video_cclase6 = $row_cclase6['c_video'];
        }  

        $contenido_track7_cclase = $mysqli->query("SELECT * FROM canciones where id_disco = 10 and c_track = 7");
        while($row_cclase7 = $contenido_track7_cclase -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cclase7 = $row_cclase7['c_track'];
            $letra_cclase_7 = $row_cclase7['c_letra'];
            $c_nombre_cclase7 = $row_cclase7['c_nombre'];
            $c_duracion_cclase7 = $row_cclase7['c_duracion'];
            $c_colaborador_cclase7 = $row_cclase7['c_colaborador'];
            //$c_video_cclase7 = $row_cclase7['c_video'];
        }  

        $contenido_track8_cclase = $mysqli->query("SELECT * FROM canciones where id_disco = 10 and c_track = 8");
        while($row_cclase8 = $contenido_track8_cclase -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cclase8 = $row_cclase8['c_track'];
            $letra_cclase_8 = $row_cclase8['c_letra'];
            $c_nombre_cclase8 = $row_cclase8['c_nombre'];
            $c_duracion_cclase8 = $row_cclase8['c_duracion'];
            $c_colaborador_cclase8 = $row_cclase8['c_colaborador'];
            //$c_video_cclase8 = $row_cclase8['c_video'];
        }  

        $contenido_track9_cclase = $mysqli->query("SELECT * FROM canciones where id_disco = 10 and c_track = 9");
        while($row_cclase9 = $contenido_track9_cclase -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cclase9 = $row_cclase9['c_track'];
            $letra_cclase_9 = $row_cclase9['c_letra'];
            $c_nombre_cclase9 = $row_cclase9['c_nombre'];
            $c_duracion_cclase9 = $row_cclase9['c_duracion'];
            $c_colaborador_cclase9 = $row_cclase9['c_colaborador'];
            //$c_video_cclase9 = $row_cclase9['c_video'];
        }  

        $contenido_track10_cclase = $mysqli->query("SELECT * FROM canciones where id_disco = 10 and c_track = 10");
        while($row_cclase10 = $contenido_track10_cclase -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cclase10 = $row_cclase10['c_track'];
            $letra_cclase_10 = $row_cclase10['c_letra'];
            $c_nombre_cclase10 = $row_cclase10['c_nombre'];
            $c_duracion_cclase10 = $row_cclase10['c_duracion'];
            $c_colaborador_cclase10 = $row_cclase10['c_colaborador'];
            //$c_video_cclase10 = $row_cclase10['c_video'];
        }  

        $contenido_track11_cclase = $mysqli->query("SELECT * FROM canciones where id_disco = 10 and c_track = 11");
        while($row_cclase11 = $contenido_track11_cclase -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cclase11 = $row_cclase11['c_track'];
            $letra_cclase_11 = $row_cclase11['c_letra'];
            $c_nombre_cclase11 = $row_cclase11['c_nombre'];
            $c_duracion_cclase11 = $row_cclase11['c_duracion'];
            $c_colaborador_cclase11 = $row_cclase11['c_colaborador'];
            //$c_video_cclase11 = $row_cclase11['c_video'];
        }  

        $contenido_track12_cclase = $mysqli->query("SELECT * FROM canciones where id_disco = 10 and c_track = 12");
        while($row_cclase12 = $contenido_track12_cclase -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_cclase12 = $row_cclase12['c_track'];
            $letra_cclase_12 = $row_cclase12['c_letra'];
            $c_nombre_cclase12 = $row_cclase12['c_nombre'];
            $c_duracion_cclase12 = $row_cclase12['c_duracion'];
            $c_colaborador_cclase12 = $row_cclase12['c_colaborador'];
            //$c_video_cclase12 = $row_cclase12['c_video'];
        }                                                                                  
        $d_cclase .='
            <div id="cd_conclase" class="collapse hidden"> <!--  Comienza disco CLASICOS CON CLASE-->
                        <!-- Abre id#cd_sim -->
                        <h2>Album '.$nombredisco.' </h2>

                        <!-- COMIENZA PESTAnAS -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#homa_cclase">Inicio</a></li>
                          <li><a data-toggle="tab" href="#cd10">CD</a></li>
                          <!--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
                        </ul>

                        <div class="tab-content">
                        <!-- COMIENZA TAB HOME -->    
                          <div id="homa_cclase" class="tab-pane fade in active">
                            <h3>Agradecimientos</h3>
                            <p><small><h5>
                            '.$agradecimientos.'
                            <strong>Daniel Agostini</strong>
                            </h5></small></p>
                          </div>
                          <!-- TERMINA TAB HOME -->    

                          <!-- COMIENZA TAB CD -->    
                          <div id="cd10" class="tab-pane fade">
                            
                            <h3>Lista de canciones</h3>
                          
        
                              <h4>Daniel Agostini</h4>
                              <p><small>
                              CD con 12 canciones tributo a otros artistas

                               </small></p><br>


                                <!-- **************************************** -->    
                                <!-- COMIENZA ESCUCHAR CD COMPLETO "SIN LIMITE" -->
                                <a href="#solo" id="cd_cclase_full" valor="10" data-toggle="collapse" data-target="#cdcompleto10" class="btn btn-info btn-xs">Escuchar CD Completo</a>

                                <div id="cdcompleto10" class="col-xs-12 collapse ">
                                    <h4>Disco Completo</h4>

                                    <p id="full_cd_cclase" > </p>

                                </div>
                                <!-- TERMINA ESCUCHAR CD COMPLETO "SIN LIMITE" -->
                                <!-- **************************************** --> 



                              <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Nombre de la cancion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                <!-- TEMA 1 BASTARA-->
                                <tr>
                                    <td>'.$cd_track_cclase1.'</td>
                                    <td>'.$c_nombre_cclase1.'
                                   <a href="#sim" id="tema_cclase_1" data-toggle="collapse" data-target="#bastarav" class="btn btn-info btn-xs">Escuchar</a>
                                    | <a href="#ver_cdsolo" id="dc_sim" data-toggle="collapse" data-target="#bastaral" class="btn btn-info btn-xs">Letra</a></p>


<form id="cd_cclase_track_1">
    <input id="id_disco" name="disco" value="10" class="hidden">
    <input id="id_video" name="video" value="1" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="bastarav" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>
                                    <!-- VIDEO -->

                                    <!-- LETRA  -->
                                    <div id="bastaral" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_cclase1.' <small>Duracion: <b>'.$c_duracion_cclase1.'
                                         </b></small></h3><small>'.$c_colaborador_cclase1.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    <small>'.$letra_cclase_1.'</small>
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA  -->

                                   </td>
                                </tr> 
                                <!-- TEMA 1 BASTARA-->  

                                <!-- TEMA 2 FUISTE MIA -->
                                <tr>
                                    <td>'.$cd_track_cclase2.'</td>
                                    <td>'.$c_nombre_cclase2.'
                                        <a href="#ver_cdsolo" id="tema_cclase_2" data-toggle="collapse" data-target="#besosfuegov" class="btn btn-info btn-xs">Escuchar</a> | 
                                        <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#besosfuegol" class="btn btn-info btn-xs">Letra</a>
<form id="cd_cclase_track_2">
    <input id="id_disco" name="disco" value="10" class="hidden">
    <input id="id_video" name="video" value="2" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="besosfuegov" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>
                                    <!-- VIDEO  -->


                                    <!-- LETRA  -->
                                    <div id="besosfuegol" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                         <th><h3>'.$c_nombre_cclase2.' <small>Duracion: <b>'.$c_duracion_cclase2.'
                                         </b></small></h3><small>'.$c_colaborador_cclase2.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    <small>'.$letra_cclase_2.'</small>
                                                    </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                    <!-- LETRA -->

                                    </td>
                                </tr>    
                                <!-- TEMA 2 FUISTE MIA->      

                                <!-- TEMA 3 PAISAJE -->
                                <tr>
                                    <td>'.$cd_track_cclase3.'</td>
                                    <td>'.$c_nombre_cclase3.'
                                   <a href="#ver_cdsolo" id="tema_cclase_3" data-toggle="collapse" data-target="#rosalesv" class="btn btn-info btn-xs">Escuchar</a> | 
                                   <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#rosalesl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_cclase_track_3">
    <input id="id_disco" name="disco" value="10" class="hidden">
    <input id="id_video" name="video" value="3" class="hidden">
</form>
                                    <br>
                                    <div id="rosalesv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div> 
                                    
                                    <div id="rosalesl" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                         <th><h3>'.$c_nombre_cclase3.' <small>Duracion: <b>'.$c_duracion_cclase3.'
                                         </b></small></h3><small>'.$c_colaborador_cclase3.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    <small>'.$letra_cclase_3.'</small>
                                                    </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                   </td> 
                                </tr> 
                                <!-- TEMA 3 PAISAJE  -->  
                              
                                <!-- TEMA 4  CUENTAME --> 
                                <tr>
                                    <td>'.$cd_track_cclase4.'</td>
                                    <td>'.$c_nombre_cclase4.'
                                    <a href="#ver_cdsolo" id="tema_cclase_4" data-toggle="collapse" data-target="#cuentamev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#cuentamel" class="btn btn-info btn-xs">Letra</a>
<form id="cd_cclase_track_4">
    <input id="id_disco" name="disco" value="10" class="hidden">
    <input id="id_video" name="video" value="4" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="cuentamev" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="cuentamel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                         <th><h3>'.$c_nombre_cclase4.' <small>Duracion: <b>'.$c_duracion_cclase4.'
                                         </b></small></h3><small>'.$c_colaborador_cclase4.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    <small>'.$letra_cclase_4.'</small>
                                                    </p>                                                   
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>    

                                    </td>
                                </tr> 
                                <!-- TEMA 4  CUENTAME --> 

                                <!-- TEMA 5 VOLVERAS --> 
                                <tr>
                                    <td>'.$cd_track_cclase5.'</td>
                                    <td>'.$c_nombre_cclase5.'

                                    <a href="#ver_cdsolo" id="tema_cclase_5" data-toggle="collapse" data-target="#enamoratev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#enamoratel" class="btn btn-info btn-xs">Letra</a>

<form id="cd_cclase_track_5">
    <input id="id_disco" name="disco" value="10" class="hidden">
    <input id="id_video" name="video" value="5" class="hidden">
</form>

                                    <!-- Sin sentido --><br>
                                    <div id="enamoratev" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="enamoratel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                         <th><h3>'.$c_nombre_cclase5.' <small>Duracion: <b>'.$c_duracion_cclase5.'
                                         </b></small></h3><small>'.$c_colaborador_cclase5.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    <small>'.$letra_cclase_5.'</small>
                                                    </p>                                                   
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>                                                                    
                                <!-- TEMA 5 VOLVERAS --> 

                                <!-- TEMA 6 ENAMORATE DE MI--> 
                                <tr>
                                    <td>'.$cd_track_cclase6.'</td>
                                    <td>'.$c_nombre_cclase6.'
                                    <a href="#ver_cdsolo" id="tema_cclase_6" data-toggle="collapse" data-target="#fuistemiav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#fuistemial" class="btn btn-info btn-xs">Letra</a>
<form id="cd_cclase_track_6">
    <input id="id_disco" name="disco" value="10" class="hidden">
    <input id="id_video" name="video" value="6" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="fuistemiav" class="col-xs-12 collapse">                                  
                                   <!-- ACA VA EL VIDEO -->
                                    </div>

                                    <!-- LETRA  -->
                                    <div id="fuistemial" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                         <th><h3>'.$c_nombre_cclase6.' <small>Duracion: <b>'.$c_duracion_cclase6.'
                                         </b></small></h3><small>'.$c_colaborador_cclase6.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    <small>'.$letra_cclase_6.'</small>
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 6 ENAMORATE DE MI  --> 

                                <!-- TEMA 7 MIENTES --> 
                                <tr>
                                    <td>'.$cd_track_cclase7.'</td>
                                    <td>'.$c_nombre_cclase7.'

                                    <a href="#ver_cdsolo" id="tema_cclase_7" data-toggle="collapse" data-target="#mientesv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#mientesl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_cclase_track_7">
    <input id="id_disco" name="disco" value="10" class="hidden">
    <input id="id_video" name="video" value="7" class="hidden">
</form>
                                    <!-- VIDEO --><br>

                                     <div id="mientesv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="mientesl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                         <th><h3>'.$c_nombre_cclase7.' <small>Duracion: <b>'.$c_duracion_cclase7.'
                                         </b></small></h3><small>'.$c_colaborador_cclase7.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    <small>'.$letra_cclase_7.'</small>
                                                    </p>                                                 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>
                                <!-- TEMA 7  MIENTES -->

                                <!-- TEMA 8 SI NO ME LLAMAS -->
                                <tr>
                                    <td>'.$cd_track_cclase8.'</td>
                                    <td>'.$c_nombre_cclase8.'
                                    
                                    <a href="#ver_cdsolo" id="tema_cclase_8" data-toggle="collapse" data-target="#paisajev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#paisajel" class="btn btn-info btn-xs">Letra</a>

<form id="cd_cclase_track_8">
    <input id="id_disco" name="disco" value="10" class="hidden">
    <input id="id_video" name="video" value="8" class="hidden">
</form>
                                    <!-- VIDEO --><br>

                                    <div id="paisajev" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>                                    


                                    <!-- LETRA  -->
                                    <div id="paisajel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                         <th><h3>'.$c_nombre_cclase8.' <small>Duracion: <b>'.$c_duracion_cclase8.'
                                         </b></small></h3><small>'.$c_colaborador_cclase8.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    <small>'.$letra_cclase_8.'</small>
                                                    </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr> 
                                <!-- TEMA 8 SI NO ME LLAMAS -->

                                <!-- TEMA 9 TE BRINDE MI AMOR-->
                                <tr>
                                    <td>'.$cd_track_cclase9.'</td>
                                    <td>'.$c_nombre_cclase9.'
                                    
                                    <a href="#ver_cdsolo" id="tema_cclase_9" data-toggle="collapse" data-target="#brindev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#brindel" class="btn btn-info btn-xs">Letra</a>

<form id="cd_cclase_track_9">
    <input id="id_disco" name="disco" value="10" class="hidden">
    <input id="id_video" name="video" value="9" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="brindev" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="brindel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_cclase9.' <small>Duracion: <b>'.$c_duracion_cclase9.'
                                         </b></small></h3><small>'.$c_colaborador_cclase9.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    <small>'.$letra_cclase_9.'</small>
                                                    </p>                                                 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 9  TE BRINDE MI AMOR -->

                                <!-- TEMA 10 UNA CERVEZA-->
                                <tr>
                                    <td>'.$cd_track_cclase10.'</td>
                                    <td>'.$c_nombre_cclase10.'

                                    <a href="#ver_cdsolo" id="tema_cclase_10" data-toggle="collapse" data-target="#llamasv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#llamasl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_cclase_track_10">
    <input id="id_disco" name="disco" value="10" class="hidden">
    <input id="id_video" name="video" value="10" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="llamasv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="llamasl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_cclase10.' <small>Duracion: <b>'.$c_duracion_cclase10.'
                                         </b></small></h3><small>'.$c_colaborador_cclase10.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    <small>'.$letra_cclase_10.'</small>
                                                    </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 10 UNA CERVEZA --> 

                                <!-- TEMA 11 BESOS DE FUEGO -->
                                <tr>
                                    <td>'.$cd_track_cclase11.'</td>
                                    <td>'.$c_nombre_cclase11.'

                                    <a href="#ver_cdsolo" id="tema_cclase_11" data-toggle="collapse" data-target="#cervezav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#cervezal" class="btn btn-info btn-xs">Letra</a>
<form id="cd_cclase_track_11">
    <input id="id_disco" name="disco" value="10" class="hidden">
    <input id="id_video" name="video" value="11" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="cervezav" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="cervezal" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                   <th><h3>'.$c_nombre_cclase11.' <small>Duracion: <b>'.$c_duracion_cclase11.'
                                         </b></small></h3><small>'.$c_colaborador_cclase11.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    <small>'.$letra_cclase_11.'</small>
                                                    </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 11 BESOS DE FUEGO-->     

                                <!-- TEMA 12   BUSCANDOTE ENTRE LOS ROSALES -->
                                <tr>
                                    <td>'.$cd_track_cclase12.'</td>
                                    <td>'.$c_nombre_cclase12.'

                                    <a href="#ver_cdsolo" id="tema_cclase_12" data-toggle="collapse" data-target="#volverasv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#volverasl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_cclase_track_12">
    <input id="id_disco" name="disco" value="10" class="hidden">
    <input id="id_video" name="video" value="12" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="volverasv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="volverasl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                   <th><h3>'.$c_nombre_cclase12

                                   .' <small>Duracion: <b>'.$c_duracion_cclase12

                                   .'
                                         </b></small></h3><small>'.$c_colaborador_cclase12

                                         .'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    <small>'.$letra_cclase_12

                                                    .'</small>
                                                    </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 12   BUSCANDOTE ENTRE LOS ROSALES -->    

                                                                                           

                                                                                                                                                  

                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>

                                <!--
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                              -->
                                </tbody>
                              </table>
                            </div> <!-- Cierra CD -->                           


                           
                          </div>
                          <!-- TERMINA TAB HOME -->    



                          <!--
                          <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                          </div>
                          -->

                        </div>
                        <!-- TERMINA PESTAnAS -->


                        <!-- Cierra id#cd_solo -->    
                        </div>                   
              ';
        }
    return $d_cclase;          
    }  

    function pustedes(){
        $d_ustedes= "";

          $mysqli = conexionBD(); // Conexion a la Base Hackaton
          $disco_ustedes = $mysqli->query("SELECT * FROM discos  WHERE id_disco = 11 ");   
         
            while($res_ustedes = $disco_ustedes -> fetch_array(MYSQLI_ASSOC))
            {
                $agradecimientos = $res_ustedes['cd_gracias'];
                $nombredisco  = $res_ustedes['cd_nombre'];


        // CORAZONCITO
        $contenido_track1_ustedes = $mysqli->query("SELECT * FROM canciones where id_disco = 11 and c_track = 1");
        while($row_ustedes1 = $contenido_track1_ustedes -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_ustedes1 = $row_ustedes1['c_track'];
            $letra_ustedes_1 = $row_ustedes1['c_letra'];
            $c_nombre_ustedes1 = $row_ustedes1['c_nombre'];
            $c_duracion_ustedes1 = $row_ustedes1['c_duracion'];
            $c_colaborador_ustedes1 = $row_ustedes1['c_colaborador'];
            //$c_video_ustedes1 = $row_ustedes1['c_video'];
        }  

        $contenido_track2_ustedes = $mysqli->query("SELECT * FROM canciones where id_disco = 11 and c_track = 2");
        while($row_ustedes2 = $contenido_track2_ustedes -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_ustedes2 = $row_ustedes2['c_track'];
            $letra_ustedes_2 = $row_ustedes2['c_letra'];
            $c_nombre_ustedes2 = $row_ustedes2['c_nombre'];
            $c_duracion_ustedes2 = $row_ustedes2['c_duracion'];
            $c_colaborador_ustedes2 = $row_ustedes2['c_colaborador'];
            //$c_video_ustedes2 = $row_ustedes2['c_video'];
        }  

        $contenido_track3_ustedes = $mysqli->query("SELECT * FROM canciones where id_disco = 11 and c_track = 3");
        while($row_ustedes3 = $contenido_track3_ustedes -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_ustedes3 = $row_ustedes3['c_track'];
            $letra_ustedes_3 = $row_ustedes3['c_letra'];
            $c_nombre_ustedes3 = $row_ustedes3['c_nombre'];
            $c_duracion_ustedes3 = $row_ustedes3['c_duracion'];
            $c_colaborador_ustedes3 = $row_ustedes3['c_colaborador'];
            //$c_video_ustedes3 = $row_ustedes3['c_video'];
        }  

        $contenido_track4_ustedes = $mysqli->query("SELECT * FROM canciones where id_disco = 11 and c_track = 4");
        while($row_ustedes4 = $contenido_track4_ustedes -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_ustedes4 = $row_ustedes4['c_track'];
            $letra_ustedes_4 = $row_ustedes4['c_letra'];
            $c_nombre_ustedes4 = $row_ustedes4['c_nombre'];
            $c_duracion_ustedes4 = $row_ustedes4['c_duracion'];
            $c_colaborador_ustedes4 = $row_ustedes4['c_colaborador'];
            //$c_video_ustedes4 = $row_ustedes4['c_video'];
        }  

        $contenido_track5_ustedes = $mysqli->query("SELECT * FROM canciones where id_disco = 11 and c_track = 5");
        while($row_ustedes5 = $contenido_track5_ustedes -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_ustedes5 = $row_ustedes5['c_track'];
            $letra_ustedes_5 = $row_ustedes5['c_letra'];
            $c_nombre_ustedes5 = $row_ustedes5['c_nombre'];
            $c_duracion_ustedes5 = $row_ustedes5['c_duracion'];
            $c_colaborador_ustedes5 = $row_ustedes5['c_colaborador'];
            //$c_video_ustedes5 = $row_ustedes5['c_video'];
        }  

        $contenido_track6_ustedes = $mysqli->query("SELECT * FROM canciones where id_disco = 11 and c_track = 6");
        while($row_ustedes6 = $contenido_track6_ustedes -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_ustedes6 = $row_ustedes6['c_track'];
            $letra_ustedes_6 = $row_ustedes6['c_letra'];
            $c_nombre_ustedes6 = $row_ustedes6['c_nombre'];
            $c_duracion_ustedes6 = $row_ustedes6['c_duracion'];
            $c_colaborador_ustedes6 = $row_ustedes6['c_colaborador'];
            //$c_video_ustedes6 = $row_ustedes6['c_video'];
        }  

        $contenido_track7_ustedes = $mysqli->query("SELECT * FROM canciones where id_disco = 11 and c_track = 7");
        while($row_ustedes7 = $contenido_track7_ustedes -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_ustedes7 = $row_ustedes7['c_track'];
            $letra_ustedes_7 = $row_ustedes7['c_letra'];
            $c_nombre_ustedes7 = $row_ustedes7['c_nombre'];
            $c_duracion_ustedes7 = $row_ustedes7['c_duracion'];
            $c_colaborador_ustedes7 = $row_ustedes7['c_colaborador'];
            //$c_video_ustedes7 = $row_ustedes7['c_video'];
        }  

        $contenido_track8_ustedes = $mysqli->query("SELECT * FROM canciones where id_disco = 11 and c_track = 8");
        while($row_ustedes8 = $contenido_track8_ustedes -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_ustedes8 = $row_ustedes8['c_track'];
            $letra_ustedes_8 = $row_ustedes8['c_letra'];
            $c_nombre_ustedes8 = $row_ustedes8['c_nombre'];
            $c_duracion_ustedes8 = $row_ustedes8['c_duracion'];
            $c_colaborador_ustedes8 = $row_ustedes8['c_colaborador'];
            //$c_video_ustedes8 = $row_ustedes8['c_video'];
        }  

        $contenido_track9_ustedes = $mysqli->query("SELECT * FROM canciones where id_disco = 11 and c_track = 9");
        while($row_ustedes9 = $contenido_track9_ustedes -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_ustedes9 = $row_ustedes9['c_track'];
            $letra_ustedes_9 = $row_ustedes9['c_letra'];
            $c_nombre_ustedes9 = $row_ustedes9['c_nombre'];
            $c_duracion_ustedes9 = $row_ustedes9['c_duracion'];
            $c_colaborador_ustedes9 = $row_ustedes9['c_colaborador'];
            //$c_video_ustedes9 = $row_ustedes9['c_video'];
        }  

        $contenido_track10_ustedes = $mysqli->query("SELECT * FROM canciones where id_disco = 11 and c_track = 10");
        while($row_ustedes10 = $contenido_track10_ustedes -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_ustedes10 = $row_ustedes10['c_track'];
            $letra_ustedes_10 = $row_ustedes10['c_letra'];
            $c_nombre_ustedes10 = $row_ustedes10['c_nombre'];
            $c_duracion_ustedes10 = $row_ustedes10['c_duracion'];
            $c_colaborador_ustedes10 = $row_ustedes10['c_colaborador'];
            //$c_video_ustedes10 = $row_ustedes10['c_video'];
        }  

        $contenido_track11_ustedes = $mysqli->query("SELECT * FROM canciones where id_disco = 11 and c_track = 11");
        while($row_ustedes11 = $contenido_track11_ustedes -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_ustedes11 = $row_ustedes11['c_track'];
            $letra_ustedes_11 = $row_ustedes11['c_letra'];
            $c_nombre_ustedes11 = $row_ustedes11['c_nombre'];
            $c_duracion_ustedes11 = $row_ustedes11['c_duracion'];
            $c_colaborador_ustedes11 = $row_ustedes11['c_colaborador'];
            //$c_video_ustedes11 = $row_ustedes11['c_video'];
        }  

         $contenido_track12_ustedes = $mysqli->query("SELECT * FROM canciones where id_disco = 11 and c_track = 12");
        while($row_ustedes12 = $contenido_track12_ustedes -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_ustedes12 = $row_ustedes12['c_track'];
            $letra_ustedes_12 = $row_ustedes12['c_letra'];
            $c_nombre_ustedes12 = $row_ustedes12['c_nombre'];
            $c_duracion_ustedes12 = $row_ustedes12['c_duracion'];
            $c_colaborador_ustedes12 = $row_ustedes12['c_colaborador'];
            //$c_video_ustedes12 = $row_ustedes12['c_video'];
        }                                                                          



        $d_ustedes .='
            <div id="cd_ustedes" class="collapse hidden"> <!--  Comienza disco PENSANDO EN USTEDES->
                        <!-- Abre id#cd_sim -->
                        <h2>Album '.$nombredisco.' </h2>

                        <!-- COMIENZA PESTAnAS -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home_ustedes">Inicio</a></li>
                          <li><a data-toggle="tab" href="#cd11">CD</a></li>
                          <!--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
                        </ul>

                        <div class="tab-content">
                        <!-- COMIENZA TAB HOME -->    
                          <div id="home_ustedes" class="tab-pane fade in active">
                            <h3>Agradecimientos</h3>
                            <p><small><h5>
                            '.$agradecimientos.'
                            </h5></small></p>
                          </div>
                          <!-- TERMINA TAB HOME -->    

                          <!-- COMIENZA TAB CD -->    
                          <div id="cd11" class="tab-pane fade">
                            
                            <h3>Lista de canciones</h3>
                          
        
                              <h4>Daniel Agostini</h4>
                              <p><small>
                              Muy buen material sigue incluyendo covers y temas de su autoria.

                               </small></p><br>


                                <!-- **************************************** -->    
                                <!-- COMIENZA ESCUCHAR CD COMPLETO "SIN LIMITE" -->
                                <a href="#solo" id="cd_ustedes_full" valor="11" data-toggle="collapse" data-target="#cdcompleto11" class="btn btn-info btn-xs">Escuchar CD Completo</a>

                                <div id="cdcompleto11" class="col-xs-12 collapse ">
                                    <h4>Disco Completo</h4>

                                    <p id="full_cd_ustedes" > </p>

                                </div>
                                <!-- TERMINA ESCUCHAR CD COMPLETO "SIN LIMITE" -->
                                <!-- **************************************** --> 



                              <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Nombre de la cancion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                <!-- TEMA 1 COMO SUFRO AL RECORDAR-->
                                <tr>
                                <td>'.$cd_track_ustedes1.'</td>
                                <td>'.$c_nombre_ustedes1.'
                                   <a href="#sim" id="tema_ustedes_1" data-toggle="collapse" data-target="#sufrorecordarv" class="btn btn-info btn-xs">Escuchar</a>
                                    | <a href="#ver_cdsolo" id="dc_sim" data-toggle="collapse" data-target="#sufrorecordarl" class="btn btn-info btn-xs">Letra</a></p>
<form id="cd_ustedes_track_1">
    <input id="id_disco" name="disco" value="11" class="hidden">
    <input id="id_video" name="video" value="1" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="sufrorecordarv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>
                                    <!-- VIDEO -->

                                    <!-- LETRA  -->
                                    <div id="sufrorecordarl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                            <th><h3>'.$c_nombre_ustedes1.' <small>Duracion: <b>'.$c_duracion_ustedes1.'
                                             </b></small></h3><small>'.$c_colaborador_ustedes1.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_ustedes_1.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA  -->

                                   </td>
                                </tr> 
                                <!-- TEMA 1 COMO SUFRO AL RECORDAR-->  

                                <!-- TEMA 2 CORAZON, CORAZON-->
                                <tr>
                                <td>'.$cd_track_ustedes2.'</td>
                                <td>'.$c_nombre_ustedes2.'
                                        <a href="#ver_cdsolo" id="tema_ustedes_2" data-toggle="collapse" data-target="#corazoncorazonv" class="btn btn-info btn-xs">Escuchar</a> | 
                                        <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#corazoncorazonl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_ustedes_track_2">
    <input id="id_disco" name="disco" value="11" class="hidden">
    <input id="id_video" name="video" value="2" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="corazoncorazonv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>
                                    <!-- VIDEO  -->


                                    <!-- LETRA  -->
                                    <div id="corazoncorazonl" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                            <th><h3>'.$c_nombre_ustedes2.' <small>Duracion: <b>'.$c_duracion_ustedes2.'
                                             </b></small></h3><small>'.$c_colaborador_ustedes2.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_ustedes_2.'
                                                    </p>
                                    
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                    <!-- LETRA -->

                                    </td>
                                </tr>    
                                <!-- TEMA 2 CORAZON, CORAZON->      

                                <!-- TEMA 3 DIME TU -->
                                <tr>
                                <td>'.$cd_track_ustedes3.'</td>
                                <td>'.$c_nombre_ustedes3.'
                                   <a href="#ver_cdsolo" id="tema_ustedes_3" data-toggle="collapse" data-target="#dimetuv" class="btn btn-info btn-xs">Escuchar</a> | 
                                   <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#dimetul" class="btn btn-info btn-xs">Letra</a>
<form id="cd_ustedes_track_3">
    <input id="id_disco" name="disco" value="11" class="hidden">
    <input id="id_video" name="video" value="3" class="hidden">
</form><br>
                                    <div id="dimetuv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div> 
                                    
                                    <div id="dimetul" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                            <th><h3>'.$c_nombre_ustedes3.' <small>Duracion: <b>'.$c_duracion_ustedes3.'
                                             </b></small></h3><small>'.$c_colaborador_ustedes3.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_ustedes_3.'
                                                    </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                   </td> 
                                </tr> 
                                <!-- TEMA 3 DIME TU  -->  
                              
                                <!-- TEMA 4  MI HISTORIA ENTRE TUS DEDOS --> 
                                <tr>
                                <td>'.$cd_track_ustedes4.'</td>
                                <td>'.$c_nombre_ustedes4.'
                                    <a href="#ver_cdsolo" id="tema_ustedes_4" data-toggle="collapse" data-target="#historiav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#historial" class="btn btn-info btn-xs">Letra</a>
<form id="cd_ustedes_track_4">
    <input id="id_disco" name="disco" value="11" class="hidden">
    <input id="id_video" name="video" value="4" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="historiav" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="historial" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                            <th><h3>'.$c_nombre_ustedes4.' <small>Duracion: <b>'.$c_duracion_ustedes4.'
                                             </b></small></h3><small>'.$c_colaborador_ustedes4.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_ustedes_4.'
                                                    </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>    

                                    </td>
                                </tr> 
                                <!-- TEMA 4  MI HISTORIA ENTRE TUS DEDOS --> 

                                <!-- TEMA 5 HOJITA SECA --> 
                                <tr>
                                <td>'.$cd_track_ustedes5.'</td>
                                <td>'.$c_nombre_ustedes5.'

                                    <a href="#ver_cdsolo" id="tema_ustedes_5" data-toggle="collapse" data-target="#hojitav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#hojital" class="btn btn-info btn-xs">Letra</a>
                                    <!-- Sin sentido -->
<form id="cd_ustedes_track_5">
    <input id="id_disco" name="disco" value="11" class="hidden">
    <input id="id_video" name="video" value="5" class="hidden">
</form>
                                    <br>
                                    <div id="hojitav" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="hojital" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                            <th><h3>'.$c_nombre_ustedes5.' <small>Duracion: <b>'.$c_duracion_ustedes5.'
                                             </b></small></h3><small>'.$c_colaborador_ustedes5.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_ustedes_5.'
                                                    </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>                                                                    
                                <!-- TEMA 5 HOJITA SECA --> 

                                <!-- TEMA 6 LA SOLEDAD--> 
                                <tr>
                                <td>'.$cd_track_ustedes6.'</td>
                                <td>'.$c_nombre_ustedes6.'
                                    <a href="#ver_cdsolo" id="tema_ustedes_6" data-toggle="collapse" data-target="#soledadv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#soledadl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_ustedes_track_6">
    <input id="id_disco" name="disco" value="11" class="hidden">
    <input id="id_video" name="video" value="6" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="soledadv" class="col-xs-12 collapse">                                  
                                   <!-- ACA VA EL VIDEO -->
                                    </div>

                                    <!-- LETRA  -->
                                    <div id="soledadl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                            <th><h3>'.$c_nombre_ustedes6.' <small>Duracion: <b>'.$c_duracion_ustedes6.'
                                             </b></small></h3><small>'.$c_colaborador_ustedes6.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_ustedes_6.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 6 LA SOLEDAD  --> 

                                <!-- TEMA 7 NUNCA MAS --> 
                                <tr>
                                <td>'.$cd_track_ustedes7.'</td>
                                <td>'.$c_nombre_ustedes7.'

                                    <a href="#ver_cdsolo" id="tema_ustedes_7" data-toggle="collapse" data-target="#nuncav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#nuncal" class="btn btn-info btn-xs">Letra</a>
<form id="cd_ustedes_track_7">
    <input id="id_disco" name="disco" value="11" class="hidden">
    <input id="id_video" name="video" value="7" class="hidden">
</form>
                                    <!-- VIDEO --><br>

                                    <div id="nuncav" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="nuncal" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                            <th><h3>'.$c_nombre_ustedes7.' <small>Duracion: <b>'.$c_duracion_ustedes7.'
                                             </b></small></h3><small>'.$c_colaborador_ustedes7.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_ustedes_7.'
                                                    </p>                                                 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>
                                <!-- TEMA 7  NUNCA MAS -->

                                <!-- TEMA 8 TODA LA NOCHE -->
                                <tr>
                                <td>'.$cd_track_ustedes8.'</td>
                                <td>'.$c_nombre_ustedes8.'
                                    
                                    <a href="#ver_cdsolo" id="tema_ustedes_8" data-toggle="collapse" data-target="#tnochev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#tnochel" class="btn btn-info btn-xs">Letra</a>
<form id="cd_ustedes_track_8">
    <input id="id_disco" name="disco" value="11" class="hidden">
    <input id="id_video" name="video" value="8" class="hidden">
</form>
                                    <!-- VIDEO --><br>

                                    <div id="tnochev" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>                                    


                                    <!-- LETRA  -->
                                    <div id="tnochel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                            <th><h3>'.$c_nombre_ustedes8.' <small>Duracion: <b>'.$c_duracion_ustedes8.'
                                             </b></small></h3><small>'.$c_colaborador_ustedes8.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_ustedes_8.'
                                                    </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr> 
                                <!-- TEMA 8 TODA LA NOCHE -->

                                <!-- TEMA 9 QUIERES OLVIDARTE DE MI-->
                                <tr>
                                <td>'.$cd_track_ustedes9.'</td>
                                <td>'.$c_nombre_ustedes9.'
                                    
                                    <a href="#ver_cdsolo" id="tema_ustedes_9" data-toggle="collapse" data-target="#quieresolv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#quieresoll" class="btn btn-info btn-xs">Letra</a>
<form id="cd_ustedes_track_9">
    <input id="id_disco" name="disco" value="11" class="hidden">
    <input id="id_video" name="video" value="9" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="quieresolv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="quieresoll" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                            <th><h3>'.$c_nombre_ustedes9.' <small>Duracion: <b>'.$c_duracion_ustedes9.'
                                             </b></small></h3><small>'.$c_colaborador_ustedes9.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_ustedes_9.'
                                                    </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 9  QUIERES OLVIDARTE DE MI -->

                                <!-- TEMA 10 SOLO TUYO-->
                                <tr>
                                <td>'.$cd_track_ustedes10.'</td>
                                <td>'.$c_nombre_ustedes10.'

                                    <a href="#ver_cdsolo" id="tema_ustedes_10" data-toggle="collapse" data-target="#stuyov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#stuyol" class="btn btn-info btn-xs">Letra</a>
<form id="cd_ustedes_track_10">
    <input id="id_disco" name="disco" value="11" class="hidden">
    <input id="id_video" name="video" value="10" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="stuyov" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="stuyol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                            <th><h3>'.$c_nombre_ustedes10.' <small>Duracion: <b>'.$c_duracion_ustedes10.'
                                             </b></small></h3><small>'.$c_colaborador_ustedes10.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_ustedes_10.'
                                                    </p>                                                   
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 10 SOLO TUYO --> 

                                <!-- TEMA 11 TU VOLVERAS -->
                                <tr>
                                <td>'.$cd_track_ustedes11.'</td>
                                <td>'.$c_nombre_ustedes11.'

                                    <a href="#ver_cdsolo" id="tema_ustedes_11" data-toggle="collapse" data-target="#tvolverasv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#tvolverasl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_ustedes_track_11">
    <input id="id_disco" name="disco" value="11" class="hidden">
    <input id="id_video" name="video" value="11" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="tvolverasv" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="tvolverasl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                            <th><h3>'.$c_nombre_ustedes11.' <small>Duracion: <b>'.$c_duracion_ustedes11.'
                                             </b></small></h3><small>'.$c_colaborador_ustedes11.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_ustedes_11.'
                                                    </p>                                                       
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 11 TU VOLVERAS-->     

                                <!-- TEMA 12   YO QUIERO-->
                                <tr>
                                <td>'.$cd_track_ustedes12.'</td>
                                <td>'.$c_nombre_ustedes12.'

                                    <a href="#ver_cdsolo" id="tema_ustedes_12" data-toggle="collapse" data-target="#yoquierov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#yoquierol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_ustedes_track_12">
    <input id="id_disco" name="disco" value="11" class="hidden">
    <input id="id_video" name="video" value="12" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="yoquierov" class="col-xs-12 collapse">                                  
                                    <!-- ACA VA EL VIDEO -->
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="yoquierol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                      <th><h3>'.$c_nombre_ustedes12.' <small>Duracion: <b>'.$c_duracion_ustedes12.'
                                             </b></small></h3><small>'.$c_colaborador_ustedes12.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                    '.$letra_ustedes_12.'
                                                    </p>                                                 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 12   YO QUIERO -->    

                                                                                           

                                                                                                                                                  

                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>

                                <!--
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                              -->
                                </tbody>
                              </table>
                            </div> <!-- Cierra CD -->                           


                           
                          </div>
                          <!-- TERMINA TAB HOME -->    



                          <!--
                          <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                          </div>
                          -->

                        </div>
                        <!-- TERMINA PESTAnAS -->


                        <!-- Cierra id#cd_solo -->    
                        </div>                   
              ';
        }
    return $d_ustedes;          
    }    

    function renovado(){
        $d_renovado= "";

          $mysqli = conexionBD(); // Conexion a la Base Hackaton
          $disco_renovado = $mysqli->query("SELECT * FROM discos  WHERE id_disco = 12 ");   
         
            while($res_renovado = $disco_renovado -> fetch_array(MYSQLI_ASSOC))
            {
                $agradecimientos = $res_renovado['cd_gracias'];
                $nombredisco  = $res_renovado['cd_nombre'];


        // CORAZONCITO
        $contenido_track1_renovado = $mysqli->query("SELECT * FROM canciones where id_disco = 12 and c_track = 1");
        while($row_renovado1 = $contenido_track1_renovado -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_renovado1 = $row_renovado1['c_track'];
            $letra_renovado_1 = $row_renovado1['c_letra'];
            $c_nombre_renovado1 = $row_renovado1['c_nombre'];
            $c_duracion_renovado1 = $row_renovado1['c_duracion'];
            $c_colaborador_renovado1 = $row_renovado1['c_colaborador'];
            //$c_video_renovado1 = $row_renovado1['c_video'];
        }  

        $contenido_track2_renovado = $mysqli->query("SELECT * FROM canciones where id_disco = 12 and c_track = 2");
        while($row_renovado2 = $contenido_track2_renovado -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_renovado2 = $row_renovado2['c_track'];
            $letra_renovado_2 = $row_renovado2['c_letra'];
            $c_nombre_renovado2 = $row_renovado2['c_nombre'];
            $c_duracion_renovado2 = $row_renovado2['c_duracion'];
            $c_colaborador_renovado2 = $row_renovado2['c_colaborador'];
            //$c_video_renovado2 = $row_renovado2['c_video'];
        }  

        $contenido_track3_renovado = $mysqli->query("SELECT * FROM canciones where id_disco = 12 and c_track = 3");
        while($row_renovado3 = $contenido_track3_renovado -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_renovado3 = $row_renovado3['c_track'];
            $letra_renovado_3 = $row_renovado3['c_letra'];
            $c_nombre_renovado3 = $row_renovado3['c_nombre'];
            $c_duracion_renovado3 = $row_renovado3['c_duracion'];
            $c_colaborador_renovado3 = $row_renovado3['c_colaborador'];
            //$c_video_renovado3 = $row_renovado3['c_video'];
        }  

        $contenido_track4_renovado = $mysqli->query("SELECT * FROM canciones where id_disco = 12 and c_track = 4");
        while($row_renovado4 = $contenido_track4_renovado -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_renovado4 = $row_renovado4['c_track'];
            $letra_renovado_4 = $row_renovado4['c_letra'];
            $c_nombre_renovado4 = $row_renovado4['c_nombre'];
            $c_duracion_renovado4 = $row_renovado4['c_duracion'];
            $c_colaborador_renovado4 = $row_renovado4['c_colaborador'];
            //$c_video_renovado4 = $row_renovado4['c_video'];
        }  

        $contenido_track5_renovado = $mysqli->query("SELECT * FROM canciones where id_disco = 12 and c_track = 5");
        while($row_renovado5 = $contenido_track5_renovado -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_renovado5 = $row_renovado5['c_track'];
            $letra_renovado_5 = $row_renovado5['c_letra'];
            $c_nombre_renovado5 = $row_renovado5['c_nombre'];
            $c_duracion_renovado5 = $row_renovado5['c_duracion'];
            $c_colaborador_renovado5 = $row_renovado5['c_colaborador'];
            //$c_video_renovado5 = $row_renovado5['c_video'];
        }  

        $contenido_track6_renovado = $mysqli->query("SELECT * FROM canciones where id_disco = 12 and c_track = 6");
        while($row_renovado6 = $contenido_track6_renovado -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_renovado6 = $row_renovado6['c_track'];
            $letra_renovado_6 = $row_renovado6['c_letra'];
            $c_nombre_renovado6 = $row_renovado6['c_nombre'];
            $c_duracion_renovado6 = $row_renovado6['c_duracion'];
            $c_colaborador_renovado6 = $row_renovado6['c_colaborador'];
            //$c_video_renovado6 = $row_renovado6['c_video'];
        }  

        $contenido_track7_renovado = $mysqli->query("SELECT * FROM canciones where id_disco = 12 and c_track = 7");
        while($row_renovado7 = $contenido_track7_renovado -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_renovado7 = $row_renovado7['c_track'];
            $letra_renovado_7 = $row_renovado7['c_letra'];
            $c_nombre_renovado7 = $row_renovado7['c_nombre'];
            $c_duracion_renovado7 = $row_renovado7['c_duracion'];
            $c_colaborador_renovado7 = $row_renovado7['c_colaborador'];
            //$c_video_renovado7 = $row_renovado7['c_video'];
        }  

        $contenido_track8_renovado = $mysqli->query("SELECT * FROM canciones where id_disco = 12 and c_track = 8");
        while($row_renovado8 = $contenido_track8_renovado -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_renovado8 = $row_renovado8['c_track'];
            $letra_renovado_8 = $row_renovado8['c_letra'];
            $c_nombre_renovado8 = $row_renovado8['c_nombre'];
            $c_duracion_renovado8 = $row_renovado8['c_duracion'];
            $c_colaborador_renovado8 = $row_renovado8['c_colaborador'];
            //$c_video_renovado8 = $row_renovado8['c_video'];
        }  

        $contenido_track9_renovado = $mysqli->query("SELECT * FROM canciones where id_disco = 12 and c_track = 9");
        while($row_renovado9 = $contenido_track9_renovado -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_renovado9 = $row_renovado9['c_track'];
            $letra_renovado_9 = $row_renovado9['c_letra'];
            $c_nombre_renovado9 = $row_renovado9['c_nombre'];
            $c_duracion_renovado9 = $row_renovado9['c_duracion'];
            $c_colaborador_renovado9 = $row_renovado9['c_colaborador'];
            //$c_video_renovado9 = $row_renovado9['c_video'];
        }  

        $contenido_track10_renovado = $mysqli->query("SELECT * FROM canciones where id_disco = 12 and c_track = 10");
        while($row_renovado10 = $contenido_track10_renovado -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_renovado10 = $row_renovado10['c_track'];
            $letra_renovado_10 = $row_renovado10['c_letra'];
            $c_nombre_renovado10 = $row_renovado10['c_nombre'];
            $c_duracion_renovado10 = $row_renovado10['c_duracion'];
            $c_colaborador_renovado10 = $row_renovado10['c_colaborador'];
            //$c_video_renovado10 = $row_renovado10['c_video'];
        }  

        $contenido_track11_renovado = $mysqli->query("SELECT * FROM canciones where id_disco = 12 and c_track = 11");
        while($row_renovado11 = $contenido_track11_renovado -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_renovado11 = $row_renovado11['c_track'];
            $letra_renovado_11 = $row_renovado11['c_letra'];
            $c_nombre_renovado11 = $row_renovado11['c_nombre'];
            $c_duracion_renovado11 = $row_renovado11['c_duracion'];
            $c_colaborador_renovado11 = $row_renovado11['c_colaborador'];
            //$c_video_renovado11 = $row_renovado11['c_video'];
        }  

         $contenido_track12_renovado = $mysqli->query("SELECT * FROM canciones where id_disco = 12 and c_track = 12");
        while($row_renovado12 = $contenido_track12_renovado -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_renovado12 = $row_renovado12['c_track'];
            $letra_renovado_12 = $row_renovado12['c_letra'];
            $c_nombre_renovado12 = $row_renovado12['c_nombre'];
            $c_duracion_renovado12 = $row_renovado12['c_duracion'];
            $c_colaborador_renovado12 = $row_renovado12['c_colaborador'];
            //$c_video_renovado12 = $row_renovado12['c_video'];
        }                                                                          

        $d_renovado .='
            <div id="cd_renovado" class="collapse hidden"> <!--  Comienza disco RENOVADO->
                        <!-- Abre id#cd_sim -->
                        <h2>Album '.$nombredisco.' </h2>

                        <!-- COMIENZA PESTAnAS -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home_renovado">Inicio</a></li>
                          <li><a data-toggle="tab" href="#cdreno">CD</a></li>
                          <!--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
                        </ul>

                        <div class="tab-content">
                        <!-- COMIENZA TAB HOME -->    
                          <div id="home_renovado" class="tab-pane fade in active">
                            <h3>Agradecimientos</h3>
                            <p><small><h5>
                            '.$agradecimientos.'
                            <strong>Gracias</strong>
                            </h5></small></p>
                          </div>
                          <!-- TERMINA TAB HOME -->    

                          <!-- COMIENZA TAB CD -->    
                          <div id="cdreno" class="tab-pane fade">
                            
                            <h3>Lista de canciones</h3>
                          
        
                              <h4>Daniel Agostini</h4>
                              <p><small>
                              Para este Disco Daniel cambia de representante comenzando una nueva etapa, por esa razon el disco se llamo RENOVADO.
                              Tambien se hace referencia a la autoria de Rodrigo Tapari en algunos temas como asi tambien la comparte en el tema ERES el bajista de sombras
                              Antonio Carabajal.<br>
                              Le hace un tema a su 2do hijo Santino y otro a su Mama.                        

                               </small></p><br>


                                <!-- **************************************** -->    
                                <!-- COMIENZA ESCUCHAR CD COMPLETO "SIN LIMITE" -->
                                <a href="#solo" id="cd_renovado_full" valor="12" data-toggle="collapse" data-target="#cdcompleto12" class="btn btn-info btn-xs">Escuchar CD Completo</a>

                                <div id="cdcompleto12" class="col-xs-12 collapse ">
                                    <h4>Disco Completo</h4>

                                    <p id="full_cd_renovado" > </p>

                                </div>
                                <!-- TERMINA ESCUCHAR CD COMPLETO "SIN LIMITE" -->
                                <!-- **************************************** --> 




                              <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Nombre de la cancion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                <!-- TEMA 1 TE AMO-->
                                <tr>
                                   <td>1</td>
                                   <td>Te amo <a href="#sim" id="tema_renovado_1" data-toggle="collapse" data-target="#teamov" class="btn btn-info btn-xs">Escuchar</a>
                                    | <a href="#ver_cdsolo" id="dc_sim" data-toggle="collapse" data-target="#teamol" class="btn btn-info btn-xs">Letra</a></p>

<form id="cd_renovado_track_1">
    <input id="id_disco" name="disco" value="12" class="hidden">
    <input id="id_video" name="video" value="1" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="teamov" class="col-xs-12 collapse">                                  
                                    
                                    </div>
                                    <!-- VIDEO -->

                                    <!-- LETRA  -->
                                    <div id="teamol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Te amo </h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>                                                    
                                                    Me gustaria hablarte pero que me escuches 
                                                    Me gustaria besarte pero que lo sientas... 
                                                    Me gustaria que hoy te enamoraras 
                                                    Como hoy yo lo hice de ti, mi amor. </p><br>
                                                    <p>
                                                    Me gustaria ser tu dueno y que tu lo quieras 
                                                    Y asi poder amarnos una vida entera 
                                                    Me gustaria que hoy te enamoraras 
                                                    Como hoy yo lo hice de ti, mi amor </p><br>
                                                    <p>
                                                    Te amo. 
                                                    Te extrano. Yo, te amo 
                                                    Sin necesidad, mas que mi amor 
                                                    Te lo doy.
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA  -->

                                   </td>
                                </tr> 
                                <!-- TEMA 1 TE AMO-->  

                                <!-- TEMA 2 MALDITA MUJER-->
                                <tr>
                                    <td>2</td>
                                    <td>Maldita mujer 
                                        <a href="#ver_cdsolo" id="tema_renovado_2" data-toggle="collapse" data-target="#malditav" class="btn btn-info btn-xs">Escuchar</a> | 
                                        <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#maldital" class="btn btn-info btn-xs">Letra</a>

<form id="cd_renovado_track_2">
    <input id="id_disco" name="disco" value="12" class="hidden">
    <input id="id_video" name="video" value="2" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="malditav" class="col-xs-12 collapse">                                  
                                    
                                    </div>
                                    <!-- VIDEO  -->


                                    <!-- LETRA  -->
                                    <div id="maldital" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>Maldita mujer </h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                    <br>
                                    <p>
                                    Vete maldita mujer, 
                                    Vete no quiero tener 
                                    Ya no quiero mas de ti. 
                                    Vete maldita mujer, 
                                    Vete no quiero tener 
                                    Ya no quiero mas de ti. </p><br>
                                    <p>
                                    Y tu vendras arrepentida a pedirme perdon otra vez... 
                                    Y yo dire que no 
                                    Y tu vendras arrepentida a pedirme perdon otra vez... 
                                    Y yo dire que no. </p><br>
                                    <p>
                                    No quiero mas tus besos 
                                    No quiero mas tu amor. 
                                    No quiero mas tus besos 
                                    No quiero mas tu amor. </p><br>
                                    <p>
                                    Y tu vendras arrepentida a pedirme perdon otra vez... 
                                    Y yo dire que no 
                                    Y tu vendras arrepentida a pedirme perdon otra vez... 
                                    Y yo dire que no. </p><br>
                                    <p>
                                    No quiero mas tus besos 
                                    No quiero mas tu amor. 
                                    No quiero mas tus besos 
                                    No quiero mas tu amor.
                                    </p>
                                    
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                    <!-- LETRA -->

                                    </td>
                                </tr>    
                                <!-- TEMA 2 MALDITA MUJER->      

                                <!-- TEMA 3 TE SIENTO -->
                                <tr>
                                   <td>3</td>
                                   <td>Te siento
                                   <a href="#ver_cdsolo" id="tema_renovado_3" data-toggle="collapse" data-target="#tesientov" class="btn btn-info btn-xs">Escuchar</a> | 
                                   <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#tesientol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_renovado_track_3">
    <input id="id_disco" name="disco" value="12" class="hidden">
    <input id="id_video" name="video" value="3" class="hidden">
</form>                             <br>
                                    <div id="tesientov" class="col-xs-12 collapse">                                  
                                    
                                    </div> 
                                    
                                    <div id="tesientol" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>Te siento</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                     
                                            <p>
                                            Te siento tan cerca 
                                            De mi corazon </p><br>
                                            <p>
                                            Te siento, tan cerca, 
                                            De mi corazon 
                                            Te siento, tan cerca, 
                                            De mi corazon </p><br>
                                            <p>
                                            Pude sonar de nuevo 
                                            Pude secar de mi lo mejor 
                                            Puedo amar 
                                            Y descubrir de mi lo mejor </p><br>
                                            <p>
                                            Te quiero amar para sentir 
                                            El verdadero amor, 
                                            Si tu me das lo que te doy 
                                            Sabras lo que siento </p><br>
                                            <p>
                                            Te quiero amar para sentir 
                                            El verdadero amor, 
                                            Si tu me das lo que te doy 
                                            Sabras lo que siento </p><br>
                                            <p>
                                            Pude sonar de nuevo 
                                            Pude secar de mi lo mejor 
                                            Puedo amar 
                                            Y descubrir de mi lo mejor </p><br>
                                            <p>
                                            Te quiero amar para sentir 
                                            El verdadero amor, 
                                            Si tu me das lo que te doy 
                                            Sabras lo que siento </p><br>
                                            <p>
                                            Te quiero amar para sentir 
                                            El verdadero amor, 
                                            Si tu me das lo que te doy 
                                            Sabras lo que siento </p><br>
                                            <p>
                                            Te quiero amar para sentir 
                                            El verdadero amor, 
                                            Si tu me das lo que te doy 
                                            Sabras lo que siento.
                                        </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                   </td> 
                                </tr> 
                                <!-- TEMA 3 TE SIENTO  -->  
                              
                                <!-- TEMA 4  TE REGALO --> 
                                <tr>
                                    <td>4</td>
                                    <td><small>Te regalo</small>
                                    <a href="#ver_cdsolo" id="tema_renovado_4" data-toggle="collapse" data-target="#teregalov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#teregalol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_renovado_track_4">
    <input id="id_disco" name="disco" value="12" class="hidden">
    <input id="id_video" name="video" value="4" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="teregalov" class="col-xs-12 collapse">                                  
                                   
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="teregalol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Te regalo</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>

                                                
                                                <p>
                                                Te regalo mis dias, te regalo mi sol, 
                                                Te regalo mis besos, todo mi corazon 
                                                Te regalo todo un mundo de amor. </p><br>
                                                <p>
                                                Te pido que me ames como lo hago yo 
                                                Que muera el vacio que muera el dolor 
                                                Que me dejes amarte mi amor. </p><br>
                                                <p>
                                                Regalame muneca hermosa, tu corazon color de rosa 
                                                Regalame muneca hermosa, tu corazon, a mi. 
                                                Regalame muneca hermosa, tu corazon color de rosa 
                                                Regalame muneca hermosa, tu corazon, a mi.
                                                </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>    

                                    </td>
                                </tr> 
                                <!-- TEMA 4  TE REGALO --> 

                                <!-- TEMA 5 SOLO TU --> 
                                <tr>
                                    <td>5</td>
                                    <td><small>Solo tu</small>
                                    <a href="#ver_cdsolo" id="tema_renovado_5" data-toggle="collapse" data-target="#soloturv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#soloturl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_renovado_track_5">
    <input id="id_disco" name="disco" value="12" class="hidden">
    <input id="id_video" name="video" value="5" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="soloturv" class="col-xs-12 collapse">                                  
                                    
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="soloturl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Solo tu</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>

                                                
                                                <p>
                                                Solo tu 
                                                Quisiera que tu seas mia 
                                                Y conquistar tu corazon 
                                                Ser la razon de tu vida 
                                                Y que sea eterno amor 
                                                Nadie que te pueda amar 
                                                Como lo hago yo. </p><br>
                                                <p>
                                                Ahora quiero acercarme 
                                                A tu boca y llenarte de pasion 
                                                Quiero lograr con un beso 
                                                Demostrarte que es amor 
                                                Que yo te estoy ofreciendo 
                                                Que seamos uno, no dos, 
                                                No dos. </p><br>
                                                <p>
                                                Ven que quiero darte un beso 
                                                Solamente es eso que de tu 
                                                Amor me siento preso y ya no puedo mas. </p><br>
                                                <p>
                                                Y ahora quiero acercarme a tu boca 
                                                Y llenarte de pasion quiero lograr 
                                                Con un beso demostrarte 
                                                Que es amor que yo te estoy ofreciendo 
                                                Que seamos uno, no dos, no dos. </p><br>
                                                <p>
                                                Ven que quiero darte un beso 
                                                Solamente es eso 
                                                Que de tu amor me siento preso 
                                                Y ya no puedo mas.
                                                </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>    

                                    </td>
                                </tr> 
                                <!-- TEMA 5 SOLO TU --> 

                                <!-- TEMA 6 ERES--> 
                                <tr>
                                    <td>6</td>
                                    <td>Eres
                                    <a href="#ver_cdsolo" id="tema_renovado_6" data-toggle="collapse" data-target="#eresv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#eresl" class="btn btn-info btn-xs">Letra</a>
                                    
<form id="cd_renovado_track_6">
    <input id="id_disco" name="disco" value="12" class="hidden">
    <input id="id_video" name="video" value="6" class="hidden">
</form>
                                    <!-- VIeres--><br>
                                    <div id="eresv" class="col-xs-12 collapse">                                  
                                   <iframe width="200" height="200" src="https://www.youtube.com/embed/Qm1MTpQ_fZs" frameborder="0" allowfullscreen></iframe>
                                    </div>

                                    <!-- LETRA  -->
                                    <div id="eresl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Eres</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                Eres lo que mas amo, eres, 
                                                Eres mi otra mitad, tambien tu eres, 
                                                Una caricia frente al mar, 
                                                Un dulce beso en la oscuridad, 
                                                Amor de verdad solo una vez asi se dan y eso eres. </p><br>
                                                <p>
                                                Como un rayito de sol, eres, 
                                                Mi arco iris de amor tambien tu eres, 
                                                Eres la calma y la tempestad, 
                                                Eres el remedio a mi enfermedad, 
                                                Amor de verdad solo una vez asi se dan y eso eres </p><br>
                                                <p>
                                                No me consuela el besarte porque he nacido para amar, 
                                                Tengo tanto, tanto amor querido 
                                                No se te ocurra dejarme seria como matarme, 
                                                Quiero vivir junto a vos, querida, querida. 
                                                Porque eres tu, el amor de mi vida. </p><br>
                                                <p>
                                                Como un rayito de sol, eres, 
                                                Mi arco iris de amor tambien tu eres, 
                                                Eres la calma y la tempestad, 
                                                Eres el remedio a mi enfermedad, 
                                                Amor de verdad solo una vez asi se dan y eso eres. </p><br>
                                                <p>
                                                No me consuela el besarte porque he nacido para amar, 
                                                Tengo tanto, tanto amor querido. 
                                                No se te ocurra dejarme seria como matarme, 
                                                Quiero vivir junto a vos, querida, querida. 
                                                Porque eres tu, el amor de mi vida.
                                                </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 6 ERES  --> 

                                <!-- TEMA 7 LA CITA --> 
                                <tr>
                                    <td>7</td>
                                    <td>La cita

                                    <a href="#ver_cdsolo" id="tema_renovado_7" data-toggle="collapse" data-target="#citav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#cital" class="btn btn-info btn-xs">Letra</a>

<form id="cd_renovado_track_7">
    <input id="id_disco" name="disco" value="12" class="hidden">
    <input id="id_video" name="video" value="7" class="hidden">
</form>
                                    <!-- VIDEO --><br>

                                     <div id="citav" class="col-xs-12 collapse">                                  
                                    <iframe width="200" height="200" src="https://www.youtube.com/embed/0c-PBioNCA8" frameborder="0" allowfullscreen></iframe>
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="cital" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>La cita</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                Pasa y sientate, Tranquilizate 
                                                Al fin ya estas aqui que mas te da 
                                                Imaginate que yo no soy yo 
                                                Que soy el otro hombre que 
                                                Esperabas ver. </p><br>
                                                <p>
                                                Un desconocido que te ha escrito un verso 
                                                Y te dibujo la luna en un trozo de papel 
                                                Un amante improvisado 
                                                Misterioso apasionado 
                                                Que te dio una cita 
                                                En ese hotel. </p><br>
                                                <p>
                                                Desnudate ahora y apaga 
                                                La luz un instante y hazme 
                                                El amor como lo haces con 
                                                Esos amantes. 
                                                Te juro por Dios que es la ultima vez 
                                                Que te burlas de mi 
                                                Que me enganas. </p><br>
                                                <p>
                                                Y fueron mis manos las que te 
                                                Escribieron la carta 
                                                Han sido mis celos los 
                                                Que te tendieron la trampa 
                                                Y es mi corazon el que llora 
                                                De pena por dentro 
                                                Pero te dejo y me marcho 
                                                Para siempre mi amor.
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>
                                <!-- TEMA 7  LA CITA-->

                                <!-- TEMA 8 MAMA -->
                                <tr>
                                    <td>8</td>
                                    <td>Mama
                                    
                                    <a href="#ver_cdsolo" id="tema_renovado_8" data-toggle="collapse" data-target="#mamav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#mamal" class="btn btn-info btn-xs">Letra</a>

<form id="cd_renovado_track_8">
    <input id="id_disco" name="disco" value="12" class="hidden">
    <input id="id_video" name="video" value="8" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="mamav" class="col-xs-12 collapse">                                  
                                    
                                    </div>                                    


                                    <!-- LETRA  -->
                                    <div id="mamal" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Mama</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                Tu que eres tan bella como el mar 
                                                Tu que me ensenaste lo que es amar 
                                                Yo quiero que sigas siendo asi 
                                                La luz que ilumina el camino que me hace seguir </p><br>
                                                <p>
                                                Se que en esta vida no habra otra igual 
                                                Se que estas presente cuando estoy mal 
                                                Yo quiero que sigas siendo asi 
                                                Por eso y tantos recuerdos te quiero decir </p><br>
                                                <p>
                                                Te regalo un te amo 
                                                Por eso momentos 
                                                Y tantos recuerdos, mama 
                                                Te regalo un te amo 
                                                Por eso momentos 
                                                Que tu me ensenaste a amar </p><br>
                                                <p>
                                                Se que en esta vida no habra otra igual 
                                                Se que estas presente cuando estoy mal 
                                                Yo quiero que sigas siendo asi 
                                                Por eso y tantos recuerdos te quiero decir </p><br>
                                                <p>
                                                Te regalo un te amo 
                                                Por eso momentos 
                                                Y tantos recuerdos, mama 
                                                Te regalo un te amo 
                                                Por eso momentos 
                                                Que tu me ensenaste a amar </p><br>
                                                <p>
                                                Esta cancion es para vos mama 
                                                Y para todas las madres que aman 
                                                A sus hijos, como vos me amas a mi.
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr> 
                                <!-- TEMA 8 MAMA -->

                                <!-- TEMA 9 DONDE ESTAS AMOR-->
                                <tr>
                                    <td>9</td>
                                    <td>Donde estas amor
                                    
                                    <a href="#ver_cdsolo" id="tema_renovado_9" data-toggle="collapse" data-target="#dondeestasv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#dondeestasl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_renovado_track_9">
    <input id="id_disco" name="disco" value="12" class="hidden">
    <input id="id_video" name="video" value="9" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="dondeestasv" class="col-xs-12 collapse">                                  
                                    
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="dondeestasl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Donde estas amor</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                Siempre te he rogado 
                                                Mil veces que vuelvas 
                                                Y di mil plegarias de amor 
                                                Nunca me ha escuchado 
                                                Y aunque ella no quiera 
                                                Que voy a luchar por mi amor </p><br>
                                                <p>
                                                Te buscare juro por Dios 
                                                Voy a conquistar tu corazon 
                                                Te buscare juro por Dios 
                                                No puede morir mi gran amor </p><br>
                                                <p>
                                                Donde estas amor 
                                                Que no te encuentro mas 
                                                Que no te veo mas 
                                                Quedate aqui 
                                                Ya no se quien soy 
                                                Me morire de este dolor </p><br>
                                                <p>
                                                Donde estas amor 
                                                Que no te encuentro mas 
                                                Que no te veo mas 
                                                Quedate aqui 
                                                Ya no se quien soy 
                                                Me morire de este dolor.
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 9  DONDE ESTAS AMOR -->

                                <!-- TEMA 10 MI SEGUNDO HIJO VARON-->
                                <tr>
                                    <td>10</td>
                                    <td>Mi segundo hijo varon

                                    <a href="#ver_cdsolo" id="tema_renovado_10" data-toggle="collapse" data-target="#hijovaronv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#hijovaronl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_renovado_track_10">
    <input id="id_disco" name="disco" value="12" class="hidden">
    <input id="id_video" name="video" value="10" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="hijovaronv" class="col-xs-12 collapse">                                  
                                    
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="hijovaronl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Mi segundo hijo varon</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                Hoy me acorde cuando llegaste 
                                                Vi la ilusion del primer dia 
                                                De tu mirada en la mia 
                                                Lagrimas de amor llenas de alegria </p><br>
                                                <p>
                                                Yo te prometo amarte siempre 
                                                Ser quien te ensene y quien te guia 
                                                Voy a cuidarte para siempre 
                                                Lo juro por Dios hijo de mi vida </p><br>
                                                <p>
                                                Si te voy amar con toda mi alma 
                                                Si te voy amar toda la eternidad 
                                                Si te voy a amar con toda mi alma 
                                                Si te voy amar, papa te va a cuidar 
                                                Papa te va a cuidar </p><br>
                                                <p>
                                                Yo te prometo amarte siempre 
                                                Ser quien te ensene y quien te guia 
                                                Voy a cuidarte para siempre 
                                                Lo juro por Dios hijo de mi vida </p><br>
                                                <p>
                                                Si te voy amar con toda mi alma 
                                                Si te voy amar toda la eternidad 
                                                Si te voy a amar con toda mi alma 
                                                Si te voy amar, papa te va a cuidar 
                                                Papa te va a cuidar.
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 10 MI SEGUNDO HIJO VARON --> 

                                <!-- TEMA 11 CUANTA PENA -->
                                <tr>
                                    <td>11</td>
                                    <td>Cuanta pena

                                    <a href="#ver_cdsolo" id="tema_renovado_11" data-toggle="collapse" data-target="#cuantapenav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#cuantapenal" class="btn btn-info btn-xs">Letra</a>

<form id="cd_renovado_track_11">
    <input id="id_disco" name="disco" value="12" class="hidden">
    <input id="id_video" name="video" value="11" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="cuantapenav" class="col-xs-12 collapse">                                  
                                    
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="cuantapenal" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Cuanta pena</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                Se apago la luz en nuestra habitacion 
                                                Y de un momento al otro pregunte por que 
                                                No recuerdo cuando ni como paso 
                                                Pero no me digas que no sucedio. 
                                                Por que? </p><br>
                                                <p>
                                                Siempre lo mismo 
                                                Debo suplicarte que me des carino 
                                                Y que me hagas el amor. </p><br>
                                                <p>
                                                Siempre lo mismo 
                                                Debo suplicarte que me des carino 
                                                Y me aburri de siempre no. </p><br>
                                                <p>
                                                Ay, ay, ay, cuanta pena me das. 
                                                Ay, ay, ay, cuanta pena me das. 
                                                Cuanta pena mi amor.
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 11 CUANTA PENA-->     

                                <!-- TEMA 12   ME HACES FALTA-->
                                <tr>
                                    <td>12</td>
                                    <td>Me haces falta

                                    <a href="#ver_cdsolo" id="tema_renovado_12" data-toggle="collapse" data-target="#mefaltav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#mefaltal" class="btn btn-info btn-xs">Letra</a>

<form id="cd_renovado_track_12">
    <input id="id_disco" name="disco" value="12" class="hidden">
    <input id="id_video" name="video" value="12" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="mefaltav" class="col-xs-12 collapse">                                  
                                    
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="mefaltal" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Me haces falta</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                En esta etapa de mi vida he decidido borrarte 
                                                En esta etapa de mi vida he decidido olvidarte 
                                                Pero como hago si me hace mal saber 
                                                Que mi vida no regresaras aqui conmigo </p><br>
                                                <p>
                                                En esta etapa de mi vida he decidido alejarme 
                                                En esta etapa de mi viva ya no quiero pensarte 
                                                Pero como hago si me hace mal saber 
                                                Que mi vida no regresaras aqui conmigo </p><br>
                                                <p>
                                                Me haces falta tu 
                                                Para ser yo mismo 
                                                Solamente tu 
                                                Pero sin tu egoismo 
                                                Me haces falta tu, mi amor </p><br>
                                                <p>
                                                En esta etapa de mi vida he decidido borrarte 
                                                En esta etapa de mi vida he decidido olvidarte 
                                                Pero como hago si me hace mal saber 
                                                Que mi vida no regresaras aqui conmigo </p><br>
                                                <p>
                                                Me haces falta tu 
                                                Para ser yo mismo 
                                                Solamente tu 
                                                Pero sin tu egoismo 
                                                Me haces falta tu, mi amor.
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 12   ME HACES FALTA -->    

                                                                                           

                                                                                                                                                  

                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>

                                <!--
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                              -->
                                </tbody>
                              </table>
                            </div> <!-- Cierra CD -->                           


                           
                          </div>
                          <!-- TERMINA TAB HOME -->    



                          <!--
                          <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                          </div>
                          -->

                        </div>
                        <!-- TERMINA PESTAnAS -->


                        <!-- Cierra id#cd_solo -->    
                        </div>                   
              ';
          }
    return $d_renovado;          
    }       

    function sentimientos2(){
        $d_sentimientos2= "";
        $d_sentimientos2 .='
            <div id="cd_sentimientos2" class="collapse hidden"> <!--  Comienza disco SENTIMIENTOS 2->
                        <!-- Abre id#cd_sim -->
                        <h2>Album Sentimientos 2 </h2>

                        <!-- COMIENZA PESTAnAS -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home_sentimientos2">Inicio</a></li>
                          <li><a data-toggle="tab" href="#cds2">CD</a></li>
                          <!--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
                        </ul>

                        <div class="tab-content">
                        <!-- COMIENZA TAB HOME -->    
                          <div id="home_sentimientos2" class="tab-pane fade in active">
                            <h3>Agradecimientos</h3>
                            <p><small><h5>
                            Este compilado de nuevas y viejas canciones de mi carrera esta hecho para que compartamos nuevamente lo que fue
                            la emocion de haber estado juntos en el Gran Rex y en otros tantos lugares donde siempre estuvieron presentes e hicieron que mis
                            presentaciones en vivo esten llenas de amor y emociones.
                            Gracias por estar en esos momentos y en este tambien <strong>Dany</strong>
                            </h5></small></p>
                          </div>
                          <!-- TERMINA TAB HOME -->    

                          <!-- COMIENZA TAB CD -->    
                          <div id="cds2" class="tab-pane fade">
                            
                            <h3>Lista de canciones</h3>
                          
        
                              <h4>Daniel Agostini</h4>
                              <p><small>
                                Disco en vivo en diferentes escenarios.                        

                               </small></p><br>


                                <!-- **************************************** -->    
                                <!-- COMIENZA ESCUCHAR CD COMPLETO "SIN LIMITE" -->
                                <a href="#solo" id="cd_sentimientos2_full" valor="14" data-toggle="collapse" data-target="#cdcompleto14" class="btn btn-info btn-xs">Escuchar CD Completo</a>

                                <div id="cdcompleto14" class="col-xs-12 collapse ">
                                    <h4>Disco Completo</h4>

                                    <p id="full_cd_sentimientos2" > </p>

                                </div>
                                <!-- TERMINA ESCUCHAR CD COMPLETO "SIN LIMITE" -->
                                <!-- **************************************** --> 




                              <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Nombre de la cancion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                <!-- TEMA 1 CORAZON-->
                                <tr>
                                   <td>1</td>
                                   <td>Corazon <a href="#sim" id="cd_sim" data-toggle="collapse" data-target="#corazon2v" class="btn btn-info btn-xs">Escuchar</a>
                                    | <a href="#ver_cdsolo" id="dc_sim" data-toggle="collapse" data-target="#corazon2l" class="btn btn-info btn-xs">Letra</a></p>

                                    <!-- VIDEO --><br>
                                    <div id="corazon2v" class="col-xs-12 collapse">                                  
                                    <iframe width="200" height="200" src="https://www.youtube.com/embed/h5q-pNU1WWQ" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <!-- VIDEO -->

                                    <!-- LETRA  -->
                                    <div id="corazon2l" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Corazon</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>                                                    
                                                    He comenzado una nueva vida enamorado 
                                                    Mi corazon late por tus besos, 
                                                    Tu gran amor ya me tiene preso 
                                                    Es el deseo de amarte siempre que me atrapo, 
                                                    En tu mirada me das ternura y me das pasion 
                                                    Cada caricia cuando me tocas por ti se me hace agüita la boca, 
                                                    Es el deseo de amarte siempre que me atrapo. </p><br>
                                                    <p>
                                                    Es tu corazon que me esta volviendo loco 
                                                    Es mi corazon se acelera cuando te toco 
                                                    Es tu corazon que se esta volviendo loco 
                                                    Es mi corazon se acelera con este amor... </p><br>
                                                    <p>
                                                    En tu mirada me das ternura 
                                                    Y me das pasion cada caricia cuando me tocas 
                                                    Por ti se me hace agüita la boca, 
                                                    Es el deseo de amarte siempre que me atrapo. </p><br>
                                                    <p>
                                                    Es tu corazon que me esta volviendo loco 
                                                    Es mi corazon se acelera cuando te toco 
                                                    Es tu corazon que me esta volviendo loco 
                                                    Es mi corazon se acelera con este amor... 
                                                    Es tu corazon que me esta volviendo loco 
                                                    Es mi corazon se acelera cuando te toco 
                                                    Es tu corazon que me esta volviendo loco 
                                                    Es mi corazon se acelera con este amor. </p><br>
                                                    <p>
                                                    Que hiciste amor.
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA  -->

                                   </td>
                                </tr> 
                                <!-- TEMA 1 CORAZON-->  

                                <!-- TEMA 2 VOLVERAS A MI --->
                                <tr>
                                    <td>2</td>
                                    <td>Volveras a mi 
                                        <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#volveras2v" class="btn btn-info btn-xs">Escuchar</a> | 
                                        <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#volveras2l" class="btn btn-info btn-xs">Letra</a>

                                    <!-- VIDEO --><br>
                                    <div id="volveras2v" class="col-xs-12 collapse">                                  
                                    <iframe width="200" height="200" src="https://www.youtube.com/embed/9uXfEcB8SGI" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <!-- VIDEO  -->


                                    <!-- LETRA  -->
                                    <div id="volveras2l" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>Volveras a mi </h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                    <br>
                                    <p>
                                    Te fuiste sin decir adios una manana, 
                                    La vida me quedo vacia, 
                                    Si era lo que mas queria y de otro amor se enamoro. </p><br>
                                    <p>
                                    Y a pesar de que ha pasado tanto tiempo, 
                                    Aun te sigo recordando; 
                                    No niego que te sigo amando pero este amor ya termino. </p><br>
                                    <p>
                                    Yo se que volveras cuando te arrepientas a buscar mi amor 
                                    Yo se que lloraras por irte de fiesta pidiendome perdon. </p><br>
                                    <p>
                                    Te fuiste sin decir adios esa manana, 
                                    La vida me quedo vacia, 
                                    Si era lo que mas queria y de otro amor se enamoro. </p><br>
                                    <p>
                                    Yo se que volveras cuando te arrepientas a buscar mi amor 
                                    Yo se que lloraras por irte de fiesta pidiendome perdon.
                                    </p>
                                    
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                    <!-- LETRA -->

                                    </td>
                                </tr>    
                                <!-- TEMA 2 VOLVERAS A MI -->      

                                <!-- TEMA 3 ERAMOS -->
                                <tr>
                                   <td>3</td>
                                   <td>Eramos
                                   <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#eramos2v" class="btn btn-info btn-xs">Escuchar</a> | 
                                   <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#eramos2l" class="btn btn-info btn-xs">Letra</a>

                                    <div id="eramos2v" class="col-xs-12 collapse">                                  
                                    <iframe width="200" height="200" src="https://www.youtube.com/embed/d6mZOKw6sVE" frameborder="0" allowfullscreen></iframe>
                                    </div> 
                                    
                                    <div id="eramos2l" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>Eramos</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                     
                                            <p>
                                            eramos como el fuego. 
                                            eramos tan amantes, 
                                            Tan amigos 
                                            Y este amor se apago 
                                            Tan lentamente 
                                            Que dejo conquistar 
                                            Mi corazon. 
                                            No se como decirte adios 
                                            Sin un motivo, 
                                            Sin una explicacion. 
                                            No se como decirte que 
                                            No quiero estar contigo, 
                                            No puedo terminar 
                                            La relacion. </p><br>
                                            <p>
                                            Y ya no siento nada 
                                            Cuando tu me abrazas. 
                                            El amor se fue, 
                                            Solo quedan brazas.
                                        </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                   </td> 
                                </tr> 
                                <!-- TEMA 3 ERAMOS  -->  
                              
                                <!-- TEMA 4  MI GRAN AMOR --> 
                                <tr>
                                    <td>4</td>
                                    <td><small>Mi gran amor</small>
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#migran2v" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#migran2l" class="btn btn-info btn-xs">Letra</a>
                                    <!-- VIDEO --><br>
                                    <div id="migran2v" class="col-xs-12 collapse">                                  
                                    <iframe width="200" height="200" src="https://www.youtube.com/embed/Rod1iXi7aRU" frameborder="0" allowfullscreen></iframe>
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="migran2l" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Mi gran amor</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>

                                                
                                                <p>
                                                Tus besos me han llenado de pasion 
                                                y estando a tu lado siento amor, 
                                                Como el frio que corre por mis venas 
                                                tu me acaricias y es mi condena. 
                                                Se que resulta extrano nuestro amor, 
                                                pero es un mar bravio de pasion 
                                                Como el alma le da fuerza al corazon 
                                                tu le das vida a nuestro amor. 
                                                Porque no piensas en lo mucho que te amo, 
                                                aunque te digan que no sirvo para ti. 
                                                Si en el camino vamos juntos de la mano 
                                                a demostrarles que te puedo hacer feliz. 
                                                Porque no piensas en lo mucho que te amo, 
                                                aunque te digan que no sirvo para ti. 
                                                Si en el camino vamos juntos de la mano 
                                                a demostrarles que te puedo hacer feliz. 
                                                Se que resulta extrano nuestro amor, 
                                                pero es un mar bravio de pasion 
                                                Como el alma le da fuerza al corazon 
                                                tu le das vida a nuestro amor. 
                                                Porque no piensas en lo mucho que te amo, 
                                                aunque te digan que no sirvo para ti. 
                                                Si en el camino vamos juntos de la mano 
                                                a demostrarles que te puedo hacer feliz. 
                                                Porque no piensas en lo mucho que te amo, 
                                                aunque te digan que no sirvo para ti. 
                                                Si en el camino vamos juntos de la mano 
                                                a demostrarles que te puedo hacer feliz, 
                                                aunque te digan que no sirvo para ti. 
                                                Si en el camino vamos juntos de la mano 
                                                a demostrarles que te puedo hacer feliz
                                                </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>    

                                    </td>
                                </tr> 
                                <!-- TEMA 4  MI GRAN AMOR --> 

                                <!-- TEMA 5 AnORANZAS  --> 
                                <tr>
                                    <td>5</td>
                                    <td>Anoranzas

                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#ano2v" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#ano2l" class="btn btn-info btn-xs">Letra</a>
                                    
                                    <!-- Sin sentido --><br>
                                    <div id="ano2v" class="col-xs-12 collapse">                                  
                                    <iframe width="200" height="200" src="https://www.youtube.com/embed/K8kCXgsJ-zs" frameborder="0" allowfullscreen></iframe>
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="ano2l" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Anoranzas</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                Yo no se que esta pasando 
                                                Que nuestro amor se fue marchitando 
                                                Como una rosa en el desierto 
                                                Fue desojada por el viento 
                                                Y yo te quiero tanto y tanto 
                                                Y deseo poquito a poco 
                                                Este amor que llevo dentro 
                                                Quiereme hasta el firmamento </p><br>
                                                <p>
                                                Yo no se que esta pasando 
                                                Que nuestro amor se fue marchitando 
                                                Como una rosa en el desierto 
                                                Fue desojada por el viento 
                                                Y yo te quiero tanto y tanto 
                                                Y deseo poquito a poco 
                                                Este amor que llevo dentro 
                                                Quiereme asta el firmamento </p><br>
                                                <p>
                                                Lo que ha crecido poco a poco 
                                                Ahora se fue marchitando 
                                                Por favor regresa pronto 
                                                No me hagas mas sufrir 
                                                Lo que ha crecido poco a poco 
                                                Ahora se fue marchitando 
                                                Por favor regresa pronto 
                                                No me hagas mas sufrir.
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>                                                                    
                                <!-- TEMA 5 AnORANZAS  --> 

                                <!-- TEMA 6 HOMBRES QUE LLORAN--> 
                                <tr>
                                    <td>6</td>
                                    <td>Hombres que lloran
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#hlloranv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#hlloranl" class="btn btn-info btn-xs">Letra</a>
                                    <!-- VIDEO--><br>
                                    <div id="hlloranv" class="col-xs-12 collapse">                                  
                                   <iframe width="200" height="200" src="https://www.youtube.com/embed/t5X0SWaGhZI" frameborder="0" allowfullscreen></iframe>
                                    </div>

                                    <!-- LETRA  -->
                                    <div id="hlloranl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Hombres que lloran</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                Se que desde el dia en que te fuiste jamas pensaste en regresar, 
                                                Que la relacion duro a duras penas que un dia dijiste adios y nunca mas. 
                                                Te dije: “mi amor, sera como tu quieras” y tu me dijiste: “no, no puedo mas”. 
                                                A mi alma vino el invierno en primavera, un dia dijiste adios y nunca mas. </p><br>
                                                <p>
                                                Y veras que al final hay hombres que lloran. 
                                                Con el tiempo no habra nunca en tu vida felicidad. 
                                                Y veras que al final hay hombres que lloran. 
                                                Con el tiempo veras, volveras, volveras. </p><br>
                                                <p>
                                                Sabiendo que te amaba igual te fuiste dejandome en la triste soledad 
                                                Y solo es un vacio el que me queda y lagrimas de amor para llorar. </p><br>
                                                <p>
                                                Y veras que al final hay hombres que lloran. 
                                                Con el tiempo no habra nunca en tu vida felicidad. 
                                                Y veras que al final hay hombres que lloran. 
                                                Con el tiempo veras, volveras, volveras. 
                                                Y veras que al final hay hombres que lloran. 
                                                Con el tiempo veras, volveras, volveras.
                                                </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 6 HOMBRES QUE LLORAN  --> 

                                <!-- TEMA 7 NADA POR PERDER--> 
                                <tr>
                                    <td>7</td>
                                    <td>Nada por perder

                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#perder2v" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#perder2l" class="btn btn-info btn-xs">Letra</a>
                                    <!-- VIDEO --><br>

                                  <div id="perder2v" class="col-xs-12 collapse">                                  
                                   <iframe width="200" height="200" src="https://www.youtube.com/embed/_CIAPpCy7NY" frameborder="0" allowfullscreen></iframe>
                                    </div>                                    


                                    <!-- LETRA  -->
                                    <div id="perder2l" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Nada por perder</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                Como hacer para dar vuelta esta partida, 
                                                Como se sostiene el circo de la libertad, 
                                                Como saber el rumbo que nuestro barco tomara 
                                                Quizas con tantas almas en medio de la tempestad 
                                                Murio la ideologia reemplazada por temores 
                                                El pueblo solo vote al mejor de los peores, 
                                                Crucifican a Jesus friamente y por decreto 
                                                Mi pais esta esperando aunque crean que esta muerto. </p><br>
                                                <p>
                                                Y ya no queda nada por perder 
                                                Buscare mi amanecer 
                                                He tocado fondo tantas veces y me han visto renacer. </p><br>
                                                <p>
                                                Y ya no queda nada por perder 
                                                Queda una batalla mas 
                                                No me robaran la fe ni mi oportunidad. </p><br>
                                                <p>
                                                Como creer en la justicia si no hay verdad, 
                                                Como dar mi otra mejilla si me mataran, 
                                                Como darle alegria a la memoria 
                                                Si el pasado y el presente son la misma historia, 
                                                La felicidad se ha vuelto un mito perdido, 
                                                Como ser feliz si somos un pueblo mendigo 
                                                Que revuelve historia entre suenos 
                                                Y enojos mi pais se ha hecho cargo de platos que otros han roto. </p><br>
                                                <p>
                                                Y ya no queda nada por perder buscare mi amanecer 
                                                He tocado fondo tantas veces y me han visto renacer. </p><br>
                                                <p>
                                                Y ya no queda nada por perder 
                                                Queda una batalla mas 
                                                No me robaran la fe ni mi oportunidad. </p><br>
                                                <p>
                                                Aunque aparente no ir a ningun lado 
                                                La calesita siempre ha de girar y volvera a darme una vuelta mas. </p><br>
                                                <p>
                                                Y ya no queda nada por perder 
                                                Buscare mi amanecer he tocado fondo tantas veces y me han visto renacer.</p><br> 
                                                <p>
                                                Y ya no queda nada por perder 
                                                Queda una batalla mas no me robaran la fe ni mi oportunidad.
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>
                                <!-- TEMA 7  NADA POR PERDER-->

                                <!-- TEMA 8 QUE NO QUEDEN HUELLAS -->
                                <tr>
                                    <td>8</td>
                                    <td>Que no queden huellas
                                    
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#huellas2v" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#huellas2l" class="btn btn-info btn-xs">Letra</a>
                                    <!-- VIDEO --><br>

                                    <div id="huellas2v" class="col-xs-12 collapse">                                  
                                   <iframe width="200" height="200" src="https://www.youtube.com/embed/lO3z5NYy8jU" frameborder="0" allowfullscreen></iframe>
                                    </div>   

                                 


                                    <!-- LETRA  -->
                                    <div id="huellas2l" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Que no queden huellas</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                Traigo en el alma pena y llanto que no puedo contener
                                                es que la quiero tanto y tanto pero me toco perder 
                                                ahora tengo que olvidarla tambien arrancarla de mi alma 
                                                y mi ser ella es el amor que quema en mi piel, que no quede nada. </p><br>
                                                <p>
                                                Que no queden huellas, 
                                                Que no y que no que no queden huellas 
                                                Porque estoy seguro que tu mi amor ya ni recuerda. </p><br>
                                                <p>
                                                Que no queden huellas, 
                                                Que no y que no que no queden huellas 
                                                Porque estoy seguro que tu mi amor ya ni recuerda. </p><br>
                                                <p>
                                                Que no queden huellas de ti, 
                                                Ni de los besos que te di para convencerme mejor que yo, 
                                                Yo ya te perdi. </p><br>
                                                <p>
                                                Que no queden huellas, 
                                                Que no y que no que no queden huellas 
                                                Porque estoy seguro que tu mi amor ya ni recuerda. </p><br>
                                                <p>
                                                Que no queden huellas de ti, 
                                                Ni de los besos que te di para convencerme mejor que yo, </p><br>
                                                Yo ya te perdi                      
                                                <p>
                                                Que no queden huellas, que no y que no.
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr> 
                                <!-- TEMA 8 QUE NO QUEDEN HUELLAS -->

                                <!-- TEMA 9 MENTISTE-->
                                <tr>
                                    <td>9</td>
                                    <td>Mentiste
                                    
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#mentiste2v" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#mentiste2l" class="btn btn-info btn-xs">Letra</a>
                                    <!-- VIDEO --><br>
                                    <div id="mentiste2v" class="col-xs-12 collapse">                                  
                                    <iframe width="200" height="200" src="https://www.youtube.com/embed/NmUBpoeNp5Q" frameborder="0" allowfullscreen></iframe>
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="mentiste2l" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Mentiste</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                Recuerdas esa promesa que me hiciste una manana 
                                                recuerdas que me juraste y me abrazaste hasta morir 
                                                y ahora te quieres ir de la mano de un amigo y todo 
                                                lo prometido en el aire se esfumo. </p><br>
                                                <p>
                                                ¿Por que caray me tomaste? ¿Crees que vivo dormido? </p><br>
                                                <p>
                                                De que te viste con el mucho antes me entere el vino a confesar que tu 
                                                lo andabas buscando le dije:”que siga el juego, quiero ver que me diras” </p><br>
                                                <p>
                                                Porque mi amor mentiste, mentiste, mentiste.
                                                Porque mi amor me heriste, me heriste en el corazon. 
                                                Porque mi amor mentiste, mentiste, mentiste.
                                                Porque mi amor me heriste, me heriste en el corazon.
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 9  MENTISTE -->

                                <!-- TEMA 10 EN PIE DE GUERRA-->
                                <tr>
                                    <td>10</td>
                                    <td>En pie de guerra

                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#guerra2v" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#guerra2l" class="btn btn-info btn-xs">Letra</a>
                                    <!-- VIDEO --><br>
                                    <div id="guerra2v" class="col-xs-12 collapse">                                  
                                    <iframe width="200" height="200" src="https://www.youtube.com/embed/3Sb-dp78cEg" frameborder="0" allowfullscreen></iframe>
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="guerra2l" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>En pie de guerra</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                Son las 10 de la manana 
                                                Te llevo el desayuno a la cama 
                                                Me pongo a jugar con tu cabello 
                                                No hay nada mas lindo que este amor tan bello nou no 
                                                Te pones mi camisa y sonries 
                                                Te recoges el pelo negro y me lo pides otra vez 
                                                Me estas poniendo en pie de guerra 
                                                No puedo poder soportar cosa mas secreta 
                                                No me voy a defender 
                                                No me quiero defender 
                                                No me voy a defender 
                                                Voy a rendirme a tus ojos 
                                                Voy a rendirme a tus labios 
                                                No me voy a defender 
                                                No me quiero defender 
                                                No me voy a defender
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 10 EN PIE DE GUERRA--> 


                                <!-- TEMA 11   NInA CAPRICHOSA / OTRA NOCHE DE AMOR-->
                                <tr>
                                    <td>11</td>
                                    <td>Nina caprichosa/Otra noche de amor

                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#ninaotra2v" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#ninaotra2l" class="btn btn-info btn-xs">Letra</a>
                                    <!-- VIDEO --><br>
                                    <div id="ninaotra2v" class="col-xs-12 collapse">                                  
                                    <iframe width="200" height="200" src="https://www.youtube.com/embed/8TxHPcKA5Iw" frameborder="0" allowfullscreen></iframe>
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="ninaotra2l" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Me haces falta</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                <h4>Nina caprichosa/Otra noche de amor</h4><br>
                                                Cuando pasen los anos y sientas el fracaso, recien 
                                                Te daras cuenta que has actuado muy mal. 
                                                De todos tus caprichos te arrepentiras, 
                                                Lo que solo has logrado nina consentida es hacerte odiar. </p><br>
                                                <p>
                                                De nada sirve ser tan hermosa nina caprichosa, 
                                                Caprichosa. Si has demostrado ser poca cosa nina 
                                                Caprichosa, caprichosa. De nada sirve ser tan
                                                Hermosa nina caprichosa, caprichosa. Si has 
                                                Demostrado ser poca cosa nina caprichosa, caprichosa. </p><br>
                                                <p>
                                                Cuando pasen los anos y sientas el fracaso, 
                                                Recien te daras cuenta que has actuado muy mal. 
                                                De todos tus caprichos te arrepentiras, lo que 
                                                Solo has logrado nina consentida es hacerte odiar. </p><br>
                                                <p>
                                                De nada sirve ser tan hermosa nina caprichosa, 
                                                Caprichosa. Si has demostrado ser poca cosa nina 
                                                Caprichosa, caprichosa. De nada sirve ser tan
                                                Hermosa nina caprichosa, caprichosa. Si has demostrado 
                                                Ser poca cosa nina caprichosa, caprichosa. </p><br>

                                                -------------------------------------------------- <br>
                                                <h4>Otra noche de amor</h4>

                                                <p>
                                                Tengo miedo, me dices tu. 
                                                Por favor me pides que apague la luz. 
                                                Te acaricio, tu tiemblas de amor. 
                                                Tu me besas y yo muero por vos, 
                                                Muero por vos. 
                                                Hace frio y afuera llovio, 
                                                Pero aqui contigo me quema el amor. 
                                                Ya es muy tarde, mejor ya me voy, 
                                                Tu me dices vistiendote amor, 
                                                Vistiendote amor. </p><br>
                                                <p>
                                                Regalame otra noche, 
                                                Te lo pido por favor, 
                                                Regalame otra noche 
                                                En nombre de este amor. 
                                                Regalame otra noche, 
                                                Te lo pido por favor, 
                                                Regalame otra noche 
                                                En nombre de este amor. </p><br>
                                                <p>
                                                Hace frio y afuera llovio, 
                                                Pero aqui contigo me quema el amor. 
                                                Ya es muy tarde, mejor ya me voy, 
                                                Tu me dices vistiendote amor, vistiendote amor. </p><br>
                                                <p>
                                                Regalame otra noche, 
                                                Te lo pido por favor, 
                                                Regalame otra noche 
                                                En nombre de este amor. 
                                                Regalame otra noche, 
                                                Te lo pido por favor, 
                                                Regalame otra noche 
                                                En nombre de este amor. 
                                                Regalame otra noche, 
                                                Te lo pido por favor, 
                                                Regalame otra noche 
                                                En nombre de este amor. 
                                                Regalame otra noche, 
                                                Te lo pido por favor, 
                                                Regalame otra noche 
                                                En nombre de este amor.
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 11   NInA CAPRICHOSA / OTRA NOCHE DE AMOR -->    

                                <!-- TEMA 12 SI TODAVIA ME QUIERES -->
                                <tr>
                                    <td>12</td>
                                    <td>Si todavia me quieres

                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#mequieres2v" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#mequieres2l" class="btn btn-info btn-xs">Letra</a>
                                    <!-- VIDEO --><br>
                                    <div id="mequieres2v" class="col-xs-12 collapse">                                  
                                    <iframe width="200" height="200" src="https://www.youtube.com/embed/hW26Md0moBQ" frameborder="0" allowfullscreen></iframe>
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="mequieres2l" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Si todavia me quieres</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                Quiero tenerte a mi lado y darte todo mi amor.
                                                Quiero sentir que eres mia, que eres de mi corazon. 
                                                Si cada vez que me acuerdo de lo que hemos vivido, 
                                                A tu lado he sentido que ya no volveras. 
                                                Pero tu me has dejado mi corazon tan vacio, 
                                                Sin haber conseguido que me puedas amar. </p><br>
                                                <p>
                                                Si alguna vez quisiste a alguien, 
                                                Regresa a mi que quiero amarte. 
                                                Recuerda todo lo vivido, no volvera a pasar. 
                                                Si alguna vez quisiste a alguien, 
                                                Regresa a mi que quiero amarte. 
                                                Recuerda todo lo vivido, no volvera a pasar. </p><br>
                                                <p>
                                                Quiero tenerte a mi lado y darte todo mi amor.
                                                Quiero sentir que eres mia, que eres de mi corazon. 
                                                Si cada vez que me acuerdo de lo que hemos vivido, 
                                                A tu lado he sentido que ya no volveras. 
                                                Pero tu me has dejado mi corazon tan vacio, 
                                                Sin haber conseguido que me puedas amar. 
                                                Si alguna vez quisiste a alguien, 
                                                Regresa a mi que quiero amarte. 
                                                Recuerda todo lo vivido, no volvera a pasar. 
                                                Si alguna vez quisiste a alguien, 
                                                Regresa a mi que quiero amarte. 
                                                Recuerda todo lo vivido, no volvera a pasar. 
                                                Si alguna vez quisiste a alguien, 
                                                Regresa a mi que quiero amarte. 
                                                Recuerda todo lo vivido, no volvera a pasar. 
                                                Si alguna vez quisiste a alguien, 
                                                Regresa a mi que quiero amarte. 
                                                Recuerda todo lo vivido, no volvera a pasar.
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 12 SI TODAVIA ME QUIERES-->      

                                <!-- TEMA 13 COMO OLVIDARTE -->
                                <tr>
                                    <td>13</td>
                                    <td>Como olvidarte

                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#comoolvidarte2v" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#comoolvidarte2l" class="btn btn-info btn-xs">Letra</a>
                                    <!-- VIDEO --><br>
                                    <div id="comoolvidarte2v" class="col-xs-12 collapse">                                  
                                    <iframe width="200" height="200" src="https://www.youtube.com/embed/hW26Md0moBQ" frameborder="0" allowfullscreen></iframe>
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="comoolvidarte2l" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Como olvidarte</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                Quiero tenerte a mi lado y darte todo mi amor.
                                                Quiero sentir que eres mia, que eres de mi corazon. 
                                                Si cada vez que me acuerdo de lo que hemos vivido, 
                                                A tu lado he sentido que ya no volveras. 
                                                Pero tu me has dejado mi corazon tan vacio, 
                                                Sin haber conseguido que me puedas amar. </p><br>
                                                <p>
                                                Si alguna vez quisiste a alguien, 
                                                Regresa a mi que quiero amarte. 
                                                Recuerda todo lo vivido, no volvera a pasar. 
                                                Si alguna vez quisiste a alguien, 
                                                Regresa a mi que quiero amarte. 
                                                Recuerda todo lo vivido, no volvera a pasar. </p><br>
                                                <p>
                                                Quiero tenerte a mi lado y darte todo mi amor.
                                                Quiero sentir que eres mia, que eres de mi corazon. 
                                                Si cada vez que me acuerdo de lo que hemos vivido, 
                                                A tu lado he sentido que ya no volveras. 
                                                Pero tu me has dejado mi corazon tan vacio, 
                                                Sin haber conseguido que me puedas amar. 
                                                Si alguna vez quisiste a alguien, 
                                                Regresa a mi que quiero amarte. 
                                                Recuerda todo lo vivido, no volvera a pasar. 
                                                Si alguna vez quisiste a alguien, 
                                                Regresa a mi que quiero amarte. 
                                                Recuerda todo lo vivido, no volvera a pasar. 
                                                Si alguna vez quisiste a alguien, 
                                                Regresa a mi que quiero amarte. 
                                                Recuerda todo lo vivido, no volvera a pasar. 
                                                Si alguna vez quisiste a alguien, 
                                                Regresa a mi que quiero amarte. 
                                                Recuerda todo lo vivido, no volvera a pasar.
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 13 COMO OLVIDARTE-->              

                                <!-- TEMA 14 MUCHACHITA -->
                                <tr>
                                    <td>14</td>
                                    <td>Muchachica

                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#muchachita2v" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#muchachita2l" class="btn btn-info btn-xs">Letra</a>
                                    <!-- VIDEO --><br>
                                    <div id="muchachita2v" class="col-xs-12 collapse">                                  
                                    <iframe width="200" height="200" src="https://www.youtube.com/embed/LTflIjh35j0" frameborder="0" allowfullscreen></iframe>
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="muchachita2l" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Muchachica</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                Se te ve agotada de caminar 
                                                Descansa en mi, muchachita 
                                                Bajo tu mirada veo la soledad 
                                                Hiriendote, muchachita. 
                                                De ojos tristes. 
                                                Dime lo que haces lejos de tu hogar 
                                                Confia en mi, muchachita. 
                                                Cuentame el motivo que te hace escapar 
                                                Lo entendere muchachita. 
                                                De ojos tristes </p><br>
                                                <p>
                                                Desahogate en mis brazos 
                                                Calma en mi todas tus penas 
                                                Y has que salga la tristeza que hay ti, 
                                                Bebe un poco de mi vino 
                                                Sientate junto a mi hoguera 
                                                Y sonrie nuevamente para mi, 
                                                Muchachita 
                                                Sobre tu semblante nace una sonrisa, 
                                                Tus ojos brillan, muchachita 
                                                Sientes un alivio en el corazon, ya no estas sola 
                                                Muchachita. de ojos tristes </p><br>
                                                <p>
                                                Hablame de tu pasado, llename con tu perfume 
                                                Quedate esta noche amiga junto a mi, 
                                                Yo tambien me siento solo, yo tambien he caminado 
                                                Yo tambien estoy cansado ya de huir, muchachita
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 14 MUCHACHITA-->             

                                <!-- TEMA 15 NO SUFRO MAS -->
                                <tr>
                                    <td>15</td>
                                    <td>No sufro mas

                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#sufromas2v" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#sufromas2l" class="btn btn-info btn-xs">Letra</a>
                                    <!-- VIDEO --><br>
                                    <div id="sufromas2v" class="col-xs-12 collapse">                                  
                                    <iframe width="200" height="200" src="https://www.youtube.com/embed/DtHDczBbEBk?list=PL3OEDpDSbZj0751-yvoYua0QCksqsonED" frameborder="0" allowfullscreen></iframe>
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="sufromas2l" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>No sufro mas</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                Cuando tu no estas, sufro en soledad, 
                                                estoy amandote vivo sonandote, lloro si te vas, 
                                                si no vuelves mas te estare esperandote 
                                                para adorarte, aunque me muera por estar contigo 
                                                ya no sufro mas, por tus enganos porque me has mentido te voy a olvidar. </p><br>
                                                <p>
                                                Aunque me muera por estar contigo ya no sufro mas, 
                                                por tus enganos porque me has mentido te voy a olvidar; yo te voy a olvidar. </p><br>
                                                <p>
                                                Cuando tu no estas, sufro en soledad, estoy amandote vivo sonandote, 
                                                lloro si te vas, si no vuelves mas te estare esperandote para adorarte, 
                                                aunque me muera por estar contigo ya no sufro mas, 
                                                por tus enganos porque me has mentido te voy a olvidar. </p><br>
                                                <p>
                                                Aunque me muera por estar contigo ya no sufro mas, 
                                                por tus enganos porque me has mentido te voy a olvidar. </p><br>
                                                <p>
                                                Aunque me muera por estar contigo ya no sufro mas, 
                                                por tus enganos porque me has mentido te voy a olvidar. </p><br>
                                                <p>
                                                Yo te voy a olvidar; y yo te voy a olvidar.
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 15 NO SUFRO MAS-->                                                                                   

                                <!-- TEMA 16 YO ME VOY CON VOS -->
                                <tr>
                                    <td>16</td>
                                    <td>Yo me voy con vos

                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#convos2v" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#convos2l" class="btn btn-info btn-xs">Letra</a>
                                    <!-- VIDEO --><br>
                                    <div id="convos2v" class="col-xs-12 collapse">                                  
                                    <iframe width="200" height="200" src="https://www.youtube.com/embed/lCjOZVuMm4w?list=PL3OEDpDSbZj0751-yvoYua0QCksqsonED" frameborder="0" allowfullscreen></iframe>
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="convos2l" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>Yo me voy con vos</h3></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                Si sabes que cuando estoy contigo no soy feliz, 
                                                Cuando te llamo, cuando te busco, nunca estas para mi 
                                                No se porque te desapareces, ¿a donde vas?, 
                                                Ven y dame una oportunidad, que mas te puedo dar </p<<br>
                                                <p>
                                                Si tu te vas, yo me voy con vos, 
                                                Y si no estas yo tampoco estoy.
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 16 YO ME VOY CON VOS-->      

                                                                                           

                                                                                                                                                  

                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>

                                <!--
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                              -->
                                </tbody>
                              </table>
                            </div> <!-- Cierra CD -->                           


                           
                          </div>
                          <!-- TERMINA TAB HOME -->    



                          <!--
                          <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                          </div>
                          -->

                        </div>
                        <!-- TERMINA PESTAnAS -->


                        <!-- Cierra id#cd_solo -->    
                        </div>                   
              ';
    return $d_sentimientos2;          
    }          

//}



    function veinte(){
        $d_veinte= "";

          $mysqli = conexionBD(); // Conexion a la Base Hackaton
          $disco_2020 = $mysqli->query("SELECT * FROM discos  WHERE id_disco = 13 ");   
         
            while($res_2020 = $disco_2020 -> fetch_array(MYSQLI_ASSOC))
            {
                $agradecimientos = $res_2020['cd_gracias'];
                $nombredisco  = $res_2020['cd_nombre'];


        // CORAZONCITO
        $contenido_track1_2020 = $mysqli->query("SELECT * FROM canciones where id_disco = 13 and c_track = 1");
        while($row_20201 = $contenido_track1_2020 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_20201 = $row_20201['c_track'];
            $letra_2020_1 = $row_20201['c_letra'];
            $c_nombre_20201 = $row_20201['c_nombre'];
            $c_duracion_20201 = $row_20201['c_duracion'];
            $c_colaborador_20201 = $row_20201['c_colaborador'];
            //$c_video_20201 = $row_20201['c_video'];
        }  

        $contenido_track2_2020 = $mysqli->query("SELECT * FROM canciones where id_disco = 13 and c_track = 2");
        while($row_20202 = $contenido_track2_2020 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_20202 = $row_20202['c_track'];
            $letra_2020_2 = $row_20202['c_letra'];
            $c_nombre_20202 = $row_20202['c_nombre'];
            $c_duracion_20202 = $row_20202['c_duracion'];
            $c_colaborador_20202 = $row_20202['c_colaborador'];
            //$c_video_20202 = $row_20202['c_video'];
        }  

        $contenido_track3_2020 = $mysqli->query("SELECT * FROM canciones where id_disco = 13 and c_track = 3");
        while($row_20203 = $contenido_track3_2020 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_20203 = $row_20203['c_track'];
            $letra_2020_3 = $row_20203['c_letra'];
            $c_nombre_20203 = $row_20203['c_nombre'];
            $c_duracion_20203 = $row_20203['c_duracion'];
            $c_colaborador_20203 = $row_20203['c_colaborador'];
            //$c_video_20203 = $row_20203['c_video'];
        }  

        $contenido_track4_2020 = $mysqli->query("SELECT * FROM canciones where id_disco = 13 and c_track = 4");
        while($row_20204 = $contenido_track4_2020 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_20204 = $row_20204['c_track'];
            $letra_2020_4 = $row_20204['c_letra'];
            $c_nombre_20204 = $row_20204['c_nombre'];
            $c_duracion_20204 = $row_20204['c_duracion'];
            $c_colaborador_20204 = $row_20204['c_colaborador'];
            //$c_video_20204 = $row_20204['c_video'];
        }  

        $contenido_track5_2020 = $mysqli->query("SELECT * FROM canciones where id_disco = 13 and c_track = 5");
        while($row_20205 = $contenido_track5_2020 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_20205 = $row_20205['c_track'];
            $letra_2020_5 = $row_20205['c_letra'];
            $c_nombre_20205 = $row_20205['c_nombre'];
            $c_duracion_20205 = $row_20205['c_duracion'];
            $c_colaborador_20205 = $row_20205['c_colaborador'];
            //$c_video_20205 = $row_20205['c_video'];
        }  

        $contenido_track6_2020 = $mysqli->query("SELECT * FROM canciones where id_disco = 13 and c_track = 6");
        while($row_20206 = $contenido_track6_2020 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_20206 = $row_20206['c_track'];
            $letra_2020_6 = $row_20206['c_letra'];
            $c_nombre_20206 = $row_20206['c_nombre'];
            $c_duracion_20206 = $row_20206['c_duracion'];
            $c_colaborador_20206 = $row_20206['c_colaborador'];
            //$c_video_20206 = $row_20206['c_video'];
        }  

        $contenido_track7_2020 = $mysqli->query("SELECT * FROM canciones where id_disco = 13 and c_track = 7");
        while($row_20207 = $contenido_track7_2020 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_20207 = $row_20207['c_track'];
            $letra_2020_7 = $row_20207['c_letra'];
            $c_nombre_20207 = $row_20207['c_nombre'];
            $c_duracion_20207 = $row_20207['c_duracion'];
            $c_colaborador_20207 = $row_20207['c_colaborador'];
            //$c_video_20207 = $row_20207['c_video'];
        }  

        $contenido_track8_2020 = $mysqli->query("SELECT * FROM canciones where id_disco = 13 and c_track = 8");
        while($row_20208 = $contenido_track8_2020 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_20208 = $row_20208['c_track'];
            $letra_2020_8 = $row_20208['c_letra'];
            $c_nombre_20208 = $row_20208['c_nombre'];
            $c_duracion_20208 = $row_20208['c_duracion'];
            $c_colaborador_20208 = $row_20208['c_colaborador'];
            //$c_video_20208 = $row_20208['c_video'];
        }  

        $contenido_track9_2020 = $mysqli->query("SELECT * FROM canciones where id_disco = 13 and c_track = 9");
        while($row_20209 = $contenido_track9_2020 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_20209 = $row_20209['c_track'];
            $letra_2020_9 = $row_20209['c_letra'];
            $c_nombre_20209 = $row_20209['c_nombre'];
            $c_duracion_20209 = $row_20209['c_duracion'];
            $c_colaborador_20209 = $row_20209['c_colaborador'];
            //$c_video_20209 = $row_20209['c_video'];
        }  

        $contenido_track10_2020 = $mysqli->query("SELECT * FROM canciones where id_disco = 13 and c_track = 10");
        while($row_202010 = $contenido_track10_2020 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_202010 = $row_202010['c_track'];
            $letra_2020_10 = $row_202010['c_letra'];
            $c_nombre_202010 = $row_202010['c_nombre'];
            $c_duracion_202010 = $row_202010['c_duracion'];
            $c_colaborador_202010 = $row_202010['c_colaborador'];
            //$c_video_202010 = $row_202010['c_video'];
        }  

        $contenido_track11_2020 = $mysqli->query("SELECT * FROM canciones where id_disco = 13 and c_track = 11");
        while($row_202011 = $contenido_track11_2020 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_202011 = $row_202011['c_track'];
            $letra_2020_11 = $row_202011['c_letra'];
            $c_nombre_202011 = $row_202011['c_nombre'];
            $c_duracion_202011 = $row_202011['c_duracion'];
            $c_colaborador_202011 = $row_202011['c_colaborador'];
            //$c_video_202011 = $row_202011['c_video'];
        }  

         $contenido_track12_2020 = $mysqli->query("SELECT * FROM canciones where id_disco = 13 and c_track = 12");
        while($row_202012 = $contenido_track12_2020 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_202012 = $row_202012['c_track'];
            $letra_2020_12 = $row_202012['c_letra'];
            $c_nombre_202012 = $row_202012['c_nombre'];
            $c_duracion_202012 = $row_202012['c_duracion'];
            $c_colaborador_202012 = $row_202012['c_colaborador'];
            //$c_video_202012 = $row_202012['c_video'];
        }                                                                          

         $contenido_track13_2020 = $mysqli->query("SELECT * FROM canciones where id_disco = 13 and c_track = 13");
        while($row_202013 = $contenido_track13_2020 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_202013 = $row_202013['c_track'];
            $letra_2020_13 = $row_202013['c_letra'];
            $c_nombre_202013 = $row_202013['c_nombre'];
            $c_duracion_202013 = $row_202013['c_duracion'];
            $c_colaborador_202013 = $row_202013['c_colaborador'];
            //$c_video_202013 = $row_202013['c_video'];
        }                                              

         $contenido_track14_2020 = $mysqli->query("SELECT * FROM canciones where id_disco = 13 and c_track = 14");
        while($row_202014 = $contenido_track14_2020 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_202014 = $row_202014['c_track'];
            $letra_2020_14 = $row_202014['c_letra'];
            $c_nombre_202014 = $row_202014['c_nombre'];
            $c_duracion_202014 = $row_202014['c_duracion'];
            $c_colaborador_202014 = $row_202014['c_colaborador'];
            //$c_video_202014 = $row_202014['c_video'];
        }                                              

         $contenido_track15_2020 = $mysqli->query("SELECT * FROM canciones where id_disco = 13 and c_track = 15");
        while($row_202015 = $contenido_track15_2020 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_202015 = $row_202015['c_track'];
            $letra_2020_15 = $row_202015['c_letra'];
            $c_nombre_202015 = $row_202015['c_nombre'];
            $c_duracion_202015 = $row_202015['c_duracion'];
            $c_colaborador_202015 = $row_202015['c_colaborador'];
            //$c_video_202015 = $row_202015['c_video'];
        }                                              

         $contenido_track16_2020 = $mysqli->query("SELECT * FROM canciones where id_disco = 13 and c_track = 16");
        while($row_202016 = $contenido_track16_2020 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_202016 = $row_202016['c_track'];
            $letra_2020_16 = $row_202016['c_letra'];
            $c_nombre_202016 = $row_202016['c_nombre'];
            $c_duracion_202016 = $row_202016['c_duracion'];
            $c_colaborador_202016 = $row_202016['c_colaborador'];
            //$c_video_202016 = $row_202016['c_video'];
        }                                              


        $d_veinte .='
            <div id="cd_caca" class="collapse hidden"> <!--  Comienza disco 2020->
                        <!-- Abre id#cd_sim -->
                        <h2>Album '.$nombredisco.' </h2>

                        <!-- COMIENZA PESTAnAS -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home_2020">Inicio</a></li>
                          <li><a data-toggle="tab" href="#cdveinte">CD</a></li>
                          <li><a data-toggle="tab" href="#clipcd13" id="clip_cd13">CLIP</a></li>
                        </ul>

                        <div class="tab-content">
                        <!-- COMIENZA TAB HOME -->    
                          <div id="home_2020" class="tab-pane fade in active">
                            <h3>Agradecimientos</h3>
                            <p><small><h5>
                            '.$agradecimientos.'
                            <strong>Gracias</strong>
                            </h5></small></p>
                          </div>
                          <!-- TERMINA TAB HOME -->    


                          <form id="cd_veinte_clip_1">
                                <input id="id_disco" name="clip_disco" value="13" class="hidden">
                                <input id="id_video" name="clip" value="clip" class="hidden"> 
                          </form>

                          <!-- VIDEO CLIPS -->
                        <div id="clipcd13" class="tab-pane fade">
                        <br>
                        <!-- ACA VAN LOS VIDEO CLIPS A MOSTRAR -->
                        <div id="cacd13" class="img-thumbnail">
                        </div>
                        </div>









                          <!-- COMIENZA TAB CD -->    
                          <div id="cdveinte" class="tab-pane fade">
                            
                            <h3>Lista de canciones</h3>
                          
        
                              <h4>Daniel Agostini</h4>
                              <p><small>
                                Disco 20-20 motivo de festejo de sus 20 años de carrera en la Movida Tropical y 20 por el nacimiento de su hija Camila
                                en el mes de mayo. Tiene un Cover dedicado a su Hija del grupo MEGAPUESTA de chile. 
                                Como asi tambien Amor, Amor de Maria Marta Serralima                     

                               </small></p><br>


                                <!-- **************************************** -->    
                                <!-- COMIENZA ESCUCHAR CD COMPLETO "SIN LIMITE" -->
                                <a href="#solo" id="cd_veinte_full" valor="13" data-toggle="collapse" data-target="#cdcompleto13" class="btn btn-info btn-xs">Escuchar CD Completo</a>

                                <div id="cdcompleto13" class="col-xs-12 collapse ">
                                    <h4>Disco Completo</h4>

                                    <p id="full_cd_veinte" > </p>

                                </div>
                                <!-- TERMINA ESCUCHAR CD COMPLETO "SIN LIMITE" -->
                                <!-- **************************************** --> 



                              <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Nombre de la cancion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                <!-- TEMA 1 TE AMO-->
                                <tr>
                                <td>'.$cd_track_20201.'</td>
                                <td><small>'.$c_nombre_20201.'</small> 
                                   <a href="#sim" id="tema_2020_1" data-toggle="collapse" data-target="#yllegastetuv" class="btn btn-info btn-xs">Escuchar</a>
                                    | <a href="#ver_cdsolo" id="dc_sim" data-toggle="collapse" data-target="#yllegastetul" class="btn btn-info btn-xs">Letra</a></p>

<form id="cd_2020_track_1">
    <input id="id_disco" name="disco" value="13" class="hidden">
    <input id="id_video" name="video" value="1" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="yllegastetuv" class="col-xs-12 collapse">                                  
                                    
                                    </div>
                                    <!-- VIDEO -->

                                    <!-- LETRA  -->
                                    <div id="yllegastetul" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_20201.' <small>Duracion: <b>'.$c_duracion_20201.'
                                        </b></small></h3><small>'.$c_colaborador_20201.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>                                                    
                                                    '.$letra_2020_1.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA  -->

                                   </td>
                                </tr> 
                                <!-- TEMA 1 TE AMO-->  

                                <!-- TEMA 2 MALDITA MUJER-->
                                <tr>
                                <td>'.$cd_track_20202.'</td>
                                <td><small>'.$c_nombre_20202.'</small> 
                                        <a href="#ver_cdsolo" id="tema_2020_2" data-toggle="collapse" data-target="#porquetuamorv" class="btn btn-info btn-xs">Escuchar</a> | 
                                        <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#porquetuamorl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_2020_track_2">
    <input id="id_disco" name="disco" value="13" class="hidden">
    <input id="id_video" name="video" value="2" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="porquetuamorv" class="col-xs-12 collapse">                                  
                                    
                                    </div>
                                    <!-- VIDEO  -->


                                    <!-- LETRA  -->
                                    <div id="porquetuamorl" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_20202.' <small>Duracion: <b>'.$c_duracion_20202.'
                                        </b></small></h3><small>'.$c_colaborador_20202.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>                                                    
                                                    '.$letra_2020_2.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA -->

                                    </td>
                                </tr>    
                                <!-- TEMA 2 MALDITA MUJER->      

                                <!-- TEMA 3 TE SIENTO -->
                                <tr>
                                <td>'.$cd_track_20203.'</td>
                                <td><small>'.$c_nombre_20203.'</small> 
                                   <a href="#ver_cdsolo" id="tema_2020_3" data-toggle="collapse" data-target="#comoyoteamov" class="btn btn-info btn-xs">Escuchar</a> | 
                                   <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#comoyoteamol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_2020_track_3">
    <input id="id_disco" name="disco" value="13" class="hidden">
    <input id="id_video" name="video" value="3" class="hidden">
</form><br>
                                    <div id="comoyoteamov" class="col-xs-12 collapse">                                  
                                    
                                    </div> 
                                    
                                    <div id="comoyoteamol" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_20203.' <small>Duracion: <b>'.$c_duracion_20203.'
                                        </b></small></h3><small>'.$c_colaborador_20203.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>                                                    
                                                    '.$letra_2020_3.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                <!-- TEMA 3 TE SIENTO  -->  
                              
                                <!-- TEMA 4  TE REGALO --> 
                                <tr>
                                <td>'.$cd_track_20204.'</td>
                                <td><small>'.$c_nombre_20204.'</small> 
                                    <a href="#ver_cdsolo" id="tema_2020_4" data-toggle="collapse" data-target="#venv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#venl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_2020_track_4">
    <input id="id_disco" name="disco" value="13" class="hidden">
    <input id="id_video" name="video" value="4" class="hidden">
</form>

                                    <!-- VIDEO --><br>
                                    <div id="venv" class="col-xs-12 collapse">                                  
                                   
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="venl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_20204.' <small>Duracion: <b>'.$c_duracion_20204.'
                                        </b></small></h3><small>'.$c_colaborador_20204.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>                                                    
                                                    '.$letra_2020_4.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                <!-- TEMA 4  TE REGALO --> 

                                <!-- TEMA 5 SOLO TU --> 
                                <tr>
                                <td>'.$cd_track_20205.'</td>
                                <td><small>'.$c_nombre_20205.'</small> 
                                    <a href="#ver_cdsolo" id="tema_2020_5" data-toggle="collapse" data-target="#amamev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#amamel" class="btn btn-info btn-xs">Letra</a>
<form id="cd_2020_track_5">
    <input id="id_disco" name="disco" value="13" class="hidden">
    <input id="id_video" name="video" value="5" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="amamev" class="col-xs-12 collapse">                                  
                                    
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="amamel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_20205.' <small>Duracion: <b>'.$c_duracion_20205.'
                                        </b></small></h3><small>'.$c_colaborador_20205.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>                                                    
                                                    '.$letra_2020_5.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                <!-- TEMA 5 SOLO TU --> 

                                <!-- TEMA 6 ERES--> 
                                <tr>
                                <tr>
                                <td>'.$cd_track_20206.'</td>
                                <td><small>'.$c_nombre_20206.'</small> 
                                    <a href="#ver_cdsolo" id="tema_2020_6" data-toggle="collapse" data-target="#nosevendev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#nosevendel" class="btn btn-info btn-xs">Letra</a>
                                    
<form id="cd_2020_track_6">
    <input id="id_disco" name="disco" value="13" class="hidden">
    <input id="id_video" name="video" value="6" class="hidden">
</form>
                                    <!-- VIeres--><br>
                                    <div id="nosevendev" class="col-xs-12 collapse">                                  
                                   <iframe width="200" height="200" src="https://www.youtube.com/embed/Qm1MTpQ_fZs" frameborder="0" allowfullscreen></iframe>
                                    </div>

                                    <!-- LETRA  -->
                                    <div id="nosevendel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_20206.' <small>Duracion: <b>'.$c_duracion_20206.'
                                        </b></small></h3><small>'.$c_colaborador_20206.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>                                                    
                                                    '.$letra_2020_6.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                <!-- TEMA 6 ERES  --> 

                                <!-- TEMA 7 LA CITA --> 
                                <tr>
                                <td>'.$cd_track_20207.'</td>
                                <td><small>'.$c_nombre_20207.'</small> 

                                    <a href="#ver_cdsolo" id="tema_2020_7" data-toggle="collapse" data-target="#ayudav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#ayudal" class="btn btn-info btn-xs">Letra</a>

<form id="cd_2020_track_7">
    <input id="id_disco" name="disco" value="13" class="hidden">
    <input id="id_video" name="video" value="7" class="hidden">
</form>
                                    <!-- VIDEO --><br>

                                     <div id="ayudav" class="col-xs-12 collapse">                                  
                                    <iframe width="200" height="200" src="https://www.youtube.com/embed/0c-PBioNCA8" frameborder="0" allowfullscreen></iframe>
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="ayudal" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_20207.' <small>Duracion: <b>'.$c_duracion_20207.'
                                        </b></small></h3><small>'.$c_colaborador_20207.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>                                                    
                                                    '.$letra_2020_7.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                <!-- TEMA 7  LA CITA-->

                                <!-- TEMA 8 MAMA -->
                                <tr>
                                <td>'.$cd_track_20208.'</td>
                                <td><small>'.$c_nombre_20208.'</small> 
                                    
                                    <a href="#ver_cdsolo" id="tema_2020_8" data-toggle="collapse" data-target="#clandestinov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#clandestinol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_2020_track_8">
    <input id="id_disco" name="disco" value="13" class="hidden">
    <input id="id_video" name="video" value="8" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="clandestinov" class="col-xs-12 collapse">                                  
                                    
                                    </div>                                    


                                    <!-- LETRA  -->
                                    <div id="clandestinol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_20208.' <small>Duracion: <b>'.$c_duracion_20208.'
                                        </b></small></h3><small>'.$c_colaborador_20208.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>                                                    
                                                    '.$letra_2020_8.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                <!-- TEMA 8 MAMA -->

                                <!-- TEMA 9 DONDE ESTAS AMOR-->
                                <tr>
                                <td>'.$cd_track_20209.'</td>
                                <td><small>'.$c_nombre_20209.'</small> 
                                    
                                    <a href="#ver_cdsolo" id="tema_2020_9" data-toggle="collapse" data-target="#buscv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#buscl" class="btn btn-info btn-xs">Letra</a>
<form id="cd_2020_track_9">
    <input id="id_disco" name="disco" value="13" class="hidden">
    <input id="id_video" name="video" value="9" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="buscv" class="col-xs-12 collapse">                                  
                                    
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="buscl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_20209.' <small>Duracion: <b>'.$c_duracion_20209.'
                                        </b></small></h3><small>'.$c_colaborador_20209.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>                                                    
                                                    '.$letra_2020_9.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                <!-- TEMA 9  DONDE ESTAS AMOR -->

                                <!-- TEMA 10 MI SEGUNDO HIJO VARON-->
                                <tr>
                                <td>'.$cd_track_202010.'</td>
                                <td><small>'.$c_nombre_202010.'</small> 

                                    <a href="#ver_cdsolo" id="tema_2020_10" data-toggle="collapse" data-target="#dejadepensarv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#dejadepensarl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_2020_track_10">
    <input id="id_disco" name="disco" value="13" class="hidden">
    <input id="id_video" name="video" value="10" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="dejadepensarv" class="col-xs-12 collapse">                                  
                                    
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="dejadepensarl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_202010.' <small>Duracion: <b>'.$c_duracion_202010.'
                                        </b></small></h3><small>'.$c_colaborador_202010.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>                                                    
                                                    '.$letra_2020_10.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                <!-- TEMA 10 MI SEGUNDO HIJO VARON --> 

                                <!-- TEMA 11 CUANTA PENA -->
                                <tr>
                                <td>'.$cd_track_202011.'</td>
                                <td><small>'.$c_nombre_202011.'</small> 

                                    <a href="#ver_cdsolo" id="tema_2020_11" data-toggle="collapse" data-target="#vasallorarv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#vasallorarl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_2020_track_11">
    <input id="id_disco" name="disco" value="13" class="hidden">
    <input id="id_video" name="video" value="11" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="vasallorarv" class="col-xs-12 collapse">                                  
                                    
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="vasallorarl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_202011.' <small>Duracion: <b>'.$c_duracion_202011.'
                                        </b></small></h3><small>'.$c_colaborador_202011.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>                                                    
                                                    '.$letra_2020_11.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                <!-- TEMA 11 CUANTA PENA-->     

                                <!-- TEMA 12   ME HACES FALTA-->
                                <tr>
                                <td>'.$cd_track_202012.'</td>
                                <td><small>'.$c_nombre_202012.'</small> 

                                    <a href="#ver_cdsolo" id="tema_2020_12" data-toggle="collapse" data-target="#tedirev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#tedirel" class="btn btn-info btn-xs">Letra</a>

<form id="cd_2020_track_12">
    <input id="id_disco" name="disco" value="13" class="hidden">
    <input id="id_video" name="video" value="12" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="tedirev" class="col-xs-12 collapse">                                  
                                    
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="tedirel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_202012.' <small>Duracion: <b>'.$c_duracion_202012.'
                                        </b></small></h3><small>'.$c_colaborador_202012.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>                                                    
                                                    '.$letra_2020_12.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                <!-- TEMA 12   ME HACES FALTA -->    

                                                                                           
                                <!-- TEMA 12   ME HACES FALTA-->
                                <tr>
                                <td>'.$cd_track_202013.'</td>
                                <td><small>'.$c_nombre_202013.'</small> 

                                    <a href="#ver_cdsolo" id="tema_2020_13" data-toggle="collapse" data-target="#amoramorv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#amoramorl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_2020_track_13">
    <input id="id_disco" name="disco" value="13" class="hidden">
    <input id="id_video" name="video" value="13" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="amoramorv" class="col-xs-12 collapse">                                  
                                    
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="amoramorl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_202013.' <small>Duracion: <b>'.$c_duracion_202013.'
                                        </b></small></h3><small>'.$c_colaborador_202013.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>                                                    
                                                    '.$letra_2020_13.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                <!-- TEMA 12   ME HACES FALTA -->    


                                <!-- TEMA 12   ME HACES FALTA-->
                                <tr>
                                <td>'.$cd_track_202014.'</td>
                                <td><small>'.$c_nombre_202014.'</small> 

                                    <a href="#ver_cdsolo" id="tema_2020_14" data-toggle="collapse" data-target="#hijaduov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#hijaduol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_2020_track_14">
    <input id="id_disco" name="disco" value="13" class="hidden">
    <input id="id_video" name="video" value="14" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="hijaduov" class="col-xs-12 collapse">                                 
                                    
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="hijaduol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_202014.' <small>Duracion: <b>'.$c_duracion_202014.'
                                        </b></small></h3><small>'.$c_colaborador_202014.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>                                                    
                                                    '.$letra_2020_14.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                <!-- TEMA 12   ME HACES FALTA -->    


                                <!-- TEMA 12   ME HACES FALTA-->
                                <tr>
                                <td>'.$cd_track_202015.'</td>
                                <td><small>'.$c_nombre_202015.'</small> 

                                    <a href="#ver_cdsolo" id="tema_2020_15" data-toggle="collapse" data-target="#hijasolov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#hijasolol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_2020_track_15">
    <input id="id_disco" name="disco" value="13" class="hidden">
    <input id="id_video" name="video" value="15" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="hijasolov" class="col-xs-12 collapse">                                
                                    
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="hijasolol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_202015.' <small>Duracion: <b>'.$c_duracion_202015.'
                                        </b></small></h3><small>'.$c_colaborador_202015.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>                                                    
                                                    '.$letra_2020_15.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                <!-- TEMA 12   ME HACES FALTA -->    



                                <!-- TEMA 12   ME HACES FALTA-->
                                <tr>
                                <td>'.$cd_track_202016.'</td>
                                <td><small>'.$c_nombre_202016.'</small> 

                                    <a href="#ver_cdsolo" id="tema_2020_16" data-toggle="collapse" data-target="#fuistetuarjonav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#fuistetuarjonal" class="btn btn-info btn-xs">Letra</a>

<form id="cd_2020_track_16">
    <input id="id_disco" name="disco" value="13" class="hidden">
    <input id="id_video" name="video" value="16" class="hidden">
</form>
                                    <!-- VIDEO --><br>
                                    <div id="fuistetuarjonav" class="col-xs-12 collapse">                                  
                                    
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="fuistetuarjonal" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                        <th><h3>'.$c_nombre_202016.' <small>Duracion: <b>'.$c_duracion_202016.'
                                        </b></small></h3><small>'.$c_colaborador_202016.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>                                                    
                                                    '.$letra_2020_16.'
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                <!-- TEMA 12   ME HACES FALTA -->                                                                                                    
                                                                                                                                                  

                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>

                                <!--
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                              -->
                                </tbody>
                              </table>
                            </div> <!-- Cierra CD -->                           


                           
                          </div>
                          <!-- TERMINA TAB HOME -->    



                          <!--
                          <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                          </div>
                          -->

                        </div>
                        <!-- TERMINA PESTAnAS -->


                        <!-- Cierra id#cd_solo -->    
                        </div>                   
              ';
          }
    return $d_veinte;          
    }       


//##################################################################################


//##################################################################################

 function partedetuvida(){
        $mysqli = conexionBD(); // Conexion a la Base Hackaton
        $tuvida= "";
        
        $disco_partevida = $mysqli->query("SELECT * FROM discos  WHERE id_disco = 15 ");        
        // SOLO
        $contenido_partevida = $mysqli->query("SELECT * FROM canciones where id_disco = 15 and c_track = 1");
        while($row_ptvida = $contenido_partevida -> fetch_array(MYSQLI_ASSOC))
        {            
            $letra_solo_1 = $row_ptvida['c_letra'];
            $c_nombre = $row_ptvida['c_nombre'];
            $c_duracion = $row_ptvida['c_duracion'];
            $c_colaborador = $row_ptvida['c_colaborador'];
            //$c_video_s1 = $row_solo['c_video'];
        }

        // COMO OLVIDARTE
        $contenido_track2 = $mysqli->query("SELECT * FROM canciones where id_disco = 15 and c_track = 2");
        while($row2 = $contenido_track2 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_2 = $row2['c_track'];
            $letra_solo_2 = $row2['c_letra'];
            $c_nombre_s2 = $row2['c_nombre'];
            $c_duracion_s2 = $row2['c_duracion'];
            $c_colaborador_s2 = $row2['c_colaborador'];
            //$c_video_s2 = $row2['c_video'];
        }

        // TE NECESITO
        $contenido_track3 = $mysqli->query("SELECT * FROM canciones where id_disco = 15 and c_track = 3");
        while($row3 = $contenido_track3 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_3 = $row3['c_track'];
            $letra_solo_3 = $row3['c_letra'];
            $c_nombre_s3 = $row3['c_nombre'];
            $c_duracion_s3 = $row3['c_duracion'];
            $c_colaborador_s3 = $row3['c_colaborador'];
            //$c_video_s3 = $row3['c_video'];
        }        

        $contenido_track4 = $mysqli->query("SELECT * FROM canciones where id_disco = 15 and c_track = 4");
        while($row4 = $contenido_track4 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_4 = $row4['c_track'];
            $letra_solo_4 = $row4['c_letra'];
            $c_nombre_s4 = $row4['c_nombre'];
            $c_duracion_s4 = $row4['c_duracion'];
            $c_colaborador_s4 = $row4['c_colaborador'];
            //$c_video_s4 = $row4['c_video'];
        }         

        $contenido_track5 = $mysqli->query("SELECT * FROM canciones where id_disco = 15 and c_track = 5");
        while($row5 = $contenido_track5 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_5 = $row5['c_track'];
            $letra_solo_5 = $row5['c_letra'];
            $c_nombre_s5 = $row5['c_nombre'];
            $c_duracion_s5 = $row5['c_duracion'];
            $c_colaborador_s5 = $row5['c_colaborador'];
            //$c_video_s5 = $row5['c_video'];
        }  

        $contenido_track6 = $mysqli->query("SELECT * FROM canciones where id_disco = 15 and c_track = 6");
        while($row6 = $contenido_track6 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_6 = $row6['c_track'];
            $letra_solo_6 = $row6['c_letra'];
            $c_nombre_s6 = $row6['c_nombre'];
            $c_duracion_s6 = $row6['c_duracion'];
            $c_colaborador_s6 = $row6['c_colaborador'];
            //$c_video_s6 = $row6['c_video'];
        }   

        $contenido_track7 = $mysqli->query("SELECT * FROM canciones where id_disco = 15 and c_track = 7");
        while($row7 = $contenido_track7 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_7 = $row7['c_track'];
            $letra_solo_7 = $row7['c_letra'];
            $c_nombre_s7 = $row7['c_nombre'];
            $c_duracion_s7 = $row7['c_duracion'];
            $c_colaborador_s7 = $row7['c_colaborador'];
            //$c_video_s7 = $row7['c_video'];
        }    

        $contenido_track8 = $mysqli->query("SELECT * FROM canciones where id_disco = 15 and c_track = 8");
        while($row8 = $contenido_track8 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_8 = $row8['c_track'];
            $letra_solo_8 = $row8['c_letra'];
            $c_nombre_s8 = $row8['c_nombre'];
            $c_duracion_s8 = $row8['c_duracion'];
            $c_colaborador_s8 = $row8['c_colaborador'];
            //$c_video_s8 = $row8['c_video'];
        }   

        $contenido_track9 = $mysqli->query("SELECT * FROM canciones where id_disco = 15 and c_track = 9");
        while($row9 = $contenido_track9 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_9 = $row9['c_track'];
            $letra_solo_9 = $row9['c_letra'];
            $c_nombre_s9 = $row9['c_nombre'];
            $c_duracion_s9 = $row9['c_duracion'];
            $c_colaborador_s9 = $row9['c_colaborador'];
            //$c_video_s9 = $row9['c_video'];
        }     

        $contenido_track10 = $mysqli->query("SELECT * FROM canciones where id_disco = 15 and c_track = 10");
        while($row10 = $contenido_track10 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_10 = $row10['c_track'];
            $letra_solo_10 = $row10['c_letra'];
            $c_nombre_s10 = $row10['c_nombre'];
            $c_duracion_s10 = $row10['c_duracion'];
            $c_colaborador_s10 = $row10['c_colaborador'];
            //$c_video_s10 = $row10['c_video'];
        }                                            

        $contenido_track11 = $mysqli->query("SELECT * FROM canciones where id_disco = 15 and c_track = 11");
        while($row11 = $contenido_track11 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_11 = $row11['c_track'];
            $letra_solo_11 = $row11['c_letra'];
            $c_nombre_s11 = $row11['c_nombre'];
            $c_duracion_s11 = $row11['c_duracion'];
            $c_colaborador_s11 = $row11['c_colaborador'];
            //$c_video_s11 = $row11['c_video'];
        }    

        $contenido_track12 = $mysqli->query("SELECT * FROM canciones where id_disco = 15 and c_track = 12");
        while($row12 = $contenido_track12 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_12 = $row12['c_track'];
            $letra_solo_12 = $row12['c_letra'];
            $c_nombre_s12 = $row12['c_nombre'];
            $c_duracion_s12 = $row12['c_duracion'];
            $c_colaborador_s12 = $row12['c_colaborador'];
            //$c_video_s12 = $row12['c_video'];
        }   

        $contenido_track13 = $mysqli->query("SELECT * FROM canciones where id_disco = 15 and c_track = 13");
        while($row13 = $contenido_track13 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_13 = $row13['c_track'];
            $letra_solo_13 = $row13['c_letra'];
            $c_nombre_s13 = $row13['c_nombre'];
            $c_duracion_s13 = $row13['c_duracion'];
            $c_colaborador_s13 = $row13['c_colaborador'];
            //$c_video_s12 = $row12['c_video'];
        }   

        $contenido_track14 = $mysqli->query("SELECT * FROM canciones where id_disco = 15 and c_track = 14");
        while($row14 = $contenido_track14 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_14 = $row14['c_track'];
            $letra_solo_14 = $row14['c_letra'];
            $c_nombre_s14 = $row14['c_nombre'];
            $c_duracion_s14 = $row14['c_duracion'];
            $c_colaborador_s14 = $row14['c_colaborador'];
            //$c_video_s12 = $row12['c_video'];
        }   

        $contenido_track15 = $mysqli->query("SELECT * FROM canciones where id_disco = 15 and c_track = 15");
        while($row15 = $contenido_track15 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_15 = $row15['c_track'];
            $letra_solo_15 = $row15['c_letra'];
            $c_nombre_s15 = $row15['c_nombre'];
            $c_duracion_s15 = $row15['c_duracion'];
            $c_colaborador_s15 = $row15['c_colaborador'];
            //$c_video_s12 = $row12['c_video'];
        }   

        $contenido_track16 = $mysqli->query("SELECT * FROM canciones where id_disco = 15 and c_track = 16");
        while($row16 = $contenido_track16 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_16 = $row16['c_track'];
            $letra_solo_16 = $row16['c_letra'];
            $c_nombre_s16 = $row16['c_nombre'];
            $c_duracion_s16 = $row16['c_duracion'];
            $c_colaborador_s16 = $row16['c_colaborador'];
            //$c_video_s12 = $row12['c_video'];
        }        

           


        while($res = $disco_partevida -> fetch_array(MYSQLI_ASSOC))
    {
      $agradecimientos = $res['cd_gracias'];
      $nombredisco  = $res['cd_nombre'];
      
      //$documento = $res['documento'];
      //$idmember = $res['idmember'];

        $tuvida .='
                        <div id="cdpartevida" class="collapse hidden"> <!--  Comienza disco SOLO -->
                        <!-- Abre id#cd_solo -->
                        <h2>Album '.$nombredisco.'</h2>

                        <!-- COMIENZA PESTAnAS -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#homevida">Inicio</a></li>
                          <li><a data-toggle="tab" href="#cdpartedetuvida">CD</a></li>
                          <!--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
                        </ul>

                        <div class="tab-content">
                        <!-- COMIENZA TAB HOME -->    
                          <div id="homevida" class="tab-pane fade in active">
                            <h3>Agradecimientos</h3>
                            <p><small><h5>
                                '.$agradecimientos.'
                            </small></p></h5> 
                            <br>
                            <small><strong>Daniel Agostini</strong></small>
                                                                                
                          </div>
                          <!-- TERMINA TAB HOME -->    

                          <!-- COMIENZA TAB CD -->    
                          <div id="cdpartedetuvida" class="tab-pane fade">
                            
                            <h3>Lista de canciones</h3>
                          
        
                              <h4>Daniel Agostini</h4>
                              <p><small>Contiene 16 temas entre ellos dos covers "El humo del cigarrillo" y "Hasta el Amanecer." </small></p><br>

                                <br>

                                <!-- COMIENZA ESCUCHAR CD COMPLETO "SOLO" -->
                                <!--
                                <a href="#solo" id="cd_solo_full" valor="1" data-toggle="collapse" data-target="#cdcompleto" class="btn btn-info btn-xs">Escuchar CD Completo</a>
                                -->

                                <div id="cdcompleto" class="col-xs-12 collapse ">
                                    <h4>Disco Completo</h4>

                                    <p id="full_cd_solo" > </p>

                                </div>
                                <!-- TERMINA ESCUCHAR CD COMPLETO "SOLO" -->


                              <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Nombre de la cancion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                <!-- TEMA 1 SOLO -->
                                <tr>
                                   <td>1</td>
                                   <td><small>'.$c_nombre.'</small> 
                                   
                                    <a href="#tuvida" id="tema_1_partedetuvida" data-toggle="collapse" data-target="#amantesv" class="btn btn-info btn-xs">Escuchar</a>  | 
                            
                                   <!-- <button id="cerreti"  class="btn btn-info btn-xs ">Cerrar</button>  -->
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#amantesl" class="btn btn-info btn-xs">Letra</a></p>

    <form id="cd_partedetuvida_1">
        <input id="id_disco" name="disco" value="15" class="hidden">
        <input id="id_video" name="video" value="1" class="hidden">
    </form>                                   

                                    <!-- VIDEO --> <br>
                                      <div id="amantesv" class="col-xs-12 collapse ">                              
                                    </div>
                                    
                                    <!-- VIDEO -->

                                    <!-- LETRA  -->
                                    <div id="amantesl" class="col-xs-12 collapse "><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre.' <small>Duracion: <b>'.$c_duracion.'</b></small></h3><small>'.$c_colaborador.'</small></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                      '.$letra_solo_1.'  
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA  -->

                                   </td>
                                </tr> 
                                <!-- TEMA 1 SOLO -->  


                                <!-- TEMA 2 COMO OLVIDARTE -->
                                <tr>
                                    <td>'.$cd_track_2.'</td>
                                    <td><small>'.$c_nombre_s2.'</small> 
                                        <a href="#ver_cdsolo" id="tema_2_partedetuvida" data-toggle="collapse" data-target="#caceriav" class="btn btn-info btn-xs">Escuchar</a> 
                                        | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#cacerial" class="btn btn-info btn-xs">Letra</a>


<form id="cd_partedetuvida_2">
    <input id="id_disco" name="disco" value="15" class="hidden">
    <input id="id_video" name="video" value="2" class="hidden">
</form>   
                                    <!-- VIDEO COMO OLVIDARTE --> <br>
                                    <div id="caceriav" class="col-xs-12 collapse ">                              
                                    </div>
                                    <!-- VIDEO COMO OLVIDARTE -->


                                    <!-- LETRA  -->
                                    <div id="cacerial" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s2.' <small>Duracion: <b>'.$c_duracion_s2.'
                                                </b></small></h3><small>'.$c_colaborador_s2.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                    <br>
                                    <p>
                                        '.$letra_solo_2.'
                                    </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                    <!-- LETRA -->

                                    </td>
                                </tr>    
                                <!-- TEMA 2 COMO OLVIDARTE -->      

                                <!-- TEMA 3 TE NECESITO -->
                                <tr>
                                   <td>'.$cd_track_3.'</td>
                                   <td><small>'.$c_nombre_s3.'</small>
                                   <a href="#ver_cdsolo" id="tema_3_partedetuvida" data-toggle="collapse" data-target="#yquedemiv" class="btn btn-info btn-xs">Escuchar</a> 
                                   | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#yquedemil" class="btn btn-info btn-xs">Letra</a>


<form id="cd_partedetuvida_3">
    <input id="id_disco" name="disco" value="15" class="hidden">
    <input id="id_video" name="video" value="3" class="hidden">
</form>   
                                    <br>
                                   <div id="yquedemiv" class="col-xs-12 collapse "><br>                                  
                                    </div>
                                    
                                    <div id="yquedemil" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s3.' <small>Duracion: <b>'.$c_duracion_s3.'
                                                </b></small></h3><small>'.$c_colaborador_s3.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                     
                                                <p>
                                                '.$letra_solo_3.'
                                                </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                   </td> 
                                </tr> 
                                <!-- TEMA 3 TE NECESITO -->  
                              
                                <!-- TEMA 4 SI TODAVIA ME QUIERES --> 
                                <tr>
                                    <td>'.$cd_track_4.'</td>
                                    <td><small>'.$c_nombre_s4.'</small>
                                    <a href="#ver_cdsolo" id="tema_4_partedetuvida" data-toggle="collapse" data-target="#dimeparaquev" class="btn btn-info btn-xs">Escuchar</a> 
                                     | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#dimeparaquel" class="btn btn-info btn-xs">Letra</a>

<form id="cd_partedetuvida_4">
    <input id="id_disco" name="disco" value="15" class="hidden">
    <input id="id_video" name="video" value="4" class="hidden">
</form>   

                                    <!-- VIDEO --> <br>
                                    <div id="dimeparaquev" class="col-xs-12 collapse ">                                 
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="dimeparaquel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s4.' <small>Duracion: <b>'.$c_duracion_s4.'
                                                </b></small></h3><small>'.$c_colaborador_s4.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_4.'
                                                </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>    

                                    </td>
                                </tr> 
                                <!-- TEMA 4 SI TODAVIA ME QUIERES --> 

                                <!-- TEMA 5 DONDE TE HAS IDO --> 
                                <tr>
                                    <td>'.$cd_track_5.'</td>
                                    <td><small>'.$c_nombre_s5.'</small>

                                    <a href="#ver_cdsolo" id="tema_5_partedetuvida" data-toggle="collapse" data-target="#despedidav" class="btn btn-info btn-xs">Escuchar</a> 
                                    | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#despedidal" class="btn btn-info btn-xs">Letra</a>
                                    
<form id="cd_partedetuvida_5">
    <input id="id_disco" name="disco" value="15" class="hidden">
    <input id="id_video" name="video" value="5" class="hidden">
</form>   
                                    <!-- VIDEO --><br>
                                    <div id="despedidav" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="despedidal" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s5.' <small>Duracion: <b>'.$c_duracion_s5.'
                                                </b></small></h3><small>'.$c_colaborador_s5.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_5.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>                                                                    
                                <!-- TEMA 5 DONDE TE HAS IDO --> 

                                <!-- TEMA 6 JUGASTE CONMIGO --> 
                                <tr>
                                    <td>'.$cd_track_6.'</td>
                                    <td><small>'.$c_nombre_s6.'</small>
                                    <a href="#ver_cdsolo" id="tema_6_partedetuvida" data-toggle="collapse" data-target="#dejameamartev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#dejameamartel" class="btn btn-info btn-xs">Letra</a>

<form id="cd_partedetuvida_6">
    <input id="id_disco" name="disco" value="15" class="hidden">
    <input id="id_video" name="video" value="6" class="hidden">
</form>
                                    <!-- VIDEO --> <br>
                                    <div id="dejameamartev" class="col-xs-12 collapse "><br>                                  
                                    </div>

                                    <!-- LETRA  -->
                                    <div id="dejameamartel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s6.' <small>Duracion: <b>'.$c_duracion_s6.'
                                                </b></small></h3><small>'.$c_colaborador_s6.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_6.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 6 JUGASTE CONMIGO --> 

                                <!-- TEMA 7 POR QUE TE QUISE TANTO --> 
                                <tr>
                                    <td>'.$cd_track_7.'</td>
                                    <td><small>'.$c_nombre_s7.'</small>

                                    <a href="#ver_cdsolo" id="tema_7_partedetuvida" data-toggle="collapse" data-target="#porquehoyv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#porquehoyl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_partedetuvida_7">
    <input id="id_disco" name="disco" value="15" class="hidden">
    <input id="id_video" name="video" value="7" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="porquehoyv" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="porquehoyl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s7.' <small>Duracion: <b>'.$c_duracion_s7.'
                                                </b></small></h3><small>'.$c_colaborador_s7.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_7.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>
                                <!-- TEMA 7 POR QUE TE QUISE TANTO -->

                                <!-- TEMA 8 UNA NOCHE MAS -->
                                <tr>
                                    <td>'.$cd_track_8.'</td>
                                    <td><small>'.$c_nombre_s8.'</small>
                                    
                                    <a href="#ver_cdsolo" id="tema_8_partedetuvida" data-toggle="collapse" data-target="#humov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#humol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_partedetuvida_8">
    <input id="id_disco" name="disco" value="15" class="hidden">
    <input id="id_video" name="video" value="8" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="humov" class="col-xs-12 collapse "><br>       
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="humol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s8.' <small>Duracion: <b>'.$c_duracion_s8.'
                                                </b></small></h3><small>'.$c_colaborador_s8.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_8.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr> 
                                <!-- TEMA 8 UNA NOCHE MAS -->

                                <!-- TEMA 9 TE SIGO AMANDO -->
                                <tr>
                                    <td>'.$cd_track_9.'</td>
                                    <td><small>'.$c_nombre_s9.'</small>
                                    
                                    <a href="#ver_cdsolo" id="tema_9_partedetuvida" data-toggle="collapse" data-target="#hacermefelizv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#hacermefelizl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_partedetuvida_9">
    <input id="id_disco" name="disco" value="15" class="hidden">
    <input id="id_video" name="video" value="9" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="hacermefelizv" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="hacermefelizl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s9.' <small>Duracion: <b>'.$c_duracion_s9.'
                                                </b></small></h3><small>'.$c_colaborador_s9.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_9.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 9 TE SIGO AMANDO -->

                                <!-- TEMA 10 QUIERO -->
                                <tr>
                                    <td>'.$cd_track_10.'</td>
                                    <td><small>'.$c_nombre_s10.'</small>

                                    <a href="#ver_cdsolo" id="tema_10_partedetuvida" data-toggle="collapse" data-target="#queimportav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#queimportal" class="btn btn-info btn-xs">Letra</a>

<form id="cd_partedetuvida_10">
    <input id="id_disco" name="disco" value="15" class="hidden">
    <input id="id_video" name="video" value="10" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="queimportav" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="queimportal" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s10.' <small>Duracion: <b>'.$c_duracion_s10.'
                                                </b></small></h3><small>'.$c_colaborador_s10.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_10.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 10 QUIERO -->

                                <!-- TEMA 11 SI ME DEJAS AHORA -->
                                <tr>
                                    <td>'.$cd_track_11.'</td>
                                    <td><small>'.$c_nombre_s11.'</small>

                                    <a href="#ver_cdsolo" id="tema_11_partedetuvida" data-toggle="collapse" data-target="#cuentaleaelv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#cuentaleaell" class="btn btn-info btn-xs">Letra</a>

<form id="cd_partedetuvida_11">
    <input id="id_disco" name="disco" value="15" class="hidden">
    <input id="id_video" name="video" value="11" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="cuentaleaelv" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="cuentaleaell" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                 <th><h3>'.$c_nombre_s11.' <small>Duracion: <b>'.$c_duracion_s11.'
                                                </b></small></h3><small>'.$c_colaborador_s11.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_11.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 11 SI ME DEJAS AHORA -->

                                <!-- TEMA 12 SE NOS MUERE EL AMOR -->
                                <tr>
                                  <td>'.$cd_track_12.'</td>
                                    <td><small>'.$c_nombre_s12.'</small>

                                    <a href="#ver_cdsolo" id="tema_12_partedetuvida" data-toggle="collapse" data-target="#solomiav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#solomial" class="btn btn-info btn-xs">Letra</a>

<form id="cd_partedetuvida_12">
    <input id="id_disco" name="disco" value="15" class="hidden">
    <input id="id_video" name="video" value="12" class="hidden">
</form>


                                    <!-- VIDEO --> <br>
                                    <div id="solomiav" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="solomial" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s12.' <small>Duracion: <b>'.$c_duracion_s12.'
                                                </b></small></h3><small>'.$c_colaborador_s12.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_12.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>
                                <!-- TEMA 12 SE NOS MUERE EL AMOR -->


                                <!-- TEMA 13 NADA ENTRE TU Y YO -->
                                <tr>
                                  <td>'.$cd_track_13.'</td>
                                    <td><small>'.$c_nombre_s13.'</small>

                                    <a href="#ver_cdsolo" id="tema_13_partedetuvida" data-toggle="collapse" data-target="#nadaentrev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#nadaentrel" class="btn btn-info btn-xs">Letra</a>

<form id="cd_partedetuvida_13">
    <input id="id_disco" name="disco" value="15" class="hidden">
    <input id="id_video" name="video" value="13" class="hidden">
</form>


                                    <!-- VIDEO --> <br>
                                    <div id="nadaentrev" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="nadaentrel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s13.' <small>Duracion: <b>'.$c_duracion_s13.'
                                                </b></small></h3><small>'.$c_colaborador_s13.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_13.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>
                                <!-- TEMA 13 NADA ENTRE TU Y YO -->




                                <!-- TEMA 14 TE PIDO PERDON -->
                                <tr>
                                  <td>'.$cd_track_14.'</td>
                                    <td><small>'.$c_nombre_s14.'</small>

                                    <a href="#ver_cdsolo" id="tema_14_partedetuvida" data-toggle="collapse" data-target="#perdonv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#perdonl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_partedetuvida_14">
    <input id="id_disco" name="disco" value="15" class="hidden">
    <input id="id_video" name="video" value="14" class="hidden">
</form>


                                    <!-- VIDEO --> <br>
                                    <div id="perdonv" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="perdonl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s14.' <small>Duracion: <b>'.$c_duracion_s14.'
                                                </b></small></h3><small>'.$c_colaborador_s14.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_14.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>
                                <!-- TEMA 14 TE PIDO PERDON -->                                



                                <!-- TEMA 15 HASTA EL AMANECER -->
                                <tr>
                                  <td>'.$cd_track_15.'</td>
                                    <td><small>'.$c_nombre_s15.'</small>

                                    <a href="#ver_cdsolo" id="tema_15_partedetuvida" data-toggle="collapse" data-target="#amanecerv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#amanecerl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_partedetuvida_15">
    <input id="id_disco" name="disco" value="15" class="hidden">
    <input id="id_video" name="video" value="15" class="hidden">
</form>


                                    <!-- VIDEO --> <br>
                                    <div id="amanecerv" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="amanecerl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s15.' <small>Duracion: <b>'.$c_duracion_s15.'
                                                </b></small></h3><small>'.$c_colaborador_s15.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_15.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>
                                <!-- TEMA 15 HASTA EL AMANECER -->     



                                <!-- TEMA 15 HASTA EL AMANECER -->
                                <tr>
                                  <td>'.$cd_track_16.'</td>
                                    <td><small>'.$c_nombre_s16.'</small>

                                    <a href="#ver_cdsolo" id="tema_16_partedetuvida" data-toggle="collapse" data-target="#hsoledadv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#hsoledadl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_partedetuvida_16">
    <input id="id_disco" name="disco" value="15" class="hidden">
    <input id="id_video" name="video" value="16" class="hidden">
</form>


                                    <!-- VIDEO --> <br>
                                    <div id="hsoledadv" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="hsoledadl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s16.' <small>Duracion: <b>'.$c_duracion_s16.'
                                                </b></small></h3><small>'.$c_colaborador_s16.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_16.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </td>
                                </tr>
                                <!-- TEMA 15 HASTA EL AMANECER -->     



                                <!--
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                              -->
                                </tbody>
                              </table>
                            </div> <!-- Cierra CD -->                           


                           
                          </div>
                          <!-- TERMINA TAB HOME -->    



                          <!--
                          <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                          </div>
                          -->

                        </div>
                        <!-- TERMINA PESTAnAS -->


                        <!-- Cierra id#cd_solo -->    
                        </div>                   

              ';

        }
    return $tuvida;          
    }    



















/*GRUPO SOMBRAS NIÑA CAPRICHOSA*/

 function ninacaprichosa(){
        $mysqli = conexionBD(); // Conexion a la Base Hackaton
        $nina= "";
        
        $disco_caprichosa = $mysqli->query("SELECT * FROM discos  WHERE id_disco = 16 ");        
        // SOLO
        $contenido_caprichosa = $mysqli->query("SELECT * FROM canciones where id_disco = 16 and c_track = 1");
        while($row_ptvida = $contenido_caprichosa -> fetch_array(MYSQLI_ASSOC))
        {            
            $letra_solo_1 = $row_ptvida['c_letra'];
            $c_nombre = $row_ptvida['c_nombre'];
            $c_duracion = $row_ptvida['c_duracion'];
            $c_colaborador = $row_ptvida['c_colaborador'];
            //$c_video_s1 = $row_solo['c_video'];
        }

        // COMO OLVIDARTE
        $contenido_track2 = $mysqli->query("SELECT * FROM canciones where id_disco = 16 and c_track = 2");
        while($row2 = $contenido_track2 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_2 = $row2['c_track'];
            $letra_solo_2 = $row2['c_letra'];
            $c_nombre_s2 = $row2['c_nombre'];
            $c_duracion_s2 = $row2['c_duracion'];
            $c_colaborador_s2 = $row2['c_colaborador'];
            //$c_video_s2 = $row2['c_video'];
        }

        // TE NECESITO
        $contenido_track3 = $mysqli->query("SELECT * FROM canciones where id_disco = 16 and c_track = 3");
        while($row3 = $contenido_track3 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_3 = $row3['c_track'];
            $letra_solo_3 = $row3['c_letra'];
            $c_nombre_s3 = $row3['c_nombre'];
            $c_duracion_s3 = $row3['c_duracion'];
            $c_colaborador_s3 = $row3['c_colaborador'];
            //$c_video_s3 = $row3['c_video'];
        }        

        $contenido_track4 = $mysqli->query("SELECT * FROM canciones where id_disco = 16 and c_track = 4");
        while($row4 = $contenido_track4 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_4 = $row4['c_track'];
            $letra_solo_4 = $row4['c_letra'];
            $c_nombre_s4 = $row4['c_nombre'];
            $c_duracion_s4 = $row4['c_duracion'];
            $c_colaborador_s4 = $row4['c_colaborador'];
            //$c_video_s4 = $row4['c_video'];
        }         

        $contenido_track5 = $mysqli->query("SELECT * FROM canciones where id_disco = 16 and c_track = 5");
        while($row5 = $contenido_track5 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_5 = $row5['c_track'];
            $letra_solo_5 = $row5['c_letra'];
            $c_nombre_s5 = $row5['c_nombre'];
            $c_duracion_s5 = $row5['c_duracion'];
            $c_colaborador_s5 = $row5['c_colaborador'];
            //$c_video_s5 = $row5['c_video'];
        }  

        $contenido_track6 = $mysqli->query("SELECT * FROM canciones where id_disco = 16 and c_track = 6");
        while($row6 = $contenido_track6 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_6 = $row6['c_track'];
            $letra_solo_6 = $row6['c_letra'];
            $c_nombre_s6 = $row6['c_nombre'];
            $c_duracion_s6 = $row6['c_duracion'];
            $c_colaborador_s6 = $row6['c_colaborador'];
            //$c_video_s6 = $row6['c_video'];
        }   

        $contenido_track7 = $mysqli->query("SELECT * FROM canciones where id_disco = 16 and c_track = 7");
        while($row7 = $contenido_track7 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_7 = $row7['c_track'];
            $letra_solo_7 = $row7['c_letra'];
            $c_nombre_s7 = $row7['c_nombre'];
            $c_duracion_s7 = $row7['c_duracion'];
            $c_colaborador_s7 = $row7['c_colaborador'];
            //$c_video_s7 = $row7['c_video'];
        }    

        $contenido_track8 = $mysqli->query("SELECT * FROM canciones where id_disco = 16 and c_track = 8");
        while($row8 = $contenido_track8 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_8 = $row8['c_track'];
            $letra_solo_8 = $row8['c_letra'];
            $c_nombre_s8 = $row8['c_nombre'];
            $c_duracion_s8 = $row8['c_duracion'];
            $c_colaborador_s8 = $row8['c_colaborador'];
            //$c_video_s8 = $row8['c_video'];
        }   

        $contenido_track9 = $mysqli->query("SELECT * FROM canciones where id_disco = 16 and c_track = 9");
        while($row9 = $contenido_track9 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_9 = $row9['c_track'];
            $letra_solo_9 = $row9['c_letra'];
            $c_nombre_s9 = $row9['c_nombre'];
            $c_duracion_s9 = $row9['c_duracion'];
            $c_colaborador_s9 = $row9['c_colaborador'];
            //$c_video_s9 = $row9['c_video'];
        }     

        $contenido_track10 = $mysqli->query("SELECT * FROM canciones where id_disco = 16 and c_track = 10");
        while($row10 = $contenido_track10 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_10 = $row10['c_track'];
            $letra_solo_10 = $row10['c_letra'];
            $c_nombre_s10 = $row10['c_nombre'];
            $c_duracion_s10 = $row10['c_duracion'];
            $c_colaborador_s10 = $row10['c_colaborador'];
            //$c_video_s10 = $row10['c_video'];
        }                                            



           


        while($res = $disco_caprichosa -> fetch_array(MYSQLI_ASSOC))
    {
      $agradecimientos = $res['cd_gracias'];
      $nombredisco  = $res['cd_nombre'];
      
      //$documento = $res['documento'];
      //$idmember = $res['idmember'];

        $nina .='
                        <div id="cdnina" class="collapse hidden"> <!--  Comienza disco SOLO -->
                        <!-- Abre id#cd_solo -->
                        <h2>Album '.$nombredisco.'</h2>

                        <!-- COMIENZA PESTAnAS -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#homenina">Inicio</a></li>
                          <li><a data-toggle="tab" href="#cd_nina">CD</a></li>
                          <!--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
                        </ul>

                        <div class="tab-content">
                        <!-- COMIENZA TAB HOME -->    
                          <div id="homenina" class="tab-pane fade in active">
                            <h3>Agradecimientos</h3>
                            <p><small><h5>
                                '.$agradecimientos.'
                            </small></p></h5> 
                            <br>
                            <small><strong>Daniel Agostini</strong></small>
                                                                                
                          </div>
                          <!-- TERMINA TAB HOME -->    

                          <!-- COMIENZA TAB CD -->    
                          <div id="cd_nina" class="tab-pane fade">
                            
                            <h3>Lista de canciones</h3>
                          
        
                              <h4>Grupo Sombras - Ni&ntilde;a Caprichosa</h4>
                              <p><small>En este compacto Jorge Avila deja el grupo sombras para formar su grupo "Los Avila", Sombras ya tenia el disco 
                              armado, con la llegada de Daniel Agostini se le da al grupo un aire mas fresco. Compacto con 10 temas de Excelente calidad.
                             </small></p><br>

                                <br>

                                <!-- COMIENZA ESCUCHAR CD COMPLETO "SOLO" -->
                              
                                <a href="#solo" id="cd_caprichosa_full" valor="16" data-toggle="collapse" data-target="#cdcompletocaprichosa" class="btn btn-info btn-xs">Escuchar CD Completo</a>
                               

                                <div id="cdcompletocaprichosa" class="col-xs-12 collapse ">
                                    <h4>Disco Completo</h4>

                                    <p id="full_cd_caprichosa" > </p>

                                </div>
                                <!-- TERMINA ESCUCHAR CD COMPLETO "SOLO" -->


                              <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Nombre de la cancion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                <!-- TEMA 1 LA CHICA DEL BAILE -->
                                <tr>
                                   <td>1</td>
                                   <td><small>'.$c_nombre.'</small> 
                                   
                                    <a href="#tuvida" id="tema_1_caprichosa" data-toggle="collapse" data-target="#chicabailev" class="btn btn-info btn-xs">Escuchar</a>  | 
                            
                                   <!-- <button id="cerreti"  class="btn btn-info btn-xs ">Cerrar</button>  -->
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#chicabailel" class="btn btn-info btn-xs">Letra</a></p>

    <form id="cd_caprichosa_1">
        <input id="id_disco" name="disco" value="16" class="hidden">
        <input id="id_video" name="video" value="1" class="hidden">
    </form>                                   

                                    <!-- VIDEO --> <br>
                                      <div id="chicabailev" class="col-xs-12 collapse ">                              
                                    </div>
                                    
                                    <!-- VIDEO -->

                                    <!-- LETRA  -->
                                    <div id="chicabailel" class="col-xs-12 collapse "><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre.' <small>Duracion: <b>'.$c_duracion.'</b></small></h3><small>'.$c_colaborador.'</small></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                      '.$letra_solo_1.'  
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA  -->

                                   </td>
                                </tr> 
                                <!-- TEMA 1 LA CHICA DEL BAILE -->  


                                <!-- TEMA 2 NIÑA CAPRICHOSA -->
                                <tr>
                                    <td>'.$cd_track_2.'</td>
                                    <td><small>'.$c_nombre_s2.'</small> 
                                        <a href="#ver_cdsolo" id="tema_2_caprichosa" data-toggle="collapse" data-target="#capriv" class="btn btn-info btn-xs">Escuchar</a> 
                                        | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#capril" class="btn btn-info btn-xs">Letra</a>


<form id="cd_caprichosa_2">
    <input id="id_disco" name="disco" value="16" class="hidden">
    <input id="id_video" name="video" value="2" class="hidden">
</form>   
                                    <!-- VIDEO NIÑA CAPRICHOSA --> <br>
                                    <div id="capriv" class="col-xs-12 collapse ">                              
                                    </div>
                                    <!-- VIDEO NIÑA CAPRICHOSA -->


                                    <!-- LETRA  -->
                                    <div id="capril" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s2.' <small>Duracion: <b>'.$c_duracion_s2.'
                                                </b></small></h3><small>'.$c_colaborador_s2.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                    <br>
                                    <p>
                                        '.$letra_solo_2.'
                                    </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                    <!-- LETRA -->

                                    </td>
                                </tr>    
                                <!-- TEMA 2 NIÑA CAPRICHOSA -->      

                                <!-- TEMA 3 NOCHE ESTRELLADA -->
                                <tr>
                                   <td>'.$cd_track_3.'</td>
                                   <td><small>'.$c_nombre_s3.'</small>
                                   <a href="#ver_cdsolo" id="tema_3_caprichosa" data-toggle="collapse" data-target="#estrelladav" class="btn btn-info btn-xs">Escuchar</a> 
                                   | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#estrelladal" class="btn btn-info btn-xs">Letra</a>


<form id="cd_caprichosa_3">
    <input id="id_disco" name="disco" value="16" class="hidden">
    <input id="id_video" name="video" value="3" class="hidden">
</form>   
                                    <br>
                                   <div id="estrelladav" class="col-xs-12 collapse "><br>                                  
                                    </div>
                                    
                                    <div id="estrelladal" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s3.' <small>Duracion: <b>'.$c_duracion_s3.'
                                                </b></small></h3><small>'.$c_colaborador_s3.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                     
                                                <p>
                                                '.$letra_solo_3.'
                                                </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                   </td> 
                                </tr> 
                                <!-- TEMA 3 NOCHE ESTRELLADA -->  
                              
                                <!-- TEMA 4 NO ME VUELVO A ENAMORAR --> 
                                <tr>
                                    <td>'.$cd_track_4.'</td>
                                    <td><small>'.$c_nombre_s4.'</small>
                                    <a href="#ver_cdsolo" id="tema_4_caprichosa" data-toggle="collapse" data-target="#enamorarv" class="btn btn-info btn-xs">Escuchar</a> 
                                     | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#enamorarl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_caprichosa_4">
    <input id="id_disco" name="disco" value="16" class="hidden">
    <input id="id_video" name="video" value="4" class="hidden">
</form>   

                                    <!-- VIDEO --> <br>
                                    <div id="enamorarv" class="col-xs-12 collapse ">                                 
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="enamorarl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s4.' <small>Duracion: <b>'.$c_duracion_s4.'
                                                </b></small></h3><small>'.$c_colaborador_s4.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_4.'
                                                </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>    

                                    </td>
                                </tr> 
                                <!-- TEMA 4 NO ME VUELVO A ENAMORAR --> 

                                <!-- TEMA 5 INOLVIDABLE --> 
                                <tr>
                                    <td>'.$cd_track_5.'</td>
                                    <td><small>'.$c_nombre_s5.'</small>

                                    <a href="#ver_cdsolo" id="tema_5_caprichosa" data-toggle="collapse" data-target="#inolvidablev" class="btn btn-info btn-xs">Escuchar</a> 
                                    | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#inolvidablel" class="btn btn-info btn-xs">Letra</a>
                                    
<form id="cd_caprichosa_5">
    <input id="id_disco" name="disco" value="16" class="hidden">
    <input id="id_video" name="video" value="5" class="hidden">
</form>   
                                    <!-- VIDEO --><br>
                                    <div id="inolvidablev" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="inolvidablel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s5.' <small>Duracion: <b>'.$c_duracion_s5.'
                                                </b></small></h3><small>'.$c_colaborador_s5.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_5.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>                                                                    
                                <!-- TEMA 5 INOLVIDABLE --> 

                                <!-- TEMA 6 EL REGALITO --> 
                                <tr>
                                    <td>'.$cd_track_6.'</td>
                                    <td><small>'.$c_nombre_s6.'</small>
                                    <a href="#ver_cdsolo" id="tema_6_caprichosa" data-toggle="collapse" data-target="#regalitov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#regalitol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_caprichosa_6">
    <input id="id_disco" name="disco" value="16" class="hidden">
    <input id="id_video" name="video" value="6" class="hidden">
</form>
                                    <!-- VIDEO --> <br>
                                    <div id="regalitov" class="col-xs-12 collapse "><br>                                  
                                    </div>

                                    <!-- LETRA  -->
                                    <div id="regalitol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s6.' <small>Duracion: <b>'.$c_duracion_s6.'
                                                </b></small></h3><small>'.$c_colaborador_s6.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_6.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 6 EL REGALITO --> 

                                <!-- TEMA 7 BESOS --> 
                                <tr>
                                    <td>'.$cd_track_7.'</td>
                                    <td><small>'.$c_nombre_s7.'</small>

                                    <a href="#ver_cdsolo" id="tema_7_caprichosa" data-toggle="collapse" data-target="#besosv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#besosl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_caprichosa_7">
    <input id="id_disco" name="disco" value="16" class="hidden">
    <input id="id_video" name="video" value="7" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="besosv" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="besosl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s7.' <small>Duracion: <b>'.$c_duracion_s7.'
                                                </b></small></h3><small>'.$c_colaborador_s7.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_7.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>
                                <!-- TEMA 7 BESOS -->

                                <!-- TEMA 8 VENENO PARA OLVIDAR -->
                                <tr>
                                    <td>'.$cd_track_8.'</td>
                                    <td><small>'.$c_nombre_s8.'</small>
                                    
                                    <a href="#ver_cdsolo" id="tema_8_caprichosa" data-toggle="collapse" data-target="#venenov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#venenol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_caprichosa_8">
    <input id="id_disco" name="disco" value="16" class="hidden">
    <input id="id_video" name="video" value="8" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="venenov" class="col-xs-12 collapse "><br>       
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="venenol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s8.' <small>Duracion: <b>'.$c_duracion_s8.'
                                                </b></small></h3><small>'.$c_colaborador_s8.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_8.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr> 
                                <!-- TEMA 8 VENENO PARA OLVIDAR -->

                                <!-- TEMA 9 REGRESA CON TU AMANTE -->
                                <tr>
                                    <td>'.$cd_track_9.'</td>
                                    <td><small>'.$c_nombre_s9.'</small>
                                    
                                    <a href="#ver_cdsolo" id="tema_9_caprichosa" data-toggle="collapse" data-target="#regresaamantev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#regresaamantel" class="btn btn-info btn-xs">Letra</a>

<form id="cd_caprichosa_9">
    <input id="id_disco" name="disco" value="16" class="hidden">
    <input id="id_video" name="video" value="9" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="regresaamantev" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="regresaamantel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s9.' <small>Duracion: <b>'.$c_duracion_s9.'
                                                </b></small></h3><small>'.$c_colaborador_s9.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_9.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 9 REGRESA CON TU AMANTE -->

                                <!-- TEMA 10 NUNCA VOY A OLVIDARTE -->
                                <tr>
                                    <td>'.$cd_track_10.'</td>
                                    <td><small>'.$c_nombre_s10.'</small>

                                    <a href="#ver_cdsolo" id="tema_10_caprichosa" data-toggle="collapse" data-target="#nuncaolvidartev" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#nuncaolvidartel" class="btn btn-info btn-xs">Letra</a>

<form id="cd_caprichosa_10">
    <input id="id_disco" name="disco" value="16" class="hidden">
    <input id="id_video" name="video" value="10" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="nuncaolvidartev" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="nuncaolvidartel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s10.' <small>Duracion: <b>'.$c_duracion_s10.'
                                                </b></small></h3><small>'.$c_colaborador_s10.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_10.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 10 NUNCA VOY A OLVIDARTE -->




                                <!--
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                              -->
                                </tbody>
                              </table>
                            </div> <!-- Cierra CD -->                           


                           
                          </div>
                          <!-- TERMINA TAB HOME -->    



                          <!--
                          <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                          </div>
                          -->

                        </div>
                        <!-- TERMINA PESTAnAS -->


                        <!-- Cierra id#cd_solo -->    
                        </div>                   

              ';

        }
    return $nina;          
    }    






function boquitadecaramelo(){
        $mysqli = conexionBD(); // Conexion a la Base Hackaton
        $boquita= "";
        
        $disco_boquita = $mysqli->query("SELECT * FROM discos  WHERE id_disco = 17 ");        
        // SOLO
        $contenido_boquita = $mysqli->query("SELECT * FROM canciones where id_disco = 17 and c_track = 1");
        while($row_ptvida = $contenido_boquita -> fetch_array(MYSQLI_ASSOC))
        {            
            $letra_solo_1 = $row_ptvida['c_letra'];
            $c_nombre = $row_ptvida['c_nombre'];
            $c_duracion = $row_ptvida['c_duracion'];
            $c_colaborador = $row_ptvida['c_colaborador'];
            //$c_video_s1 = $row_solo['c_video'];
        }

        // COMO OLVIDARTE
        $contenido_track2 = $mysqli->query("SELECT * FROM canciones where id_disco = 17 and c_track = 2");
        while($row2 = $contenido_track2 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_2 = $row2['c_track'];
            $letra_solo_2 = $row2['c_letra'];
            $c_nombre_s2 = $row2['c_nombre'];
            $c_duracion_s2 = $row2['c_duracion'];
            $c_colaborador_s2 = $row2['c_colaborador'];
            //$c_video_s2 = $row2['c_video'];
        }

        // TE NECESITO
        $contenido_track3 = $mysqli->query("SELECT * FROM canciones where id_disco = 17 and c_track = 3");
        while($row3 = $contenido_track3 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_3 = $row3['c_track'];
            $letra_solo_3 = $row3['c_letra'];
            $c_nombre_s3 = $row3['c_nombre'];
            $c_duracion_s3 = $row3['c_duracion'];
            $c_colaborador_s3 = $row3['c_colaborador'];
            //$c_video_s3 = $row3['c_video'];
        }        

        $contenido_track4 = $mysqli->query("SELECT * FROM canciones where id_disco = 17 and c_track = 4");
        while($row4 = $contenido_track4 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_4 = $row4['c_track'];
            $letra_solo_4 = $row4['c_letra'];
            $c_nombre_s4 = $row4['c_nombre'];
            $c_duracion_s4 = $row4['c_duracion'];
            $c_colaborador_s4 = $row4['c_colaborador'];
            //$c_video_s4 = $row4['c_video'];
        }         

        $contenido_track5 = $mysqli->query("SELECT * FROM canciones where id_disco = 17 and c_track = 5");
        while($row5 = $contenido_track5 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_5 = $row5['c_track'];
            $letra_solo_5 = $row5['c_letra'];
            $c_nombre_s5 = $row5['c_nombre'];
            $c_duracion_s5 = $row5['c_duracion'];
            $c_colaborador_s5 = $row5['c_colaborador'];
            //$c_video_s5 = $row5['c_video'];
        }  

        $contenido_track6 = $mysqli->query("SELECT * FROM canciones where id_disco = 17 and c_track = 6");
        while($row6 = $contenido_track6 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_6 = $row6['c_track'];
            $letra_solo_6 = $row6['c_letra'];
            $c_nombre_s6 = $row6['c_nombre'];
            $c_duracion_s6 = $row6['c_duracion'];
            $c_colaborador_s6 = $row6['c_colaborador'];
            //$c_video_s6 = $row6['c_video'];
        }   

        $contenido_track7 = $mysqli->query("SELECT * FROM canciones where id_disco = 17 and c_track = 7");
        while($row7 = $contenido_track7 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_7 = $row7['c_track'];
            $letra_solo_7 = $row7['c_letra'];
            $c_nombre_s7 = $row7['c_nombre'];
            $c_duracion_s7 = $row7['c_duracion'];
            $c_colaborador_s7 = $row7['c_colaborador'];
            //$c_video_s7 = $row7['c_video'];
        }    

        $contenido_track8 = $mysqli->query("SELECT * FROM canciones where id_disco = 17 and c_track = 8");
        while($row8 = $contenido_track8 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_8 = $row8['c_track'];
            $letra_solo_8 = $row8['c_letra'];
            $c_nombre_s8 = $row8['c_nombre'];
            $c_duracion_s8 = $row8['c_duracion'];
            $c_colaborador_s8 = $row8['c_colaborador'];
            //$c_video_s8 = $row8['c_video'];
        }   

        $contenido_track9 = $mysqli->query("SELECT * FROM canciones where id_disco = 17 and c_track = 9");
        while($row9 = $contenido_track9 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_9 = $row9['c_track'];
            $letra_solo_9 = $row9['c_letra'];
            $c_nombre_s9 = $row9['c_nombre'];
            $c_duracion_s9 = $row9['c_duracion'];
            $c_colaborador_s9 = $row9['c_colaborador'];
            //$c_video_s9 = $row9['c_video'];
        }     

        $contenido_track10 = $mysqli->query("SELECT * FROM canciones where id_disco = 17 and c_track = 10");
        while($row10 = $contenido_track10 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_10 = $row10['c_track'];
            $letra_solo_10 = $row10['c_letra'];
            $c_nombre_s10 = $row10['c_nombre'];
            $c_duracion_s10 = $row10['c_duracion'];
            $c_colaborador_s10 = $row10['c_colaborador'];
            //$c_video_s10 = $row10['c_video'];
        }                                            

        $contenido_track11 = $mysqli->query("SELECT * FROM canciones where id_disco = 17 and c_track = 11");
        while($row11 = $contenido_track11 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_11 = $row11['c_track'];
            $letra_solo_11 = $row11['c_letra'];
            $c_nombre_s11 = $row11['c_nombre'];
            $c_duracion_s11 = $row11['c_duracion'];
            $c_colaborador_s11 = $row11['c_colaborador'];
            //$c_video_s10 = $row10['c_video'];
        }                                            


        $contenido_track12 = $mysqli->query("SELECT * FROM canciones where id_disco = 17 and c_track = 12");
        while($row12 = $contenido_track12 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_12 = $row12['c_track'];
            $letra_solo_12 = $row12['c_letra'];
            $c_nombre_s12 = $row12['c_nombre'];
            $c_duracion_s12 = $row12['c_duracion'];
            $c_colaborador_s12 = $row12['c_colaborador'];
            //$c_video_s10 = $row10['c_video'];
        }                                            


           


        while($res = $disco_boquita -> fetch_array(MYSQLI_ASSOC))
    {
      $agradecimientos = $res['cd_gracias'];
      $nombredisco  = $res['cd_nombre'];
      
      //$documento = $res['documento'];
      //$idmember = $res['idmember'];

        $boquita .='
                        <div id="cd_caramelo" class="collapse hidden"> <!--  Comienza disco SOLO -->
                        <!-- Abre id#cd_solo -->
                        <h2>Album '.$nombredisco.'</h2>

                        <!-- COMIENZA PESTAnAS -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#homeboquita">Inicio</a></li>
                          <li><a data-toggle="tab" href="#cd_boquita">CD</a></li>
                          <!--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
                        </ul>

                        <div class="tab-content">
                        <!-- COMIENZA TAB HOME -->    
                          <div id="homeboquita" class="tab-pane fade in active">
                            <h3>Agradecimientos</h3>
                            <p><small><h5>
                                '.$agradecimientos.'
                            </small></p></h5> 
                            <br>
                            <small><strong>Daniel Agostini</strong></small>
                                                                                
                          </div>
                          <!-- TERMINA TAB HOME -->    

                          <!-- COMIENZA TAB CD -->    
                          <div id="cd_boquita" class="tab-pane fade">
                            
                            <h3>Lista de canciones</h3>
                          
        
                              <h4>Grupo Sombras - Boquita de caramelo</h4>
                              <p><small>Disco compacto Ganador de Sextuple disco de Platino y Disco de Oro. Contiene 3 covers La ventanita , Mienteme y Te conozco.
El tema La ventanita fue grabado como ultimo tema, ni siquiera apoyado por el grupo, fue la cancion que colocó a Sombras en lo mas alto. 
                             </small></p><br>

                                <br>

                                <!-- COMIENZA ESCUCHAR CD COMPLETO "SOLO" -->
                              
                                <a href="#solo" id="cd_boquita_full" valor="16" data-toggle="collapse" data-target="#cdcompletoboquita" class="btn btn-info btn-xs">Escuchar CD Completo</a>
                               

                                <div id="cdcompletoboquita" class="col-xs-12 collapse ">
                                    <h4>Disco Completo</h4>

                                    <p id="full_cd_boquita" > </p>

                                </div>
                                <!-- TERMINA ESCUCHAR CD COMPLETO "SOLO" -->


                              <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Nombre de la cancion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                <!-- TEMA 1 TRISTE NOVELA-->
                                <tr>
                                   <td>1</td>
                                   <td><small>'.$c_nombre.'</small> 
                                   
                                    <a href="#tuvida" id="tema_boquita_1" data-toggle="collapse" data-target="#tristenovelav" class="btn btn-info btn-xs">Escuchar</a>  | 
                            
                                   <!-- <button id="cerreti"  class="btn btn-info btn-xs ">Cerrar</button>  -->
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#tristenovelal" class="btn btn-info btn-xs">Letra</a></p>

    <form id="cd_boquita_1">
        <input id="id_disco" name="disco" value="17" class="hidden">
        <input id="id_video" name="video" value="1" class="hidden">
    </form>                                   

                                    <!-- VIDEO --> <br>
                                      <div id="tristenovelav" class="col-xs-12 collapse ">                              
                                    </div>
                                    
                                    <!-- VIDEO -->

                                    <!-- LETRA  -->
                                    <div id="tristenovelal" class="col-xs-12 collapse "><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre.' <small>Duracion: <b>'.$c_duracion.'</b></small></h3><small>'.$c_colaborador.'</small></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                      '.$letra_solo_1.'  
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA  -->

                                   </td>
                                </tr> 
                                <!-- TEMA 1 TRISTE NOVELA -->  


                                <!-- TEMA 2 BESO A BESO -->
                                <tr>
                                    <td>'.$cd_track_2.'</td>
                                    <td><small>'.$c_nombre_s2.'</small> 
                                        <a href="#ver_cdsolo" id="tema_boquita_2" data-toggle="collapse" data-target="#besoabesov" class="btn btn-info btn-xs">Escuchar</a> 
                                        | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#besoabesol" class="btn btn-info btn-xs">Letra</a>


<form id="cd_boquita_2">
    <input id="id_disco" name="disco" value="17" class="hidden">
    <input id="id_video" name="video" value="2" class="hidden">
</form>   
                                    <!-- VIDEO NIÑA CAPRICHOSA --> <br>
                                    <div id="besoabesov" class="col-xs-12 collapse ">                              
                                    </div>
                                    <!-- VIDEO NIÑA CAPRICHOSA -->


                                    <!-- LETRA  -->
                                    <div id="besoabesol" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s2.' <small>Duracion: <b>'.$c_duracion_s2.'
                                                </b></small></h3><small>'.$c_colaborador_s2.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                    <br>
                                    <p>
                                        '.$letra_solo_2.'
                                    </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                    <!-- LETRA -->

                                    </td>
                                </tr>    
                                <!-- TEMA 2 BESO A BESO -->      

                                <!-- TEMA 3 DIME AMOR -->
                                <tr>
                                   <td>'.$cd_track_3.'</td>
                                   <td><small>'.$c_nombre_s3.'</small>
                                   <a href="#ver_cdsolo" id="tema_boquita_3" data-toggle="collapse" data-target="#dime_amorv" class="btn btn-info btn-xs">Escuchar</a> 
                                   | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#dimeamorl" class="btn btn-info btn-xs">Letra</a>


<form id="cd_boquita_3">
    <input id="id_disco" name="disco" value="17" class="hidden">
    <input id="id_video" name="video" value="3" class="hidden">
</form>   
                                    <br>
                                   <div id="dime_amorv" class="col-xs-12 collapse "><br>                                  
                                    </div>
                                    
                                    <div id="dimeamorl" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s3.' <small>Duracion: <b>'.$c_duracion_s3.'
                                                </b></small></h3><small>'.$c_colaborador_s3.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                     
                                                <p>
                                                '.$letra_solo_3.'
                                                </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                   </td> 
                                </tr> 
                                <!-- TEMA 3 DIME AMOR -->  
                              
                                <!-- TEMA 4 LA VENTANITA --> 
                                <tr>
                                    <td>'.$cd_track_4.'</td>
                                    <td><small>'.$c_nombre_s4.'</small>
                                    <a href="#ver_cdsolo" id="tema_boquita_4" data-toggle="collapse" data-target="#laventanitav" class="btn btn-info btn-xs">Escuchar</a> 
                                     | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#laventanital" class="btn btn-info btn-xs">Letra</a>

<form id="cd_boquita_4">
    <input id="id_disco" name="disco" value="17" class="hidden">
    <input id="id_video" name="video" value="4" class="hidden">
</form>   

                                    <!-- VIDEO --> <br>
                                    <div id="laventanitav" class="col-xs-12 collapse ">                                 
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="laventanital" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s4.' <small>Duracion: <b>'.$c_duracion_s4.'
                                                </b></small></h3><small>'.$c_colaborador_s4.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_4.'
                                                </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>    

                                    </td>
                                </tr> 
                                <!-- TEMA 4 LA VENTANITA --> 

                                <!-- TEMA 5 BOQUITA DE CARAMELO --> 
                                <tr>
                                    <td>'.$cd_track_5.'</td>
                                    <td><small>'.$c_nombre_s5.'</small>

                                    <a href="#ver_cdsolo" id="tema_boquita_5" data-toggle="collapse" data-target="#boquitacaramelov" class="btn btn-info btn-xs">Escuchar</a> 
                                    | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#boquitacaramelol" class="btn btn-info btn-xs">Letra</a>
                                    
<form id="cd_boquita_5">
    <input id="id_disco" name="disco" value="17" class="hidden">
    <input id="id_video" name="video" value="5" class="hidden">
</form>   
                                    <!-- VIDEO --><br>
                                    <div id="boquitacaramelov" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="boquitacaramelol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s5.' <small>Duracion: <b>'.$c_duracion_s5.'
                                                </b></small></h3><small>'.$c_colaborador_s5.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_5.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>                                                                    
                                <!-- TEMA 5 BOQUITA DE CARAMELO --> 

                                <!-- TEMA 6 Y QUE HAS HECHO DE MI --> 
                                <tr>
                                    <td>'.$cd_track_6.'</td>
                                    <td><small>'.$c_nombre_s6.'</small>
                                    <a href="#ver_cdsolo" id="tema_boquita_6" data-toggle="collapse" data-target="#yquehashechodemiv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#yquehashechodemil" class="btn btn-info btn-xs">Letra</a>

<form id="cd_boquita_6">
    <input id="id_disco" name="disco" value="17" class="hidden">
    <input id="id_video" name="video" value="6" class="hidden">
</form>
                                    <!-- VIDEO --> <br>
                                    <div id="yquehashechodemiv" class="col-xs-12 collapse "><br>                                  
                                    </div>

                                    <!-- LETRA  -->
                                    <div id="yquehashechodemil" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s6.' <small>Duracion: <b>'.$c_duracion_s6.'
                                                </b></small></h3><small>'.$c_colaborador_s6.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_6.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 6 Y QUE HAS HECHO DE MI --> 

                                <!-- TEMA 7 OTRA NOCHE DE AMOR --> 
                                <tr>
                                    <td>'.$cd_track_7.'</td>
                                    <td><small>'.$c_nombre_s7.'</small>

                                    <a href="#ver_cdsolo" id="tema_boquita_7" data-toggle="collapse" data-target="#otranochedeamorrv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#otranochedeamorrl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_boquita_7">
    <input id="id_disco" name="disco" value="17" class="hidden">
    <input id="id_video" name="video" value="7" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="otranochedeamorrv" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="otranochedeamorrl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s7.' <small>Duracion: <b>'.$c_duracion_s7.'
                                                </b></small></h3><small>'.$c_colaborador_s7.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_7.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>
                                <!-- TEMA 7 OTRA NOCHE DE AMOR -->

                                <!-- TEMA 8 PEGA LA VUELTA -->
                                <tr>
                                    <td>'.$cd_track_8.'</td>
                                    <td><small>'.$c_nombre_s8.'</small>
                                    
                                    <a href="#ver_cdsolo" id="tema_boquita_8" data-toggle="collapse" data-target="#pegalavueltav" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#pegalavueltal" class="btn btn-info btn-xs">Letra</a>

<form id="cd_boquita_8">
    <input id="id_disco" name="disco" value="17" class="hidden">
    <input id="id_video" name="video" value="8" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="pegalavueltav" class="col-xs-12 collapse "><br>       
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="pegalavueltal" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s8.' <small>Duracion: <b>'.$c_duracion_s8.'
                                                </b></small></h3><small>'.$c_colaborador_s8.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_8.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr> 
                                <!-- TEMA 8 PEGA LA VUELTA -->

                                <!-- TEMA 9 POR QUE YO -->
                                <tr>
                                    <td>'.$cd_track_9.'</td>
                                    <td><small>'.$c_nombre_s9.'</small>
                                    
                                    <a href="#ver_cdsolo" id="tema_boquita_9" data-toggle="collapse" data-target="#porqueyov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#porqueyol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_boquita_9">
    <input id="id_disco" name="disco" value="17" class="hidden">
    <input id="id_video" name="video" value="9" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="porqueyov" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="porqueyol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s9.' <small>Duracion: <b>'.$c_duracion_s9.'
                                                </b></small></h3><small>'.$c_colaborador_s9.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_9.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 9 POR QUE YO -->

                                <!-- TEMA 10 UNA COPITA MAS -->
                                <tr>
                                    <td>'.$cd_track_10.'</td>
                                    <td><small>'.$c_nombre_s10.'</small>

                                    <a href="#ver_cdsolo" id="tema_boquita_10" data-toggle="collapse" data-target="#unacopitamasv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#unacopitamasl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_boquita_10">
    <input id="id_disco" name="disco" value="17" class="hidden">
    <input id="id_video" name="video" value="10" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="unacopitamasv" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="unacopitamasl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s10.' <small>Duracion: <b>'.$c_duracion_s10.'
                                                </b></small></h3><small>'.$c_colaborador_s10.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_10.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 10 NA COPITA MAS -->


                            <!-- TEMA 11 MIENTEME -->
                                <tr>
                                    <td>'.$cd_track_11.'</td>
                                    <td><small>'.$c_nombre_s11.'</small>

                                    <a href="#ver_cdsolo" id="tema_boquita_11" data-toggle="collapse" data-target="#mientemesv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#mientemesl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_boquita_11">
    <input id="id_disco" name="disco" value="17" class="hidden">
    <input id="id_video" name="video" value="11" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="mientemesv" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="mientemesl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s11.' <small>Duracion: <b>'.$c_duracion_s11.'
                                                </b></small></h3><small>'.$c_colaborador_s11.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_11.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 11 MIENTEME -->




                            <!-- TEMA 12 TE CONOZCO -->
                                <tr>
                                    <td>'.$cd_track_12.'</td>
                                    <td><small>'.$c_nombre_s12.'</small>

                                    <a href="#ver_cdsolo" id="tema_boquita_12" data-toggle="collapse" data-target="#teconozcov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#teconozcol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_boquita_12">
    <input id="id_disco" name="disco" value="17" class="hidden">
    <input id="id_video" name="video" value="12" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="teconozcov" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="teconozcol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s12.' <small>Duracion: <b>'.$c_duracion_s12.'
                                                </b></small></h3><small>'.$c_colaborador_s12.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_12.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 12 TE CONOZCO -->



                                <!--
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                              -->
                                </tbody>
                              </table>
                            </div> <!-- Cierra CD -->                           


                           
                          </div>
                          <!-- TERMINA TAB HOME -->    



                          <!--
                          <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                          </div>
                          -->

                        </div>
                        <!-- TERMINA PESTAnAS -->


                        <!-- Cierra id#cd_solo -->    
                        </div>                   

              ';

        }
    return $boquita;          
    }    














/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
// GRUPO SOMBRAS SOMBRAS NADA MAS
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////

  

function sombrasnadamas(){
        $mysqli = conexionBD(); // Conexion a la Base Hackaton
        $nadamas= "";
        
        $disco_nadamas = $mysqli->query("SELECT * FROM discos  WHERE id_disco = 18 ");        
        // SOLO
        $contenido_nadamas = $mysqli->query("SELECT * FROM canciones where id_disco = 18 and c_track = 1");
        while($row_ptvida = $contenido_nadamas -> fetch_array(MYSQLI_ASSOC))
        {            
            $letra_solo_1 = $row_ptvida['c_letra'];
            $c_nombre = $row_ptvida['c_nombre'];
            $c_duracion = $row_ptvida['c_duracion'];
            $c_colaborador = $row_ptvida['c_colaborador'];
            //$c_video_s1 = $row_solo['c_video'];
        }

        // COMO OLVIDARTE
        $contenido_track2 = $mysqli->query("SELECT * FROM canciones where id_disco = 18 and c_track = 2");
        while($row2 = $contenido_track2 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_2 = $row2['c_track'];
            $letra_solo_2 = $row2['c_letra'];
            $c_nombre_s2 = $row2['c_nombre'];
            $c_duracion_s2 = $row2['c_duracion'];
            $c_colaborador_s2 = $row2['c_colaborador'];
            //$c_video_s2 = $row2['c_video'];
        }

        // TE NECESITO
        $contenido_track3 = $mysqli->query("SELECT * FROM canciones where id_disco = 18 and c_track = 3");
        while($row3 = $contenido_track3 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_3 = $row3['c_track'];
            $letra_solo_3 = $row3['c_letra'];
            $c_nombre_s3 = $row3['c_nombre'];
            $c_duracion_s3 = $row3['c_duracion'];
            $c_colaborador_s3 = $row3['c_colaborador'];
            //$c_video_s3 = $row3['c_video'];
        }        

        $contenido_track4 = $mysqli->query("SELECT * FROM canciones where id_disco = 18 and c_track = 4");
        while($row4 = $contenido_track4 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_4 = $row4['c_track'];
            $letra_solo_4 = $row4['c_letra'];
            $c_nombre_s4 = $row4['c_nombre'];
            $c_duracion_s4 = $row4['c_duracion'];
            $c_colaborador_s4 = $row4['c_colaborador'];
            //$c_video_s4 = $row4['c_video'];
        }         

        $contenido_track5 = $mysqli->query("SELECT * FROM canciones where id_disco = 18 and c_track = 5");
        while($row5 = $contenido_track5 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_5 = $row5['c_track'];
            $letra_solo_5 = $row5['c_letra'];
            $c_nombre_s5 = $row5['c_nombre'];
            $c_duracion_s5 = $row5['c_duracion'];
            $c_colaborador_s5 = $row5['c_colaborador'];
            //$c_video_s5 = $row5['c_video'];
        }  

        $contenido_track6 = $mysqli->query("SELECT * FROM canciones where id_disco = 18 and c_track = 6");
        while($row6 = $contenido_track6 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_6 = $row6['c_track'];
            $letra_solo_6 = $row6['c_letra'];
            $c_nombre_s6 = $row6['c_nombre'];
            $c_duracion_s6 = $row6['c_duracion'];
            $c_colaborador_s6 = $row6['c_colaborador'];
            //$c_video_s6 = $row6['c_video'];
        }   

        $contenido_track7 = $mysqli->query("SELECT * FROM canciones where id_disco = 18 and c_track = 7");
        while($row7 = $contenido_track7 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_7 = $row7['c_track'];
            $letra_solo_7 = $row7['c_letra'];
            $c_nombre_s7 = $row7['c_nombre'];
            $c_duracion_s7 = $row7['c_duracion'];
            $c_colaborador_s7 = $row7['c_colaborador'];
            //$c_video_s7 = $row7['c_video'];
        }    

        $contenido_track8 = $mysqli->query("SELECT * FROM canciones where id_disco = 18 and c_track = 8");
        while($row8 = $contenido_track8 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_8 = $row8['c_track'];
            $letra_solo_8 = $row8['c_letra'];
            $c_nombre_s8 = $row8['c_nombre'];
            $c_duracion_s8 = $row8['c_duracion'];
            $c_colaborador_s8 = $row8['c_colaborador'];
            //$c_video_s8 = $row8['c_video'];
        }   

        $contenido_track9 = $mysqli->query("SELECT * FROM canciones where id_disco = 18 and c_track = 9");
        while($row9 = $contenido_track9 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_9 = $row9['c_track'];
            $letra_solo_9 = $row9['c_letra'];
            $c_nombre_s9 = $row9['c_nombre'];
            $c_duracion_s9 = $row9['c_duracion'];
            $c_colaborador_s9 = $row9['c_colaborador'];
            //$c_video_s9 = $row9['c_video'];
        }     

        $contenido_track10 = $mysqli->query("SELECT * FROM canciones where id_disco = 18 and c_track = 10");
        while($row10 = $contenido_track10 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_10 = $row10['c_track'];
            $letra_solo_10 = $row10['c_letra'];
            $c_nombre_s10 = $row10['c_nombre'];
            $c_duracion_s10 = $row10['c_duracion'];
            $c_colaborador_s10 = $row10['c_colaborador'];
            //$c_video_s10 = $row10['c_video'];
        }                                            

        $contenido_track11 = $mysqli->query("SELECT * FROM canciones where id_disco = 18 and c_track = 11");
        while($row11 = $contenido_track11 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_11 = $row11['c_track'];
            $letra_solo_11 = $row11['c_letra'];
            $c_nombre_s11 = $row11['c_nombre'];
            $c_duracion_s11 = $row11['c_duracion'];
            $c_colaborador_s11 = $row11['c_colaborador'];
            //$c_video_s10 = $row10['c_video'];
        }                                            


        $contenido_track12 = $mysqli->query("SELECT * FROM canciones where id_disco = 18 and c_track = 12");
        while($row12 = $contenido_track12 -> fetch_array(MYSQLI_ASSOC))
        {            
            $cd_track_12 = $row12['c_track'];
            $letra_solo_12 = $row12['c_letra'];
            $c_nombre_s12 = $row12['c_nombre'];
            $c_duracion_s12 = $row12['c_duracion'];
            $c_colaborador_s12 = $row12['c_colaborador'];
            //$c_video_s10 = $row10['c_video'];
        }                                            


           


        while($res = $disco_nadamas -> fetch_array(MYSQLI_ASSOC))
    {
      $agradecimientos = $res['cd_gracias'];
      $nombredisco  = $res['cd_nombre'];
      
      //$documento = $res['documento'];
      //$idmember = $res['idmember'];

        $nadamas .='
                        <div id="cdnadamas" class="collapse hidden"> <!--  Comienza disco SOLO -->
                        <!-- Abre id#cd_solo -->
                        <h2>Album '.$nombredisco.'</h2>

                        <!-- COMIENZA PESTAnAS -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#homenadamas">Inicio</a></li>
                          <li><a data-toggle="tab" href="#cd_nadamas">CD</a></li>
                          <!--<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
                        </ul>

                        <div class="tab-content">
                        <!-- COMIENZA TAB HOME -->    
                          <div id="homenadamas" class="tab-pane fade in active">
                            <h3>Agradecimientos</h3>
                            <p><small><h5>
                                '.$agradecimientos.'
                            </small></p></h5> 
                            <br>
                            <small><strong>Daniel Agostini</strong></small>
                                                                                
                          </div>
                          <!-- TERMINA TAB HOME -->    

                          <!-- COMIENZA TAB CD -->    
                          <div id="cd_nadamas" class="tab-pane fade">
                            
                            <h3>Lista de canciones</h3>
                          
        
                              <h4>Grupo Sombras - Sombras nada mas</h4>
                              <p><small>Ultimo CD del Grupo Sombras como Vocalista Daniel Agostini, quien al proximo a&ntilde;o se lanzaria como Solista, reuniendo
                             a los musicos de su primer grupo Mermelada al cual pertenecio antes de ingresar a Sombras y era producido por Antonio Caravajal.
                             Contiene 12 temas de excelente calidad. 
                             </small></p><br>

                                <br>

                                <!-- COMIENZA ESCUCHAR CD COMPLETO "SOLO" -->
                              
                                <a href="#solo" id="cd_nadamas_full" valor="16" data-toggle="collapse" data-target="#cdcompletonadamas" class="btn btn-info btn-xs">Escuchar CD Completo</a>
                               

                                <div id="cdcompletonadamas" class="col-xs-12 collapse ">
                                    <h4>Disco Completo</h4>

                                    <p id="full_cd_nadamas" > </p>

                                </div>
                                <!-- TERMINA ESCUCHAR CD COMPLETO "SOLO" -->


                              <table class="table table-condensed">
                                <thead>
                                  <tr>
                                    <th>Nº</th>
                                    <th>Nombre de la cancion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                
                                <!-- TEMA 1 TONTAS CARTAS-->
                                <tr>
                                   <td>1</td>
                                   <td><small>'.$c_nombre.'</small> 
                                   
                                    <a href="#tuvida" id="tema_nadamas_1" data-toggle="collapse" data-target="#tontascartasv" class="btn btn-info btn-xs">Escuchar</a>  | 
                            
                                   <!-- <button id="cerreti"  class="btn btn-info btn-xs ">Cerrar</button>  -->
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#tontascartasl" class="btn btn-info btn-xs">Letra</a></p>

    <form id="cd_nadamas_1">
        <input id="id_disco" name="disco" value="18" class="hidden">
        <input id="id_video" name="video" value="1" class="hidden">
    </form>                                   

                                    <!-- VIDEO --> <br>
                                      <div id="tontascartasv" class="col-xs-12 collapse ">                              
                                    </div>
                                    
                                    <!-- VIDEO -->

                                    <!-- LETRA  -->
                                    <div id="tontascartasl" class="col-xs-12 collapse "><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre.' <small>Duracion: <b>'.$c_duracion.'</b></small></h3><small>'.$c_colaborador.'</small></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>
                                                      '.$letra_solo_1.'  
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- LETRA  -->

                                   </td>
                                </tr> 
                                <!-- TEMA 1 TONTAS CARTAS -->  


                                <!-- TEMA 2 EN PIE DE GUERRA -->
                                <tr>
                                    <td>'.$cd_track_2.'</td>
                                    <td><small>'.$c_nombre_s2.'</small> 
                                        <a href="#ver_cdsolo" id="tema_nadamas_2" data-toggle="collapse" data-target="#pieguerrav" class="btn btn-info btn-xs">Escuchar</a> 
                                        | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#pieguerral" class="btn btn-info btn-xs">Letra</a>


<form id="cd_nadamas_2">
    <input id="id_disco" name="disco" value="18" class="hidden">
    <input id="id_video" name="video" value="2" class="hidden">
</form>   
                                    <!-- VIDEO NIÑA CAPRICHOSA --> <br>
                                    <div id="pieguerrav" class="col-xs-12 collapse ">                              
                                    </div>
                                    <!-- VIDEO NIÑA CAPRICHOSA -->


                                    <!-- LETRA  -->
                                    <div id="pieguerral" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s2.' <small>Duracion: <b>'.$c_duracion_s2.'
                                                </b></small></h3><small>'.$c_colaborador_s2.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                    

                                    <br>
                                    <p>
                                        '.$letra_solo_2.'
                                    </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                    <!-- LETRA -->

                                    </td>
                                </tr>    
                                <!-- TEMA 2 EN PIE DE GUERRA -->      

                                <!-- TEMA 3 DIME AMOR -->
                                <tr>
                                   <td>'.$cd_track_3.'</td>
                                   <td><small>'.$c_nombre_s3.'</small>
                                   <a href="#ver_cdsolo" id="tema_nadamas_3" data-toggle="collapse" data-target="#falsoamorv" class="btn btn-info btn-xs">Escuchar</a> 
                                   | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="falsoamorl" class="btn btn-info btn-xs">Letra</a>


<form id="cd_nadamas_3">
    <input id="id_disco" name="disco" value="18" class="hidden">
    <input id="id_video" name="video" value="3" class="hidden">
</form>   
                                    <br>
                                   <div id="falsoamorv" class="col-xs-12 collapse "><br>                                  
                                    </div>
                                    
                                    <div id=falsoamorl" class="col-xs-12 collapse">
                                    <table class="table table-condensed"><br>
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s3.' <small>Duracion: <b>'.$c_duracion_s3.'
                                                </b></small></h3><small>'.$c_colaborador_s3.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>                                     
                                                <p>
                                                '.$letra_solo_3.'
                                                </p>
                                            </td>
                                           </tr>
                                        </tbody>
                                    </table>                                        
                                    </div>
                                   </td> 
                                </tr> 
                                <!-- TEMA 3 DIME AMOR -->  
                              
                                <!-- TEMA 4 LADRON DE TU AMOR --> 
                                <tr>
                                    <td>'.$cd_track_4.'</td>
                                    <td><small>'.$c_nombre_s4.'</small>
                                    <a href="#ver_cdsolo" id="tema_nadamas_4" data-toggle="collapse" data-target="#ladrondetuamorv" class="btn btn-info btn-xs">Escuchar</a> 
                                     | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#ladrondetuamorl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_nadamas_4">
    <input id="id_disco" name="disco" value="18" class="hidden">
    <input id="id_video" name="video" value="4" class="hidden">
</form>   

                                    <!-- VIDEO --> <br>
                                    <div id="ladrondetuamorv" class="col-xs-12 collapse ">                                 
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="ladrondetuamorl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s4.' <small>Duracion: <b>'.$c_duracion_s4.'
                                                </b></small></h3><small>'.$c_colaborador_s4.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_4.'
                                                </p>                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>    

                                    </td>
                                </tr> 
                                <!-- TEMA 4 LADRON DE TU AMOR --> 

                                <!-- TEMA 5 PARA QUE --> 
                                <tr>
                                    <td>'.$cd_track_5.'</td>
                                    <td><small>'.$c_nombre_s5.'</small>

                                    <a href="#ver_cdsolo" id="tema_nadamas_5" data-toggle="collapse" data-target="#paraquev" class="btn btn-info btn-xs">Escuchar</a> 
                                    | <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#paraquel" class="btn btn-info btn-xs">Letra</a>
                                    
<form id="cd_nadamas_5">
    <input id="id_disco" name="disco" value="18" class="hidden">
    <input id="id_video" name="video" value="5" class="hidden">
</form>   
                                    <!-- VIDEO --><br>
                                    <div id="paraquev" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="paraquel" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s5.' <small>Duracion: <b>'.$c_duracion_s5.'
                                                </b></small></h3><small>'.$c_colaborador_s5.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_5.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>                                                                    
                                <!-- TEMA 5 PARA QUE --> 

                                <!-- TEMA 6 COMO HACER --> 
                                <tr>
                                    <td>'.$cd_track_6.'</td>
                                    <td><small>'.$c_nombre_s6.'</small>
                                    <a href="#ver_cdsolo" id="tema_nadamas_6" data-toggle="collapse" data-target="#chacerv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#chacerl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_nadamas_6">
    <input id="id_disco" name="disco" value="17" class="hidden">
    <input id="id_video" name="video" value="6" class="hidden">
</form>
                                    <!-- VIDEO --> <br>
                                    <div id="chacerv" class="col-xs-12 collapse "><br>                                  
                                    </div>

                                    <!-- LETRA  -->
                                    <div id="chacerl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s6.' <small>Duracion: <b>'.$c_duracion_s6.'
                                                </b></small></h3><small>'.$c_colaborador_s6.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_6.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 6 COMO HACER --> 

                                <!-- TEMA 7 PD YO TE AMO --> 
                                <tr>
                                    <td>'.$cd_track_7.'</td>
                                    <td><small>'.$c_nombre_s7.'</small>

                                    <a href="#ver_cdsolo" id="tema_nadamas_7" data-toggle="collapse" data-target="#pdv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#pdl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_nadamas_7">
    <input id="id_disco" name="disco" value="18" class="hidden">
    <input id="id_video" name="video" value="7" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="pdv" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="pdl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s7.' <small>Duracion: <b>'.$c_duracion_s7.'
                                                </b></small></h3><small>'.$c_colaborador_s7.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_7.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr>
                                <!-- TEMA 7 PD YO TE AMO -->

                                <!-- TEMA 8 ESTOY CONTANDO LAS HORAS -->
                                <tr>
                                    <td>'.$cd_track_8.'</td>
                                    <td><small>'.$c_nombre_s8.'</small>
                                    
                                    <a href="#ver_cdsolo" id="tema_nadamas_8" data-toggle="collapse" data-target="#contandohorasvv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#contandohorasl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_nadamas_8">
    <input id="id_disco" name="disco" value="18" class="hidden">
    <input id="id_video" name="video" value="8" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="contandohorasvv" class="col-xs-12 collapse "><br>       
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="contandohorasl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s8.' <small>Duracion: <b>'.$c_duracion_s8.'
                                                </b></small></h3><small>'.$c_colaborador_s8.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_8.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    </td>
                                </tr> 
                                <!-- TEMA 8 ESTOY CONTANDO LAS HORAS -->

                                <!-- TEMA 9 SOY -->
                                <tr>
                                    <td>'.$cd_track_9.'</td>
                                    <td><small>'.$c_nombre_s9.'</small>
                                    
                                    <a href="#ver_cdsolo" id="tema_nadamas_9" data-toggle="collapse" data-target="#soyv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#soyl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_nadamas_9">
    <input id="id_disco" name="disco" value="18" class="hidden">
    <input id="id_video" name="video" value="9" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="soyv" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="soyl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s9.' <small>Duracion: <b>'.$c_duracion_s9.'
                                                </b></small></h3><small>'.$c_colaborador_s9.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_9.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </td>
                                </tr>
                                <!-- TEMA 9 SOY -->

                                <!-- TEMA 10 SIN QUERER -->
                                <tr>
                                    <td>'.$cd_track_10.'</td>
                                    <td><small>'.$c_nombre_s10.'</small>

                                    <a href="#ver_cdsolo" id="tema_nadamas_10" data-toggle="collapse" data-target="#sinquererv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#sinquererl" class="btn btn-info btn-xs">Letra</a>

<form id="cd_nadamas_10">
    <input id="id_disco" name="disco" value="18" class="hidden">
    <input id="id_video" name="video" value="10" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="sinquererv" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="sinquererl" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s10.' <small>Duracion: <b>'.$c_duracion_s10.'
                                                </b></small></h3><small>'.$c_colaborador_s10.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_10.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 10 SIN QUERER -->


                            <!-- TEMA 11 VUELVE A MI -->
                                <tr>
                                    <td>'.$cd_track_11.'</td>
                                    <td><small>'.$c_nombre_s11.'</small>

                                    <a href="#ver_cdsolo" id="tema_nadamas_11" data-toggle="collapse" data-target="#vuelveamiv" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#vuelveamil" class="btn btn-info btn-xs">Letra</a>

<form id="cd_nadamas_11">
    <input id="id_disco" name="disco" value="18" class="hidden">
    <input id="id_video" name="video" value="11" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="vuelveamiv" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="vuelveamil" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s11.' <small>Duracion: <b>'.$c_duracion_s11.'
                                                </b></small></h3><small>'.$c_colaborador_s11.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_11.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 11 VUELVE A MI -->




                            <!-- TEMA 12 TU RECUERDO -->
                                <tr>
                                    <td>'.$cd_track_12.'</td>
                                    <td><small>'.$c_nombre_s12.'</small>

                                    <a href="#ver_cdsolo" id="tema_nadamas_12" data-toggle="collapse" data-target="#turecuerdov" class="btn btn-info btn-xs">Escuchar</a> | 
                                    <a href="#ver_cdsolo" id="dc_solo" data-toggle="collapse" data-target="#turecuerdol" class="btn btn-info btn-xs">Letra</a>

<form id="cd_nadamas_12">
    <input id="id_disco" name="disco" value="17" class="hidden">
    <input id="id_video" name="video" value="12" class="hidden">
</form>

                                    <!-- VIDEO --> <br>
                                    <div id="turecuerdov" class="col-xs-12 collapse "><br>                                  
                                    </div>


                                    <!-- LETRA  -->
                                    <div id="turecuerdol" class="col-xs-12 collapse"><br>
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th><h3>'.$c_nombre_s12.' <small>Duracion: <b>'.$c_duracion_s12.'
                                                </b></small></h3><small>'.$c_colaborador_s12.'</small></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <p>
                                                '.$letra_solo_12.'
                                                </p>                                                  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div></td>
                                </tr>
                                <!-- TEMA 12 TU RECUERDO -->



                                <!--
                                  <tr>
                                    <td></td>
                                    <td></td>
                                  </tr>
                              -->
                                </tbody>
                              </table>
                            </div> <!-- Cierra CD -->                           


                           
                          </div>
                          <!-- TERMINA TAB HOME -->    



                          <!--
                          <div id="menu2" class="tab-pane fade">
                            <h3>Menu 2</h3>
                            <p>Some content in menu 2.</p>
                          </div>
                          -->

                        </div>
                        <!-- TERMINA PESTAnAS -->


                        <!-- Cierra id#cd_solo -->    
                        </div>                   

              ';

        }
    return $nadamas;          
    }    




















// FORMULARIO CARGA IMAGEN SOY TU FAN
function soytufan(){
$formfan="";
$formfan.='        <div class="container">
            <h1> Subida y precarga ajax  </h1>
            <div id="respuesta" class="alert"></div>
            <form action="javascript:void(0);">
                <div class="row">
                    <div class="col-lg-2"> 
                        <label> Nombre el archivo: </label> 
                    </div>
                    <div class="col-lg-2">
                        <input type="text" name="nombre_archivo" id="nombre_archivo" />
                    </div>
                    <div class="col-lg-2">
                        <input type="file" name="archivo" id="archivo" />
                    </div>                    
                </div>
                <hr />
                <div class="row">
                    <div class="col-lg-2">
                        <input type="submit" id="boton_subir" value="Subir" class="btn btn-success" />
                    </div>
                    <div class="col-lg-4">
                        <progress id="barra_de_progreso" value="0" max="100"></progress>
                    </div>
                </div>
            </form>
            <hr />
            <div id="archivos_subidos"></div>
        </div>';   

return $formfan ;
};



/*
 Comienza---> Miercoles 28-09-2016 --> Canciones ineditas
FUNCION QUE TRAE DESDE LA BASE DE DATOS LOS <IFRAME> DE YOUTUBE DE LOS TEMAS INEDITOS
  Funcion que se muestra en el <div> del index.php con id="listado-ineditos"
*/

function ineditos(){

    $ineditos ="";

    $probando = "";


    $mysqli = conexionBD();
        $contenido_inedito = $mysqli->query("SELECT * FROM ineditos ");
        while($row_i = $contenido_inedito -> fetch_array(MYSQLI_ASSOC))
        {            
            $id = $row_i['id_inedito'];
            $interprete = $row_i['i_interprete'];
            $titulo = $row_i['i_titulo'];
            $duracion = $row_i['i_duracion'];
            $descripcion = $row_i['i_desc'];
            $imagen = $row_i['i_imagenurl'];
            //$c_video_20201 = $row_20201['c_video'];

            $probando.='
          <tbody>
          <tr>
            <td><small>'.$id.'</small></td>
            <td><small>'.$titulo.'</small></td>

            <form id="forminedito">
                <input id="id_ined" name="disco" value="'.$id.'" class="hidden">                
            </form>

            <td><a href="#ver_cdsolo" id="inedito_apretar" data-toggle="collapse" data-target="#escucha_inedito" id_inedito="'.$id.'" class="btn btn-info btn-xs">Escuchar</a> 
            <div id="escucha_inedito" class="collapse"> </div>
            </td>
          </tr>

          </tbody>
            ';


        }  //Cierra While

                $ineditos.='  

            <div class="container">
              <h4><strong>Lista de temas</strong></h4>
              <p><small>Canciones a duo con otros artistas e ineditos</small></p>
              <table class="table">
                <thead>
                  <tr>
                    <th>Nº</th>
                    <th>Nombre</th>
                    <th>Accion</th>
                  </tr>
                </thead>
                '.$probando.'

                

              </table>
            </div>
 ';
             
        


    

    return $ineditos;
}


/*Termina---> Miercoles 28-09-2016 --> Canciones ineditas*/






// HISTORIA
    

        function historia_corta(){ // Abre funcion
            // Variable de respuesta
            $historia_mostrar = "";

            $mysqli = conexionBD(); // Conexion a la Base Hackaton

            // Consulta mysql
            $historia = $mysqli->query("SELECT * FROM historia  WHERE id_historia = 2 ");   
         
            while($res_h = $historia -> fetch_array(MYSQLI_ASSOC))
            {
                $titulo = $res_h['h_titulo'];
                $desc_corta  = $res_h['h_desc_corta'];
            

            $historia_mostrar .='
            <p><small>'.$desc_corta.'</small></p>
            ';
            }
            return $historia_mostrar;  
        } // Cierra funcion


        // Obtener Historia completa

 




                function hist_completa(){
            // Variable de respuesta
            $h_completa="";
            // Conexion a la BD
            $mysqli = conexionBD();
        //convert(cast(convert(content using latin1) as binary) using utf8) AS content
            // Consulta mysql
            $histo_completa = $mysqli->query("SELECT * FROM historia  WHERE id_historia = 2 ");   
         
            while($res_hh = $histo_completa -> fetch_array(MYSQLI_ASSOC))
            {
                $titulo = $res_hh['h_titulo'];
                $desc_larga  = $res_hh['h_desc'];
            

                $h_completa  .='<p><small>'.$desc_larga.'</small></p>';

            }
            return $h_completa;  


        } // Cierra funcion

?>