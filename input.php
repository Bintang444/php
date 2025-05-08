<?php 
include 'koneksi.php'; 

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

$ceknis = mysqli_query($koneksi, "SELECT NIS FROM siswa WHERE NIS='$nis'");

if (mysqli_num_rows($ceknis) > 0) {
    echo "<script>
        alert('Gagal: NIS sudah terdaftar!');
        document.location = 'form-input.php';
    </script>";
} else {
    $insert = mysqli_query($koneksi, "INSERT INTO siswa (NIS, Nama, Jurusan, No_Telp, Alamat) VALUES ('$nis', '$nama', '$jurusan', '$telp', '$alamat')");
    echo "<script>
        alert('Data berhasil disimpan!');
        document.location = 'hasil.php';
    </script>";
}

?>
