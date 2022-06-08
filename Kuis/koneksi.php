<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "webalumni";
$conn = mysqli_connect($servername,$user,$pass,$dbname);
if (!$conn) {
die("Database tidak terhubung".$dbname.mysqli_connect_error());
}else {

}
?>