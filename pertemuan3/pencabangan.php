<!--
hdzzzzzz01@gmail.com
M Hudzaifah Assyahid
13-10-2020
Title : First PHP


-->

<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP</title>
</head>
<body>

	<!--

		if elseif else

		switch case

		ternary


	-->


	<?php

	//mengunakan if else php 

	$sepuluh = 10;

	if($sepuluh == 10)
		echo "benar";
	else if ($sepuluh >10)
		echo "salah";
	else
		echo "salah juga";

	//baris baru

	echo "<br>";



	//Mengunakan Switch Case

	switch ($sepuluh) {
		case 1:
			echo "satu";
			break;

		case 10:
			echo "sepuluh";
			break;
		
		default:
			echo "bukan";
			break;
	}


	//menggunakan ternary 
	echo "<br>";

	$ternary = $sepuluh == 10 ?: $sepuluh > 10 ?: $sepuluh<10 ;

	//menghasilkan nilai true
	echo $ternary;


	 ?>



	

</body>
</html>