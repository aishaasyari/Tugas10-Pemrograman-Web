<?php
include("koneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //query hapus
    $sql = "DELETE FROM pesanalumni WHERE id = $id";
    $query = mysqli_query($conn,$sql);

    //cek query
    if( $query ){
        header('Location: datapesan.php');
    } else {
        die("gagal menghapus...");
    }
}

?>