<?php
include("koneksi.php");
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
          <a class="navbar-brand" href="index.php">Perpustakaan </a>
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
                    <h1 class="page-header">Tambah Anggota</h1>
                </div>
                <!-- /.col-lg-12 -->
	</div>
	<?php
			if(isset($_POST['add'])){
				$id  = $_POST['id'];
				$nama	= $_POST['nama'];
				$kelas	= $_POST['kelas'];				
				
				$insert = mysqli_query($db, "INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `kelas`) VALUES ('$id', '$nama', '$kelas');") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Anggota Berhasil Di Simpan.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Anggota Gagal Di simpan !</div>';
						}
					
				}
			?>
	
	<div class="row">
		<div class="col-lg-6">				
			<br>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Id Siswa</label>
					<div class="col-sm-6">
						<input type="text" name="id" class="form-control" placeholder="Id Siswa" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">nama Siswa</label>
					<div class="col-sm-6">
						<input type="text" name="nama" class="form-control" placeholder="Nama Siswa" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Kelas</label>
					<div class="col-sm-6">											
					<select name="kelas" class="form-control">
		    		<option value="" selected="selected" disabled="">---pilih Kelas---</option>
		    		
				     <option value="X">X </option>
				     <option value="XI">XI </option>
				     <option value="XII">XII </option>
					</select>
					</div>
				</div>																						
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan">
						<a href="index.php" class="btn btn-sm btn-danger">Batal</a>
					</div>
				</div>
			</form>
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