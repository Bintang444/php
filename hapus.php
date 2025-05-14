<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM siswa WHERE ID_SISWA='$id'");

mysqli_close($koneksi);

echo "<script>
        alert('Data berhasil dihapus!');
        window.location.href = 'index.php';
      </script>";
?>