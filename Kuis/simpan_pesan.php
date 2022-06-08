<?php
include ("koneksi.php");

if(isset($_POST ["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $tahunlulus = $_POST["tahunlulus"];
    $pekerjaan = $_POST["pekerjaan"];
    $message = $_POST["message"];

    $sql    = "INSERT pesanalumni SET name='$name',address='$address',email='$email',tahunlulus='$tahunlulus',pekerjaan='$pekerjaan',message='$message'";

    $submit = mysqli_query($conn,$sql);
    header("Location : datapesan.php");
}
?>