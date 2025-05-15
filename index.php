<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}
include 'koneksi.php';
?>


<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(to right, #e0eafc, #cfdef3);
        margin: 0;
        padding: 40px;
        color: #333;
    }

    h2 {
        text-align: center;
        color: #222;
        margin-bottom: 30px;
        font-size: 32px;
    }

    table {
        border-collapse: collapse;
        width: 90%;
        margin: 0 auto 30px;
        background-color: #ffffff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    th, td {
        padding: 14px 18px;
        text-align: left;
        border-bottom: 1px solid #eee;
    }

    th {
        background-color: #4a90e2;
        color: #fff;
        font-weight: bold;
    }

    tr:hover {
        background-color: #f9f9f9;
    }

    a {
        display: inline-block;
        margin: 10px 5px;
        text-decoration: none;
        padding: 10px 18px;
        background-color: #4a90e2;
        color: white;
        border-radius: 6px;
        transition: all 0.3s ease;
        text-align: center;
    }

    a:hover {
        background-color: #357ab7;
    }

    td a {
        display: inline-block;
        margin-right: 6px;
        font-size: 14px;
        padding: 6px 12px;
        background-color: #28a745;
        border-radius: 4px;
    }

    td a:first-child {
        background-color: #dc3545;
    }

    td a:hover:first-child {
        background-color: #c82333;
    }

    td a:hover:last-child {
        background-color: #218838;
    }

    .action-buttons {
        display: flex;
        gap: 8px;
    }
</style>
</head>
<body>

<h2>Data Siswa</h2>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID Siswa</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>No Telp</th>
        <th>Alamat</th>
        <th>AKSI</th>
    </tr>

    <?php
    $sql = "SELECT * FROM siswa";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['ID_SISWA']}</td>
                    <td>{$row['NIS']}</td>
                    <td>{$row['Nama']}</td>
                    <td>{$row['Jurusan']}</td>
                    <td>{$row['No_Telp']}</td>
                    <td>{$row['Alamat']}</td>
                    <td><a href='hapus.php?id={$row['ID_SISWA']}' onclick='return confirm(\"Yakin Ingin Hapus Data?\");'>HAPUS</a>
                    <a href='form-edit.php?id={$row['ID_SISWA']}'>EDIT</a></td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
    }

    $koneksi->close();
    ?>
</table>

<a href="form-input.php">TAMBAH DATA</a>
<a href="logout.php">LOGOUT</a>

</body>
</html>
