<?php 
require "koneksi.php";
require "fungsi.php";
session_start();

$nama = $_SESSION['nama'];

$belanja = mysqli_query($kon,"SELECT * FROM penjualan WHERE nama='$nama'");

$query2 = query("SELECT * FROM user WHERE nama ='$nama'");





if (isset($_POST['tambah'])) {
	// code...
	echo "<script>
	document.location.href='tambah.php';
	</script>";



}

if (isset($_POST['keluar'])) {
	// code...
	
	echo "<script>
        alert('logout berhasil');
        document.location.href='login.php';
        </script>";
    session_destroy();
}




 ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<head>
	<title>beranda</title>
</head>
<style type="text/css">
	.kotak {
		width:70%;
		height:70%;
		background:green;
	}

</style>
<body class="text-center">
	<form class="text-center" method="post">	
		<table border="1" style="width: 100%;">
			
			<tr class="bg-danger">
				<td style="width:15% ;">
				anda login sebagai <br>
				<i>
					
				nama : <?= $query2["nama"]; ?> <br>
				alamat : <?= $query2["alamat"]; ?> <br>
				email : <?= $query2["email"]; ?><br>
				sebagai : <?= $query2["level"]  ?>
				</i>
					

				</td>
				<td style="width:75 %;">
					<h1>barang jualan anda <?= $query2["nama"] ?></h1> <br>
					<input type="submit" name="tambah" value="tambah"> <br><br>
				</td>
				<td style="width :10%;">
					<input type="submit" name="keluar" value="logout">
				</td>
			</tr>
			<?php $i = 0 ;  ?>
			<?php foreach ($belanja as $benda) : ?>
			<tr >
				<td>
					<a href="edit.php?id=<?= $benda["id_barang"] ?>" >edit</a>
					<a href="hapus.php?id=<?= $benda["id_barang"] ?>" onClick = "return confirm('apakah anda yakin menghapus data ?')" >hapus</a>
				</td>

				<td class="kotak">
					
					<label>kode : </label> <?= $benda["id_barang"] ;?> <br>
					<label>penjual : </label> <?= $benda["nama"]; ?> <br>
					<label>gambar :</label>	<?=  $benda["gambar"];  ?> <br>
					<label>Nama Barang :</label><?=  $benda["nama_barang"];  ?> <br>
					<label>harga : </label> <?= $benda["harga"]; ?> <br>
					<label>jumlah barang :</label> <?= $benda["jumlahbarang"]; ?>
					
				</td>

				<td>

				</td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
			
		
		</table>
	</form>
	
</body>
</html>