<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:index.php");
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Home</title>
	<style type="text/css">
	h1{
		text-align:center;
	}
	.logout{
		width: 4%;
		padding: 10px 20px;
		outline: none;
		border: 1px solid orange;
		font-size: 18px;
		letter-spacing: 1px;
		background: transparent;
		border-radius: 30px;
		cursor: pointer;
		text-align:center;
		margin: 0 auto;
	}
	.logout:hover{
		background-color:#f53677;
		color: white;
	}
	a{
		text-decoration: none;
		font-weight: 400;
		color: orange;
	}
	a:hover{
		color: white;
	}
	</style>
</head>
<body>
	<h1>Halo! Selamat Datang <br> <?php echo $_SESSION['nama']; ?></h1>
	<br>
	<div class="logout">
       <a href="logout.php">Logout</a>
    </div>
</body>
</html>