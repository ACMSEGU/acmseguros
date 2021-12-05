

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" align="center">Registro de Paciente</h5>
        
      </div>
           <div class="modal-body">
          <div class="form-group">
            <form class="form-horizontal" method="POST" action="<?php echo base_url();?>producto_controller/registrar_producto_com">

              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nombre</label>

                  <div class="col-sm-10 ">
                   <input type="text" name="marca" required maxlength="25" class="form-control" placeholder="">
                 </div>
               </div>
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Apellido</label>

                  <div class="col-sm-10 ">
                   <input type="text" name="marca" required maxlength="25" class="form-control" placeholder="">
                 </div>
               </div>
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Sexo</label>

                  <div class="col-sm-10 ">
                   <input type="text" name="marca" required maxlength="25" class="form-control" placeholder="" id="numero">
                 </div>
               </div>
                      <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Fecha de Nacimiento</label>

                  <div class="col-sm-10">
                    <input type="text" required  name="fecha_registro" maxlength="20" class="form-control" id="compra" placeholder="Fecha de Nacimiento">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Edad</label>

                  <div class="col-sm-10 ">
                     <input type="text" name="cantidad" required maxlength="2"  class="form-control" id="numero2" placeholder="">

                 </div>
               </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" placeholder="00000000-0">Numero de Dui</label>

                  <div class="col-sm-10
                  ">
                   <input type="text" name="cantidad"  class="form-control" placeholder="">
                 </div>
               </div>

               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Telefono Contacto</label>

                  <div class="col-sm-10
                  ">
                   <input type="text" name="cantidad"  class="form-control" placeholder="">
                 </div>
               </div>
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Encargado</label>

                  <div class="col-sm-10 ">
                   <input type="text" name="marca" required maxlength="25" class="form-control" placeholder="">
                 </div>
               </div>

               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">direccion</label>

                  <div class="col-sm-10
                  ">
                   <input type="text" name="cantidad"  class="form-control" placeholder="">
                 </div>
               </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Fecha de Registro</label>

                  <div class="col-sm-10">
                    <input type="text" required  name="fecha_registro" maxlength="20" class="form-control" id="comp" placeholder="Fecha de Nacimiento">
                  </div>
                </div>

      </div>
    </div> 
      <div class="modal-footer">
              <input type="submit" class="btn btn-info pull-right" value="Registrar">
            </form>
      </div>
    </div>
  </div>
</div>
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

<script>

  $( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#comp" )
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
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
     $('#cantidad').mask('0000000');
      $('#numero').mask('00000000-0');
      $('#numero2').mask('0.00');
     $('#precio').mask("#,##0.00", {reverse: true});
    llenar_producto();
    

    });

</script>