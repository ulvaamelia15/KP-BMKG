<?php
$title = "Pegawai";
$judul = $title;
$url = 'datapegawai';

// function upload (){
//     $namaFile = $_FILES ['UPLOAD']['nama'];
//     $ukuranFile = $_FILES ['UPLOAD']['size'];
//     $error = $_FILES ['UPLOAD']['error'];
//     $tmpName = $_FILES ['UPLOAD']['tmpName'];

//     // Cek apakah ada gambar yang di upload
//     if ($error === 4) {
//         echo "<script>
//         alert ('Pilih Gambar terlebih dahulu!')
//         </script>";
//         return false;
//     }

//     // gambar siap uploaded
//     move_uploaded_files($tmpName, 'temp/'. $namaFile);
//     return $namaFile;
// }

if (isset($_POST['save'])) {
  $file = upload('UPLOAD', 'profil-pegawai');
  if ($file != false) {
    $data['UPLOAD'] = $file;
  }

  if ($_POST['ID'] == "") {
    $data['NAMA'] = $_POST['NAMA'];
    $data['NIP'] = $_POST['NIP'];
    $data['TEMPAT_LAHIR'] = $_POST['TEMPAT_LAHIR'];
    $data['ALAMAT'] = $_POST['ALAMAT'];
    $data['TANGGAL_LAHIR'] = $_POST['TANGGAL_LAHIR'];
    $data['AGAMA'] = $_POST['AGAMA'];
    $data['GOLONGAN'] = $_POST['GOLONGAN'];
    $data['JABATAN'] = $_POST['JABATAN'];
    $data['NO_TELEPON'] = $_POST['NO_TELEPON'];
    $data['SPEGAWAI'] = $_POST['SPEGAWAI'];
    $db->insert("pegawai", $data);
?>
<script type="text/javascript">
window.alert('Data Berhasih Di Simpan');
window.location.href = "<?= url('datapegawai') ?>";
</script>
<?php
  } else {
    $data['NAMA'] = $_POST['NAMA'];
    $data['NIP'] = $_POST['NIP'];
    $data['TEMPAT_LAHIR'] = $_POST['TEMPAT_LAHIR'];
    $data['ALAMAT'] = $_POST['ALAMAT'];
    $data['TANGGAL_LAHIR'] = $_POST['TANGGAL_LAHIR'];
    $data['AGAMA'] = $_POST['AGAMA'];
    $data['GOLONGAN'] = $_POST['GOLONGAN'];
    $data['JABATAN'] = $_POST['JABATAN'];
    $data['NO_TELEPON'] = $_POST['NO_TELEPON'];
    $data['SPEGAWAI'] = $_POST['SPEGAWAI'];
    $db->where('ID', $_POST['ID']);
    $db->update("pegawai", $data);
  ?>
<script type="text/javascript">
window.alert('Data Berhasih Di Edit');
window.location.href = "<?= url('datapegawai') ?>";
</script>
<?php
  }
}

if (isset($_GET['delete'])) {
  $db->where("ID", $_GET['id']);
  $db->delete("pegawai");
  ?>
<script type="text/javascript">
window.alert('Data Berhasih Di Hapus');
window.location.href = "<?= url('datapegawai') ?>";
</script>
<?php
}


