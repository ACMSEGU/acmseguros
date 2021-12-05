  
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title  text-center" id="exampleModalLabel">Registro de Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="<?php echo base_url();?>registro/agregar" method="POST">
             
                  <label for="inputEmail3" >Nombres</label>

                 
                    <input type="text" onkeypress="return soloLetras(event)" name="name" maxlength="20" class="form-control" id="inputEmail3" required placeholder="Nombres Empleado">

                       <label for="inputEmail3" >Apellidos</label>

                 
                    <input type="text" onkeypress="return soloLetras(event)" name="apellido" maxlength="20" class="form-control" id="inputEmail3" required placeholder="Apellidos Empleado">
                
                  <label for="inputEmail3" >Correo Electronico</label>

                  
                    <input type="email" name="correo"  id="correo" onblur="validar()" maxlength="30"class="form-control" id="inputEmail3" required placeholder="correo electronico">

                       <label for="inputEmail3" >Telefono de Contacto</label>

                 
                    <input type="text" onkeypress="return soloNums(event)" name="contacto" maxlength="20" class="form-control" id="inputEmail3" required placeholder="Telefono Contacto">
                 
                  <label for="inputEmail3" >Nombre de Usuario</label>

                 
                    <input type="text" name="user" id="user" onblur="valida()" maxlength="15"class="form-control" id="inputEmail3" required placeholder="Nombre de usuario">
                 
                  <label for="inputEmail3" >Contraseña</label>

                  
                    <input type="password" maxlength="50"name="password" class="form-control" id="inputEmail3" required placeholder="Contraseña">
                 
                  <label for="inputPassword3">Tipo de Usuario</label>

                  
                     <select  name="tipo" class="form-control" required >
                      <option value="">Seleccione Tipo Usuario</option>
                      <option value="1">Administracion</option>
                      <option value="0">Corredor de Seguros</option>
                    </select>
      </div>
      <div class="modal-footer">
      
        <input type="submit" class="btn btn-info pull-right" value="Registrar">
    </div>
  </form>
  </div>
</div>
<script type="text/javascript">
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
  function soloNums(e) {
    var key = e.keyCode || e.which,
      tecla = String.fromCharCode(key).toLowerCase(),
      letras = "()+-0123456789",
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