 <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
     
       </form>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 align="center">Cartera de polizas</h3>

             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Agregar Nueva Poliza</button>  
              </div>
            
            <div class="">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                   
                  <th>Asegurado</th>
                  <th>Aseguradora</th>
                  <th>N° Poliza</th>
                  <th>Ramo</th>
                  <th>Plan Contratado</th>
                  <th>Vigencia Inicial</th>
                  <th>Vigencia Final</th>
                  <th>Suma Asegurada</th>
                  <th>Estado</th>
                  <th>Actualizar</th>
                  <th>Eliminar</th>
                </tr>
                </thead>
              <tbody>
                   <?php foreach ($poliza as $p):?>
                <tr>
                  
                  <td><?=$p->beneficiario?></td>
                  <td><?=$p->aseguranza?></td>
                  <td><?=$p->numero_poliza?></td>
                  <td><?=$p->nombre?></td>
                  <td><?=$p->plan_contratado?></td>
                  <td><?=$p->vigencia_inicial?></td>
                  <td><?=$p->vigencia_final?></td>
                  <td>$<?=$p->suma_asegurada?></td>
                  <td>
                    <?=$p->estado_poliza?> 
                  </td>
                   
                   <td>
                    <a href="<?php echo base_url();?>registro_pol/accion?id_poliza=<?=$p->id_poliza?>" class="btn btn-success fa fa-edit"></td>
                    
                      <td>
                        <button class="btn btn-danger fa fa-trash" onclick="Eliminar('<?=$p->id_poliza?>')"></button>
                      </td>
                </tr>
                  <?php endforeach;?>
             </tbody>
              </table>
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
    <strong>PHP &copy; 2021 <a href="#">ACM</a>.</strong> All rights reserved.
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

<script type="text/javascript" src="<?php echo base_url();?>//assets/bower_components/dataTables.net/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>//assets/bower_components/dataTables.net/js/jquery.dataTables.min.js"> 
</script>
<script language="JavaScript" type="text/javascript">

<!--
function checklik(id_usuario)
{
  var opcion = confirm('¿quiere cerrar sesion realmente?');
    if(opcion == true){
      window.location = "<?php echo base_url();?>login/cerrar_sesion?id_usuario"+id_usuario;
    }else{
      
    }
}

function Eliminar(id){
  var opcion = confirm('¿quiere eliminar realmente?');
  if(opcion == true){
    window.location='<?php echo base_url();?>registro_poliza/eliminar?id_poliza ='+id;
  }
}

function mostrarModal(dir)
     {
          $('.modal-body').load(dir, function () {
                     $('#produc').modal({show: true});
           });
     }

// -->
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example1').DataTable();
} );
</script>