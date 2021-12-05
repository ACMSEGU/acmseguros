
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title  text-center" id="exampleModalLabel">Registro de Aseguradoras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="<?php echo base_url();?>registro_aseguradoras/agregarAseguradora" method="POST">
             
                  <label for="inputEmail3" >Nombre Completo</label>

                 
                    <input type="text" onkeypress="return soloLetras(event)" name="nombre" maxlength="50" class="form-control" id="inputEmail3" required placeholder="Nombre Completo">
                
                  <label for="inputEmail3" >Razon Social</label>

                  
                    <input type="text" onkeypress="return soloLetras(event)" name="razon_social"  id="correo" onblur="validar()" maxlength="100"class="form-control" id="inputEmail3" required placeholder="Razon">
                 
                  <label for="inputEmail3" >Direccion</label>

                 
                    <input type="text" name="direccion" id="user" onblur="valida()" maxlength="100"class="form-control" id="inputEmail3" required placeholder="Ej. Av 123, local 14">
                 
                  <label for="inputEmail3" >Contacto</label>

                  
                    <input type="text" onkeypress="return soloNums(event)" maxlength="10"name="contacto_fijo_aseguradora" id="tel" class="form-control" id="inputEmail3" required placeholder="0000-0000">
                 
                 <label for="inputEmail3" >Nombre de Asesor</label>

                  
                    <input type="text" onkeypress="return soloLetras(event)" maxlength="50"name="nombre_asesor_atendiente" class="form-control" id="inputEmail3" required placeholder="Asesor">

                    <label for="inputEmail3" >Contacto Asesor</label>

                  
                    <input type="text" maxlength="10"name="contacto_asesor_atendiente" id="tel2" class="form-control" id="inputEmail3" required placeholder="0000-0000">

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
    $('#tel').mask('0000-0000', {placeholder: '0000-0000'});
    $('#tel2').mask('0000-0000', {placeholder: '0000-0000'}); 
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


