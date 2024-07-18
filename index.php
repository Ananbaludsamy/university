<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>school-university</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
</head>
<style>
  @media (max-width: 767.98px) {
    .small-box p {
      font-size: 16px;
    }
  }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/temple.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    <?php include "components/sidebar.php"; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0" style="font-weight: bold;">ໜ້າຫຼັກ</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <?php
                  include "conn.php";
                  $sql = "SELECT COUNT(*) as total FROM studenttb";
                  $result = $conn->query($sql);
                  while ($row = $result->fetch_assoc()) {
                  ?>
                    <h3><?php echo $row['total']; ?></h3>
                  <?php
                  }
                  ?>
                  <p>ລົງທະບຽນ</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="new_register.php" class="small-box-footer">ເບິ່ງທັງໝົດ <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <?php
                  include "conn.php";
                  $sql = "SELECT COUNT(*) as total FROM classtb";
                  $result = $conn->query($sql);
                  while ($row = $result->fetch_assoc()) {
                  ?>
                    <h3><?php echo $row['total']; ?></h3>
                  <?php
                  }
                  ?>
                  <p>ຫ້ອງຮຽນ</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="main_classroom.php" class="small-box-footer">ເບິ່ງທັງໝົດ <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <?php
                  include "conn.php";
                  $sql = "SELECT COUNT(*) as total FROM allyearscore_tb";
                  $result = $conn->query($sql);
                  while ($row = $result->fetch_assoc()) {
                  ?>
                    <h3><?php echo $row['total']; ?></h3>
                  <?php
                  }
                  ?>
                  <p>ຄະແນນ</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="Score.php" class="small-box-footer">ເບິ່ງທັງໝົດ <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <?php
                  include "conn.php";
                  $sql = "SELECT COUNT(*) as total FROM feetb";
                  $result = $conn->query($sql);
                  while ($row = $result->fetch_assoc()) {
                  ?>
                    <h3><?php echo $row['total']; ?></h3>
                  <?php
                  }
                  ?>
                  <p>ຈ່າຍຄ່າເທີມ</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="Playment.php" class="small-box-footer">ເບິ່ງທັງໝົດa <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- ./col -->
        </div>
        <!-- /.col-md-6 -->
      </section>
    </div>
    <!-- /.content-wrapper -->
    <?php include "components/footer.php"  ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/jquery/jquery.min"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="dist/js/adminlte.js"></script>
  <script src="dist/js/alert.js"></script>
  <script src="dist/js/pages/dashboard.js"></script>
  <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="plugins/toastr/toastr.min.js"></script>
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script>
    $(function() {
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "buttons": ["excel", "pdf", "print"],
        "language": {
          "info": "ສະແດງ _START_ ຫາ _END_ ຂອງ _TOTAL_ ໜ້າ",
        },
        "order": [],
        "columnDefs": [{
          "targets": 'no-sort',
          "orderable": false,
        }],
      }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
  </script>

  <script>
    /* global Chart:false */
    $(function() {
      'use strict'

      var ticksStyle = {
        fontColor: '#495057',
        fontStyle: 'bold'
      }

      var mode = 'index'
      var intersect = true

      var $salesChart = $('#sales-chart')
      // eslint-disable-next-line no-unused-vars
      var salesChart = new Chart($salesChart, {
        type: 'bar',
        data: {
          labels: ['JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
          datasets: [{
              backgroundColor: '#007bff',
              borderColor: '#007bff',
              data: [1000, 2000, 3000, 2500, 2700, 2500, 3000]
            },
            {
              backgroundColor: '#ced4da',
              borderColor: '#ced4da',
              data: [700, 1700, 2700, 2000, 1800, 1500, 2000]
            }
          ]
        },
        options: {
          maintainAspectRatio: false,
          tooltips: {
            mode: mode,
            intersect: intersect
          },
          hover: {
            mode: mode,
            intersect: intersect
          },
          legend: {
            display: false
          },
          scales: {
            yAxes: [{
              // display: false,
              gridLines: {
                display: true,
                lineWidth: '4px',
                color: 'rgba(0, 0, 0, .2)',
                zeroLineColor: 'transparent'
              },
              ticks: $.extend({
                beginAtZero: true,
                // Include a dollar sign in the ticks
                callback: function(value) {
                  if (value >= 500) {
                    value /= 500
                    value += 'k'
                  }
                  return '$' + value
                }

              }, ticksStyle)
            }],
            xAxes: [{
              display: true,
              gridLines: {
                display: false
              },
              ticks: ticksStyle
            }]
          }
        }
      })
    })
    // lgtm [js/unused-local-variable]
  </script>

</body>

</html>