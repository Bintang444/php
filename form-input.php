<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM INPUT DATA SISWA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background: #fff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"],
        input[type="reset"],
        button {
            width: 48%;
            padding: 10px;
            margin-top: 15px;
            border: none;
            border-radius: 5px;
            background-color: #3498db;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="reset"] {
            background-color: #e74c3c;
        }
        button {
            background-color: #2ecc71;
        }
        input[type="submit"]:hover,
        input[type="reset"]:hover,
        button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <form action="input.php" method="POST">
        <h2>Form Input Siswa</h2>

        <label for="nis">NIS:</label>
        <input type="number" name="nis" id="nis" required>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" required>

        <label for="telp">No Telp:</label>
        <input type="number" name="telp" id="telp" required>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" rows="4" cols="50" required></textarea>

        <div style="display: flex; justify-content: space-between;">
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </div>
        
        <!-- Tombol Kembali -->
        <div style="margin-top: 10px;">
            <button type="button" onclick="window.location.href='hasil.php'">Kembali</button>
        </div>
    </form>
</body>
</html>
