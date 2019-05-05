<?php

if (isset($_POST['signout'])) {
  unset($_SESSION['signOn']);
  header('location: sign-in.php');
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Obladi | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="./" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Ob</b>C</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Obladi</b> Coffee</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu pull-right">
          <ul class="nav navbar-nav">
            <li class="user user-menu">
              <form class="dropdown-toggle" method="post">
                <input type="hidden" name="signout" value="true">
                <button type="submit" class="btn btn-default btn-flat">Sign out</button>
              </form>
            </li>
          </ul>

        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/Obladi.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Mohamed KHAMMERI</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Obladi Back-End</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-coffee"></i> <span>Products</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                <small class="label pull-right bg-green"></small>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="shopAdmin.php"><i class="fa fa-shopping-cart"></i> Shop </a></li>
              <li><a href="menuAdmin.php"><i class="fa fa-list-alt"></i> Menu </a></li>
              <li><a href="discount.php"><i class="fa fa-money"></i> Discount </a></li>
            </ul>
          </li>

          <li>
            <a href="reservationAdmin.php">
              <i class="fa fa-calendar-check-o"></i> <span>Reservation</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-green"></small>
              </span>
            </a>
          </li>

          <li>
            <a href="tableAdmin.php">
              <i class="fa fa-glass"></i> <span>Table</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-green"></small>
              </span>
            </a>
          </li>

          <li>
            <a href="commentsAdmin.php">
              <i class="fa fa-comments"></i> <span>Comments</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-green"></small>
              </span>
            </a>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-book"></i> <span>Commande</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="ajoutc1.php"><i class="fa fa-circle-o"></i> Ajout commande</a></li>
              <li><a href="modifc1.php"><i class="fa fa-circle-o"></i> Modifier commande</a></li>
              <li><a href="suppc1.php"><i class="fa fa-circle-o"></i> Supprimer commande</a></li>
              <li><a href="affichec1.php"><i class="fa fa-circle-o"></i> Affiche commande</a></li>
              <li><a href="rechc1.php"><i class="fa fa-circle-o"></i> Chercher commande</a></li>
            </ul>
          </li>


          <li class="treeview">
            <a href="#">
              <i class="fa fa-money"></i> <span>Facture</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="ajoutf1.php"><i class="fa fa-circle-o"></i> Ajout facture</a></li>
              <li><a href="modiff1.php"><i class="fa fa-circle-o"></i> Modifier facture</a></li>
              <li><a href="suppf1.php"><i class="fa fa-circle-o"></i> Supprimer facture</a></li>
              <li><a href="affichf1.php"><i class="fa fa-circle-o"></i> Affiche facture</a></li>
              <li><a href="tri1.php"><i class="fa fa-circle-o"></i> tri facture</a></li>
              <li><a href="rechf1.php"><i class="fa fa-circle-o"></i> Chercher facture</a></li>
              <li><a href="pdf.php"><i class="fa fa-circle-o"></i> Liste facture en PDF</a></li>
            </ul>
          </li>

        </li>
      </ul>



    </section>
    <!-- /.sidebar -->
  </aside>
