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
</head>
<body>

	<!--
		
		pemangilan fungsi php
		pemuatan fungsi php


	-->

	<ul>
	<?php 
		for ($i=0; $i < count($merkMobil); $i++) {  ?>
			<li> <?php echo  $merkMobil[$i]   ?> </li>
		<?php  } ?>


	 
	 </ul>






	

</body>
</html>