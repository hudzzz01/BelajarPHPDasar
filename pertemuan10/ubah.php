<?php 
require 'fungsi.php';

$nim = $_GET['nim'];


$mhs = query("SELECT * FROM mahasiswa where nim = $nim")[0];




if (isset($_POST['submit'])) {

	if(ubah($_POST) > 0){

		echo "

		<script>
			alert('data berhasil diubah');
			document.location.href = 'adminn.php';
		</script>


		";

	}
	else{
		
		echo "

		<script>
			alert('data gagal diubah');
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
 	<h1>Ubah data mahasiswa</h1>


 	<form action="" method="post" enctype="multipart/form-data">

 		<input type="hidden" name="nim" value="<?php echo $mhs['nim'];?>">

 		<input type="hidden" name="fotoLama"  value="<?php echo $mhs['foto'];?>">
 		
 		
 		<li>
 			<label for="nama">Nama</label>
 			<input type="text" name="nama" id="nama" required value="<?php echo $mhs['nama'];?>">
 		</li>
 		<li>
 			<label for="jurusan">Jurusan</label>
 			<input type="text" name="jurusan" id="jurusan" required value="<?php echo $mhs['jurursan'];?>">
 		</li>
 		<li>
 			<label for="email">Email</label>
 			<input type="text" name="email" id="email" required value="<?php echo $mhs['email'];?>">
 		</li>
 		<li>
 			<label for="foto">Foto</label> <br>
 			<img src="images/<?php echo $mhs['foto'] ?>" width = "40" >
 			<input type="file" name="foto" id="foto">
 		</li>
 		<li>
 			<button type="Submit" name="submit">
 				Submit perubahan
 			</button>
 		</li>
 		</ul>

 	</form>
 
 </body>
 </html>