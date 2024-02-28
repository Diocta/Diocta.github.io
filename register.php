<?php
require 'koneksi.php';
$name = $_POST["name"];
$username = $_POST["user"];
$email = $_POST["email"];
$notelp = $_POST["notelp"];
$password = $_POST["pass"];
$role = $_POST["role"];

$query_sql = "INSERT INTO tabel_pengguna (Username, email, password, Nama, No_telp, Role)
                 VALUES ('$username', '$email', '$password', '$name', '$notelp', '$role')";

if(mysqli_query($mysqli, $query_sql)) {
    header("location:login.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($mysqli);
}