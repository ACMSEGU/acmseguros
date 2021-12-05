<!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid">

     <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Actualizar datos de poliza</b></h3>
            </div>
            <div class="box-body">
              <form action="<?php echo base_url();?>registro_pol/editar" method="post">
                <input required type="hidden" name="id_poliza" value="<?=$poliza->id_poliza?>" />

                <!-- INICIO DEL PRIMER BLOQUE -->
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Asegurado</label>
                  <div class="col-sm-4">
                    <select name="asegurado" id="asegurado" value="<?=$poliza->asegurado?>"class="form-control">
                    </select>
                  </div>
                </div>
                

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre del Contratante</label>
                  <div class="col-sm-4">
                    <input type="text" name="nombre_contratante" maxlength="50" value="<?=$poliza->nombre_contratante?>" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <!-- FINAL DEL PRIMER -->

                <br><br><br>

                <!-- INICIO DEL SEGUNDO BLOQUE -->
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Aseguradora</label>
                <div class="col-sm-4">
                  <select name="idAseguradora" id="idAseguradora" value="<?=$poliza->idAseguradora?>" class="form-control">
                    
                  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nº Poliza</label>
                  <div class="col-sm-4">
                    <input type="text" name="numero_poliza" maxlength="50" value="<?=$poliza->numero_poliza?>" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <!-- FINAL DEL SEGUNDO BLOQUE -->

                <br><br><br>

                <!-- INICIO DEL TERCER BLOQUE -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Ramo</label>
                  <div class="col-sm-4">
                    <select name="idRamo" value="<?=$poliza->idRamo?>" id="idRamo" class="form-control">
                      
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Plan Contratado</label>
                  <div class="col-sm-4">
                    <input type="text" name="plan_contratado" maxlength="50" value="<?=$poliza->plan_contratado?>" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <!-- FINAL DEL TERCER BLOQUE -->

                <br><br><br>

                <!-- INICIO CUARTO BLOQUE -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Vigencia Inicial</label>
                  <div class="col-sm-4">
                    <input type="text" name="vigencia_inicial" maxlength="50" value="<?=$poliza->vigencia_inicial?>" class="form-control" id="inputEmail3">
                  </div>
                </div>


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Vigencia Final</label>
                  <div class="col-sm-4">
                    <input type="text" name="vigencia_final" maxlength="50" value="<?=$poliza->vigencia_final?>" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <!-- FINAL DEL CUARTO BLOQUE -->

                <br><br><br>

                <!-- INICIO DEL QUINTO BLOQUE -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Suma Aseguradora</label>
                  <div class="col-sm-4">
                    <input type="text" name="suma_asegurada" maxlength="50" value="<?=$poliza->suma_asegurada?>" class="form-control" id="inputEmail3">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Deducible</label>
                  <div class="col-sm-4">
                    <input type="text" name="deducible" maxlength="50" value="<?=$poliza->deducible?>" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <!-- FINAL DEL QUINTO BLOQUE -->

                <br><br><br>

                <!-- INICIO DEL SEXTO BLOQUE -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Marca</label>
                  <div class="col-sm-4">
                    <select name="id_marca" id="id_marca" class="form-control" value="">
                      
                    </select>
                  </div>
                </div>


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Modelo</label>
                  <div class="col-sm-4">
                    <select name="idModelo" id="idModelo" class="form-control" value="<?=$poliza->idModelo?>">
                      
                    </select>
                  </div>
                </div>
                <!-- FINAL DEL SEXTO BLOQUE -->

                <br><br><br>

                <!-- INICIO DEL SEPTIMO BLOQUE -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Año</label>
                  <div class="col-sm-4">
                    <input type="text" name="anio" maxlength="50" value="<?=$poliza->anio?>" class="form-control" id="inputEmail3">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Placa</label>
                  <div class="col-sm-4">
                    <input type="text" name="placa" maxlength="50" value="<?=$poliza->placa?>" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <!-- FINAL DEL SEPTIMO BLOQUE -->

                <br><br><br>

                <!-- INICIO DEL OCTAVO BLOQUE -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Prima Total</label>
                  <div class="col-sm-4">
                    <input type="text" name="prima_total" maxlength="50" value="<?=$poliza->prima_total?>" class="form-control" id="inputEmail3">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Forma de Pago</label>
                  <div class="col-sm-4">
                    <input type="text" name="forma_pago" maxlength="50" value="<?=$poliza->forma_pago?>" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <!-- FINAL DEL OCTAVO BLOQUE -->

                <br><br><br>

                <!-- INICIO DEL NOVENO BLOQUE -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Valor Cuota</label>
                  <div class="col-sm-4">
                    <input type="text" name="valor_cuota" maxlength="50" value="<?=$poliza->valor_cuota?>" class="form-control" id="inputEmail3">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Metodo de Pago</label>
                  <div class="col-sm-4">
                    <input type="text" name="metodo_pago" maxlength="50" value="<?=$poliza->metodo_pago?>" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <!-- FINAL DEL NOVENO BLOQUE -->

                <br><br><br>

                <!-- INICO DEL DECIMO BLOQUE -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tipo Tramite</label>
                  <div class="col-sm-4">
                    <input type="text" name="tipo_tramite" maxlength="50" value="<?=$poliza->tipo_tramite?>" class="form-control" id="inputEmail3">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Estado de la Poliza</label>
                  <div class="col-sm-4">
                    <select name="estado1" id="estado1" value="<?=$poliza->estado?>" class="form-control">
                    </select>
                </div>
                <!-- FINAL DEL DECIMO BLOQUE -->

                <br><br>

                 <div class="form-group">
                  <br><br><br>
                </div>
              </div>
              <div class="box-footer">
                
                <input type="submit" class="btn btn-success" value="Actualizar">
                <a class="btn btn-danger" href="<?php echo base_url();?>registro_pol/verpoli">Regresar</a>
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
     <script src="<?php echo base_url(); ?>assets/js/jquery.mask.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#tel').mask('0000-0000', {placeholder: ' 0000-0000'});
  });

