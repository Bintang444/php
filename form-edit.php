<?php 
include 'koneksi.php'; 

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $ID_Siswa = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE ID_SISWA='$ID_Siswa'");
    $d = mysqli_fetch_array($data);
} else {
    echo "ID tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT DATA SISWA</title>
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
    <form action="edit.php?id=<?php echo $d['ID_SISWA']; ?>" method="POST">
        <h2>Form Edit Siswa</h2>

        <!-- Kirim ID tersembunyi -->
        <input type="hidden" name="id" value="<?php echo $d['ID_SISWA']; ?>">

        <label for="nis">NIS:</label>
        <input type="number" name="nis" id="nis" value="<?php echo $d['NIS']; ?>" required>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?php echo $d['Nama']; ?>" required>

        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" value="<?php echo $d['Jurusan']; ?>" required>

        <label for="telp">No Telp:</label>
        <input type="number" name="telp" id="telp" value="<?php echo $d['No_Telp']; ?>" required>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" rows="4" required><?php echo $d['Alamat']; ?></textarea>

        <div style="display: flex; justify-content: space-between;">
            <input type="submit" value="Update">
            <input type="reset" value="Reset">
        </div>

        <div style="margin-top: 10px;">
            <button type="button" onclick="window.location.href='index.php'">Kembali</button>
        </div>
    </form>
</body>
</html>