  <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid">

     <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Actualizar datos de Corredor</b></h3>
            </div>
            <div class="box-body">
              <form action="<?php echo base_url();?>registro_corredor/editar" method="post">
                <input required type="hidden" name="id_corredor" value="<?=$corredor->id_corredor?>" />
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombres</label>
                  <div class="col-sm-10">
                  <input type="text" name="nombre" maxlength="20" value="<?=$corredor->nombre_corredor_asesor?>" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <br><br><br><br>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Apellidos</label>
                  <div class="col-sm-10">
                    <input type="text" name="apellido" maxlength="20" value="<?=$corredor->apellido_corredor_asesor?>" class="form-control" id="inputEmail3">
                  </div>
                </div>

                <br><br>

                  <div class="form-group">
                

                  <label for="inputEmail3" class="col-sm-2 control-label">Telefono Contacto</label>
                                    <div class="col-sm-10">
                    <input type="text" name="contacto" maxlength="20" value="<?=$corredor->contacto?>" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <br><br>
                 <div class="form-group">
                  <br><br><br>
                </div>
              </div>
              <div class="box-footer">
                
                <input type="submit" class="btn btn-success" value="Actualizar">
                <a class="btn btn-danger" href="<?php echo base_url();?>registro_corredor/vercorredor" >Regresar</a>
              </div>

              <!-- /.box-footer -->
            </form>
          </div>
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
    <strong>PHP &copy; 2018 <a href="#">EQUIPO ACM</a>.</strong> All rights reserved.
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

          