
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title  text-center" id="exampleModalLabel">Datos sobre el ramo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="<?php echo base_url();?>ramo_controller/agregar" method="POST">
             
                  <label for="inputEmail3" >Nombre del ramo</label>

                 
                    <input type="text" onkeypress="return soloLetras(event)" name="nombre" maxlength="50" class="form-control" id="inputEmail3" required placeholder="Ramo">
                
                  <label for="inputEmail3" >Descripcion</label>

                  
                    <input type="text" onkeypress="return soloLetras(event)" name="descripcion"  id="des" onblur="validar()" maxlength="50"class="form-control" id="inputEmail3" required placeholder="Descripcion">
                 
      </div>
      <div class="modal-footer">
      
        <input type="submit" class="btn btn-info pull-right" value="Registrar">
    </div>
  </form>
  </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/jquery.mask.min.js"></script>
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