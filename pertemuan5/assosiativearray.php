<!--
hdzzzzzz01@gmail.com
M Hudzaifah Assyahid
13-10-2020
Title : First PHP


-->

<?php 
	//Assosiative Array

	$mahasiswa = [

		[ "nama" => "M Hudzaifah Assyahid",
		 "hobby" => "Nonton Film",
		  "cita-cita" => "Programer",
			"foto" => "syahid.jpg"],

		["nama" => "Anonymouse", "hobby" => "Kepo", "cita-cita" => "Pentester","foto" => "anonimus.jpg"],
		["nama" => "Wizard", "hobby" => "Iseng", "cita-cita" => "Pretender","foto" => "wizard.jpg"]



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
		<?php foreach ($mahasiswa as $mhs): ?>

			<li><img src="images/<?php echo $mhs['foto'] ?>"></li>
			
			<li> Nama : <?php echo $mhs["nama"]; ?> </li>

			<li> Hobi : <?php echo $mhs["hobby"]; ?> </li>

			<li> Cita-cita : <?php echo $mhs["cita-cita"]; ?> </li>

			<br>

		<?php endforeach ?>




	</ul>


	

</body>
</html>