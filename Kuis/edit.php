<?php
include("koneksi.php");

//cek id dari form data pegawai
if (!isset($_GET['id'])) {
    header('Location: datapesan.php');
}

$id = $_GET['id'];

//ambil data berdasarkan id
$sql = "SELECT * FROM pesanalumni WHERE id = $id";
$query = mysqli_query($conn,$sql);
$pesanalumni = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Alumni</title>
</head>
<body>
    <header>
        <h1>Data Pesan Alumni</h1>
    </header>
    <form action="editAct.php" method = "post">
        <fieldset>
        <table>
        <tr>
                <td><label for="id">ID</label></td>
                <td><input type="text" name = "id" value="<?php echo $pesanalumni['id'] ?> "  ></td>
                </tr>
                <tr>
                <td><label for="name">Nama  </label></td>
                <td><input type="text" name = "name"  value="<?php echo $pesanalumni['name'] ?>"></td>
                </tr>
                <tr>
                <td><label for="email">Email  </label></td>
                <td><input type="text" name = "email"  value="<?php echo $pesanalumni['email'] ?>"></td>
                <tr>
                <tr>
                <td><label for="address">Address </label></td>
                <td><input type="text" name = "address"  value="<?php echo $pesanalumni['address'] ?>"></td>
                <tr>
                <tr>
                <td><label for="tahunlulus">Tahun Lulus </label></td>
                <td><input type="text" name = "tahunlulus"  value="<?php echo $pesanalumni['tahunlulus'] ?>"></td>
                <tr>
                <tr>
                <td><label for="pekerjaan">Pekerjaan </label></td>
                <td><input type="text" name = "pekerjaan"  value="<?php echo $pesanalumni['pekerjaan'] ?>"></td>
                <tr>
                <td><label for="message">Message  </label></td>
                <td><textarea name="message" cols="21" rows="10"><?php echo $pesanalumni['message']?></textarea></td>
                <tr>
                </tr>
            </table>
            <input type="submit" value="Simpan" name="update">
        </fieldset>
    </form>
</body>
</html>