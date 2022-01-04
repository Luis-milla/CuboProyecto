

$(document).ready(function(){

    $('#enviar').click(function(){

        var ip = $('#ip').val();
        var host=$('#user').val();
        var namebase= $('#base').val();
        var clave= $('#clave').val();
        var action="veri";

        var valiuser= / ^ [ a-zA-Z0-9 \ _ \ - ] { 4,16 } $ / ; // Letras,numeros, guion y guion_bajo
        var valicontra=  / ^ . { 4,12 } $ / ; // 4 a 12 dígitos.



        if(ip == "" || host == "" || namebase==""){
          // alert('llenar todos los campos');
         alert("Todos los campos son obligatorios, excepto el campo 'contraseña'");
         return false;
 }
 else if(ip.length>30){
    alert("El servidor de la base de datos es muy largo");
    return false;
}
else if(host.length>30){
   alert("El nombre del usuario es muy largo");
   return false;
}
    else if(!valiuser.test(host)){
        alert("El nombre del usuario no es valido");
        return false;
    }

else if(namebase.length>30){
   alert("El nombre de la base de datos es muy largo");
   return false;
}

else if(clave.length>12){
    alert("La clave es muy larga");
   return false;
}
else if(!valicontra.test(clave)){
    alert("La clave no es valida");
    return false;
} 

 else {

    let timerInterval
    Swal.fire({
      title: 'Los datos se estan creando...!',
      html: 'procesando... <b></b>  tiempo....',
      timer: 2190,
      timerProgressBar: true,
      didOpen: () => {
        Swal.showLoading()
        const b = Swal.getHtmlContainer().querySelector('b')
        timerInterval = setInterval(() => {
          b.textContent = Swal.getTimerLeft()
        }, 100)
      },
      willClose: () => {
        clearInterval(timerInterval)
      }
    })

  $.ajax({
              
url: 'datos/validacionbd.php',
type: 'POST',
async: true,
data:{action:action,ip: ip,host: host,namebase: namebase,clave: clave},

success: function(reponse){
    console.log(reponse);
    if(reponse=="204"){
        Swal.fire(
            'Se ha creado la base de datos!',
            '¡Se recomienda borrar el installer!',
            'success');
    }else if(reponse =="404"){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '¡Error al intentar conectar al gestor de la base de datos!',
            
          });
    }else{
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '¡Error al intentar crear la base de datos!',
            
          });
    }
},error: function(error){
    alert('error al conectar');
}
            });

        }
  
    });


});
