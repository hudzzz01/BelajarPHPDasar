<?php
session_start();



if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}




require 'fungsi.php';

//pagination
$jumlahDataPerhalaman = 3;
$jumlahData = count(query('SELECT * FROM mahasiswa'));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);

$halamanAktif = (isset($_GET['halaman']) ) ? $_GET['halaman'] : 1;

$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

$query = "SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerhalaman";

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
 	<!-- navigasi -->

 	<br>
 	<?php if ($halamanAktif >1): ?>
 		<a href="?halaman=<?= $halamanAktif-1 ?>">&lt</a>
 	<?php endif ?>
 	
 	<?php for ($i = 1; $i <= $jumlahHalaman; $i++ ): ?>
 		<?php if ($i == $halamanAktif): ?>
 			<a href="?halaman=<?= $i;  ?>" style="font-weight: bold; color: red;"><?php echo $i; ?></a>
 		<?php else: ?>
 			<a href="?halaman=<?= $i;  ?>">  <?php echo $i; ?> </a>
 		<?php endif ?>

 	<?php endfor ?>

 	<?php if ($halamanAktif < $jumlahHalaman): ?>
 		<a href="?halaman=<?= $halamanAktif+1 ?>">&gt</a>
 	<?php endif ?>

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