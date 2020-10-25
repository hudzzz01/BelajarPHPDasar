<?php 
require 'fungsi.php';

if (isset($_POST['daftar'])) {


	if(!daftar($_POST))
	{
		echo "<script>
				alert('pendaftaran gagal');
				</script>";
	}
	else
		{
		echo "<script>
				alert('pendaftaran berhasil');
				</script>";
	}
}

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>

	<form action="" method="post">

		<ul>
			<li>
				<label for="username">Username : </label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password : </label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<label for="password2">Validasi Password : </label>
				<input type="password" name="password2" id="password2">
			</li>
			<li>
				<button type="submit" name="daftar">Daftar</button>
			</li>
		</ul>
		
	</form>

</body>
</html>