
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid">

     <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Actualizar Usuario</h3>
            </div>
            <div class="box-body">
              <form action="<?php echo base_url();?>registro/editar" method="post">
              <div class="form-group">
                <br><br><br><br>

                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre </label>
                                    <div class="col-sm-10">
                    <input type="text" name="nombre" maxlength="20" value="<?=$usuario->nombre?>" class="form-control" id="inputEmail3" placeholder="Nombre">
                  </div>
                </div>
                <br><br><br><br>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Correo Electronico</label>

                  <div class="col-sm-10">
                    <input type="text" name="correo" maxlength="30" value="<?=$usuario->correo?>" class="form-control" id="inputEmail3" placeholder="Correo Electronico">
                  </div>
                </div>
                <br><br><br><br>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre de Usuario</label>

                  <div class="col-sm-10">
                    <input type="text" name="user" maxlength="15"value="<?=$usuario->user?>"class="form-control" id="inputEmail3" placeholder="Nombre de Usuario">
                  </div>
                  <br><br><br><br>
                  <input type="hidden" name="id" value="<?=$usuario->id_usuario?>" />
                 </div>
                 <div class="form-group">
                  <br><br><br><br><br><br>
                </div>
              </div>
              <div class="box-footer">
                
                <input type="submit" class="btn btn-success" value="Actualizar">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
                </form>
            </div>
            <!-- /.box-body -->
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
function checklik(id)
{
  var opcion = confirm('¿quiere cerrar sesion realmente?');
    if(opcion == true){
      window.location = "<?php echo base_url();?>login/cerrar_sesion?id"+id;
    }else{
      
    }
}
// -->
</script>