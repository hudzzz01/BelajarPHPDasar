<!--
hdzzzzzz01@gmail.com
M Hudzaifah Assyahid
13-10-2020
Title : First PHP


-->

<?php 

//membuat fungsu

function sapa()
{
	return "halo";
}


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


	<?php

	//fungsi date time

	echo date("l, d-M-Y");


	echo date( "l" ,time()+60*60*24*2);

	 ?>
	 <br>


	 <!-- pemanggilan fungsi php yang sudah di buat sendiri -->
	 <h1><?php echo sapa(); ?></h1>




	

</body>
</html>