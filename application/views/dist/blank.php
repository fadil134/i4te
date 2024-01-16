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
        <div class="card-stat">
          <div class="card-stat-body">
            <h6 class="card-stat-title">Total Gamas</h6>
            <div class="stat">
              <?php echo count(array_unique(array_column($sla, 'id_case'))); ?>
            </div>
            <!--<div class="label">Total Users</div>-->
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card-stat">
          <div class="card-stat-body">
            <h6 class="card-stat-title">Meet SLA (Yes)</h6>
            <div class="stat">
              <?php
$filteredSla = array_filter($sla, function ($item) {
    return $item->sc_durasi > 7;
});

$uniqueIdCases = array_unique(array_column($filteredSla, 'id_case'));

echo count($uniqueIdCases);
?>
            </div>
            <!--<div class="label">Total Users</div>-->
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card-stat">
          <div class="card-stat-body">
            <h6 class="card-stat-title">Meet SLA (No)</h6>
            <div class="stat">
              <?php
$filteredSla = array_filter($sla, function ($item) {
    return $item->sc_durasi < 7;
});

$uniqueIdCases = array_unique(array_column($filteredSla, 'id_case'));

echo count($uniqueIdCases);
?>
            </div>
            <!--<div class="label">Total Users</div>-->
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3">
        <div class="card-stat">
          <div class="card-stat-body">
            <h6 class="card-stat-title">Average MTTR</h6>
            <div class="stat">1234</div>
            <!--<div class="label">Total Users</div>-->
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card-stat">
          <div class="card-stat-body">
            <h6 class="card-stat-title">MTTR Meet SLA (Yes)</h6>
            <div class="stat">1234</div>
            <!--<div class="label">Total Users</div>-->
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card-stat">
          <div class="card-stat-body">
            <h6 class="card-stat-title">MTTR Meet SLA (No)</h6>
            <div class="stat">1234</div>
            <!--<div class="label">Total Users</div>-->
          </div>
        </div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header">
              <h4>MTTR & Total case</h4>
            </div>
            <div class="card-body">
              <canvas id="mttr"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h4>SLA Tabel</h4>
        </div>
        <div class="card-body">
          <div> Toggle column:
            <a class="toggle-vis" data-column="2">Durasi Stop Clock</a> -
            <a class="toggle-vis" data-column="3">Durasi Troubleshooting</a> -
            <a class="toggle-vis" data-column="4">Total Durasi</a>
          </div>
          <table id="example" class="table table-striped table-bordered" style="width: 100%;">
            <thead>
              <tr class="text-center">
                <th>Case Id</th>
                <th>Kota</th>
                <th>Durasi Stop Clock</th>
                <th>Durasi Troubleshooting</th>
                <th>Total Durasi</th>
                <th>Meet SLA ?<code>(7 Jam)</code></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($sla as $slas): ?>
              <tr>
                <td>
                  <?=$slas->id_case?>
                </td>
                <td>
                  <?=$slas->kota?>
                </td>
                <td>
                  <?=$slas->total_obs?>
                </td>
                <td>
                  <?=$slas->total_ts?>
                </td>
                <td>
                  <?=$slas->sc_durasi?>
                </td>
                <td>
                  <?php
if ($slas->sc_durasi < 7) {
    echo 'No';
} else {
    echo 'Yes';
}
?>
                </td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('dist/_partials/footer');?>

<script>
  var data = <?= json_encode($chart);?>;
  $(document).ready(function () {
    $(".dataTables_scrollBody").niceScroll();
    var table = $('#example').DataTable({
      paging: true,
      scrollY: '200px',
      stateSave: true
    });

    $('a.toggle-vis').on('click', function (e) {
      e.preventDefault();

      var column = table.column($(this).attr('data-column'));

      column.visible(!column.visible());
    });
    // Data yang diperoleh dari database (gantilah dengan data sesungguhnya)


    // Mengelompokkan data per kota
    var labels = data.map(item => item.kota);
    var totalMTTRData = data.map(item => item.total_MTTR);
    var underSLAData = data.map(item => item.under_SLA);
    var avgMTTRData = data.map(item => item.avg_MTTR);

    // Chart options
    var options = {
      chart: {
        type: 'bar',
        stacked: true,
        height: 350,
      },
      plotOptions: {
        bar: {
          horizontal: false,
        },
      },
      series: [
        { name: 'Total MTTR', data: totalMTTRData },
        { name: 'Under SLA', data: underSLAData },
        { name: 'Avg MTTR', data: avgMTTRData }
      ],
      xaxis: {
        categories: labels,
      },
      legend: {
        position: 'top',
      },
    };

    // Initialize ApexCharts
    var chart = new ApexCharts(document.getElementById('chart'), options);

    // Render the chart
    chart.render();
  });
</script>