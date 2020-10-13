<!--
hdzzzzzz01@gmail.com
M Hudzaifah Assyahid
13-10-2020
Title : First PHP


-->

<?php 

/*

	Variable super global
	$_GET
	$_POST
	$_REQUEST
	$_SESSION
	$_COOKIE
	$_SERVER
	$_ENV

*/


	//metode request get dengan variable $_GET berbeda

	//input dengan cara assosiative array
	$_GET['nama'] = "syahid";

	var_dump($_GET);

	//cara khusus input $_GET dengan memasukanya pada url



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
		

	</style>
</head>
<body>
	<ul>
	
	<?php foreach ($mahasiswa as $mhs ): ?>
		<li><a href="bio.php?nama=<?php echo $mhs['nama']; ?>&hobby=<?php echo $mhs['hobby']; ?>&cita-cita=<?php echo $mhs['cita-cita']; ?>&foto=<?php echo $mhs['foto']; ?>"><?php echo $mhs["nama"]; ?></a></li>
	<?php endforeach ?>

	</ul>

</body>
</html>