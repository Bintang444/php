<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan email dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * FROM user WHERE email='$email' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['login'] = "true";
	header("location:index.php");
}else{
	// Set flash message gagal login
	session_start(); // start ulang session untuk flash message
	$_SESSION['flash'] = "Login gagal! Email dan password salah!";
	header("location:login.php"); // Redirect ke login.php
}
?>