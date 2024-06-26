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
              <h1 class="m-0" style="font-weight: bold;">ຂໍ້ມູນນັກສຶກສາ</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">ເພິ່ມ</button>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">ຂໍ້ມູນ ນັກສຶກສາໃຫມ່</h3>
            </div>
            <br>
            <form method="post">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">ຕາຕະລາງນັກຮຽນ</h3>
                      </div>
                      <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>ລະຫັດ</th>
                              <th>ຊື່</th>
                              <th>ນາມສະກຸນ</th>
                              <th>ເພດ</th>
                              <th>ວັນເກີດ</th>
                              <th>ຊົນເຜົ່າ</th>
                              <th>ສາສະໜາ</th>
                              <th>ສາສະໜາ</th>
                              <th>ລະຫັດ</th>
                              <th>ຊື່</th>
                              <th>ນາມສະກຸນ</th>
                              <th>ເພດ</th>
                              <th>ວັນເກີດ</th>
                              <th>ຊົນເຜົ່າ</th>
                              <th>ສາສະໜາ</th>
                              <th>ສາສະໜາ</th>
                              <th>ສາສະໜາ</th>
                              <th>ສາສະໜາ</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            include "conn.php";
                            $sql = "SELECT * FROM studenttb INNER JOIN classtb ON studenttb.classid=classtb.classid;";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                            ?>
                              <tr>
                                <td><?php echo $row['stid'] ?></td>
                                <td><?php echo $row['stname'] ?></td>
                                <td><?php echo $row['stsurname'] ?></td>
                                <td><?php echo $row['stsex'] ?></td>
                                <td><?php echo $row['stdob'] ?></td>
                                <td><?php echo $row['stvillage'] ?></td>
                                <td><?php echo $row['stdistrict'] ?></td>
                                <td><?php echo $row['stprovince'] ?></td>
                                <td><?php echo $row['streligion'] ?></td>
                                <td><?php echo $row['sttribe'] ?></td>
                                <td><?php echo $row['classname'] ?></td>
                                <td><?php echo $row['yearid'] ?></td>
                                <td><?php echo $row['status'] ?></td>
                                <td><?php echo $row['stphone'] ?></td>
                                <td><?php echo $row['stposition'] ?></td>
                                <td><?php echo $row['sttotal'] ?></td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $row['stid']; ?>">ແກ້ໄຂ</button></td>
                                <td>
                                  <input type="hidden" id="getid" name="getid" value="<?php echo $row['stid'] ?>">
                                  <?php echo "<a href=?action=del&id=" . $row['stid'] . "" ?><button class='btn btn-danger'> <i class='glyphicon fas fa-trash'></i> ລຶບ</button>
                                </td>
                              </tr>
                            <?php
                              include "components/modal/new-student/modal-new-student.php";
                            }
                            ?>
                          </tbody>
                          <tfoot>
                            <tr>
                              <th>ລະຫັດ</th>
                              <th>ຊື່</th>
                              <th>ນາມສະກຸນ</th>
                              <th>ເພດ</th>
                              <th>ວັນເກີດ</th>
                              <th>ຊົນເຜົ່າ</th>
                              <th>ສາສະໜາ</th>
                              <th>ສາສະໜາ</th>
                              <th>ລະຫັດ</th>
                              <th>ຊື່</th>
                              <th>ນາມສະກຸນ</th>
                              <th>ເພດ</th>
                              <th>ວັນເດືອນປີເກີດ</th>
                              <th>ຊົນເຜົ່າ</th>
                              <th>ສາສະໜາ</th>
                              <th>ສາສະໜາ</th>
                              <th>ສາສະໜາ</th>
                              <th>ສາສະໜາ</th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
    <!-- /.content-wrapper -->
    <?php
    include "components/footer.php";
    include "components/update/update-new-student.php";
    ?>

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
  <script src="plugins/chart.js/Chart.min.js"></script>
  <script src="dist/js/pages/dashboard3.js"></script>
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