<?php
    include 'koneksi.php';

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $ID_Siswa = $_GET['id'];

        $hapus = mysqli_query($koneksi, "DELETE FROM siswa WHERE ID_SISWA='$ID_Siswa'");

        if ($hapus) {
            echo "<script>
                    alert('Data Berhasil Dihapus');
                    document.location='./';
                  </script>";
        }
    } else {
        die("Error. No ID Selected!");
    }
?>
