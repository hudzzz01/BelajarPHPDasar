<?php 
require 'fungsi.php';

 
if (isset($_POST['submit'])) {

	


	if(tambah($_POST) > 0){

		echo "

		<script>
			alert('data berhasil ditambahkan');
			document.location.href = 'adminn.php';
		</script>


		";

	}
	else{
		echo "

		<script>
			alert('data gagal ditambahkan');
			document.location.href = 'adminn.php';
		</script>


		";
	}

}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tambah Data</title>
 </head>
 <body>
 	<h1>Masukan data mahasiswa</h1>


 	<form action="" method="post" enctype="multipart/form-data">

 		<ul>
 		
 		<li>
 			<label for="nama">Nama</label>
 			<input type="text" name="nama" id="nama">
 		</li>
 		<li>
 			<label for="jurusan">Jurusan</label>
 			<input type="text" name="jurusan" id="jurusan">
 		</li>
 		<li>
 			<label for="email">Email</label>
 			<input type="text" name="email" id="email">
 		</li>
 		<li>
 			<label for="foto">Foto</label>
 			<input type="file" name="foto" id="foto">
 		</li>
 		<li>
 			<button type="Submit" name="submit">
 				Submit
 			</button>
 		</li>
 		</ul>

 	</form>
 
 </body>
 </html>