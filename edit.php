<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_bk'];
$judul = $_GET['judul_bk'];
$penerbit = $_GET['terbit_bk'];
$genre = $_GET['genre_bk'];
$tahun = $_GET['tahun_bk'];

//query update
$query = "UPDATE buku SET judul_buku='$judul' , penerbit_buku='$penerbit' , genre_buku='$genre' , tahun_buku='$tahun' WHERE id_buku='$id' ";

if (mysqli_query($conn, $query)) {
	# credirect ke page index
	header("location:home.php");

}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>
