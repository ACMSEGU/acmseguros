<script src="<?php echo base_url();?>assets2/sweet/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets2/sweet/sweetalert2.css">
 <body>

        <div class="preloader">
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
        </div>

        <main class="site-wrapper">
            <div class="pt-table">
                <div class="pt-tablecell page-contact relative">
                    <!-- .close -->
                    <a href="<?php echo base_url();?>sitio/index" class="page-close"><i class="tf-ion-close"></i></a>
                    <!-- /.close -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                                <div class="page-title text-center">
                                    <h2>Contác<span class="primary">tanos</span> <span class="title-bg">ACM</span></h2>
                                    <p>Este es el espacio donde puedes consultar cualquier duda que usted tenga.</p>
                                </div>
                            </div>                            
                        </div> <!-- /.row -->

                        <div class="row">
                            <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
                                <div class="contact-block">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="tf-envelope2"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>Correo</h4>
                                            <p><a href="#">acmseguros@outlook.com</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.contact-block -->
                                <div class="contact-block">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="tf-phone2"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>Telefono</h4>
                                            <p><a href="#">503-2263-65101/2263-1553</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.contact-block -->
                                <!-- /.contact-block -->

                                <ul class="contact-social">
                                    <li>
                                        <span class="contact-social-hex"></span>
                                        <a href="www.fb.com/themefisher"><i class="tf-ion-social-facebook"></i></a>
                                    </li>
                                    <li>
                                        <span class="contact-social-hex"></span>
                                        <a href="www.twitter.com/themefisher"><i class="tf-ion-social-twitter"></i></a>
                                    </li>
                                    <li>
                                        <span class="contact-social-hex"></span>
                                        <a href="#"><i class="tf-ion-social-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        
                            <div class="col-xs-12 col-sm-7 col-md-7 col-md-offset-1 col-lg-offset-1">
                                <div class="section-title clear">
                                    <h3>Envíanos tu consulta!</h3>
                                    <span class="bar-dark"></span>
                                    <span class="bar-primary"></span>
                                </div>

                                <form id="contact-form" class="row contact-form no-gutter" action="<?php echo base_url();?>contactoC/agregar" method="POST">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-field name">
                                            <span class="input-icon"><i class="tf-profile-male"></i></span>
                                            <input type="text" id="name" name="nombre_completo" onkeypress="return soloLetras(event)" class="form-control"  placeholder="Tu nombre">
                                        </div>
                                    </div> <!-- ./col- -->
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-field email">
                                            <span class= "input-icon"><i class="tf-phone2"></i></span>
                                            <input type="text" id="tel" onkeypress="return soloNums(event)" name="telefono_contacto" class="form-control" name="" placeholder="Tu Numero de contacto" maxlength="9">
                                        </div>
                                    </div> <!-- ./col- -->

                                    <div class="col-xs-12 col-sm-12">
                                        <div class="input-field name">
                                            <span class="input-icon" id="name" ><i class="tf-envelope2"></i></span>
                                            <input type="email" name="correo_electronico" class="form-control"  placeholder="Tu Correo electronico">
                                        </div>
                                    </div> <!-- ./col- -->
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="input-field email">
                                            <span class= "input-icon" id="email"><i class="tf-profile-male"></i></span>

                                            <select class="form-control" id="ramo" name="id_ramo" onchange="mostrar(this.value)">
                                             <!--   <option value="0">Seleccione el seguro de interes</option>
                                                <option value="1">Seguro de Automoviles</option>
                                                <option value="2">Seguros Gastos Mèdicos</option>
                                                <option value="3">Contra todo Riesgos/Incendios</option> -->
                                            </select>
                                        </div>
                                    </div> <!-- ./col- -->
                                    <!-- seguro auto -->
                                    <div id="auto" style="display: none;">
                                        <div class="col-xs-12 col-sm-12">
                                        <div class="input-field name">
                                            <span class="input-icon" id="marca" ><i class="tf-pencil2"></i></span>
                                            <input type="text" class="form-control" name="marca" placeholder="Marca de automovil">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="input-field name">
                                            <span class="input-icon" id="modeloauto" ><i class="tf-pencil2"></i></span>
                                            <input type="text" class="form-control" name="modelo"  placeholder="Modelo de automovil">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="input-field name">
                                            <span class="input-icon"  id="anio" ><i class="tf-pencil2"></i></span>
                                            <input type="text" class="form-control" name="anio_vehiculo"  placeholder="Año del automovil">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="input-field name">
                                            <span class="input-icon" id="sumatotala" ><i class="tf-pencil2"></i></span>
                                            <input type="text" id="numeric" name="suma_asegurada" class="form-control"  placeholder="Suma a asegurar">
                                        </div>
                                    </div>
                                    </div>
                                    <!-- Gastos medicos -->
                                    <div id="gastomed" style="display: none;">
                                        <div class="col-xs-12 col-sm-12">
                                        <div class="input-field name">
                                            <span class="input-icon" id="edad" ><i class="tf-pencil2"></i></span>
                                            <input type="text" class="form-control" name="edad" placeholder="Edad">
                                        </div>
                                    </div>
                                    </div>
                                    <!-- Todo riesgo -->
                                    <div id="riesgo" style="display: none;">
                                        <div class="col-xs-12 col-sm-12">
                                        <div class="input-field name">
                                            <span class="input-icon"  id="edad" ><i class="tf-pencil2"></i></span>
                                            <input type="text" class="form-control" name="direccion" placeholder="Direccion de propiedad a asegurar">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="input-field message">
                                            <span class= "input-icon" ><i class="tf-pencil2"></i></span>
                                            <textarea name="comentario" id="message" class="form-control" placeholder="Escribe tu mensaje..."></textarea>
                                        </div>
                                    </div> <!-- ./col- -->
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="input-field">
                                            <span class="btn-border">
                                                <button class="btn btn-primary btn-custom-border text-uppercase" type="submit" id="btn-enviar" value="Registrar">Enviar</button>
                                            </span>
                                        </div>
                                </div>
                             <!-- ./col- -->
                                 <!-- /.row -->
                            </div> <!-- /.col- -->
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->

                    <nav class="page-nav clear">
                        <div class="container">
                            <div class="flex flex-middle space-between">
                                <span class="prev-page"><a href="<?php echo base_url();?>sitio/testimonials" class="link">&larr; Pag Ant</a></span>
                                <span class="copyright hidden-xs">Copyright &copy; 2021 Equipo ACM</span>
                            </div>
                        </div>
                        <!-- /.page-nav -->
                    </nav>
                    <!-- /.container -->

                </div> <!-- /.pt-tablecell -->
            </div> <!-- /.pt-table -->

