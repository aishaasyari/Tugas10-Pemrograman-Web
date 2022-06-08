<?php

include("koneksi.php");
$sql = mysqli_query($conn,"SELECT * FROM tb_siswa");
if (!$sql) {
    die("Gagal Cetak Data");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Data Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .container{
            width: 80%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h4 class="alert alert-primary fst text-center mt-3" role="alert">DATA SISWA BARU</h4>
        <table class="table table-bordered border-dark">
            <tr class="text text-center">
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
            <tr>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_row($sql)) {
                    echo "<tr>
                    <td>$no</td>
                    <td>$data[1]</td>
                    <td>$data[2]</td>
                    <td>$data[3]</td>
                    </tr>";
                    $no++;
                }
                ?>
            </tr>
        </table>
        <div class="form-group gap-2 d-md-flex justify-content-md-end">
            <a href="tambah_siswa.php" role="button" class="btn btn-danger">TAMBAH DATA</a>
            <a href="reportdataexcel.php" role="button" class="btn btn-success">EXPORT TO EXCEL</a>
        </div>
    </div>
</body>
</html>