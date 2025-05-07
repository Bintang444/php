<?php 
session_start();
session_destroy();

// set flash message sebelum redirect
session_start();
$_SESSION['flash'] = "Anda telah berhasil logout";
header("Location: login.php");
exit;
?>
