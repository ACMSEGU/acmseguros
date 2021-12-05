

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" align="center" class="">Agendar Cita</h5>
        
      </div>
      <div class="modal-body">
          <div class="form-group">
            <form class="form-horizontal" method="POST" action="<?php echo base_url();?>producto_controller/registrar_producto_com">

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nombre Completo</label>

                  <div class="col-sm-10 ">
                   <select name="producto" required   class="form-control" id="producto" onchange="fabri();">
                    <option value="">Seleccione un Paciente</option>
                      <option value="0">Jose Pedro castillo</option>
                      <option value="1">Luis Antonio Rodriguez</option>
                      <option value="2">Marvin Antonio Pineda Ramos</option>
                   </select>
                 </div>
               </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Fecha de la Cita</label>

                  <div class="col-sm-10">
                    <input type="text" required  name="fecha_registro" maxlength="20" class="form-control" id="compra" placeholder="D/M/Y">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Hora de la Cita</label>

                  <div class="col-sm-10 ">
                   <input type="text" name="marca" required class="form-control" placeholder="HH:MM" id="entrega">
                 </div>
               </div>

                <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Estado Cita</label> 
             <div class="col-sm-10">
                    <select name="estado" class="form-control">
                       <option value="">Seleccione un Estado</option>
                      <option value="0">Activa</option>
                      <option value="1">Cancelada</option>
                      <option value="2">Reagendada</option>
                    </select>
                  </div>       
            </div>

      </div>
      <div class="modal-footer">
        
         <input type="submit" class="btn btn-info pull-right" value="Registrar">
      </div>
    </div> 
    </div>
  </div>  </form>
</div>
<script src="<?php echo base_url(); ?>assets/js/jquery.mask.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.mask.min.js"></script> 
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.mask.min.js"></script>

  <script>

  $( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#compra" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 3
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#entrega" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );

</script>


<script type="text/javascript">  
function nom(){
  var url = '<?php echo base_url();?>proveedor_controller/validar_nombre';
  $.ajax({
    type: 'post',
    url: url,
    data: 'nombre='+$('#nombre').val(),
    success:function(data){
      if (data == 1) {
        alert('el nombre ya existe');
        $('#nombre').val('');
      }
      else{

      }
    }
  });
}

function ni(){
  var url = '<?php echo base_url();?>proveedor_controller/validar';
  $.ajax({
    type: 'post',
    url: url,
    data: 'nit='+$('#nit').val(),
    success:function(data){
      if (data == 1) {
        alert('el numero de nit ya existe registrar uno diferente');
        $('#nit').val('');
      }
      else{

      }
    }
  });
}

function dire(){
  var url = '<?php echo base_url();?>proveedor_controller/validar_direccion';
  $.ajax({
    type: 'post',
    url: url,
    data: 'direccion='+$('#direccion').val(),
    success:function(data){
      if (data == 1) {
        alert('la direccion ya fue ingresada');
        $('#direccion').val('');
      }
      else{

      }

    }
  });
}

function tele(){
  var url = '<?php echo base_url();?>proveedor_controller/validar_telefono';
  $.ajax({
    type: 'post',
    url: url,
    data: 'telefono='+$('#telefono').val(),
    success:function(data){
      if (data == 1) {
        alert('el numero ya esta registrado');
        $('#telefono').val('');
      }
      else{

      }
    }
  })
}
</script>
<script>
  $(document).ready(function(){
   $('#nit').mask('0000-000000-000-0', {placeholder: ' 0000-000000-000-0'}); 
    $('#telefono').mask('0000-0000', {placeholder: ' 0000-0000'});
   
  });

</script>