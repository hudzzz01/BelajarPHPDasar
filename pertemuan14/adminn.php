<?php
session_start();



if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}




require 'fungsi.php';

$query = "SELECT * FROM mahasiswa";

$result = query($query);

if (!$result) {
	echo mysql_error($conn);
}

if (isset($_POST['cari'])) {
	$result = cari($_POST["keyword"]);
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Admin</title>
 </head>
 <body>
 	<h1>Selamat Datang Admin</h1>

 	<a href="tambah.php"><h3>Tambah Data Mahasiswa</h3></a>

 	<br>

 	<a href="loggout.php"><h4>Logout</h4></a>

 	<br><br>

 	<form method="post" action="">
 		
 		<label>Cari Mahasiswa </label>
 		<input type="text" name="keyword" size="30" autofocus="" placeholder="Masukan keyword" autocomplete="off">
 		<button type="submit" name="cari" >Cari</button>

 	</form>

 	<br>

 	<table border="1" cellpadding="10" cellspacing="0" >
 		<tr>
	 		<th>No</th>
	 		<th>Aksi</th>
	 		<th>Foto</th>
	 		<th>NIM</th>
	 		<th>NAMA</th>
	 		<th>Jurusan</th>
	 		<th>Email</th>
 		</tr>

 		<?php $i = 1; foreach ($result as  $value): ?>
 			
 		
 		<tr>
	 		<td><?php echo $i; ?></td>
	 		<td><a href="ubah.php?nim=<?php echo $value['nim']; ?>">Ubah</a> | <a href="hapus.php?nim=<?php echo $value['nim']; ?>">Hapus</a></td>
	 		<td><img src="images/<?php echo $value['foto'] ?>"></td>
	 		<td><?php echo $value['nim']; ?></td>
	 		<td><?php echo $value['nama'] ?></td>
	 		<td><?php echo $value['jurursan']; ?></td>
	 		<td><?php echo $value['email']; ?></td>
 		</tr>

 		<?php $i +=1; endforeach ?>

 	</table>
 
 </body>
 </html>