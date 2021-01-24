<!DOCTYPE html>
<html lang="en">
<head>
	<title>Perpus.Net</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="jquery.jss"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>

	<!-- Custom styles for this template -->
	<link href="navbar-top-fixed.css" rel="stylesheet">
	<link href="home.css" rel="stylesheet">

</head>
<body>


	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="welcome.html">Perpus.Net</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav me-auto mb-2 mb-md-0">
					<li class="nav-item">
						<a class="nav-link" href="welcome.html">Welcome</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" aria-current="page" href="#">Buku</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html">About</a>
					</li>
				</ul>
				<form class="d-flex">
					<a href="../perpus1/logout.php" class="btn btn-outline-danger">Logout</a>
				</form>
			</div>
		</div>
	</nav>

			<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

	<?php
	//tambahkan dbconnect
	include('koneksi.php');

	//query
	$query = "SELECT * FROM buku";

	$result = mysqli_query($conn , $query);


	?>
	<div class="container" style="padding-top: 20px; padding-bottom: 20px;">
		<h3>Perpustakaan Online</h3>

		<div class="row">
			<div class="col-sm-4">
				<h3>Form Tambah Buku</h3>
				<form role="form" action="insert.php" method="post">
					<div class="form-group">
						<label>Judul Buku</label>
						<input type="text" name="judul_bk" class="form-control">
					</div>
					<div class="form-group">
						<label>Penerbit Buku</label>
						<input type="text" name="terbit_bk" class="form-control">
					</div>
					<div class="form-group">
						<label>Genre Buku</label>
						<input type="text" name="genre_bk" class="form-control">
					</div>
					<div class="form-group">
						<label>Tahun Terbit</label>
						<input type="text" name="tahun_bk" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary btn-block">Tambah Buku</button>
				</form>

			</div>
			<div class="col-sm-8">
				<h3>Tabel Daftar Buku</h3>
				<table class="table table-striped table-hover dtabel">
					<thead>
						<tr>
							<th>No</th>
							<th>Judul Buku</th>
							<th>Penerbit Buku</th>
							<th>Genre Buku</th>
							<th>Tahun Terbit</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>

						<?php
							$no = 1;
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['judul_buku']; ?></td>
							<td><?php echo $row['penerbit_buku']; ?></td>
							<td><?php echo $row['genre_buku']; ?></td>
							<td><?php echo $row['tahun_buku']; ?></td>
							<td>
								<a href="editform.php?id=<?php echo $row['id_buku'];?>" class="btn btn-success" role="button">Edit</a>
								<a href="delete.php?id=<?php echo $row['id_buku']?>" class="btn btn-danger" role="button">Delete</a>
							</td>
						</tr>
						<?php
							}
							mysqli_close($conn);
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div id="footer">
	          <div class="row">
	             <div class="col-sm-12" style="background-color:#171717; color:white; text-align: center;"><h1>Perpus.Net</h1>
	             <hr style="background-color: #4E4E4E;">
	             <a href="https://web.facebook.com/adre.satria11/"><img class="image" border="0" title="Facebook" src="logo/facebook.png" width="40px" height="40px" ></a>

	             <a href="https://www.instagram.com/adre_satria/"><img class="image" border="0"title="Instagram" src="logo/instagram.png" width="40px" height="40px"></a>

	             <a href="https://twitter.com/adre_satria"><img class="image" border="0"title="Twitter" src="logo/twitter.png" width="40px" height="40px"></a>

	             <a href="https://www.youtube.com/channel/UC5_OX0jJB-mxecu37UWrwJA/featured"><img class="image" border="0"title="Youtube" src="logo/youtube.png" width="40px" height="40px"></a>

	      <br>
	      <p>Website ini dibuat untuk memenuhi tugas praktikum Pemrograman Web</p>

	    <hr style="background-color: #4E4E4E;">
	      Copyright &copy; 2020 Kelompok 5</p>
	    <p>Terima Kasih :)</p>
	    </div>
	  </div>
	</div>

</body>

	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('.dtabel').DataTable();
	} );
	</script>

</html>
