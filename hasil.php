<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>

<h2>Data Siswa</h2>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <!-- <th>ID Siswa</th> -->
        <th>NIS</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>No Telp</th>
        <th>Alamat</th>
    </tr>

    <?php
    $sql = "SELECT * FROM siswa";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['NIS']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['jurusan']}</td>
                    <td>{$row['no_telp']}</td>
                    <td>{$row['alamat']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
    }

    $koneksi->close();
    ?>
</table>

</body>
</html>
