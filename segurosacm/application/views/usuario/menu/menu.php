<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>//assets/bower_components/dataTables.net-bs/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>//assets/bower_components/dataTables.net-bs/css/dataTables.Bootstrap.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url();?>login/index" class="logo">
      <span class="logo-mini"><b></b></span>
      <span class="logo-lg"><b>Inmaculada</b>Concepcion</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo base_url();?>assets/dist/img/logo_clinica.jpeg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo base_url();?>assets/dist/img/logo_clinica.jpeg" class="img-circle" alt="User Image">

                <p>
                  Clinica Comunal Inmaculada Concepción
                  <small></small>
                </p>
              </li>
              
              <li class="user-footer">
                <div class="pull-center">
                  <!--<a href="<php echo base_url();?>empresa_controller/agregar_empresa" class="btn btn-default btn-flat">Perfil Empresa</a> -->
                </div>
                <div class="pull-center">
                  <a class="btn btn-default btn-flat"  onclick="checklik('<?$a->id?>')">Cerrar Sesion</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/img/me.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Medico</p>
           <a href="#"><i class="fa fa-circle text-success"></i></a>

          <?php echo $this->session->userdata('user');?>    
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">PANEL</li>
       
      <li class=""><a href="<?php echo base_url();?>registro/inicio"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
         <li class="treeview">
       <!--   <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Citas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a> -->
         <!-- <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>cita_controller/ver_cita_user"><i class="glyphicon glyphicon-user"></i>Citas Agendadas</a></li>
          </ul> -->
        </li>

         <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Consultas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>consulta_controller/consulta_user"><i class="glyphicon glyphicon-user"></i>Mostrar Consultas Registradas</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Pacientes</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>paciente_controller/ver_paciente_user"><i class="glyphicon glyphicon-barcode"></i> <span>Registro de Pacientes</span></a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Expedientes</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>expediente_controller/ver_expediente_user"><i class="glyphicon glyphicon-barcode"></i> <span>Expedientes Registrados</span></a></li>
          <!--  <li><a href="<?php echo base_url();?>expediente_controller/ver_nuevo"><i class="glyphicon glyphicon-barcode"></i> <span>Expedientes Nuevos</span></a></li>
            <li><a href="<?php echo base_url();?>expediente_controller/ver_ordinario"><i class="glyphicon glyphicon-user"></i>Expedientes Ordinarios</a></li>
             <li><a href="<?php echo base_url();?>expediente_controller/ver_pasivo"><i class="glyphicon glyphicon-user"></i>Expedientes Pasivos</a></li> -->
          </ul>
        </li>
      
       <!-- <li class=""><a href="<?php echo base_url();?>registro/ver_usuarios_user"><i class="fa fa-user-circle-o"></i><span>Control de Usuarios</span></a></li> -->

        <li class="treeview">
          <a href="#"><i class=" glyphicon glyphicon-signal"></i> <span>Reportes</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <li ><a href="<?php echo base_url();?>empresa_controller/agregar_empresa"><i  class="fa fa-wrench"></i> <span>Configuracion</span></a></li>
          <ul class="treeview-menu">
            <li ><a href="<?php echo base_url();?>reporte_controller/compra" >Reporte De Compras</a></li>
            <li><a href="#">Reporte De Venta </a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>