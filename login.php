<?php
// Mengaktifkan session pada php
session_start();
include 'Koneksi.php';

$username = $_POST['user'];
$password = $_POST['pass'];

$login = mysqli_query($mysqli,"select * from tabel_pengguna where Username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if($data['Role']=="admin"){

        // buat session login dan username
        $_SESSION['Username'] = $username;
        $_SESSION['Role'] = "admin";
        // alihkan ke halaman dashbord admin
        header("location:Admin/Adminlogin.php");

        // cek jika user login sebagai user
    }else if($data['Role']=="user"){
        // buat session login dan username
        $_SESSION['Username'] = $username;
        $_SESSION['Role'] = "user";
        header("location:User/Userlogin.php");
    }else{
        header("location:Index.php");
    }
}else{
    header("location:index.php?pesan=gagal");

}