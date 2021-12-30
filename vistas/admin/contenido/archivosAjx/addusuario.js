$(document).ready(function(){
$('#cancel').click(function(){
    var nombre=$('#nombre').val();
    var apellido=$('#apellido').val();
    var cargo=$('#cargo').val();
    var mail=$('#mail').val();
    var contra=$('#contra').val();
    var confirm=$('#confirm').val();
    var action='save';

    nombre="";
    apellido="";
    mail="";
    confirm="";
    contra="";


});

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

$.ajax({
url: '../modelos/utilidadesAdmin.php',
type: 'POST',
async: true,
data:{action:action,nombre: nombre,apellido: apellido,cargo: cargo,mail: mail,contra: contra
},

success: function(reponse){
console.log(reponse);    
},
error: function(error){
    alert('Sucedio un error al conectar');
    console.log(error)
}

 });

}else{
    alert('Las claves no so iguales');
}
});


})