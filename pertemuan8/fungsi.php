<?php 

$conn = mysqli_connect("localhost","root","","mahasiswa");

function query($query){
	global $conn;

	$result = mysqli_query($conn,$query);

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows [] = $row;
	}
	return $rows;
}

function tambah($data)
{
	global $conn;

	$nama = htmlspecialchars($data['nama']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$email = htmlspecialchars($data['email']);
	$foto = htmlspecialchars($data['foto']);

	$query = "INSERT INTO mahasiswa VALUES ('','$nama','$email','$jurusan','$foto')";

	$result = mysqli_query($conn,$query);


	return mysqli_affected_rows($conn);

}

function hapus($nim)
{
	global $conn;
	$query = "DELETE FROM mahasiswa WHERE nim = $nim";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	global $conn;

	$nim = (int)$data['nim'];
	var_dump($nim);




	$nama = htmlspecialchars($data['nama']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$email = htmlspecialchars($data['email']);
	$foto = htmlspecialchars($data['foto']);

	$query = "UPDATE mahasiswa SET 
	nama = '$nama',
	jurursan = '$jurusan',
	email = '$email',
	foto = '$foto'
	WHERE nim = $nim
	";

	$result = mysqli_query($conn,$query);
	


	return mysqli_affected_rows($conn);






	$result = mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}
