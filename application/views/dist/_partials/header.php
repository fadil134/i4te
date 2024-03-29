<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>
    <?php echo $title; ?> &mdash; ETB
  </title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/izitoast/css/iziToast.min.css">

  <!-- CSS Libraries -->
  <?php
if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") {?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet"
    href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
  
  <?php
} elseif ($this->uri->segment(2) == "index_0") {?>
  <link rel="stylesheet" href="<?=base_url();?>assets/css/dashboard.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/modules/datatables/DataTables-1.13.8/css/dataTables.bootstrap4.min.css">

  <?php
} elseif ($this->uri->segment(2) == "gamas") {?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/dropzonejs/dropzone.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">

  <?php
} elseif ($this->uri->segment(2) == "modules_datatables") {?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet"
    href="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet"
    href="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
  <?php
} elseif ($this->uri->segment(2) == "modules_ion_icons") {?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/ionicons/css/ionicons.min.css">
  <?php
} elseif ($this->uri->segment(2) == "modules_toastr") {?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/izitoast/css/iziToast.min.css">
  <?php
} elseif ($this->uri->segment(2) == "auth_login") {?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-social/bootstrap-social.css">
  <?php
} elseif ($this->uri->segment(2) == "auth_register") {?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
  <?php
} elseif ($this->uri->segment(2) == "features_post_create") {?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
  <link rel="stylesheet"
    href="<?php echo base_url(); ?>assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
  <?php
} elseif ($this->uri->segment(2) == "features_setting_detail") {?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/codemirror/theme/duotone-dark.css">
  <?php
}?>

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<?php
if ($this->uri->segment(2) == "layout_transparent") {
    $this->load->view('dist/_partials/layout-2');
    $this->load->view('dist/_partials/sidebar-2');
} elseif ($this->uri->segment(2) == "layout_top_navigation") {
    $this->load->view('dist/_partials/layout-3');
    $this->load->view('dist/_partials/navbar');
} elseif ($this->uri->segment(2) != "login" && $this->uri->segment(2) != "auth_forgot_password" && $this->uri->segment(2) != "" && $this->uri->segment(2) != "regist" && $this->uri->segment(2) != "register" && $this->uri->segment(2) != "reset_password" && $this->uri->segment(2) != "errors_503" && $this->uri->segment(2) != "errors_403" && $this->uri->segment(2) != "errors_404" && $this->uri->segment(2) != "errors_500" && $this->uri->segment(2) != "utilities_contact" && $this->uri->segment(2) != "utilities_subscribe") {
    $this->load->view('dist/_partials/layout');
    $this->load->view('dist/_partials/sidebar');
}
?>