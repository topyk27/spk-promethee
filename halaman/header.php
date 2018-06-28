<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Pendukung Keputusan</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <!-- <link href="asset/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <link href="asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="index.php?url=dashboard">SPK | PROMETHEE METHOD</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="index.php?url=pengaturan"><i class="fa fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="config/proses_logout.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php?url=dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="index.php?url=data_calon"><i class="fa fa-table fa-fw"></i> Data Calon Penerima</a>
                        </li>
                        <li>
                            <a href="index.php?url=data_kriteria"><i class="fa fa-table fa-fw"></i> Data Kriteria</a>
                        </li>
                        <li>
                            <a href="index.php?url=hasil_seleksi"><i class="fa fa-edit fa-fw"></i> Hasil Seleksi</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-gear"></i> Pengaturan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <!-- <li>
                                    <a href="index.php?url=data_program_bantuan">Jenis Program Bantuan</a>
                                </li> -->
                                <li>
                                    <a href="index.php?url=data_pengguna">Pengguna</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
