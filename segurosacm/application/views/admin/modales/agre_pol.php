<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title  text-center" id="exampleModalLabel">Registro de Polizas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-12">
        <form class="form-horizontal" action="<?php echo base_url();?>Registro_pol/agregar" method="POST" enctype="multipart/form-data">
             <div class="col-md-6">
                  <label for="inputPassword3">Asegurado</label>

                  
                  <div class="form-group"> 
                    <select  name="asegurado" id="asegurado" class="form-control" required >
                     
                    </select>
                    </div>

                  </div>

                  <div class="col-md-6" id="normal">
                
                  <label for="inputEmail3" >Nombre del contratante</label>

                  
                   <div> <input type="text" name="nombre_contratante"  id="nombre_contratante" onblur="validar()" maxlength="30"class="form-control" id="inputEmail3" required placeholder="Nombre del c....."> </div>

                    </div>
                 
                  <label for="inputPassword3">Aseguradora</label>

                  
                     <select  name="idAseguradora" id="idAseguradora" class="form-control" required >
                      
                    </select>

                    
                    <div class="col-md-6" id="normal">
                     <label for="inputEmail3" >Numero de poliza</label>

                  
                    <input type="text" name="numero_poliza"  id="numero_poliza" onblur="validar()" maxlength="4"class="form-control" id="inputEmail3" required placeholder="0000">
                  </div>


                  <div class="col-md-6">
                    <label for="inputPassword3">Ramo</label>

                  
                     <select  name="idRamo" id="idRamo" class="form-control" onchange="mostrar(this.value)" required >
                     
                    </select>
                  </div>


                  <div class="col-md-6" id="normal">
                      <label for="inputEmail3" >Plan Contratado</label>

                  
                    <input type="text" name="plan_contratado"  id="plan" onblur="validar()" maxlength="30"class="form-control" id="inputEmail3" required placeholder="Plan seguro....">
                  </div>


                  <div class="col-md-6" id="normal">
                     <label for="inputEmail3" >Vigencia Inicial</label>

                  
                    <input type="text" name="vigencia_inicial"  id="vigencia_inicial" onblur="validar()" maxlength="30"class="form-control" id="inputEmail3" required placeholder="vigencia....">
                  </div>


                  <div class="col-md-6" id="normal">
                     <label for="inputEmail3" >Vigencia Final</label>

                  
                    <input type="text" name="vigencia_final"  id="vigencia_final" onblur="validar()" maxlength="30"class="form-control" id="inputEmail3" required placeholder="vigencia....">
                  </div>


                  <div class="col-md-6" id="normal">
                     <label for="inputEmail3" >Suma Aseguradora</label>

                  
                    <input type="text" name="suma_asegurada"  id="suma_asegurada" onblur="validar()" maxlength="30"class="form-control" id="inputEmail3" required placeholder="Aseguradora....">
                  </div>


                  <div class="col-md-6" id="normal">
                     <label for="inputEmail3" >Deducible</label>

                  
                    <input type="text" name="deducible"  id="deducible" onblur="validar()" maxlength="30"class="form-control" id="inputEmail3" required placeholder="deducible....">
                  </div>


                    <div class="col-md-6" id="auto">
                      <label for="inputPassword3">Marca</label>

                      <select onchange="llenarModelo();" id="id_marca" class="form-control" name="id_marca">
                      
                      </select> 


                    </div>

                     <div class="col-md-6" id="modelo">
                       <label for="inputPassword3">Modelo</label>

                       <select name="idModelo" id="idModelo" class="form-control">
                         
                       </select>
                     </div>


                     <div class="col-md-6" id="year">
                     <label for="inputEmail3" >Año</label>

                  
                    <input type="text" name="anio"  id="anio" onblur="validar()" maxlength="30"class="form-control" id="inputEmail3" placeholder="Año....">
                  </div>


                  <div class="col-md-6" id="placa">
                    <label for="inputEmail3" >Placa</label>

                  
                    <input type="text" name="placa"  id="placa" onblur="validar()" maxlength="30"class="form-control" id="inputEmail3" placeholder="Placa....">
                  </div>


                  <div class="col-md-6" id="normal">
                    <label for="inputEmail3" >Prima</label>

                  
                    <input type="text" name="prima_total"  id="prima_total" onblur="validar()" maxlength="15"class="form-control" id="inputEmail3" required placeholder="Prima seguro....">
                  </div>


                  <div class="col-md-6" id="normal">
                    <label for="inputEmail3" >Forma de Pago</label>

                  
                    <input type="text" name="forma_pago"  id="forma_pago" onblur="validar()" maxlength="30"class="form-control" id="inputEmail3" required placeholder="Forma pago....">
                    </div>


                    <div class="col-md-6" id="normal">
                    <label for="inputEmail3" >Cuota</label>

                  
                    <input type="text" name="valor_cuota"  id="valor_cuota" onblur="validar()" maxlength="15"class="form-control" id="inputEmail3" required placeholder="valor....">
                  </div>


                  <div class="col-md-6" id="normal">
                    <label for="inputEmail3" >Metodo de Pago</label>

                  
                    <input type="text" name="metodo_pago"  id="metodo_pago" onblur="validar()" maxlength="30"class="form-control" id="inputEmail3" required placeholder="Pago....">
                  </div>


                  <div class="col-md-6" id="normal">
                    <label for="inputEmail3" >Tramite</label>

                  
                    <input type="text" name="tipo_tramite"  id="tipo_tramite" onblur="validar()" maxlength="30"class="form-control" id="inputEmail3" required placeholder="Tramite....">
                  </div>
      </div>
      <div class="modal-footer">
      
        <input type="submit" class="btn btn-info pull-right" value="Registrar">
    </div>
  </form>
