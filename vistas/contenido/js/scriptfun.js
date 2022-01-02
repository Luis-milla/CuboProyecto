
		$("#ip").keyup(function(){    
			var ta      =   $("#ip");
			if(ta==="")    {

				letras      =   ta.val().replace("");
				ta.val(letras)
			}      
		}); 

          function validate() {
			  
			//    $('#ip').val();

			//   $('#ip').val().split(' ').length===2  ?  $('#mensaje1').removeClass().addClass('noOk') : $('#mensaje1').removeClass().addClass('ok');
           
			  
		  }

         function datoseEnviar(){
			
			var toastLiveExample = document.getElementById('liveToast')
			var toast = new bootstrap.Toast(toastLiveExample)
	
       
        var parametros = {

		
	            "ip" : document.getElementById("ip").value,
	            "base" : document.getElementById("base").value,
	            "usuario" : document.getElementById("user").value,
	            "clave" : document.getElementById("password").value,
	            "ok1" : document.getElementById("liveToastBtn").value
	              
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   '<?php echo SERVER_URL;?>vistas/contenido/installer-url.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#resultado").html(response);

						document.getElementById("progre").style.display= "block";
						document.getElementById("text1").style.display= "block";

						setTimeout(function(){
							document.getElementById("progre").style.display= "none";
							document.getElementById("text1").style.display= "none";
							toast.show()
                     
                        },5000);
						
                }
        });
}
  