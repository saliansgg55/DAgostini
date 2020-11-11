$(document).ready(function(){
$("#sorteo").addClass('hide');
//$("#form_sorteo").removeClass('hide');


$("#form_sorteo").click(function(){
	$("#sorteo").removeClass('hide');
	$("#form_sorteo").addClass('hide');
});

//INICIAR SORTEO
$("#ini_sor").click(function(event){
	event.preventDefault();	
	$("#form_sorteo").removeClass('hide');
});


// Da a conocer el ganador del Sorteo
var interval;
function VerificaGanador(){
	$.get("muetra_ganador.php",  function(data, status){
 
 		 if (data == 0 ) {
        	VerificaGanador();
        	
       	  }else{
        	//alert(data);
        	$("p#gan").empty();        	
        	$("#gan").html("<h2>Ganador/a: </h2>");
        	$("#cacabella").html('<h3>' + data + '<h3>').css('color','red');
        	ocFormsorteo();
        	clearInterval(interval);
         };
        	
    });

};

interval = setInterval(VerificaGanador, 3000);
// Da a conocer el ganador del Sorteo


// Oculta el boton Participar una vez finalizado el sorteo
function ocFormsorteo(){
	$("#form_sorteo").addClass('hide');
};
// Oculta el boton Participar una vez finalizado el sorteo



// FINALIZAR SORTEO
$("#fin_sor").click(function(event){
	event.preventDefault();

	$.get("ganador_sorteo.php",  function(data, status){
        //var ganador = data;
        if (data == 0 ) {
        	
        }else{
        	alert(data);
        	//VerificaGanador(data);
        };

	});
			
});
// FINALIZAR SORTEO

// INICIA SORTEO
$("#ini_sor").click(function(event){
	event.preventDefault();

   /* var string = "";
	$("#form_sorteo").removeClass('hide');
	$("#gan").html("<h2>SORTEO DANIEL AGOSTINI: <h2><br> <h4>Viernes de 20 a 22hs </h4> <br> <h5> Anunciamos ganador al ganador</h5>");
	$("#cacabella").html('');*/
alert("Sorteo Listo!");

           /*     $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "trunca_tabla_sorteo.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                	if (response.respuesta == true) {
                		alertify.success("Sorteo Listo!");
                	};

                } // Cierra Success
             }); //cierra AJAX
*/
});
// INICIA SORTEO


// Funcion para Anunciar al Ganador




	$("#participar").click(function(event){
		event.preventDefault();
		//alert("probando");
		var string = $("#sorteo").serialize();
		//alert(string);

                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "guarda_sorteo.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true){       
                 
                            //$("#colvidarte").html(response.contenido); // Agrega el Video
                            	$("#sorteo")[0].reset();
                            	$("#sorteo").addClass('hide');
                            	$("#form_sorteo").removeClass('hide');
                            	alertify.success(response.contenido);            
                            	//alert(response.contenido);                
                            	
                            }else{                            
                            	$("#sorteo")[0].reset();                            
                            	$("#sorteo").addClass('hide');
                            	$("#form_sorteo").removeClass('hide');
                            	alertify.error(response.contenido);	
                            	//alert(response.contenido);      

                            	
                            	

                            }

                } // Cierra Success
             }); //cierra AJAX

	});


//SELECT * FROM `sorteo` ORDER BY RAND() LIMIT 1

});