<?php 
include("koneksi.php");
$sql_pj = "select count(*) as JUM from siswa ";
$result_pj = mysqli_query($db,$sql_pj);
$siswa = mysqli_fetch_array($result_pj,MYSQLI_ASSOC);

$sql_pj = "select count(*) as JUM from buku ";
$result_pj = mysqli_query($db,$sql_pj);
$buku = mysqli_fetch_array($result_pj,MYSQLI_ASSOC);
?>

<html>
   <head>
      <title>Dashboard | Perpustakaan</title>
	    <link rel="stylesheet" type="text/css" href="template/alert.css">
		<link href="template/css/bootstrap.min.css" rel="stylesheet" />
		<link href="template/css/sb-admin-2.css" rel="stylesheet" />
		<link rel="stylesheet" href="template/js/jquery-ui-1.11.4/jquery-ui.css" />
		<link rel="stylesheet" href="template/js/jquery-ui-1.11.4/jquery-ui-smooth.css">
   </head>
<body>
   <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Perpustakaan</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profile.php"><span class="glyphicon glyphicon-tasks"></span>&nbsp;Profile</a></li>
						<li><a href="ganti_password.php"><span class="glyphicon glyphicon-lock"></span>&nbsp;Ganti Password</a></li>
                        <li class="divider"></li>
                        <li><a href="../logout.php"><span class="glyphicon glyphicon-off"></span>&nbsp;Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
             </li>
          </ul>
        </div>
      </div>
    </nav>
	
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Dashboard</a></li>
					
			<li><a href="anggota.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Data Anggota</a></li>
            <li><a href="buku.php"><span class="glyphicon glyphicon-book"></span>&nbsp;Data Buku</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-tasks"></span>&nbsp;Peminjaman</a></li>
			
			</li>

		  <ul class="nav nav-sidebar">           
        </div>

<div id="page-wrapper">
    <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
        <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $siswa['JUM'];?></div>
                                        <div>total anggota</div>
                                    </div>
                                </div>
                            </div>
                            <a href="anggota.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat Detail</span>
                                    <span class="pull-right"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
        </div>
        

        
        <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $buku['JUM'];?></div>
                                    <div>Total Buku</div>
                                </div>
                            </div>
                        </div>
                        <a href="data_buku.php">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat Detail</span>
                                <span class="pull-right"></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
         </div>
    </div>
</div>

<div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2016 -</p>
                    <p>web ini hanya sample saja.</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
    <script src="template/js/jquery-3.1.1.min.js"></script>
    <script src="template/js/jquery-ui-1.11.4/jquery-ui.js"></script>
    <script src="template/js/sb-admin-2.js"></script>
    <script src="template/js/bootstrap.min.js"></script>
</body>
</html>