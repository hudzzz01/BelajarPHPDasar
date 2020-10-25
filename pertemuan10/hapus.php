<?php 
require 'fungsi.php';

	$nim = $_GET["nim"];

	if (hapus($nim) > 0) {

		echo "

		<script>
			alert('data berhasil dihapus');
			document.location.href = 'adminn.php';
		</script>


		";
	}
	else
	{
		echo "

		<script>
			alert('data gagal dihapus');
			document.location.href = 'adminn.php';
		</script>


		";

	}


 ?>