if (isset($_GET['tambah']) or isset($_GET['edit'])) {

  $id_pegawai = "";
  $nama_pegawai = "";
  $nip_pegawai = "";
  $tempatlahir_pegawai = "";
  $alamat_pegawai = "";
  $tanggallahir_pegawai = "";
  $agama_pegawai = "";
  $golongan_pegawai = "";
  $jabatan_pegawai = "";
  $notelp_pegawai = "";
  $status_pegawai = "";
  $upload_profil = "";

  if (isset($_GET['edit']) and isset($_GET['id'])) {
    $id = $_GET['id'];
    $db->where('ID', $id);
    $row = $db->ObjectBuilder()->getOne('pegawai');
    if ($db->count > 0) {
      $id_pegawai = $row->ID;
      $nama_pegawai = $row->NAMA;
      $nip_pegawai = $row->NIP;
      $tempatlahir_pegawai = $row->TEMPAT_LAHIR;
      $alamat_pegawai = $row->ALAMAT;
      $tanggallahir_pegawai = $row->TANGGAL_LAHIR;
      $agama_pegawai = $row->AGAMA;
      $golongan_pegawai = $row->GOLONGAN;
      $jabatan_pegawai = $row->JABATAN;
      $notelp_pegawai = $row->NO_TELEPON;
      $status_pegawai = $row->SPEGAWAI;
      $upload_profil  = $row->UPLOAD;
    }
  }
?>

<?= content_open($title = 'Input Data Pegawai') ?>

<form method="post" enctype="multipart/form-data">
    <?= input_hidden('ID', $id_pegawai) ?>
    <div class="form-grup">
        <?= input_file('UPLOAD', $upload_profil) ?>
        <small>Upload Foto Pegawai</small>
    </div>
    <br>
    <div class="form-grup">
        <?= input_text('NAMA', $nama_pegawai) ?>
        <small>Nama Pegawai</small>
    </div>
    <br>
    <div class="form-grup">
        <?= input_number('NIP', $nip_pegawai) ?>
        <small>NIP Pegawai</small>
    </div>
    <br>
    <div class="form-grup">
        <?= input_text('TEMPAT_LAHIR', $tempatlahir_pegawai) ?>
        <small>Tempat Lahir Pegawai</small>
    </div>
    <br>
    <div class="form-grup">
        <?= input_text('ALAMAT', $alamat_pegawai) ?>
        <small>Alamat Pegawai</small>
    </div>
    <br>
    <div class="form-select">
        <?= input_date('TANGGAL_LAHIR', $tanggallahir_pegawai) ?>
        <small>Tanggal Lahir Pegawai</small>
    </div>
    <br>
    <div class="form-select">
        <?= input_text('AGAMA', $agama_pegawai) ?>
        <small>Agama Pegawai</small>
    </div>
    <br>
    <div class="form-select">
        <?= input_text('GOLONGAN', $golongan_pegawai) ?>
        <small>Golongan Pegawai</small>
    </div>
    <br>
    <div class="form-select">
        <?= input_text('JABATAN', $jabatan_pegawai) ?>
        <small>Jabatan Pegawai</small>
    </div>
    <br>
    <div class="form-select">
        <?= input_number('NO_TELEPON', $notelp_pegawai) ?>
        <small>Nomor Telephon Pegawai // ex: 08xx</small>
    </div>
    <br>
    <div class="form-select">
        <?= input_text('SPEGAWAI', $status_pegawai) ?>
        <small>Status Pegawai</small>
    </div>
    <br>
    <div>
        <button type="submit" name="save" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
        <a href="<?= url($url) ?>" class="btn btn-danger"> <i class="fa fa-reply"></i> Back</a>
    </div>
</form>

<?= content_close() ?>

<?php } else { ?>

<?= content_open($title = 'Data Pegawai') ?>

<a href="<?= url($url . '&tambah') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
<hr>

<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>
                <center>NO</center>
            </th>
            <th>PROFIL</th>
            <th>NAMA</th>
            <th>NIP</th>
            <th>TEMPAT LAHIR</th>
            <th>ALAMAT</th>
            <th>TANGGAL LAHIR</th>
            <th>AGAMA</th>
            <th>GOLONGAN</th>
            <th>JABATAN</th>
            <th>NO TELEPON</th>
            <th>STATUS PEGAWAI</th>
            <th>ACTIONS</th>
        </tr>
    </thead>

    <tbody>
        <?php
      $no = 1;
      $getdata = $db->ObjectBuilder()->get('pegawai');
      foreach ($getdata as $row) {
      ?>
        <tr>
            <td>
                <center>
                    <?= $no ?>
                </center>
            </td>
            <td><img src="assets/unggah/profil-pegawai/<?=  $row->UPLOAD ?>" width="80px"></td>
            <td><?= $row->NAMA ?></td>
            <td><?= $row->NIP ?></td>
            <td><?= $row->TEMPAT_LAHIR ?></td>
            <td><?= $row->ALAMAT ?></td>
            <td><?= $row->TANGGAL_LAHIR ?></td>
            <td><?= $row->AGAMA ?></td>
            <td><?= $row->GOLONGAN ?></td>
            <td><?= $row->JABATAN ?></td>
            <td><?= $row->NO_TELEPON ?></td>
            <td><?= $row->SPEGAWAI ?></td>
            <td>
                <a href="<?= url($url . '&edit&id=' . $row->ID) ?>" class="btn btn-info"><i class="fa fa-edit"></i>
                    Edit</a>
                <a href="<?= url('idcard' . '&print&id=' . $row->ID) ?>" class="btn btn-primary" width="100%"><i
                        class="fa fa-print"></i>
                    Print</a>
                <a href="<?= url($url . '&delete&id=' . $row->ID) ?>" class="btn btn-danger"
                    onclick="return confirm('Apa anda yakin untuk menghapus data ini ?')"><i
                        class="fas fa-backspace"></i>
                    Delete</a>
            </td>
        </tr>
        <?php
        $no++;
      }
      ?>
    </tbody>
</table>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        "scrollX": true
    });
});
</script>
<?= content_close() ?>

<?php } ?>