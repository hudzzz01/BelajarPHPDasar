<!--
hdzzzzzz01@gmail.com
M Hudzaifah Assyahid
13-10-2020
Title : First PHP


-->

<?php 

//membuat array 

//cara lama
$merekKendaraan = array("toyota","suzuki","honda");

//cara baru
$merkMobil = ["suzuki","honda","toyota","dastun","subaru"];
$dump = [123,"huruf-huruf",false];

/*cara menampilkan array

vardump
print_r()


menampilkan emelen pada arryau

array[index]


menambahkan elemen baru pada array
array[] = "new values"

*/

//Array Multi Dimensi
$mahasiswa = [

	["M Hudzaifah Assyahid", "Nonton Film", "Programer"],
	["Anonymous", "masak", "hacker"],
	["Wizard", "Iseng", "Pretender"]

];


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP</title>

	<style type="text/css">
		
		.kotak{
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
		.clear{
			clear: both;
		}

	</style>
</head>
<body>
	
	<ul>
	<?php foreach ($mahasiswa as $mhs ): ?>


		<?php
		$i =0;
		 foreach ($mhs as $data ):
		 	switch ($i) {
		 		case 0:
		 			echo "<li> Nama : ".$data."</li>";
		 			break;
		 		case 1:
		 			echo "<li> Hobi : ".$data."</li>";
		 			break;
		 		case 2:
		 			echo "<li> Cita-cita : ".$data."</li>";
		 			break;
		 		default:
		 			echo "<li> Gagal : ".$data."</li>";
		 			break;
		 	}
		 	$i++;

		  ?>

				<?php endforeach ?>
		<br><br><br>
	<?php endforeach ?>
	</ul>



	

</body>
</html>