</script>
<script type="text/javascript">
  $(document).ready(function(){
    llenar_cliente();
    llenar_aseguradora();
    llenar_ramo();
    llenar_marca();
    llenar_modelo();
    llenar_estado();
  });

  function llenar_cliente(){
    var url = '<?php echo base_url();?>registro_pol/get_cliente';
    $.ajax({
      type: 'post',
      url: url,
      success: function(data)
      {
        $('#asegurado').html(data);
        $('#asegurado').val('<?=$poliza->asegurado?>');
      }
    });
  }

   function llenar_aseguradora(){
    var url = '<?php echo base_url();?>registro_pol/get_aseguradora';
    $.ajax({
      type: 'post',
      url: url,
      success: function(data)
      {
        $('#idAseguradora').html(data);
        $('#idAseguradora').val('<?=$poliza->idAseguradora?>');
      }
    });
  }

   function llenar_ramo(){
    var url = '<?php echo base_url();?>registro_pol/get_ramo';
    $.ajax({
      type: 'post',
      url: url,
      success: function(data)
      {
        $('#idRamo').html(data);
        $('#idRamo').val('<?=$poliza->idRamo?>');
      }
    });
  }

  function llenar_marca(){
    var url = '<?php echo base_url();?>registro_pol/optener_marca';
    $.ajax({
      type: 'post',
      url: url,
      success: function(data)
      {
        $('#id_marca').html(data);
      }
    })
  }

  function llenar_modelo(){
    var url = '<?php echo base_url();?>registro_pol/optener_modelo';
    $.ajax({
      type: 'post',
      url: url,
      success: function(data)
      {
        $('#idModelo').html(data);
        $('#idModelo').val('<?=$poliza->idModelo?>');
      }
    })
  }

  function llenar_estado(){
    var url = '<?php echo base_url(); ?>registro_pol/optener_estados';
    $.ajax({
      type: 'post',
      url: url,
      success: function(data)
      {
        $('#estado1').html(data);
        $('#estado1').val('<?=$poliza->estado?>');
      }
    })
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
