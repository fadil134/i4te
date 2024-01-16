<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- General JS Scripts -->
<script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/popper.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/tooltip.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/izitoast/js/iziToast.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/stisla.js"></script>


<!-- JS Libraies -->
<?php
if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") {?>
<script src="<?php echo base_url(); ?>assets/modules/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<?php
} elseif ($this->uri->segment(2) == "index_0") {?>
<script src="<?=base_url();?>assets/modules/datatables/DataTables-1.13.8/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>assets/modules/datatables/DataTables-1.13.8/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<?php
} elseif ($this->uri->segment(2) == "gamas") {?>
<script src="<?php echo base_url(); ?>assets/modules/dropzonejs/min/dropzone.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.min.js"></script>

<?php
} elseif ($this->uri->segment(2) == "regist") {?>
<script src="<?php echo base_url(); ?>assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
<?php
} elseif ($this->uri->segment(2) == "features_setting_detail") {?>
<script src="<?php echo base_url(); ?>assets/modules/codemirror/lib/codemirror.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/codemirror/mode/javascript/javascript.js"></script>
<?php
} elseif ($this->uri->segment(2) == "features_tickets") {?>
<script src="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php
}?>

<!-- Page Specific JS File -->
<?php
if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") {?>
<script src="<?php echo base_url(); ?>assets/js/page/index.js"></script>
<?php
} elseif ($this->uri->segment(2) == "gamas") {?>
<script src="<?php echo base_url(); ?>assets/js/page/gamas.js"></script>
<?php
}?>

<!-- Template JS File -->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>

</html>