</form>
        </main> <!-- /.site-wrapper -->
        </body>
</html>
            <!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.mask.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#tel').mask('0000-0000', {placeholder: '0000-0000'}); 
  });
</script>
<script type="text/javascript">
  function soloNums(e) {
    var key = e.keyCode || e.which,
      tecla = String.fromCharCode(key).toLowerCase(),
      letras = " 1234567890-",
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
function mostrar(id) {
    if (id == "1") {
        $("#auto").show();
        $("#gastomed").hide();
        $("#riesgo").hide();
        
    }

    if (id == "2") {
        $("#gastomed").show();
        $("#auto").hide();
        $("#riesgo").hide();
        
    }

    if (id == "3") {
        $("#riesgo").show();
        $("#gastomed").hide();
        $("auto").hide();
       
    }
    if (id == "4") {
        $("#riesgo").hide();
        $("#gastomed").show();
        $("#auto").hide();
       
    }
    if (id == "5") {
        $("#riesgo").show();
        $("#gastomed").hide();
        $("#auto").hide();
       
    }
    if (id == "6") {
        $("#riesgo").hide();
        $("#gastomed").hide();
        $("#auto").hide();
       
    }
}

$("#contact-form").on("submit", function(event){
        event.preventDefault();
        swal({
            title: '¿Los datos a enviar son los correctos?',
            text: 'Puede realizar cambios si asi lo desea',
            type: 'question',
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonText: 'Enviar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.value){
                var url='<?php echo base_url(); ?>contactoC/agregar';
                $.ajax({
                    type: 'post',
                    url: url,
                    data: $('#contact-form').serialize(),
                    success:function(data){
                        if(data==0)
                        {
                            Swal({
                                title: '¡Falló al ingresar!',
                                type: 'error'
                            })
                        }
                        else{
                            Swal({
                                title: '¡Datos enviados Satisfactoriamente pronto nos comunicaremos contigo!',
                                type: 'success',
                                showConfirmButton: false,
                                timer: 1500

                            })
                        }
                    }
                });
            }
        });
    });
</script>
<script type="text/javascript">

            $(document).ready(function(){
              llenar_ramo();
              
            });

            function llenar_ramo(){
              var url = '<?php echo base_url(); ?>contactoC/get_ramo';
              var id = $('#ramo').val();
              $.ajax({
                url: url,
                type: 'get',
                data: 'id='+id,
                success: function(data){
                  $('#ramo').html(data);
                }
              })
            }

</script>