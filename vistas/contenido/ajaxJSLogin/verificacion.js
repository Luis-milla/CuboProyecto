

$(document).ready(function(){

    $('#enviar').click(function(){

        var ip = $('#ip').val();
        var host=$('#user').val();
        var namebase= $('#base').val();
        var clave= $('#clave').val();
        var action="veri";
        if(ip == "" || host == "" || namebase==""){
          // alert('llenar todos los campos');
         
 }else{

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
