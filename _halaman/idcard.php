<?php
$title = "";
$judul = $title;
$url = "datapegawai";
include './assets/phpqrcode/qrlib.php';

?>

<?php
$db = mysqli_connect("localhost", "root", "", "dbkppegawai");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}


function registrasi($data)
{

    global $db;

    $email = $data["email"];
    $usernama = $data["usernama"];
    $username = strtolower(stripslashes($data["username"]));
    $password = $data["password"];
    $password2 = $data["password2"];

    $result = mysqli_query($db, "SELECT admin_username FROM tbl_admin WHERE admin_username = '$username'");

    if (mysqli_fetch_assoc($result)) {

        echo "<script>
 			alert('Username Telah Digunakan!');
 			</script>";

        return false;
    }

    if ($password !== $password2) {

        echo "<script>
 			alert('Konfirmasi Password Tidak Sesuai!');
 			</script>";

        return false;
    }

    mysqli_query($db, "INSERT INTO tbl_admin VALUES('', '$username','$usernama', '$password','$email')");

    return mysqli_affected_rows($db);
}

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

?>

<br>
<br>
<br>

<?php
$query = mysqli_query($db, "SELECT * FROM pegawai  WHERE ID ='" .  $_GET['id'] . "'");
while ($data = mysqli_fetch_array($query)) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Print Profile Card</title>
</head>

<body>

    <div class="profile-container">
        <div class="img-container">
            <img src="assets/unggah/profil-pegawai/<?php echo $data["UPLOAD"];?>">
        </div>
        <p class="info full-name"><?= $data["NAMA"]; ?></p>
        <p class="info role">
            <i class="fas fa-star"></i>
            <?= $data["NIP"]; ?>
        </p>
        <p class="info">
            <i class="fas fa-map-marker-alt"></i>
            <?= $data["ALAMAT"]; ?>
        </p>
        <p class="info">
            <i class="fas fa-sitemap"></i>
            <?= $data["JABATAN"]; ?>
        </p>
        <p class="info">
            <i class="fas fa-phone"></i>
            <?= $data["NO_TELEPON"]; ?>
        </p>
        <?php } ?>

        <!-- <div class="qr"> -->
        <!-- <img src="./assets/QR_code_for_mobile_English_Wikipedia.svg.png"> -->
        <?php

        $tempdir = "temp/"; //Nama folder tempat menyimpan file qrcode
        if (!file_exists($tempdir)) //Buat folder bername temp
            mkdir($tempdir);

        //isi qrcode jika di scan
        $codeContents = 'http://localhost/KP-BMKG/';

        //simpan file kedalam folder temp dengan nama 001.png
        QRcode::png($codeContents, $tempdir . "001.png");


        echo '';
        //menampilkan file qrcode 
        echo '<img src="' . $tempdir . '001.png" width= "100%" ; />';
        ?>
        <!-- </div> -->
    </div>
    <br>
    <br>
</body>
<style>
/* * {
    margin-left: 50;
    padding: 0;
    box-sizing: border-box;
    color: #334e64;
    font-family: 'Montserrat', sans-serif;
} */

body {
    min-height: 100vh;
    width: 100%;
    border: 100px;
    /* display: flex; */
    justify-content: center;
    align-items: center;
    background: #fff;
}

.profile-container {
    position: relative;
    background-color: #fff;
    width: 300px;
    border: 2px solid #b92a76;
    padding: 100px 50px 40px;
    border-radius: 12px;
    box-shadow: 0 0 60px 5px rgba(0, 0, 0, 0.2);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.img-container {
    width: 130px;
    height: 130px;
    overflow: hidden;
    border: 5px solid #b92a76;
    border-radius: 50%;
    box-shadow: 0 8px 55px #b92a76a4;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%, -50%);
}

.img-container img {
    width: 100%;
    max-width: 100%;
    transform: scale(1.1);
}

.info {
    margin-bottom: 12px;
}

.info i {
    margin-right: 8px;
    font-size: 1.1em;
}

.place {
    margin-bottom: 40px;
}

.full-name {
    font-size: 1.4em;
    font-weight: bold;
    letter-spacing: 1px;
    color: #000;
}

.posts-info {
    width: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    font-size: 1.1em;
    letter-spacing: 0.5px;
    margin-bottom: 30px;
    text-align: center;
}

.posts-info span {
    display: block;
    font-weight: bold;
    margin-bottom: 4px;
}

.profile-container .qr img {
    width: 70%;
    margin-left: 30px;
    padding-top: -50px;
}

@media print {}
</style>

<?= content_close() ?>