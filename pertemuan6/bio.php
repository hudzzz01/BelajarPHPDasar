<?php 

if (!isset($_GET['nama']) || !isset($_GET['hobby']) || !isset($_GET['cita-cita'])) {

	header("location: get.php");
	exit;
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman BIO</title>
</head>
<body>

	
		<li><img src="images/<?php echo $_GET['foto']; ?> "></li>
		<li>Nama : <?php echo $_GET["nama"]; ?></li>
		<li>Hobi : <?php echo $_GET["hobby"]; ?></li>
		<li> Cita Cita : <?php echo $_GET["cita-cita"]; ?></li>
<a href="get.php"> <h1>	Kembali </h1> </a>

</body>
</html>