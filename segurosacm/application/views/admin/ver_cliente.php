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
              <h3 align="center">Registros de Clientes</h3>

             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Crear Clientes Nuevo</button>  
              </div>
            
            <div class="">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                   
                  <th>Nombre Cliente</th>
                  <th>Dui</th>
                  <th>Nit</th>
                  <th>Direccion</th>
                  <th>Municipio / departamento</th>  
                  <th>Fecha de Nacimiento</th>
                  <th>Correo Electronico</th>
                  <th>Telefono</th>
                  <th>Asesor</th>
                  
                   <th>Actualizar</th>
                  <th>Eliminar</th>
                </tr>
                </thead>
              <tbody>
                   <?php foreach ($cliente as $cl):?>
                <tr>
                  
                  <td><?=$cl->cliente_regis?></td>
                  <td><?=$cl->dui?></td>
                  <td><?=$cl->nit?></td>
                  <td><?=$cl->direccion?></td>
                  <td><?=$cl->muni_depar?></td> 
                  <td><?=$cl->fecha_nacimiento?></td>
                  <td><?=$cl->correo?></td>
                  <td><?=$cl->telefono?></td>
                  <td><?=$cl->cor_atendiente?></td>
                  
                
                   <td><a href="<?php echo base_url();?>registro_cliente/accion?id_cliente=<?=$cl->id_cliente?>" class="btn btn-success fa fa-edit"></td>
                    
                     <td>
                        <button class="btn btn-danger fa fa-trash" onclick="Eliminar('<?=$cl->id_cliente?>')"></button>
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
    window.location='<?php echo base_url();?>registro_cliente/eliminar?id_cliente='+id;
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
