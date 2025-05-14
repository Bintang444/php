<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<title>Membuat Daftar Dengan PHP dan MySQLi</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			margin: 0;
		}
		.container {
			background-color: white;
			padding: 30px 40px;
			border-radius: 10px;
			box-shadow: 0 4px 8px rgba(0,0,0,0.1);
			width: 350px;
		}
		h2 {
			text-align: center;
			margin-bottom: 20px;
		}
		form table {
			width: 100%;
		}
		input[type="email"],
		input[type="password"] {
			width: 100%;
			padding: 8px;
			margin: 5px 0 15px;
			box-sizing: border-box;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		input[type="submit"] {
			width: 100%;
			padding: 10px;
			background-color: #007bff;
			border: none;
			color: white;
			border-radius: 5px;
			cursor: pointer;
			font-weight: bold;
		}
		input[type="submit"]:hover {
			background-color: #0056b3;
		}
		.message {
			text-align: center;
			margin-bottom: 15px;
			color: red;
		}
        .login-link {
			text-align: center;
			margin-top: 10px;
		}
		.login-link a {
			color: #007bff;
			text-decoration: none;
		}
		.login-link a:hover {
			text-decoration: underline;
		}
	</style>
	<script>
		// Reset form saat halaman di-refresh
		window.onload = function() {
			document.getElementById("loginForm").reset();
		}
	</script>
</head>
<body>
	<div class="container">
		<h2>Daftar</h2>

		<!-- cek pesan notifikasi -->
		<div class="message">
			<?php
            session_start();
            if (isset($_SESSION['flash'])) {
	            echo $_SESSION['flash'];
	            unset($_SESSION['flash']); // supaya cuma muncul sekali
            }
            ?>

		</div>

		<form method="post" action="register_proses.php" id="registerForm">
			<table>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="email" name="email" placeholder="Masukkan Email" required></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="password" placeholder="Masukkan Password" required></td>
				</tr>
				<tr>
					<td colspan="3"><input type="submit" value="DAFTAR"></td>
				</tr>
			</table>			
		</form>
        <div class="login-link">
			<p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
		</div>
	</div>
    <script>
		// Reset form saat halaman di-refresh
		window.onload = function() {
			document.getElementById("registerForm").reset();
		}
	</script>
</body>
</html>