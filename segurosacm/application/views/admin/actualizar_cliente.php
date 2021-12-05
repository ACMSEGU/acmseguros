 <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid">

     <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Actualizar datos del Cliente</b></h3>
            </div>
            <div class="box-body">
              <form action="<?php echo base_url();?>registro_cliente/editar" method="post">
                <input required type="hidden" name="id_cliente" value="<?=$cliente->id_cliente?>" />
              <!-- INICIO BLOQUE 1 -->
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre Cliente</label>
                  <div class="col-sm-4">
                  <input type="text" name="nombre_cliente" onkeypress="return soloLetras(event)" maxlength="50" value="<?=$cliente->nombre_cliente?>" class="form-control" id="inputEmail3">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Apellido Cliente</label>
                  <div class="col-sm-4">
                    <input type="text" name="apellido_cliente" onkeypress="return soloLetras(event)" maxlength="50" value="<?=$cliente->apellido_cliente?>" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <!-- FINAL BLOQUE 1 -->

                <br><br>

                <!-- INICIO BLOQUE 2 -->
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Dui</label>
                <div class="col-sm-4">
                    <input type="text" id="dui" name="dui" maxlength="10" value="<?=$cliente->dui?>" class="form-control" id="inputEmail3">
                  </div>
                </div>

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nit</label>
                <div class="col-sm-4">
                    <input type="text" id="nit" name="nit" maxlength="17" value="<?=$cliente->nit?>" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <!-- FINAL BLOQUE 2 -->

                <br><br>

                <!-- INICIO BLOQUE 3 -->
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Direccion</label>
                    <div class="col-sm-4">
                    <input type="text" name="direccion" maxlength="100" value="<?=$cliente->direccion?>" class="form-control" id="inputEmail3">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Departemento</label>
                    <div class="col-sm-4">
                    <select name="id_departamento" id="id_departamento" value="" class="form-control">
                      
                    </select>
                  </div>
                </div>
                <!-- FINAL BLOQUE 3-->

                <br><br>

                <!-- INICIO BLOQUE 4-->
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Municipio</label>
                    <div class="col-sm-4">
                      <SELECT name="id_municipio" id="id_municipio" value="<?=$cliente->id_municipio?>" class="form-control">
                        
                      </SELECT>
                  </div>
                </div>

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Fecha de Nacimiento</label>
                    <div class="col-sm-4">
                    <input type="text" id="fna" name="fecha_nacimiento" maxlength="10" value="<?=$cliente->fecha_nacimiento?>" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <!-- FINAL BLOQUE 4-->

                <br><br>

                <!-- FINAL BLOQUE 5-->
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Correo Electronico</label>
                    <div class="col-sm-4">
                    <input type="text" name="correo" maxlength="100" value="<?=$cliente->correo?>" class="form-control" id="inputEmail3">
                  </div>
                </div>

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Telefono</label>
                    <div class="col-sm-4">
                    <input type="text" id="tel" name="telefono" maxlength="10" value="<?=$cliente->telefono?>" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <!-- FINAL BLOQUE 5-->
                
                <br><br>
                 <div class="form-group">
                  <br><br><br>
                </div>
              </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-success" value="Actualizar">
                <a class="btn btn-danger" href="<?php echo base_url();?>registro_cliente/vercliente" >Regresar</a>
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
<script src="<?php echo base_url(); ?>assets/js/jquery.mask.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
   $('#nit').mask('0000-000000-000-0', {placeholder: ' 0000-000000-000-0'}); 
    $('#tel').mask('0000-0000', {placeholder: ' 0000-0000'});
    $('#dui').mask('00000000-0', {placeholder: '00000000-0'}); 
     $('#fna').mask('0000-00-00', {placeholder: ' 0000-00-00'});
  });

</script>

<script type="text/javascript">
  $(document).ready(function(){
    llenar_departamento();
    llenar_municipio();
  });

  function llenar_departamento(){
    var url = '<?php echo base_url();?>registro_cliente/get_departamento';
    $.ajax({
      type: 'post',
      url: url,
      success: function(data)
      {
        $('#id_departamento').html(data);
      }
    });
  }

  function llenar_municipio(){
    var url = '<?php echo base_url();?>registro_cliente/optener_municipio';
    $.ajax({
      type: 'post',
      url: url,
      success: function(data)
      {
        $('#id_municipio').html(data);
        $('#id_municipio').val('<?=$cliente->id_municipio?>');
      }
    });
  }


  function soloLetras(e) {
    var key = e.keyCode || e.which,
      tecla = String.fromCharCode(key).toLowerCase(),
      letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
      especiales = [8, 37, 39, 46],
      tecla_especial = false;

    for (var i in especiales) {
      if (key == especiales[i]) {
        tecla_especial = true;
        break;
      }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
      return false;
    }
  }
</script>
</body>
</html>
