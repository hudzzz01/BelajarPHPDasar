<?php 
require 'fungsi.php';

//ambil data url

$nim = $_GET["nim"];

//query berdasarkan id

$mhs = query("SELECT * FROM mahasiswa WHERE nim = $nim")[0];



if (isset($_POST['submit'])) {

	if(ubah($_POST) > 0){

		echo "

		<script>
			alert('data berhasil ubah');
			document.location.href = 'adminn.php';
		</script>


		";

	}
	else{
		echo "

		<script>
			alert('data gagal ubah');
			document.location.href = 'adminn.php';
		</script>


		";
	}

}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Ubah Data</title>
 </head>
 <body>
 	<h1>Masukan data mahasiswa</h1>


 	<form action="" method="post">

 		<input type="hidden" name="nim" value="<?= $mhs['nim'];?>">
 		<ul>
 		<li>
 			<label for="nama">Nama</label>
 			<input type="text" name="nama" id="nama" value="<?= $mhs['nama']?>">
 		</li>
 		<li>
 			<label for="jurusan">Jurusan</label>
 			<input type="text" name="jurusan" id="jurusan" value="<?= $mhs['jurursan']?>">
 		</li>
 		<li>
 			<label for="email">Email</label>
 			<input type="text" name="email" id="email" value="<?= $mhs['email']?>">
 		</li>
 		<li>
 			<label for="foto">Foto</label>
 			<input type="text" name="foto" id="foto" value="<?= $mhs['foto']?>">
 		</li>
 		<li>
 			<button type="Submit" name="submit">
 				Submit ubah
 			</button>
 		</li>
 		</ul>

 	</form>
 
 </body>
 </html>