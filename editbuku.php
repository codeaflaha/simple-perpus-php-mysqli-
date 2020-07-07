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
                    <h1 class="page-header">Edit Data Buku</h1>
                </div>
                <!-- /.col-lg-12 -->
	</div>
	       <?php
			$id = $_GET['id'];
			$sql = mysqli_query($db, "SELECT * FROM buku  WHERE id_buku ='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: buku.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){								
				$nama 			 = $_POST['nama'];
				$penerbit  		 = $_POST['penerbit'];
				$kategori  		 = $_POST['kategori'];				
				$tahun  		 = $_POST['tahun'];
				$update = mysqli_query($db, "UPDATE buku  SET nama_buku='$nama', penerbit = '$penerbit', kategori = '$kategori', tahun = '$tahun' WHERE id_buku='$id'") or die(mysqli_error());
				if($update){
					header("Location: editbuku.php?id=".$id."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
			}
			?>
	
	<div class="row">
		<div class="col-lg-6">				
			<br>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Id Buku</label>
					<div class="col-sm-6">
						<input type="text" name="id" class="form-control" value="<?php echo $row ['id_buku']; ?>" placeholder="Id Buku" disabled>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">nama Buku</label>
					<div class="col-sm-6">
						<input type="text" name="nama" class="form-control" value="<?php echo $row ['nama_buku']; ?>" placeholder="Nama buku" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Penerbit</label>
					<div class="col-sm-6">
						<input type="text" name="penerbit" class="form-control" placeholder="Penerbit" value="<?php echo $row ['penerbit']; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Kategori</label>
					<div class="col-sm-6">
						<input type="text" name="kategori" class="form-control" placeholder="Kategori" value="<?php echo $row ['kategori']; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">tahun</label>
					<div class="col-sm-6">
						<input type="text" name="tahun" class="form-control" placeholder="tahun" value="<?php echo $row ['tahun']; ?>" required>
					</div>
				</div>																									
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan">
						<a href="buku.php" class="btn btn-sm btn-danger">Batal</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Input Buku</h4>
      </div>
	  <form method="post" action="simpan_detil_pinjam.php?id=<?php echo $_GET['id'];?>">
      <div class="modal-body">
			<div class="form-group">
				<label>Nama Buku</label>								
					<select class="form-control" name="idbuku">
						<?php 
							$sql_bk = "SELECT id_t_buku, nama_buku FROM t_buku";
							$result_bk = mysqli_query($db,$sql_bk);
							while($tampil = mysqli_fetch_array($result_bk,MYSQLI_ASSOC)){
							?>	
						<option value="<?php echo $tampil['id_t_buku']; ?>"><?php echo $tampil['nama_buku'] ?></option>
							<?php 
							}
							?>
					</select>
			</div>									
			<div class="form-group">
				<label>Qty</label>
				<input name="qty" type="text" maxlength="2" onkeypress="return isNumber(event)" class="form-control" placeholder="Qty" required/>
			</div>	
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Simpan">
      </div>
	  </form>
    </div>

  </div>
</div>
<div class="container">

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

