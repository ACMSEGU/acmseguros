
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Crear Expediente</h5>
       
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
                  <label for="inputPassword3" class="col-sm-2 control-label">Paciente</label>

                  <div class="col-sm-10 ">
                   <select name="producto" required   class="form-control" id="producto" onchange="fabri();">
                    
                   </select>
                 </div>
               </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Peso</label>

                  <div class="col-sm-10 ">
                   <input type="text" name="marca" required maxlength="25" class="form-control" placeholder="Lb" id="numero">
                 </div>
               </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Estatura</label>

                  <div class="col-sm-10 ">
                     <input type="text" name="cantidad" required maxlength="11"  class="form-control" id="numero2" placeholder="mt">

                 </div>
               </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Motivo de la consulta</label>

                  <div class="col-sm-10
                  ">
                   <input type="text" name="cantidad"  class="form-control" placeholder="">
                 </div>
               </div>

               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Antecedentes medicos</label>

                  <div class="col-sm-10
                  ">
                   <input type="text" name="cantidad"  class="form-control" placeholder="">
                 </div>
               </div>

               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Reacciones Alergicas</label>

                  <div class="col-sm-10
                  ">
                   <input type="text" name="cantidad"  class="form-control" placeholder="">
                 </div>
               </div>

                <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Estado Expediente</label> 
             <div class="col-sm-10">
                    <select name="estado" class="form-control">
                       <option value="">Seleccione un Estado</option>
                      <option value="0">Nuevo</option>
                      <option value="1">Ordinario</option>
                      <option value="2">Pasivo</option>
                    </select>
                  </div>       
            </div>

      </div>
      <div class="modal-footer">
        
         <input type="submit" class="btn btn-info pull-right" value="Registrar">
      </div>
    </div> 
  </div> 
</form>
</div>
<script src="<?php echo base_url(); ?>assets/js/jquery.mask.min.js"></script> 
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.mask.min.js"></script>


</script>
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
   $(document).ready(function(){
   
    llenar_fabricante();
    llenar_categoria();
    });

     function llena_fabricante(){
     var sele = '<?php echo base_url();?>compra_controller/fabricante';
    $.ajax({
      type: 'post',
      url: sele,
      success: function(data){
        $('#fabricante').html(data);
      }
    });
     function llenar_categoria(){
     var ca = '<?php echo base_url();?>compra_controller/categoria';
    $.ajax({
      type: 'post',
      url: ca,
      success: function(data){
        $('#categoria').html(data);
      }
    });

  }
</script>
<script>
  $(document).ready(function(){
     $('#cantidad').mask('00000000');
     $('#precio').mask("#,##0.00", {reverse: true});
   
  });

</script>

<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
     $('#cantidad').mask('0000000');
      $('#numero').mask('0.00');
      $('#numero2').mask('0.00');
     $('#precio').mask("#,##0.00", {reverse: true});
    llenar_producto();
    

    });

</script>

