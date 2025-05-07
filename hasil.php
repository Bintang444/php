<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            padding: 40px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            display: block;
            width: fit-content;
            margin: 20px auto;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #007bff;;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
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
    $sql = "SELECT * FROM siswa ORDER BY Nama DESC";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['NIS']}</td>
                    <td>{$row['Nama']}</td>
                    <td>{$row['Jurusan']}</td>
                    <td>{$row['No_Telp']}</td>
                    <td>{$row['Alamat']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
    }

    $koneksi->close();
    ?>
</table>

<a href="logout.php">LOGOUT</a>

</body>
</html>
