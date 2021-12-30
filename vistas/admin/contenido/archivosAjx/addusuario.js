$(document).ready(function(){

$('#save').click(function(e){
 e.preventDefault();

 var nombre=$('#nombre').val();
 var apellido=$('#apellido').val();
 var cargo=$('#cargo').val();
 var mail=$('#mail').val();
 var contra=$('#contra').val();
 var confirm=$('#confirm').val();
 var action='save';
 if(contra == confirm){

$.ajaxUrl({
url: '<?php echo SERVER_URL;?>controladores/controladorAdmin.php',
type: 'POST',
async: true,
data:{action:action,nombre: nombre,apellido: apellido,cargo: cargo,mail: mail,contra: contra
},

success: function(reponse){

    switch(reponse){
        case 0: alert('No hay conexion');
        break;
        default : alert('conecion conexito');
        break;

    }
    
},
error: function(error){
    alert('Sucedio un error al conectar');
}

 });

}else{
    alert('Las claves no so iguales');
}
});


})