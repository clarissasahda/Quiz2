<?php
  // mengaktifkan session php
    session_start();
    
    // menghubungkan dengan koneksi
    include 'konek.php';
    
    // menangkap data yang dikirim dari form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // menyeleksi data user dengan username dan password yang sesuai
    $result = mysqli_query($koneksi,"SELECT * FROM datauser where username='$username' and password='$password'");

    $cek = mysqli_num_rows($result);
    
    if($cek > 0) {
        $data = mysqli_fetch_assoc($result);
        //menyimpan session user, nama, status dan id login
        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['status'] = "sudah_login";
        $_SESSION['id_login'] = $data['id'];
        setcookie($_SESSION['username'], $_SESSION['password'], time() + (60 * 60), "/");
        header("location:admin.php");
    } else {
        header("location:login.php");
    }  
?>