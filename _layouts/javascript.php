<!-- font awesome -->
<script src="https://kit.fontawesome.com/c4fea5d635.js" crossorigin="anonymous"></script>
<!-- jQuery 3 -->
<script src="<?= templates() ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= templates() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= templates() ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= templates() ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= templates() ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= templates() ?>dist/js/demo.js"></script>

<script src="<?= templates() ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= templates() ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
$(document).ready(function() {
    $('.sidebar-menu').tree()
    $('#example2').DataTable({
        "scrollY": 400,
        "scrollX": true
    });
});
</script>