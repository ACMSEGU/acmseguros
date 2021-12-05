
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid">

      <h1>Agregar Un Nuevo Usuario</h1>
          
         <div class="box box-info">
            <div class="box-header with-border">
              
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url();?>registro/agregar" method="POST">
              <div class="box-body">
                <br><br><br>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre Completo</label>

                  <div class="col-sm-10">
                    <input type="text" name="name" maxlength="20" class="form-control" id="inputEmail3" required="" placeholder="Nombre Empleado">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Correo Electronico</label>

                  <div class="col-sm-10">
                    <input type="email" name="correo"  id="correo" onblur="validar()" maxlength="30"class="form-control" id="inputEmail3" required="" placeholder="correo electronico">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre de Usuario</label>

                  <div class="col-sm-10">
                    <input type="text" name="user" id="user" onblur="valida()" maxlength="15"class="form-control" id="inputEmail3" required="" placeholder="Nombre de usuario">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Contraseña</label>

                  <div class="col-sm-10">
                    <input type="password" maxlength="50"name="password" class="form-control" id="inputEmail3" required="" placeholder="Contraseña">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tipo de Usuario</label>

                  <div class="col-sm-10">
                    <select  name="tipo" class="form-control">
                      <option value="">Seleccione Tipo Usuario</option>
                      <option value="0">Usuario</option>
                      <option value="1">Administrador</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  
                </div>
              </div>
              <br><br><br><br>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="reset" class="btn btn-default" value="Borrar" >
                <input type="submit" class="btn btn-info pull-right" value="Registrar">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
    
    </div>
    <!-- Default to the left -->
    <strong>PHP &copy; 2018 <a href="#">CoberCompany</a>.</strong> All rights reserved.
  </footer>  
</div>
<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
<script language="JavaScript" type="text/javascript">
<!--
     $(document).ready(function(){
    llenarTipo();
    });
function checklik(id)
{
  var opcion = confirm('¿quiere cerrar sesion realmente?');
    if(opcion == true){
      window.location = "<?php echo base_url();?>login/cerrar_sesion?id"+id;
    }else{
      
    }
}

function validar(){
  var url = '<?php echo base_url();?>registro/validar_correo';
  $.ajax({
    type: 'post',
    url: url,
    data: 'correo='+$('#correo').val(),
    success:function(data){
      if (data == 1) {
        alert('el correo ya existe');
        $('#correo').val('');
      }
      else{
        $('#correo').adClass('verde');
      }
    }

  });
}

 function valida(){
    var url= '<?php echo base_url();?>registro/validar_usuario';

    $.ajax({
                type : 'post',
                url: url,
                data:'user='+$('#user').val(),
                success:function(data){
                  if (data==1) {
                    alert('el usuario ya existe');
                    $('#user').val('');
                  }else{
                    $('#user').addClass('verde');
                  }

                } 
            });
    }
  
     function llenarTipo(){
     var sele = '<?php echo base_url();?>registro/tipo_get';
    $.ajax({
      type: 'post',
      url: sele,
      success: function(data){
        $('#tipos').html(data);
      }
    });

  }
// -->
</script>