<?php
$title = "registrasi";
$judul = $title;

if (isset($_POST['simpan'])) {
    if ($_POST['ID'] == "") {
        $data['USERNAME'] = $_POST['USERNAME'];
        $data['PASSWORD'] = password_hash($_POST['PASSWORD'], PASSWORD_DEFAULT);
        $exec = $db->insert('users', $data);
        $info = '<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> Sukses!</h4> Data Sukses Ditambah!
</div>';
    } else {
        echo "simpan";
    }

    if ($exec) {
        $session->set('info', $info);
    } else {
        $session->set("info", '<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> Error!</h4> Proses gagal dilakukan
</div>');
    }
    redirect(url('beranda'));
}
$id_pegawai = "";
$username_pegawai = "";
$password_pegawai = "";

$getdata = $db->ObjectBuilder()->get('users');

?>

<?= content_open('Form Registrasi') ?>

<form action="" method="post">
    <?= input_hidden('ID', $id_pegawai) ?>
    <div class="form-group">
        <label for="username"></label>
        <?= input_text('USERNAME', $username_pegawai) ?>
        <small id="helpId" class="text-muted">Username / Email</small>
    </div>
    <div class="form-group">
        <label for="password"></label>
        <?= input_text('PASSWORD', $password_pegawai) ?>
        <small id="helpId" class="text-muted">Password </small>
    </div>
    <div class="form-group">
        <button type="submit" name="simpan" class="btn btn-info"> <i class="fa fa-save"></i> Simpan</button>
        <a href="<?= url(('beranda')) ?>" class="btn btn-danger"><i class="fa fa-reply"></i> Back</a>
    </div>
</form>

<?= content_close() ?>