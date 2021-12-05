
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 name="auto" id="auto"> </h3>

                <p>Seguro de Automóvil</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url();?>registro_pol/verpoli" class="small-box-footer">Ver Mas</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 name="medico" id="medico"> </h3>

                <p>Seguro Gastos Medicos</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url();?>registro_pol/verpoli" class="small-box-footer">Ver Mas</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box  bg-success">
              <div class="inner">
                <h3 name="incendio" id="incendio"> </h3>

                <p>Seguro Todo Riesgo Incendio</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url();?>registro_pol/verpoli" class="small-box-footer">Ver Mas</a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        
            </div>
            <!-- /.card -->

<!-- Main content -->
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 name="multiple" id="multiple"> </h3>

                <p>Seguro vida Multiple</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url();?>registro_pol/verpoli" class="small-box-footer">Ver Mas</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 name="residencia" id="residencia"> </h3>

                <p>Seguro de Residencia</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url();?>registro_pol/verpoli" class="small-box-footer">Ver Mas</i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box  bg-success">
              <div class="inner">
                <h3 name="finanzas" id="finanzas"> </h3>

                <p>Seguro para Finanzas</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url();?>registro_pol/verpoli" class="small-box-footer">Ver Mas </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        
            </div>
            <!-- /.card -->

          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
    
    </div>
    <!-- Default to the left -->
    <strong>ACMSEGUROS&copy; 2021 <a href="#"></a>.</strong> All rights reserved.
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
    llenarTexto1();
    llenarTexto2();
    llenarTexto3();
    llenarTexto4();
    llenarTexto5();
    llenarTexto6();
  });

function checklik(id_usuario)
{
  var opcion = confirm('¿Quiere cerrar sesion realmente?');
    if(opcion == true){
      window.location = "<?php echo base_url();?>login/cerrar_sesion?id_usuario"+id_usuario;
    }else{
      
    }
}

function llenarTexto1(){
    var url='<?php echo base_url();?>registro_pol/conteo1';
    $.ajax({
      type: 'post',
      url: url,
      data: '',
      success:function(data){
        $('#auto').html(data);
      }
    });
  }

  function llenarTexto2(){
    var url='<?php echo base_url();?>registro_pol/conteo2';
    $.ajax({
      type: 'post',
      url: url,
      data: '',
      success:function(data){
        $('#medico').html(data);
      }
    });
  }

  function llenarTexto3(){
    var url='<?php echo base_url();?>registro_pol/conteo3';
    $.ajax({
      type: 'post',
      url: url,
      data: '',
      success:function(data){
        $('#incendio').html(data);
      }
    });
  }

  function llenarTexto4(){
    var url='<?php echo base_url();?>registro_pol/conteo4';
    $.ajax({
      type: 'post',
      url: url,
      data: '',
      success:function(data){
        $('#multiple').html(data);
      }
    });
  }

  function llenarTexto5(){
    var url='<?php echo base_url();?>registro_pol/conteo5';
    $.ajax({
      type: 'post',
      url: url,
      data: '',
      success:function(data){
        $('#residencia').html(data);
      }
    });
  }

  function llenarTexto6(){
    var url='<?php echo base_url();?>registro_pol/conteo6';
    $.ajax({
      type: 'post',
      url: url,
      data: '',
      success:function(data){
        $('#finanzas').html(data);
      }
    });
  }

// -->
</script>