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


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP</title>

	<style type="text/css">
		
		div{
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}

	</style>
</head>
<body>
	<?php 
		for ($i=0; $i < count($merkMobil) ; $i++) { 
			# code...
		

	 ?>
	<div>
		<?php echo $merkMobil[$i]; ?>
	</div>

	<?php 
		}
	 ?>

	<!--
		
		pemangilan fungsi php
		pemuatan fungsi php


	-->
	<br><br><br>
	<ul>
	<?php 
		for ($i=0; $i < count($merkMobil); $i++) {  ?>
			<li> <?php echo  $merkMobil[$i]   ?> </li>
		<?php  } ?>


	 
	 </ul>






	

</body>
</html>