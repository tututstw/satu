<?php 
require "fungsi.php";
$id = $_GET['id'];

$query = query("SELECT * FROM penjualan WHERE id_barang = '$id'");

if (isset($_POST['$checkout'])) {
	// code...

	// if () {
	// 	// code...
	// }

	if ($query['jumlahbarang'] < 0) {
	// code...

	echo "<script>
	alert('barang habis');
	document.location.href='beranda2.php';
	</script>";
	return false;
	}
}
if (isset($_POST['keluar'])) {
	// code...
	echo "<script>
	alert('batal beli');
	document.location.href='beranda2.php';
	</script>";	
}

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 	<title>data beli</title>
 </head>
 <body>
 	<form class="text-center" method="post">
 		<table align="center">
 			<tr class="bg-danger ">
 				<td>
 					data barang yang di beli 
 				</td>
 			</tr>
 			<tr class="bg-light">
 				<td>

 					gambar : <?= $query['gambar'] ?> <br>
 					nama :  <?= $query['nama_barang']?> <br>
 					harga : <?= $query['harga'] ?> <br>
 					jumlah barang yang tersisa : <?= $query['jumlahbarang'] ?> <br>
 					<br>
 					<br>
 					<input type="text" name="banyak" placeholder="masukkan jumlah beli ">
 					<input type="submit" name="checkout" value="checkout">
 					<input type="submit" name="info" value="info">
 					<input type="submit" name="keluar" value="keluar">
 				</td>
 			</tr>
 		</table>
 	</form>
 
 </body>
 </html>