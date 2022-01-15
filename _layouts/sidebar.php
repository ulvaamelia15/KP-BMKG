<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= templates() ?>../../../assets/admin-imam.jpeg" class="img-circle" width="10%"
                    alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= $session->get("USERNAME") ?></p>
                <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="<?= url('') ?>" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                            class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="<?= url('beranda') ?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="header">DATA</li>
            <li>
                <a href="<?= url('datapegawai') ?>">
                    <i class="fas fa-table">ㅤ</i> <span>Data Pegawai</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green"></small>
                    </span>
                </a>
            </li>
            <li>
            <li><a href="<?= url('signup') ?>"><i class="fas fa-user-plus">ㅤ</i><span>Registration</span></a>
            </li>
            <li><a href="<?= url('login') ?>"><i class="fas fa-sign-out-alt">ㅤ</i><span>Logout</span></a>
            </li>
            </a>
            </li>
        </ul>
    </section>
</aside>