</div>
  </div>
</div>
<script src="<?php echo base_url();?>assets2/js/jquery-3.3.1.js" ></script>
<script type="text/javascript">
   $(document).ready(function(){
             llenar_cliente();
             llenar_asegurador();
             llenar_ramo();
             llenarMarca();
              
            });

   function llenar_cliente(){

              var url = '<?php echo base_url(); ?>registro_pol/get_cliente';
              $.ajax({

                type:'post',
                url: url,
                success: function(data){
                  $('#asegurado').html(data);
                }


              });

            }

            function llenar_asegurador(){

              var url = '<?php echo base_url(); ?>registro_pol/get_aseguradora';
              $.ajax({

                type:'post',
                url: url,
                success: function(data){
                  $('#idAseguradora').html(data);
                }


              });

            }

               function llenar_ramo(){

              var url = '<?php echo base_url(); ?>registro_pol/get_ramo';
              $.ajax({

                type:'post',
                url: url,
                success: function(data){
                  $('#idRamo').html(data);
                }


              });

            }

 function valida(){
    var url= '<?php echo base_url();?>registro_pol/validar_usuario';

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
     var sele = '<?php echo base_url();?>registro_pol/tipo_get';
    $.ajax({
      type: 'post',
      url: sele,
      success: function(data){
        $('#tipos').html(data);
      }
    });

  }

  function llenarMarca(){

              var url = '<?php echo base_url(); ?>registro_pol/get_marca';
              $.ajax({

                type:'post',
                url: url,
                success: function(data){
                  $('#id_marca').html(data);
                }


              });

            }

             function llenarModelo(){
              var url = '<?php echo base_url(); ?>/registro_pol/marcModelo';
              var id = $('#id_marca').val();
              $.ajax({
                url: url,
                type: 'get',
                data: 'id='+id,
                success: function(data){
                  $('#idModelo').html(data);
                }
              })
            }
    function mostrar(id) {
    if (id == "1") {
        $("#auto").show();
        $("#modelo").show();
        $("#year").show();
        $("#placa").show();
        $("#normal").show();
        
    }
     if (id == "2") {
        $("#normal").show();
        $("#auto").hide();
        $("#modelo").hide();
        $("#year").hide();
        $("#placa").hide();
        
    }

    if (id == "3") {
        $("#normal").show();
        $("#auto").hide();
        $("#modelo").hide();
        $("#year").hide();
        $("#placa").hide();
    }
    if (id == "4") {
        $("#normal").show();
        $("#auto").hide();
        $("#modelo").hide();
        $("#year").hide();
        $("#placa").hide();
       
    }
    if (id == "5") {
       $("#normal").show();
        $("#auto").hide();
        $("#modelo").hide();
        $("#year").hide();
        $("#placa").hide();       
    }
    if (id == "6") {
       $("#normal").show();
        $("#auto").hide();
        $("#modelo").hide();
        $("#year").hide();
        $("#placa").hide();
       
    }
}
</script>
<script type="text/javascript">
  $("#prima_total").on({
    "focus": function(event) {
      $(event.target).select();
    },
    "keyup": function(event) {
      $(event.target).val(function(index, value) {
        return value.replace(/\D/g, "")
        .replace(/([0-9])([0-9]{2})$/, '$1.$2')
        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
      });
    }
  });
</script>
<script type="text/javascript">
  $("#valor_cuota").on({
    "focus": function(event) {
      $(event.target).select();
    },
    "keyup": function(event) {
      $(event.target).val(function(index, value) {
        return value.replace(/\D/g, "")
        .replace(/([0-9])([0-9]{2})$/, '$1.$2')
        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
      });
    }
  });
</script>