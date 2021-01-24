<?php
//add dbconnect

include('koneksi.php');

$judul = $_POST['judul_bk'];
$penerbit = $_POST['terbit_bk'];
$genre = $_POST['genre_bk'];
$tahun = $_POST['tahun_bk'];

//query

$query =  "INSERT INTO buku(judul_buku , penerbit_buku , genre_buku , tahun_buku) VALUES('$judul' , '$penerbit' , '$genre' , '$tahun')";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:home.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>
