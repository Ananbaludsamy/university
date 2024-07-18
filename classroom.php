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
</head>
<style>
  @media (max-width: 767.98px) {
    .small-box p {
      font-size: 16px;
    }
  }
</style>

<!-- php -->

<!-- end php -->

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
              <h1 class="m-0" style="font-weight: bold;">ຫ້ອງຮຽນ</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">ປ່ອນຂໍ້ມູນ ຫ້ອງຮຽນ</h3>
            </div>
            <form method="POST">
              <div class="card-body">
                <div class="form-row">
                  <div class="col-2">
                    <label for="st-student">ນັກຮຽນທັງໝົດ</label>
                    <?php
                    include "conn.php";
                    if (isset($_GET['id'])) {
                      $id = $_GET['id']; // สมมติว่า $id มาจาก query string
                      // ป้องกัน SQL Injection
                      $id = $conn->real_escape_string($id);
                      $sql = "SELECT * FROM studenttb INNER JOIN classtb ON studenttb.classid=classtb.classid WHERE classtb.classid = '$id';";
                      $result = $conn->query($sql);
                      if ($result) {
                        // นับจำนวนแถวที่ได้จากการ query
                        $row_count = $result->num_rows;
                    ?>
                        <input type="text" name="st-student" class="form-control" value="<?php echo $row_count ?>">
                    <?php
                      } else {
                        echo "Error: " . $conn->error;
                      }
                    } else {
                      echo "Class ID not provided.";
                    }
                    ?>
                  </div>
                  <div class="col">
                    <label>ຫ້ອງຮຽນ</label>
                    <select name="classid" id="classid" class="form-control select2bs4" style="width: 100%;">
                      <option value="----****----"><?php echo $id; ?></option>
                    </select>
                  </div>
                  <div class="col">
                    <label for="yearid">ສົກຮຽນ</label>
                    <input type="text" name="yearid" class="form-control" value="2023-2024">
                  </div>
                </div>
                <br>
                <b>
                  <p style="text-align: center;">ອາຈານປະຈຳຫ້ອງ</p>
                </b>
                <?php
                include "conn.php";
                $sql = "SELECT * FROM employeetb INNER JOIN classtb ON employeetb.classid=classtb.classid WHERE classtb.classid = '$id'";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                  $t1 = $row['emname'];
                  $t2 = $row['emsurname'];
                }
                ?>
                <div class="form-row">
                  <div class="col">
                    <label for="stdob">ຊື່</label>
                    <input type="text" name="yearid" class="form-control" value="<?php echo $t1; ?>">
                  </div>
                  <div class="col">
                    <label for="stdob">ນາມສະກຸນ</label>
                    <input type="text" name="yearid" class="form-control" value="<?php echo $t2; ?>">
                  </div>
                </div>
                <br>
              </div>
              <div class="card-footer">
                <button type="submit" name="insert" id="insert" class="btn btn-primary">ລົງທະບຽນ</button>
              </div>
            </form>
          </div>
        </div>
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
                          <th>ລະຫັດນັກສຶກສາ</th>
                          <th>ຊື່</th>
                          <th>ນາມສະກຸນ</th>
                          <th>ເພດ</th>
                          <th>ວັນເກີດ</th>
                          <th>ບ້ານ</th>
                          <th>ເມືອງ</th>
                          <th>ແຂວງ</th>
                          <th>ສາສະໜາ</th>
                          <th>ຊົນເຜົ່າ</th>
                          <th>ຕຳແໜ່ງ</th>
                          <th>ສົກຮຽນ</th>
                          <th>ເບີໂທ</th>
                          <th>ຫ້ອງຮຽນ</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include "conn.php";
                        $sql = "SELECT * FROM studenttb INNER JOIN classtb ON studenttb.classid=classtb.classid WHERE classtb.classid = '$id' ";
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
                            <td><?php echo $row['stposition'] ?></td>
                            <td><?php echo $row['yearid'] ?></td>
                            <td><?php echo $row['stphone'] ?></td>
                            <td><?php echo $row['classname'] ?></td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </section>
    </div>
    <!-- /.content-wrapper -->
    <?php include "components/footer.php" ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
    //create function
  </script>
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