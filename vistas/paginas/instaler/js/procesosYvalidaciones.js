
        // alert();	
function datoseEnviar(){
    var toastLiveExample = document.getElementById('liveToast');
    var toast = new bootstrap.Toast(toastLiveExample);


var parametros = {


        "ip" : document.getElementById("ip").value,
        "base" : document.getElementById("base").value,
        "usuario" : document.getElementById("user").value,
        "clave" : document.getElementById("password").value,
        "ok1" : document.getElementById("liveToastBtn").value
          
};
$.ajax({
        data:  parametros, //datos que se envian a traves de ajax
        // url:   '<?php echo SERVER_URL;?>instalacionDb/instalacionDb.php', 
        url:   'instalacionDb/instalacionDb.php', 
        type:  'post', //método de envio
        beforeSend: function () {
                $("#resultado").html("Procesando, espere por favor...");
        },
        success:  function (response) {
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