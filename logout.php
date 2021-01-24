<?php

session_start(); // untuk mengaktifkan session user

session_destroy(); // untuk menghentikan session user

header("location:index.php"); // memindahkan ke halaman login dan memberi pesan logout
?>
