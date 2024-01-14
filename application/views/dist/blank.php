<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Total Gamas</h6>
            <div class="statistic">1234</div>
            <!--<div class="label">Total Users</div>-->
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Meet SLA (Yes)</h6>
            <div class="statistic">1234</div>
            <!--<div class="label">Total Users</div>-->
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Meet SLA (No)</h6>
            <div class="statistic">1234</div>
            <!--<div class="label">Total Users</div>-->
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Average MTTR</h6>
            <div class="statistic">1234</div>
            <!--<div class="label">Total Users</div>-->
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">MTTR Meet SLA (Yes)</h6>
            <div class="statistic">1234</div>
            <!--<div class="label">Total Users</div>-->
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">MTTR Meet SLA (No)</h6>
            <div class="statistic">1234</div>
            <!--<div class="label">Total Users</div>-->
          </div>
        </div>
      </div>
    </div>
    <div class="section-body">
      <div class="container">
        <div class="row">
          <div class="card">

          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('dist/_partials/footer');?>