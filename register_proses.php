<?php
session_start();

include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['flash'] = "Email sudah terdaftar!";
    header("location:register.php");
} else {
    $insert_query = "INSERT INTO user (email, password) VALUES ('$email', '$password')";
    if (mysqli_query($koneksi, $insert_query)) {
        $_SESSION['flash'] = "Pendaftaran berhasil! Silakan login.";
        header("location:login.php");
    } else {
        $_SESSION['flash'] = "Terjadi kesalahan, coba lagi!";
        header("location:register.php");
    }
}

mysqli_close($koneksi);
?>