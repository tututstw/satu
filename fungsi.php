
<?php 
require 'koneksi.php';

function daftar($data) {
	global $kon;

	$username = strtolower(stripslashes($data['username']));
	$password = mysqli_real_escape_string($kon,$data['password']);
	$nama = mysqli_real_escape_string($kon,$data['name']);
	$alamat = mysqli_real_escape_string($kon,$data['alamat']);
	$email = mysqli_real_escape_string($kon,$data['E-mail']);
	$jenis = $data['jeniskelamin'];
	$level = $data['level'];

	

// cek username 

	$cek = mysqli_query($kon,"SELECT * FROM user WHERE username='$username'");
	$cek_lagi = mysqli_query($kon,"SELECT * FROM user WHERE nama='$nama'");
	
	if (mysqli_fetch_assoc($cek)) {
		# code...
		echo "<script> 
		alert('username telah terdaftar');
		</script>";

		return false;
	}

	if (mysqli_fetch_assoc($cek_lagi)) {
		// code...
		echo "<script> 
		alert('nama telah terdaftar');
		</script>";

		return false;
	}



	
	

	$query = mysqli_query($kon,"INSERT INTO user VALUES ('$username','$password','$nama','$alamat','$email','$jenis','$level')");

	return mysqli_affected_rows($kon);
}


function query($query){
	global $kon;

	$result = mysqli_query($kon,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows = $row;
	}
return $rows;
	
}

function ubah($data) {

	global $kon;

		$id = $data["id_barang"];
		$gambar = htmlspecialchars($data["gambar"]);
		$harga = htmlspecialchars($data["harga"]);
		$jumlahbarang = htmlspecialchars($data["jumlahbarang"]);

		$query = "UPDATE buku SET   
			gambar='$gambar', 
			harga='$harga',
			jumlah_buku='$jumlahbarang'
		WHERE id_barang = $id ";
		
		
		mysqli_query($kon,$query);
		return mysqli_affected_rows($kon);
		
			

}



function tambah($data) {
global $kon;
	
	$NAMA = $_SESSION['nama'];
	$gambar = $data["gambar"];
	$nama_barang = $data["nama_barang"];
	$harga = $data["harga"];
	$jumlah_barang = $data["jumlahbarang"];



	$query = "INSERT INTO penjualan VALUES ('','$NAMA','$gambar','$nama_barang','$harga','$jumlah_barang')";

	mysqli_query($kon, $query);
	return mysqli_affected_rows($kon);


}

function hapus($data) {
	global $kon;

	$id  = $_GET['id'] ;

	$query = "DELETE FROM penjualan WHERE id_barang = '$id'";

	return mysqli_query($kon,$query);

}

function cari($keyword) {
		
		$query = "SELECT * FROM penjualan WHERE 
				 id_barang LIKE '%$keyword%'
				OR nama_barang LIKE '%$keyword%'
				OR Harga LIKE '%$keyword%'
				OR jumlahbarang LIKE '%$keyword%'
				";
		

		return query($query);
	}

	
 ?>