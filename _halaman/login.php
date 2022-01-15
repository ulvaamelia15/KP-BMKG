<?php
$setTemplate = false;
if (isset($_POST['login'])) {
    $USERNAME = $_POST['USERNAME'];
    $PASSWORD = $_POST['PASSWORD'];
    $db->where("USERNAME", $USERNAME);
    $data = $db->ObjectBuilder()->getOne("users");

    if ($db->count > 0) {
        // jiak username ada
        $hash = $data->PASSWORD;

        if (password_verify($PASSWORD, $hash)) {
            $session->set("logged", true);
            $session->set("USERNAME", $data->USERNAME);
            $session->set("ID", $data->ID);
            $session->set("LEVEL", $data->LEVEL);
            $session->set("info", '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Sukses!</h4> Selamat Datang <b>' . $data->USERNAME . '</b> di Halaman Utama Aplikasi
                </div>');
            redirect(url("beranda"));
        } else {
            $session->set("logged", false);
            $session->set("info", '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Error!</h4> Nama Pengguna atau Kata Sandi Salah
                    </div>');
            redirect(url("login"));
        }
    } else {
        $session->set("logged", false);
        $session->set("info", '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Error!</h4> Nama Pengguna atau Kata Sandi Salah
                </div>');
        redirect(url("login"));
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
    <?php include '_layouts/head.php' ?>
    <link rel="stylesheet" href="<?= templates() ?>plugins/iCheck/square/blue.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>LOGIN</b> SISTEM KEPEGAWAIAN <b>BMKG</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Masuk untuk memulai sesi Anda</p>
            <?= $session->pull("info") ?>
            <form method="post">
                <label>Username</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="USERNAME" placeholder="Username / Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <label>Password</label>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="PASSWORD" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" name="login" class="btn btn-warning btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
</body>
<?php
include '_layouts/javascript.php';
?>
<script src="<?= templates() ?>plugins/iCheck/icheck.min.js"></script>
<script>
$(function() {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
    });
});
</script>

</html>