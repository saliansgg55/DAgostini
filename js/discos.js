$(document).ready(function(){
    $("#solin").click(function(){
        $("#cd_solo").removeClass('hidden');
        $("#cd_solo").show();
        $("#solin").hide();
        $("#cdsolo_cerrar").removeClass('hidden');
    });

    $("#cdsolo_cerrar").click(function(){
        $("#cd_solo").addClass('hidden');
        $("#cd_solo").hide();
        $("#solin").show();
        $("#cdsolo_cerrar").addClass('hidden');
    });

/////////////////////////////////////////////////////////    
    $("#btn-comosera").click(function(){
        $("#cd_csera").removeClass('hidden');
        $("#cd_csera").show();

        $("#btn-comosera").hide();
        $("#cdsera_cerrar").removeClass('hidden');
    });

    $("#cdsera_cerrar").click(function(){
        $("#cd_csera").addClass('hidden');
        $("#cd_csera").hide();
        
        $("#btn-comosera").show();
        $("#cdsera_cerrar").addClass('hidden');
    });

/////////////////////////////////////////////////////////  

    $("#btn-simplemente").click(function(){
        $("#cd_sim").removeClass('hidden');
        $("#cd_sim").show();

        $("#btn-simplemente").hide();
        $("#cdsim_cerrar").removeClass('hidden');
    });   

    $("#cdsim_cerrar").click(function(){
        $("#cd_sim").addClass('hidden');
        $("#cd_sim").hide();
        
        $("#btn-simplemente").show();
        $("#cdsim_cerrar").addClass('hidden');
    });

///////////////////////////////////////////////////////// 
    $("#btn-amarte").click(function(){
        $("#cd_amarte").removeClass('hidden');
        $("#cd_amarte").show();    

        $("#btn-amarte").hide();
        $("#cdamarte_cerrar").removeClass('hidden');    
    });

    $("#cdamarte_cerrar").click(function(){
        $("#cd_amarte").addClass('hidden');
        $("#cd_amarte").hide();
        
        $("#btn-amarte").show();
        $("#cdamarte_cerrar").addClass('hidden');
    });
///////////////////////////////////////////////////////// 


    $("#btn-siempre").click(function(){
        $("#cd_siempre").removeClass('hidden');
        $("#cd_siempre").show();        

        $("#btn-siempre").hide();
        $("#cdsiempre_cerrar").removeClass('hidden');          
    });    

    $("#cdsiempre_cerrar").click(function(){
        $("#cd_siempre").addClass('hidden');
        $("#cd_siempre").hide();
        
        $("#btn-siempre").show();
        $("#cdsiempre_cerrar").addClass('hidden');
    });    
///////////////////////////////////////////////////////// 



    $("#btn-sentimientos").click(function(){
        $("#cd_sentimientos").removeClass('hidden');
        $("#cd_sentimientos").show(); 

        $("#btn-sentimientos").hide();
        $("#cdsentimientos_cerrar").removeClass('hidden');                        
    });   

    $("#cdsentimientos_cerrar").click(function(){
        $("#cd_sentimientos").addClass('hidden');
        $("#cd_sentimientos").hide();
        
        $("#btn-sentimientos").show();
        $("#cdsentimientos_cerrar").addClass('hidden');
    });        


// SENTIMIENTOS 2
    $("#btn-sentimientos2").click(function(){
        $("#cd_sentimientos2").removeClass('hidden');
        $("#cd_sentimientos2").show();        

        $("#btn-sentimientos2").hide();
        $("#btn-sentimientos2_cerrar").removeClass('hidden');          
    });    

    $("#btn-sentimientos2_cerrar").click(function(){
        $("#cd_sentimientos2").addClass('hidden');
        $("#cd_sentimientos2").hide();
        
        $("#btn-sentimientos2").show();
        $("#btn-sentimientos2_cerrar").addClass('hidden');
    });        

//////////////////////////////////////////////


    $("#btn-sinlimite").click(function(){
        $("#cd_sinlimite").removeClass('hidden');
        $("#cd_sinlimite").show();       

        $("#btn-sinlimite").hide();
        $("#btn-limitecerrar").removeClass('hidden');             
    });        

    $("#btn-limitecerrar").click(function(){
        $("#cd_sinlimite").addClass('hidden');
        $("#cd_sinlimite").hide();
        
        $("#btn-sinlimite").show();
        $("#btn-limitecerrar").addClass('hidden');
    });    



    $("#btn-verdadero").click(function(){
        $("#cd_verdadero").removeClass('hidden');
        $("#cd_verdadero").show();     

        $("#btn-verdadero").hide();
        $("#btn-verdaderocerrar").removeClass('hidden');     
    });  

    $("#btn-verdaderocerrar").click(function(){
        $("#cd_verdadero").addClass('hidden');
        $("#cd_verdadero").hide();
        
        $("#btn-verdadero").show();
        $("#btn-verdaderocerrar").addClass('hidden');
    });             


    $("#btn-voypormas").click(function(){
        $("#cd_voypormas").removeClass('hidden');
        $("#cd_voypormas").show(); 

        $("#btn-voypormas").hide();
        $("#btn-vemascerrar").removeClass('hidden');                
    });        

    $("#btn-vemascerrar").click(function(){
        $("#cd_voypormas").addClass('hidden');
        $("#cd_voypormas").hide();
        
        $("#btn-voypormas").show();
        $("#btn-vemascerrar").addClass('hidden');
    });        



    $("#btn-clase").click(function(){
        $("#cd_conclase").removeClass('hidden');
        $("#cd_conclase").show();        

        $("#btn-clase").hide();
        $("#btn-cclasecerrar").removeClass('hidden');           
    });  

    $("#btn-cclasecerrar").click(function(){
        $("#cd_conclase").addClass('hidden');
        $("#cd_conclase").hide();
        
        $("#btn-clase").show();
        $("#btn-cclasecerrar").addClass('hidden');
    });           



    $("#btn-ustedes").click(function(){
        $("#cd_ustedes").removeClass('hidden');
        $("#cd_ustedes").show();   

        $("#btn-ustedes").hide();
        $("#btn-ustedescerrar").removeClass('hidden');                
    }); 

    $("#btn-ustedescerrar").click(function(){
        $("#cd_ustedes").addClass('hidden');
        $("#cd_ustedes").hide();
        
        $("#btn-ustedes").show();
        $("#btn-ustedescerrar").addClass('hidden');
    });      

    $("#btn-renovado").click(function(){
        $("#cd_renovado").removeClass('hidden');
        $("#cd_renovado").show();  

        $("#btn-renovado").hide();
        $("#btn-renovadocerrar").removeClass('hidden');                
    });        

    $("#btn-renovadocerrar").click(function(){
        $("#cd_renovado").addClass('hidden');
        $("#cd_renovado").hide();
        
        $("#btn-renovado").show();
        $("#btn-renovadocerrar").addClass('hidden');
    });



// CD 20-20
    $("#btn-veinte").click(function(){
        $("#cd_caca").removeClass('hidden');
        $("#cd_caca").show();  

        $("#btn-veinte").hide();
        $("#btn-veintecerrar").removeClass('hidden');                
    });        

    $("#btn-veintecerrar").click(function(){
        $("#cd_caca").addClass('hidden');
        $("#cd_caca").hide();
        
        $("#btn-veinte").show();
        $("#btn-veintecerrar").addClass('hidden');
    });

// CD PARTE DE TU VIDA
    $("#btn-partevida").click(function(){
        $("#cdpartevida").removeClass('hidden');
        $("#cdpartevida").show();  

        $("#btn-partevida").hide();
        $("#btn-partevidacerrar").removeClass('hidden');                
    });        

    $("#btn-partevidacerrar").click(function(){
        $("#cdpartevida").addClass('hidden');
        $("#cdpartevida").hide();
        
        $("#btn-partevida").show();
        $("#btn-partevidacerrar").addClass('hidden');
    });




///////////////////////////////////////////////////////// 
// CD GRUPO SOMBRAS NIÑA CAPRICHOSA
  $("#btn-nina").click(function(){
        $("#cdnina").removeClass('hidden');
        $("#cdnina").show();  

        $("#btn-nina").hide();
        $("#btn-ninacerrar").removeClass('hidden');                
    });        

    $("#btn-ninacerrar").click(function(){
        $("#cdnina").addClass('hidden');
        $("#cdnina").hide();
        
        $("#btn-nina").show();
        $("#btn-ninacerrar").addClass('hidden');
    });

///////////////////////////////////////////////////////// 



///////////////////////////////////////////////////////// 
// CD GRUPO SOMBRAS BOQUITA DE CARAMELO
  $("#btn-boquita").click(function(){
        $("#cd_caramelo").removeClass('hidden');
        $("#cd_caramelo").show();  

        $("#btn-boquita").hide();
        $("#btn-boquitacerrar").removeClass('hidden');                
    });        

    $("#btn-boquitacerrar").click(function(){
        $("#cd_caramelo").addClass('hidden');
        $("#cd_caramelo").hide();
        
        $("#btn-boquita").show();
        $("#btn-boquitacerrar").addClass('hidden');
    });

///////////////////////////////////////////////////////// 


///////////////////////////////////////////////////////// 
// CD GRUPO SOMBRAS SOMBRAS NADA MAS
  $("#btn-nadamas").click(function(){
        $("#cdnadamas").removeClass('hidden');
        $("#cdnadamas").show();  

        $("#btn-nadamas").hide();
        $("#btn-nadamascerrar").removeClass('hidden');                
    });        

    $("#btn-nadamascerrar").click(function(){
        $("#cdnadamas").addClass('hidden');
        $("#cdnadamas").hide();
        
        $("#btn-nadamas").show();
        $("#btn-nadamascerrar").addClass('hidden');
    });

///////////////////////////////////////////////////////// 



$("#demo").css('color','white');
    $("#leer-historia").click(function(){
        $("#leer-historia").hide();
        //$("#h_cerrar").removeClass("hidden");
        
        $("#hc").fadeOut();
        $("#demo").fadeIn();
    });

    $("#h_cerrar").click(function(){
        $("#demo").hide();
        $("#leer-historia").show(); 

        $("#hc").fadeIn();
        //$("#demo").fadeOut();
    });









});