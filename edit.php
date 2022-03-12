<?php 
 require "koneksi.php";
 require "fungsi.php";

 $id = $_GET['id'];

 $tampil =query("SELECT * FROM penjualan WHERE id_barang ='$id'");

var_dump($tampil);


if (isset($_POST["ubah"])) {
	// code...
	if (ubah($_POST) > 0) {
		// code...
		echo "<script>
		alert('data berhasil di ubah');
		document.location.href='beranda.php';
		</script>";
	
	}else {
		echo "<script>
		alert('data gagal di ubah');
		document.location.href='edit.php';
		</script>";
		return false;
	}

}
if (isset($_POST["kembali"])) {
	// code...
	echo "<script>
	document.location.href='beranda.php'
	</script>";
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>edit</title>
 </head>
 <body>
 	<h1 align="center">DATA JUALAN</h1>
 	<form method="post">
 		<table align="center">
 			
 			<tr>
 				<td>
 					
 				<label> gambar :</label>
 				<input type="text" name="gambar" require value="<?= $tampil["gambar"]; ?>">
 				</td>
 			</tr>
 			<tr>
 				<td>
 					
 				<label> harga :</label>
 				<input type="text" name="harga" require value="<?= $tampil["harga"]; ?>">
 				</td>
 			</tr>
 			<tr>
 				<td>
 				<label> jumlah barang :</label>
 				<input type="text" name="jumlahbarang" require value="<?= $tampil["jumlahbarang"]; ?>">
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<input type="submit" name="ubah" value="ubah">
 					<input type="submit" name="kembali" value="kembali">
 				</td>
 			</tr>
 		</table>
 	</form>
 </body>
 </html>