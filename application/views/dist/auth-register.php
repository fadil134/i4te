<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <!--
                        <div class="login-brand">
                            <img src="<?php echo base_url(); ?>assets/img/stisla-fill.svg" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </div>
                        -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>

                            <div class="card-body">
                                <?php echo validation_errors(); ?>
                                <?php echo form_open('auth/register'); ?>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="username">User Name</label>
                                        <input id="username" type="text" class="form-control" name="username" autofocus>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="nik">NIK</label>
                                        <input id="nik" type="number" class="form-control" name="nik" step="0" min="0">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email">
                                        <div class="invalid-feedback">
                                            Not a valid email
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password" type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Register
                                    </button>
                                </div>
                                <?php echo form_close(); ?>
                                <div class="mt-5 text-muted text-center">
                                    Already have an account? <a href="<?php echo base_url(); ?>auth/login">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php $this->load->view('dist/_partials/js');?>