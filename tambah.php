<?php session_start(); ?>
<?php 
require "fungsi.php";

if (isset($_POST['tambah'])) {
    // code...
    
    if (tambah($_POST) > 0) {
        // code...
        echo "<script>
        alert('data bertambah');
        document.location.href='beranda.php';
        </script>";
    }else {
        echo "<script>
        alert('gagal');
        document.location.href='tambah.php';
        </script>";
        return false;
    }

}



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>tambah penjualan</title>
 </head>
 <body>
 		<form method="post">
 			<table>
 				<tr>
                <td>   
 					<h1>Tambah Data</h1>
                    <input type="text" name="gambar" placeholder="gambar">
                </td>
 				</tr>
                <tr>
                <td>   
                    <input type="text" name="nama_barang" placeholder="nama_barang">
                </td>
                </tr>
                <tr>
                <td>   
                    <input type="text" name="harga" placeholder="harga">
                </td>
                </tr>
                <tr>
                <td>   
                    <input type="text" name="jumlahbarang" placeholder="jumlahbarang">
                </td>
                </tr>
                <tr>
                <td>   
                    <input type="submit" name="tambah" value="tambah">
                </td>
                </tr>
 			</table>
 		</form>
 </body>
 </html>