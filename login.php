<?php session_start() ?>
<?php 
require "koneksi.php";

if (isset($_POST['daftar'])){

echo "<script> 
document.location.href='register.php';
</script>";

}
if (isset($_POST['login'])){
	// code...
	$username = $_POST["username"]; 
    $password = $_POST["password"];

    $data = mysqli_query($kon,"SELECT * FROM  user WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($data);
    $level = mysqli_fetch_assoc($data);
    
    


    if($cek > 0)  {
        // code...
        if ($level["level"] == 'penjual') {
        	// code...
        $_SESSION['nama'] = $level["nama"];
    	

        echo "
        <script>
        alert('login penjual');
        document.location.href='beranda.php';
        </script>
        ";
        }else if($level['level']=='pembeli') {
        	    $_SESSION['nama'] = $level["nama"];
        	 echo "
        <script>
        alert('login pembeli');
        document.location.href='beranda2.php';
        </script>
        ";

        }
       

    } else {
        
        echo "<script>
        alert('username / password salah'); 
        document.location.href='login.php';
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
	<title>login</title>
</head>
<body>
	<form method="post">
		<table align="center">
			<tr>
				<td style="text-align: center;">
					<h1>Login</h1>
					<input type="text" name="username" placeholder="username" >
				</td>
			</tr>
			<tr style="width: 100%">
				<td>
					<input type="password" name="password" placeholder="password" >
				</td>
			</tr>
			<tr>
				<td align="center">
					<input type="submit" name="login" value="login">
					<input type="submit" name="daftar" value="daftar">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>