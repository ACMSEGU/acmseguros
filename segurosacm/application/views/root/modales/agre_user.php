   
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

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
             
                  <label for="inputEmail3" >Nombre Completo</label>

                 
                    <input type="text" name="name" maxlength="20" class="form-control" id="inputEmail3" required placeholder="Nombre Empleado">
                
                  <label for="inputEmail3" >Correo Electronico</label>

                  
                    <input type="email" name="correo"  id="correo" onblur="validar()" maxlength="30"class="form-control" id="inputEmail3" required placeholder="correo electronico">
                 
                  <label for="inputEmail3" >Nombre de Usuario</label>

                 
                    <input type="text" name="user" id="user" onblur="valida()" maxlength="15"class="form-control" id="inputEmail3" required placeholder="Nombre de usuario">
                 
                  <label for="inputEmail3" >Contraseña</label>

                  
                    <input type="password" maxlength="50"name="password" class="form-control" id="inputEmail3" required placeholder="Contraseña">
                 
                  <label for="inputPassword3">Tipo de Usuario</label>

                  
                     <select  name="tipo" class="form-control" required >
                      <option value="">Seleccione Tipo Usuario</option>
                      <option value="0">Medico</option>
                      <option value="1">Administrador</option>
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