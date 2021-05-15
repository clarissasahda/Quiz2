<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "quiz2";

	$koneksi = mysqli_connect($host, $user, $pass, $db);

	if(!$koneksi) {
		die("Koneksi gagal : ".mysql_connect_error());
	}
?>