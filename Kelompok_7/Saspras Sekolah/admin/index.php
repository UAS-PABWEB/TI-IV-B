<?php
session_start();
error_reporting(0);
include("cek_login.php");
include("config/koneksi.php");
$username=$_SESSION[username];
$admin_id=$_SESSION[admin_id];
$qryadmin=mysql_query("SELECT * FROM admin where username='$username'");
$tampiladmin=mysql_fetch_array($qryadmin);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="admin/ico/ud.jpg">

    <title>Inventaris Sarana dan Prasarana di SMK | Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">DATA INVENTARIS SARANA DAN PRASARANA SEKOLAH </a>
            </div>
            <!-- /.navbar-header -->

                    
               <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-1x fa-spin"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Master Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="?page=data_admin">Admin</a></li>
                                <li><a href="?page=supplier/data_supplier">Supplier</a></li>
                                <li><a href="?page=barang/data_barang">Barang</a></li>
                                <li><a href="?page=stok/data_stok">Stok</a></li>
                                <li><a href="?page=barang_keluar/data_barang_keluar">Barang yang Keluar</a></li>
                                <li><a href="?page=barang_masuk/data_barang_masuk">Barang yang Masuk</a></li>
                                <li><a href="?page=barang_pinjam/data_barang_pinjam">Barang yang di pinjam</a></li>
	                     </ul>
                            </li>
                            <!-- /.nav-second-level -->
                        </li>
			<li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
				<li><a href="?page=laporan_data_barang_masuk">Laporan Data Barang Masuk</a></li>
				<li><a href="?page=laporan_data_barang_keluar">Laporan Data Barang Keluar</a></li>
                                <li><a href="?page=laporan_data_barang_pinjam">Laporan Data Barang Pinjam</a></li>

                                <li> <a href="?page=cari_data_barang_masuk">Cari Barang Masuk</li></a>
                                </li>
				<li>
				<li><a href="?page=cari_data_barang_keluar">Cari Barang Keluar</li></a>
                                </li>			
				<li>
				<li><a href="?page=cari_data_barang_pinjam">Cari Barang Pinjam</li></a>
                                </li>
                                <li>
                                <a href="?page=backup">Backup</a>
                                </li>
                                
                                
                                
                            </ul>
			 
			   
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                  <h1 class="page-header">DATA INVENTARIS</h1>
              </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
               
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                    
                        <!-- /.panel-heading -->
                      
                    <!-- /.panel -->

                            </div>
                        </div>
                        <!-- /.panel-heading -->
                   
                       
                     <?php require "switch.php";?>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
