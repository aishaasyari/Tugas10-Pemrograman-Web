<?php 
include 'koneksi.php';

if (isset($_POST["masuk"])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$data = mysqli_query($conn,"SELECT * FROM alumni WHERE username='$username'");

	if (mysqli_num_rows($data) == 1 ) {
		$hasil = mysqli_fetch_assoc($data);
		if ($password == $hasil["password"]) {
			header("location: beranda.php?id=".$hasil["id"]."");
		}
	}

}
?>