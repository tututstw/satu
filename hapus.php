<?php 
require "fungsi.php";
$id = $_GET['id'];
if (hapus($id)>0) {
	// code...

	echo "
	<script>
	document.location.href='beranda.php';
	</script>";
}else {

	echo "
	<script>	
	alert ('gagal hapus');
	document.location.href='beranda.php';
	</script>";
	return false;


}



 ?>