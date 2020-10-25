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

function daftar($data)
{
	global $conn;

	$username = strtolower(stripcslashes( $data['username']));
	$password = mysqli_real_escape_string($conn,$data['password']);
	$password2 = mysqli_real_escape_string($conn,$data['password2']);

	//cekusername
	$hasil = mysqli_query($conn,"SELECT username FROM user WHERE username = '$username'");


	if (mysqli_fetch_assoc($hasil)) {
		echo "<script>
				alert('Username telah digunakan');
				</script>";

		return false;

	}



	//cek konfrimasi password

	if ($password !== $password2) {
		echo "<script>
				alert('Password tidak sama');
				</script>";

		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($conn,"INSERT INTO user VALUES('','$username','$password')");


	return mysqli_affected_rows($conn);


}