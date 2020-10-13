<!--
hdzzzzzz01@gmail.com
M Hudzaifah Assyahid
14-10-2020
Title : First PHP


-->

<?php 	

//cek submit udadh di pencet belum
if (isset($_POST['submit'])) {

	//cek usernamepassword
	if ($_POST['username']=="hudzzz"&&$_POST['password']==123) {
		header("location: admin.php");
		exit();
		//jika benar di bawa ke halaman admin
	}else
	{
			$error = true;	
				//jika salah tampilkan error
	
	}
}

		



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>	Login</title>
</head>
<body>

	<?php if (	isset($error)){ ?>
		<h1 style="color: red">	Username atau Password Salah</h1>
	<?php } ?>

	<form action="" method="post">	

			<ul>	
					<li>
						<label for="username">	Username :</label>
						<input type="text" name="username" id="username">

					</li>

					<li>
						<label for="Password">	Password :</label>
						<input type="Password" name="password" id="Password">
					</li>
							<button type="submit" name="submit"><h1> Masuk </h1>	</button>

			</ul>
	</form>
</body>
</html>