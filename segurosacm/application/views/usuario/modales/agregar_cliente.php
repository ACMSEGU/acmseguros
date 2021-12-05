
     <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Ingresar Cliente</h3>
            </div>
            <div class="box-body">
              <form id="formulario" >
              <div class="form-group">
                <br><br>
                  <label for="nombre" class="col-sm-2 control-label">Nombre Cliente</label>
                    <div class="col-sm-10">
                    <input required type="text" name="cliente" onblur="validar()"  maxlength="20" class="form-control" id="cliente" placeholder="Nombre Cliente">
                  </div>
                </div>
                <br><br><br><br>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Teléfono Contacto</label>

                  <div class="col-sm-10">
                    <input required type="text" name="telefono" maxlength="9" class="form-control" id="telefono">
                  </div>
                  <br><br><br><br>
                  
                 </div>
                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NIT</label>

                  <div class="col-sm-10">
                    <input required type="text" name="nit" maxlength="9"  class="form-control" id="nit">
                  </div>
                  <br><br><br><br>
                  
                 </div>

                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Direccion</label>

                  <div class="col-sm-10">
                    <input required type="text" name="direccion" maxlength="9" class="form-control" id="direccion">
                  </div>
                  <br><br><br><br>
                  
                 </div>



                 <div class="form-group">
                </div>
              </div>
              <div class="box-footer">
                
                <input type="button" onclick="guardaaa()" class="btn btn-success" value="Ingresar">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
           
            </div>
            <!-- /.box-body -->
          </div>
          
        

<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.mask.min.js"></script>
</body>
</html>
<script>

function checklik(id)
{
  var opcion = confirm('¿quiere cerrar sesion realmente?');
    if(opcion == true){
      window.location = "<?php echo base_url();?>login/cerrar_sesion?id"+id;
    }else{
      
    }
}
function guardaaa()
{
  var url="<?php echo base_url();?>cliente_controller/registrar_fabricante";
  $.ajax({
    url: url,
    type: "post",
    data: $('#formulario').serialize(),
    success: function(data)
    {
      if(data=="Exito")
      {
        location.href="<?php echo base_url();?>cliente_controller/clientes";
      }
      else
      {
        alert("no se cuardo el registro");
        //$('#producto').modal();
      }
    }
  });
}

</script>
<!--
<script type="text/javascript">
   function valida(){
      var telefono ='<?php #echo base_url();?>fabricante_controller/validar_telefono';

      $.ajax(
      {
        type : 'post',
        url : telefono,
        data : 'telefono='+$('#telefono').val(),
        success:function(data){
          if (data==1) {
            alert('El numero de telefono ya esta Registrado');
             $('#telefono').val('');
          }
        }
      });
    }
    function validar(){
  var url = '<?php #echo base_url();?>fabricante_controller/validar_fabricante';
  $.ajax({
    type: 'POST',
    url: url,
    data: 'nombre='+$('#nombre').val(),
    success:function(data){
      if (data == 1) {
        alert('El fabricante ya existe');
        $('#nombre').val('');
      }
      else{
        
      }
    }
  });
}


</script> -->
<script>
  $(document).ready(function(){
   $('#telefono').mask('0000-0000', {placeholder: ' 0000-0000'}); 
   
  });

</script>

<!--<div>
        <form class="form-horizontal" method="POST" action="<?php echo base_url();?>cliente_controller/registrar_fabricante">
            <label for="inputEmail3">Nombre del Cliente</label>
              <input type="text" required name="cliente" id="cliente" maxlength="20" class="form-control" required placeholder="Nombre Cliente">
                 
              <label for="inputPassword3">Teléfono Contacto</label>
                <input type="text" required name="telefono" maxlength="9" class="form-control" id="telefono" placeholder="Teléfono Cliente">

              <label for="inputPassword3">NIT</label>
                <input type="text" required name="nit" maxlength="17" class="form-control" id="nit" placeholder="Numero Tributario">
                   
              <label for="inputPassword3">Direccion</label>
                <input type="text" required name="direccion" maxlength="100" class="form-control" id="direccion" placeholder="Direccion de Cliente">     
              <input type="submit" class="btn btn-info pull-right" value="Registrar">

        </form>
</div>-->