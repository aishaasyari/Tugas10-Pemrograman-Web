<?php
include('koneksi.php');
$id = $_GET["id"];
    $user = $_GET["user"];
    $sql = mysqli_query($conn,"SELECT * FROM pesanalumni WHERE id='$id'");

    $array = mysqli_fetch_assoc($sql);
    $cek = "";
                //proses untuk update data
                if (isset($_POST["btn-simpan"])) {
                    $posted         = date("Y-m-d ");
                    $name           = $_POST["name"];
                    $address        = $_POST["address"];
                    $email          = $_POST["email"];
                    $tahunlulus     = $_POST["tahunlulus"];
                    $pekerjaan      = $_POST["pekerjaan"];
                    $message        = $_POST["message"];
            
                    $sql = mysqli_query($conn,"UPDATE pesanalumni SET name='$name', address='$address', email='$email', tahunlulus='$tahunlulus',  pekerjaan='$pekerjaan', message='$message' WHERE id=$id");
            
                    if ($sql) {
                        header("location: cetakalumni.php?id=".$user."");
                    }
                }
            ?>