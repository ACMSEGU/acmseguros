

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" align="center">Formulario de Consulta Nueva</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <form class="form-horizontal" method="POST" action="<?php echo base_url();?>producto_controller/registrar_producto_com">
                      <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Fecha de Registro</label>

                  <div class="col-sm-10">
                    <input type="text" required  name="fecha_registro" maxlength="20" class="form-control" id="compra" placeholder="Fecha de Creacion">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Numero de Cita</label>

                  <div class="col-sm-10 ">
                   <select name="producto" required   class="form-control" id="producto" onchange="fabri();">
                    
                   </select>
                 </div>
               </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Sintomas</label>

                  <div class="col-sm-10 ">
                   <input type="text" name="marca" required  class="form-control" placeholder="" id="numero">
                 </div>
               </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Padecimientos</label>

                  <div class="col-sm-10 ">
                     <input type="text" name="cantidad" required   class="form-control" id="numero2" placeholder="mt">

                 </div>
               </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Examenes</label>

                  <div class="col-sm-10
                  ">
                   <input type="text" name="cantidad"  class="form-control" placeholder="">
                 </div>
               </div>

      </div>
      <div class="modal-footer">
        
         <input type="submit" class="btn btn-info pull-right" value="Registrar">
      </div>
    </div>
    </div>
  </div>
</form>
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
   function valida(){
      var telefono ='<?php echo base_url();?>fabricante_controller/validar_telefono';

      $.ajax(
      {
        type : 'post',
        url : telefono,
        data : 'telefono='+$('#telefono').val(),
        success:function(data){
          if (data==1) {
            alert('El numero de telefono ya esta Registrado');
             $('#telefono').val('');
          }
        }
      });
    }
    function validar(){
  var url = '<?php echo base_url();?>fabricante_controller/validar_fabricante';
  $.ajax({
    type: 'POST',
    url: url,
    data: 'nombre='+$('#nombre').val(),
    success:function(data){
      if (data == 1) {
        alert('El fabricante ya existe');
        $('#nombre').val('');
      }
      else{
        
      }
    }
  });
}


</script>
 <script>
  $(document).ready(function(){
   $('#telefono').mask('0000-0000', {placeholder: ' 0000-0000'}); 
   
  });

</script>