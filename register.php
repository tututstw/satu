<?php 
require "fungsi.php";
require "koneksi.php";

if (isset($_POST["daftar"])) {
	// code...
	if (daftar($_POST) > 0 ) {
		// code...
		echo "<script>
		alert('you can login');
		document.location.href='login.php';
		</script>";
	}else {
		echo "<script>
		alert('gagal');
		document.location.href='register.php';
		</script>";
		return false;
	}
}

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<head>
	<title>register</title>
</head>
<body>
	<form method="post">
		<table align="center" cellpadding="15" border="1">
			<tr>
				<td>
					
					<input type="text" name="username" placeholder="username" required="">
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" name="password" placeholder="password" required="">
				</td>
			</tr>
			<tr>
				<td>
					
					<input type="text" name="name" placeholder="name" required="" >
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="alamat" placeholder="alamat" required="" >
				</td>
			</tr>
			<tr>
				<td>
					
					<input type="text" name="E-mail" placeholder="E-mail"  required="">
				</td>
			</tr>
			<tr>
				<td>
					<input type="radio" name="jeniskelamin" value="laki-laki" checked=""> Laki - Laki
					<input type="radio" name="jeniskelamin" value="perempuan"> Perempuan
				</td>
			</tr>
			<tr>
				<td>
					<input type="radio" name="level" value="penjual" checked>penjual
					<input type="radio" name="level" value="pembeli"> pembeli
				</td>
			</tr>
			<tr>
				<td align="center">
					<input type="submit" name="daftar" value="daftar" > <br>
					jika sudah/tidak daftar silahkan --> 
					<a href="index.php">kembali !</a>
					
				</td>
			</tr>
		</table>
	</form>

</body>
</html>