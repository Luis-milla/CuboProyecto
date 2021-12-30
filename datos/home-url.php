
<?php
// $sql = 'SELECT * FROM articulos ';
// $sentencia = $pdo->prepare($sql);
// $sentencia->execute();
// $resultado=$sentencia->fetchAll();
// $t=ceil( $sentencia->rowCount()/8);
?>
<!-- ajax -->
<script>

         function paginacion(valor){
       
        var parametros = {
                "valorCaja1" : valor,
                
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   '<?php echo SERVER_URL;?>vistas/alumno/contenido/paginacion.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#resultado").html(response);
                }
        });
}
</script>


<div class="main-panel">
  <div class="content-wrapper">
  <div class="form-group">
  <div class="row">
  <!-- <div class='col-lg-6 grid-margin stretch-card'> 
    <div class="input-group ">
      <div class="form-group">
        <label>Single select box using select 2</label>
        <select class="js-example-basic-single w-100 form-control">
          <option value="AL">Alabama</option>
          <option value="WY">Wyoming</option>
          <option value="AM">America</option>
          <option value="CA">Canada</option>
          <option value="RU">Russia</option>
        </select>
      </div>
      <input type="text" class="form-control" placeholder="Busqueda" aria-label="Recipient's username">
      <div class="input-group-append">
        <button class="btn btn-sm btn-primary" type="button">Search</button>
      </div>
    
    </div>
  </div> -->
 
</div>

</div>
    <div class="row" id="resultado">

      <?php
      require_once'paginacion.php';
      ?>
     
  </div>
</div>

<footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
  </div>
</footer>
          
          
          
          
          
          
          
          
         
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          
          
          