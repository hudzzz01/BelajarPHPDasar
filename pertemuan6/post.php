

<!DOCTYPE html>
<html>
<head>
	<title>	POST</title>
</head>
<body>
	<?php if (isset($_POST['submit'])): ?>
		<h1> Selamat Datang <?php 	echo $_POST['nama']; ?></h1>
	<?php endif ?>

	<form action="test.php" method="POST">	
			Masukan nama:

			<input type="text" name="nama">
			<br>	
			<button type="submit" name="submit"> kirim	</button>
	</form>

</body>
</html>