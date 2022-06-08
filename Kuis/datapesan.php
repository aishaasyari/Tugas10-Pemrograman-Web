<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Alumni</title>
</head>
<body>
    <header>
        <h2>Data Pesan Alumni</h2>
    </header>
    <nav>
        <a href="pesanalumni.html">Tambah Baru</a>
    </nav>
    <br>

    <table border = "1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Tahun Lulus</th>
                <th>Pekerjaan</th>
                <th>Message</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM pesanalumni";
            $query = mysqli_query($conn,$sql);

            while ($pesanalumni = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$pesanalumni['id']."</td>";
                echo "<td>".$pesanalumni['name']."</td>";
                echo "<td>".$pesanalumni['email']."</td>";
                echo "<td>".$pesanalumni['address']."</td>";
                echo "<td>".$pesanalumni['tahunlulus']."</td>";
                echo "<td>".$pesanalumni['pekerjaan']."</td>";
                echo "<td>".$pesanalumni['message']."</td>";
                echo "<td align = 'center'><a href='edit.php?id=".$pesanalumni['id']."'>Edit</a> | <a href='delete.php?id=".$pesanalumni['id']."'>Hapus</a></td>"; 
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total : <?php echo mysqli_num_rows($query)?></p>
</body>
</html>