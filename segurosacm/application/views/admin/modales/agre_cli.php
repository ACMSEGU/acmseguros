
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title  text-center" id="exampleModalLabel">Registro de Clientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="<?php echo base_url();?>registro_cliente/agregar" method="POST">
             
                  <label for="inputEmail3" >Nombre Cliente</label>

                 
                    <input type="text" onkeypress="return soloLetras(event)" name="nombre_cliente" id="nombre_cliente" maxlength="50" class="form-control" id="inputEmail3" required placeholder="Nombre ">
                
                  <label for="inputEmail3" >Apellido Cliente</label>

                  
                    <input type="text" onkeypress="return soloLetras(event)" name="apellido_cliente" onblur="validarapellidocli()"  id="apellido_cliente" maxlength="50"class="form-control" id="inputEmail3" required placeholder="Apellido">
                 
                  <label for="inputEmail3" >DUI</label>

                 
                    <input type="text"  name="dui" id="dui" onblur="validardui()" maxlength="10"class="form-control" id="inputEmail3" required placeholder="00000000-0">
                 
                  <label for="inputEmail3" >NIT</label>

                  
                    <input type="text" maxlength="17"name="nit" onblur="validarnit()" id="nit" class="form-control" id="inputEmail3" required placeholder="0000-000000-000-0">

                     <label for="inputEmail3" >Direccion</label>

                  
                    <input type="text" maxlength="100"name="direccion" class="form-control" id="dirc" id="inputEmail3" required placeholder="Av. 123 Casa #22">

                  
                 
                  <label for="inputPassword3">Departamento</label>

                  
                    <select onchange="muni();"  id="id_depto" class="form-control" name="id_departamento">
            
                    </select>

                     <label for="inputPassword3">Municipio</label>

                  
                    <select id="mun" class="form-control" name="mun">
            
            
                    </select>


                    <label for="inputEmail3" >Fecha Nacimiento</label>

                  
                    <input type="date" id="fna" maxlength="10"name="fecha_nacimiento" class="form-control" id="inputEmail3" required placeholder="">

                    <label for="inputEmail3" >Correo Electronico</label>

                  
                    <input type="email" maxlength="100"name="correo" onblur="validarcorreocli()" id="correo" class="form-control" id="inputEmail3" required placeholder="example@example.com">

                     <label for="inputEmail3" >Telefono</label>

                  
                    <input type="text" id="telefono" maxlength="10" name="telefono" onblur="validartelcli()" class="form-control" id="inputEmail3"  required placeholder="0000-0000">

                    <label for="inputPassword3">Corredor</label>

                  
                     <select id="corre"  name="idCorredor" class="form-control" required >
                      
                    </select>
      </div>
      <div class="modal-footer">
      
        <input type="submit" class="btn btn-info pull-right" value="Registrar">
    </div>
  </form>
  </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/jquery.mask.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
   $('#nit').mask('0000-000000-000-0', {placeholder: ' 0000-000000-000-0'}); 
    $('#telefono').mask('0000-0000', {placeholder: '0000-0000'});
    $('#dui').mask('00000000-0', {placeholder: '00000000-0'}); 
     
  });
</script>

<script type="text/javascript">
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
<script type="text/javascript">

            $(document).ready(function(){
              llenar_departamento();
             llenar_corredor();
              
            });

            function muni(){
              var url = '<?php echo base_url(); ?>/registro_cliente/depMunicipio';
              var id = $('#id_depto').val();
              $.ajax({
                url: url,
                type: 'get',
                data: 'id='+id,
                success: function(data){
                  $('#mun').html(data);
                }
              })
            }

            function llenar_departamento(){

              var url = '<?php echo base_url(); ?>registro_cliente/get_departamento';
              $.ajax({

                type:'post',
                url: url,
                success: function(data){
                  $('#id_depto').html(data);
                }


              });

            }

            function llenar_corredor(){

              var url = '<?php echo base_url(); ?>registro_cliente/get_corredor';
              $.ajax({

                type:'post',
                url: url,
                success: function(data){
                  $('#corre').html(data);
                }


              });

            }

            function validardui(){
              var url ='<?php echo base_url();?>registro_cliente/validardui';
              $.ajax({
                type: 'post',
                url: url,
                data: 'dui='+$('#dui').val(),
                success:function(data){
                  if (data ==1){
                    alert('El numero de dui ya existe');
                    $('#dui').val('');
                  }
                  else{

                  }
                }
              })
            }

            function validarnit(){
              var url ='<?php echo base_url();?>registro_cliente/validarnit'
              $.ajax({
                type: 'post',
                url: url,
                data: 'nit='+$('#nit').val(),
                success:function(data){
                  if (data ==1){
                    alert('El numero de Nit ya existe');
                    $('#nit').val('');
                  }
                  else{

                  }
                }
              })
            }

             function validarapellidocli(){
              var url ='<?php echo base_url();?>registro_cliente/validarapellido'
              $.ajax({
                type: 'post',
                url: url,
                data: 'apellido_cliente='+$('#apellido_cliente').val(),
                success:function(data){
                  if (data ==1){
                    alert('Los apellidos ya existen');
                    $('#apellido_cliente').val('');
                  }
                  else{

                  }
                }
              })
            }

            function validartelcli(){
              var url ='<?php echo base_url();?>registro_cliente/validartelefono'
              $.ajax({
                type: 'post',
                url: url,
                data: 'telefono='+$('#telefono').val(),
                success:function(data){
                  if (data ==1){
                    alert('El Numero Telefonico Ya Existe');
                    $('#telefono').val('');
                  }
                  else{

                  }
                }
              })
            }

            function validarcorreocli(){
              var url ='<?php echo base_url();?>registro_cliente/validarcorreo'
              $.ajax({
                type: 'post',
                url: url,
                data: 'correo='+$('#correo').val(),
                success:function(data){
                  if (data ==1){
                    alert('El Correo Electronico Ya Existe');
                    $('#correo').val('');
                  }
                  else{

                  }
                }
              })
            }
          </script>
      
