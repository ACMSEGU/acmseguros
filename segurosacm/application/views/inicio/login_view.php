<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets2/img/cropped-ACMOFICIAL-150x68.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/bootstrap.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/style.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/sweet/sweetalert2.css">
</head>
<body class="theme-blush">
    <div class="authentication">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="card">
                        <img src="<?php echo base_url();?>assets2/img/cropped-ACMOFICIAL-150x68.png" alt="Sign In"/>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <form class="card auth_form" id="id_frm" action="<?php echo base_url();?>Login/validar" method="POST">
                        <div class="header">
                            <h5>Iniciar Sesion</h5>
                        </div>
                        <div class="body">
                            <div class="input-group mb-3">
                                <input type="text" name="user" class="form-control" placeholder="Usuario" required="required" autofocus>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" id="txtPassword" name="pass" class="form-control" placeholder="Contraseña" required="">
                                <div class="input-group-append">
                                    <span class="input-group-text" onclick="mostrarPassword()"><i class="fa fa-eye-slash icon"></i></span>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-block btn-success" value="Iniciar Sesión"/> 
                        </div> 
                    </form>
                    <div class="copyright text-center">
                        &copy;
                        <script>document.write(new Date().getFullYear())</script>
                     <!--  <script>
                          var cnx = new Date();
                          document.write(cnx.getDate() + "/" + (cnx.getMonth() +1) + "/" + cnx.getFullYear());
                      </script> -->
                      <span>ACM</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets2/sweet/sweetalert.min.js"></script>
<script type="text/javascript">
   
    function mostrarPassword() {
        var cambio = document.getElementById("txtPassword");
        if (cambio.type == "password") {
            cambio.type = "text";
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        } else {
            cambio.type = "password";
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    }
</script>


