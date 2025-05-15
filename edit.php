<?php 
include 'koneksi.php'; 

$id      = $_POST['id'];
$nis     = $_POST['nis'];
$nama    = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$telp    = $_POST['telp'];
$alamat  = $_POST['alamat'];

$ceknis = mysqli_query($koneksi, "SELECT * FROM siswa WHERE NIS='$nis'");

if (mysqli_num_rows($ceknis) > 0) {
    echo "<script>
        alert('Gagal: NIS sudah terdaftar oleh siswa lain!');
        window.location.href = 'form-edit.php?id=$id';
    </script>";
    exit;
} else {
    $update = mysqli_query($koneksi, "UPDATE siswa SET NIS='$nis', Nama='$nama', Jurusan='$jurusan', No_Telp='$telp', Alamat='$alamat' WHERE ID_SISWA='$id'");

    if ($update) {
        echo "<script>
            alert('Data berhasil disimpan!');
            window.location.href = './';
        </script>";
        exit;
    }
}
?>