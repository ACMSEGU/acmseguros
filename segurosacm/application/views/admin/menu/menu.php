<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
 
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>//assets/bower_components/dataTables.net-bs/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>//assets/bower_components/dataTables.net-bs/css/dataTables.Bootstrap.css">

   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <a href="<?php echo base_url();?>login/index" class="logo">
      <span class="logo-mini"><b></b></span>
      <span class="logo-lg"><b>ACM</b>SEGUROS</span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
   <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">             
              <img src="<?php echo base_url();?>assets/img/user.png" class="user-image" alt="User Image">
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo base_url();?>assets/img/user.png" class="img-circle" alt="User Image">

                <p>
                  ACM Seguros
                  <small></small>
                </p>
              </li>
              
              <li class="user-footer">
                <div class="pull-center">
                  <!--<a href="<php echo base_url();?>empresa_controller/agregar_empresa" class="btn btn-default btn-flat">Perfil Empresa</a> -->
                </div>
                <div class="pull-center">
                  <a class="btn btn-default btn-flat"  onclick="checklik('<?$a->id_usuario?>')">Cerrar Sesion</a>
                </div>
              </li>
            </ul>
          </li>
          <li>
            
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">

    <section class="sidebar">

      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/img/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrador</p>
           <a href="#"><i class="fa fa-circle text-success"></i></a>

          <?php echo $this->session->userdata('user');?>    
        </div>
      </div>

      
       <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
         <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
             <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form> 
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">PANEL</li>
       
      <li class=""><a href="<?php echo base_url();?>registro/inicio"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
         <li class="treeview">
         <!-- <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Citas</span> -->
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
           <!-- <li><a href="<?php echo base_url();?>cita_controller/ver_citas"><i class="glyphicon glyphicon-user"></i>Citas Agendadas</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Consultas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>consulta_controller/consulta"><i class="glyphicon glyphicon-user"></i>Mostrar Consultas Registradas</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Pacientes</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>paciente_controller/ver_paciente"><i class="glyphicon glyphicon-barcode"></i> <span>Registro de Pacientes</span></a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Expedientes</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>expediente_controller/ver_expediente"><i class="glyphicon glyphicon-barcode"></i> <span>Expedientes Registrados</span></a></li>
          <!--  <li><a href="<?php echo base_url();?>expediente_controller/ver_nuevo"><i class="glyphicon glyphicon-barcode"></i> <span>Expedientes Nuevos</span></a></li>
            <li><a href="<?php echo base_url();?>expediente_controller/ver_ordinario"><i class="glyphicon glyphicon-user"></i>Expedientes Ordinarios</a></li>
             <li><a href="<?php echo base_url();?>expediente_controller/ver_pasivo"><i class="glyphicon glyphicon-user"></i>Expedientes Pasivos</a></li> -->
          </ul>
        </li> -->

        <li class=""><a href="<?php echo base_url();?>registro_corredor/vercorredor"><i class="glyphicon glyphicon-user"></i><span>Corredor</span></a></li>

         <li class=""><a href="<?php echo base_url();?>registro_aseguradoras/verasegura"><i class="glyphicon glyphicon-ok"></i><span>Aseguradora</span></a></li>
        
        <li class=""><a href="<?php echo base_url();?>ramo_controller/verramo"><i class="glyphicon glyphicon-th"></i><span>Ramo</span></a></li>

          <li class=""><a href="<?php echo base_url();?>registro_pol/verpoli"><i class="glyphicon glyphicon-list-alt"></i><span>Poliza</span></a></li>

      <li class=""><a href="<?php echo base_url();?>registro_cliente/vercliente"><i class="glyphicon glyphicon-paperclip"></i><span>Clientes</span></a></li>

      <li class=""><a href="<?php echo base_url();?>contactoC/vercontacto"><i class="glyphicon glyphicon-comment"></i><span>Contacto</span></a></li>

        <li class=""><a href="<?php echo base_url();?>registro/registro"><i class="fa fa-user-circle-o"></i><span>Control de Usuarios</span></a></li>
 <!--
        <li class="treeview">
          <a href="#"><i class=" glyphicon glyphicon-signal"></i> <span>Reportes</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <li ><a href="<?php echo base_url();?>empresa_controller/agregar_empresa"><i  class="fa fa-wrench"></i> <span>Configuracion</span></a></li>
          <ul class="treeview-menu">
          </ul>
        </li>
      </ul>
     -->
    </section>
     
     
