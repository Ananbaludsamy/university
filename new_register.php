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
              <h1 class="m-0" style="font-weight: bold;">ນັກຮຽນໃຫມ່</h1>
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
              <h3 class="card-title">ປ່ອນຂໍ້ມູນ ນັກສຶກສາໃຫມ່</h3>
            </div>
            <form method="POST">
              <div class="card-body">
                <div class="form-row">
                  <div class="col">
                    <label for="yearid">ສົກຮຽນ</label>
                    <input type="text" name="yearid" class="form-control" placeholder="ປ່ອນສົກຮຽນ">
                  </div>
                  <div class="col">
                    <label for="stid">ລະຫັດນັກຮຽນ</label>
                    <input type="text" name="stid" class="form-control" placeholder="ປ່ອນລະຫັດນັກຮຽນ">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col">
                    <label for="stname">ຊື່</label>
                    <input type="text" name="stname" class="form-control" placeholder="ປ່ອນລາຍຊື່">
                  </div>
                  <div class="col">
                    <label for="stsurname">ນາມສະກຸນ</label>
                    <input type="text" name="stsurname" class="form-control" placeholder="ປ່ອນນາມສະກຸນ">
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label for="stdob">ວັນເດືອນປີເກີດ</label>
                  <input type="date" name="stdob" class="form-control" placeholder="ວັນທີ-ເດືອນ-ປີ">
                </div>
                <br>
                <div class="form-row">
                  <div class="col-1">
                    <label for="">ເພດ</label>
                  </div>
                  <div class="col-1">
                    <input class="form-check-input" type="radio" name="radio1">
                    <label class="form-check-label">ຍິງ</label>
                  </div>
                  <div class="col-1">
                    <input class="form-check-input" type="radio" name="radio1">
                    <label class="form-check-label">ຊາຍ</label>
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col">
                    <label for="stvillage">ບ້ານ</label>
                    <input type="text" name="stvillage" class="form-control" placeholder="ປ່ອນບ້ານ">
                  </div>
                  <div class="col">
                    <label for="stdistrict">ເມືອງ</label>
                    <input type="text" name="stdistrict" class="form-control" placeholder="ປ່ອນເມືອງ">
                  </div>
                  <div class="col">
                    <label for="stprovince">ແຂວງ
                    </label>
                    <input type="text" name="stprovince" class="form-control" placeholder="ປ່ອນແຂວງ">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col">
                    <label for="streligion">ສາສະໜາ</label>
                    <input type="text" name="streligion" class="form-control" placeholder="ປ່ອນສາສະໜາ">
                  </div>
                  <div class="col">
                    <label for="sttribe">ຊົນເຜົ່າ</label>
                    <input type="text" name="sttribe" class="form-control" placeholder="ປ່ອນຊົນເຜົ່າ">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col">
                    <label>ຫ້ອງຮຽນ</label>
                    <select name="select_option" id="select_option" class="form-control select2bs4" style="width: 100%;">
                      <?php
                      include "conn.php";
                      // SQL query เพื่อดึงข้อมูล
                      $sql = "SELECT classid, classname FROM classtb";
                      $result = $conn->query($sql);

                      // ตรวจสอบว่ามีข้อมูลหรือไม่
                      if ($result->num_rows > 0) {
                        // วนลูปและแสดงผลลัพธ์เป็น options
                        while ($row = $result->fetch_assoc()) {
                          echo "<option value='". $row['classid'] ."'>" . $row['classname'] . "</option>";
                        }
                      } else {
                        echo "0 results";
                      }
                      ?>
                    </select>
                  </div>
                  <div class="col">
                    <label for="stphone">ເບີໂທ</label>
                    <input type="text" name="stphone" class="form-control" placeholder="ປ່ອນເບີໂທ">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name="insert" id="insert" class="btn btn-primary">ລົງທະບຽນ</button>
              </div>
            </form>
          </div>
        </div>
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