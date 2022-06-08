<?php
include ("koneksi.php");

if(isset($_POST ["submit"])) {
    $name   = $_POST["name"];
    $address  = $_POST["address"];
    $email  = $_POST["email"];
    $angkatan = $_POST["angkatan"];
    $jurusan   = $_POST["jurusan"];
    $username  = $_POST["username"];
    $password  = $_POST["password"];

    $sql    = "INSERT alumni SET name='$name',address='$address',email='$email',angkatan='$angkatan',jurusan='$jurusan',username='$username',password='$password'";

    $submit = mysqli_query($conn,$sql);
    header("Location : signup.html");
}
?>