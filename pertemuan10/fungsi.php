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
	
	//upload'foto

	$foto = upload();

	if (!$foto) {
		return false;
	}

	$query = "INSERT INTO mahasiswa VALUES ('','$nama','$email','$jurusan','$foto')";

	$result = mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);

}



function upload(){

	$namaFile = $_FILES['foto']['name'];
	$ukuranFile = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmpName = $_FILES['foto']['tmp_name'];

	if ($error === 4) {
		echo "<script>
				alert('pilih foto terlebih dahulu');
				</script>";
		return false;
	}

	//cek upload gambar bukan
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
			echo "<script>
				alert('Yang anda upload bukan gambar');
				</script>";
		return false;
	}

	if ($ukuranFile > 1024000) {
		echo "<script>
				alert('ukuran terlalu besar');
				</script>";
		return false;
	}

	//gambar siap di upload
	//nama file baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;
	

	move_uploaded_file($tmpName, 'images/'.$namaFileBaru);
	return $namaFileBaru;



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

	$fotoLama = htmlspecialchars($data['fotoLama']);
	



	//cek user pilih gambar baru atau tidak
	if ($_FILES['foto']['error'] === 4) 
	{
		
		$foto = $fotoLama;
	}
	else
	{
		$foto = upload();
	}
	

	


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



function cari($keyword)
{
	$query = "SELECT * FROM mahasiswa 

				WHERE

				nama LIKE '%$keyword%' OR 
				nim LIKE '%$keyword%' OR 
				email LIKE '%$keyword%' OR 
				jurursan LIKE '%$keyword%'

	";

	return query($query); 
}