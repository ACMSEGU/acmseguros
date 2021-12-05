<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Venta</h3>
            </div>
            <div class="box-body">
              <form id="formulario" >
              <div class="form-group">
                <br><br>
                  <label for="nombre" class="col-sm-2 control-label">N° de factura</label>
                    <div class="col-sm-10">
                    <input required type="text" name="numero"  maxlength="20" class="form-control" placeholder="Numero de factura">
                  </div>
                </div>
                <br><br>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Cliente</label>

                  <div class="col-sm-10">
                    <select name="cliente" class="form-control" id="cliente">
                      
                    </select>
                  </div>
                  <br><br>
                  
                 </div>
                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Fecha de factura</label>

                  <div class="col-sm-10">
                    <input required type="text" name="fecha" class="form-control">
                  </div>
                  <br><br>
                  
                 </div>

                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Producto</label>

                  <div class="col-sm-10">
                    <select name="producto" id="producto" class="form-control">
                      
                    </select>
                  </div>
                  <br><br> 
                 </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Cantidad de Producto</label>

                  <div class="col-sm-10">
                    <input required type="text" name="cantidad" class="form-control">
                  </div>
                  <br><br>
                  
                 </div>

                <!--  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Iva</label>

                  <div class="col-sm-10">
                    <select name="iva" class="form-control">
                      <option value="">Seleccione</option>
                      <option value="0">10%</option>
                      <option value="1">20%</option>
                    </select>
                  </div> 
                  <br><br> 
                 </div>-->

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Valor Neto</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="neto" id="neto" placeholder="Valor Neto">
                  </div>
                  <br><br>
                  
                 </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Total a Pagar</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="total" placeholder="Total">
                  </div>
                  <br><br>
                  
                 </div>

                 <div class="form-group">
                </div>
              </div>
              <div class="box-footer">
                
                <input type="button" onclick="guardaaa()" class="btn btn-success" value="Ingresar">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
           
            </div>
            <!-- /.box-body -->
          </div>
          
        

<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.mask.min.js"></script>
</body>
</html>
<script>
  $(document).ready(function(){
   llenar_cliente();
    llenar_producto();
    
    });

function checklik(id)
{
  var opcion = confirm('¿quiere cerrar sesion realmente?');
    if(opcion == true){
      window.location = "<?php echo base_url();?>login/cerrar_sesion?id"+id;
    }else{
      
    }
}
function guardaaa()
{
  var url="<?php echo base_url();?>cliente_controller/registrar_fabricante";
  $.ajax({
    url: url,
    type: "post",
    data: $('#formulario').serialize(),
    success: function(data)
    {
      if(data=="Exito")
      {
        location.href="<?php echo base_url();?>cliente_controller/clientes";
      }
      else
      {
        alert("no se cuardo el registro");
        
      }
    }
  });
}

function llenar_producto()
{
  var sele = '<?php echo base_url();?>factura_controller/producto_get';
  $.ajax({
    type: 'post',
    url: sele,
    success: function(data)
    {
      $('#producto').html(data)
    }
  });
}

function llenar_cliente()
{
  var sele = '<?php echo base_url();?>factura_controller/cliente_get';
  $.ajax({
    type: 'post',
    url: sele,
    success: function(data)
    {
      $('#cliente').html(data)
    }
  });
}
</script>