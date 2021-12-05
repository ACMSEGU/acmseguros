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
              <h3 align="center">Corredores de Seguros</h3>

             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Crear Nuevo Agente</button>  
              </div>
            
            <div class="">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                   
                  <th>Nombre Corredor</th>
                  <th>Apellido</th>
                  <th>Contacto</th>
                  
                   <th>Actualizar</th>
                  <th>Eliminar</th>
                </tr>
                </thead>
              <tbody>
                   <?php foreach ($corredor as $c):?>
                <tr>
                  
                  <td><?=$c->nombre_corredor_asesor?></td>
                  <td><?=$c->apellido_corredor_asesor?></td>
                  <td><?=$c->contacto?></td>
                   
                   <td>


                    <a href="<?php echo base_url();?>registro_corredor/accion?id_corredor=<?=$c->id_corredor?>" class="btn btn-success fa fa-edit"></td>
                    
                      <td>
                        <button class="btn btn-danger fa fa-trash" onclick="Eliminar('<?=$c->id_corredor?>')"></button>
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
    window.location='<?php echo base_url();?>registro_corredor/eliminar?id_corredor='+id;
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