<!DOCTYPE html>
<html>
<head>
    <title>BERANDA</title>
</head>
<body>
    <?php
    
    include("koneksi.php");
    $id = $_GET["id"];

    $sql = mysqli_query($conn,"SELECT * FROM alumni WHERE id='$id'");

    $hasil = mysqli_fetch_assoc ($sql);
    
    ?>
<h2>Selamat datang <?php echo $hasil["name"]; ?>, <?php echo date("l jS F Y "); ?></h2>
    <h3>Menu</h3>
        <ul>
            <li><a href="pesanalumni.html">Input Kesan Pesan</a></li>
            <li><a href="datapesan.php">Lihat Kesan Pesan</a></li>
            <li><a href="login.php">Log Out</a></li>
        </ul>
    
</body>
</html>