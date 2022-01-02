$(document).ready(function(){
    
    $('#enviar').click(function(){


     var mail=$('#correo').val();
     var contra=$('#clave').val();
     var action='save';
     if(contra != "" && mail != ""){
    
    $.post({
    url: 'admin_libreria/vallogin.php',
    type: 'POST',
    async: true,
    data:{action: action, mail: mail, contra: contra
    },
    
    success: function(reponse){
        if(reponse=="ok"){
        alert('hola');
        }else{
            alert(reponse);
        }
    
    //console.log(reponse);    
    },
    error: function(error){
        alert(error);
       
    }
    
     });
    
    }else{
        alert('Debe llenar todos los campos');
    }
    });
    
    
    })