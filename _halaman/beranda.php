<?php
$title = "Beranda";
$judul = $title;

?>

<?= content_open($title = 'Informasi Beranda') ?>
<?= $session->pull("info") ?>
<h1>
  <center>Selamat Datang</center>
</h1>
<br>

<?= content_open() ?>
<center> <img src="./assets/Logo_BMKG_(2010).png" style="width: 20%; opacity: 50%;"> </center>

<?= content_close() ?>