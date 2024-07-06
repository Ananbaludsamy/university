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
    <!-- Preloader 
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/temple.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    -->
    <?php
    include "components/sidebar.php";
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0" style="font-weight: bold;">ຂໍ້ມູນພະນັກງານ</h1>
            </div><!-- /.col -->
            <br>
          </div><!-- /.row -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">ເພິ່ມ +</button>
        </div><!-- /.container-fluid -->
        <?php include "components/modal/staff/add-modal-staff.php";  ?>
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <br>
      <section class="content">
        <div class="container-fluid">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">ຂໍ້ມູນ ພະນັກງານ</h3>
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
                              <th>ບ້ານ</th>
                              <th>ເມືອງ</th>
                              <th>ແຂວງ</th>
                              <th>ເບີ</th>
                              <th>ຕຳແໜ່ງ</th>
                              <th>ເງິນເດືອນ</th>
                              <th>ຫ້ອງຮຽນ</th>
                              <th>ແກ້ໄຂ</th>
                              <th>ລຶບ</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            include "conn.php";
                            $sql = "SELECT * FROM employeetb INNER JOIN classtb ON employeetb.classid=classtb.classid;";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                            ?>
                              <tr>
                                <td><?php echo $row['emid'] ?></td>
                                <td><?php echo $row['emname'] ?></td>
                                <td><?php echo $row['emsurname'] ?></td>
                                <td><?php echo $row['emsex'] ?></td>
                                <td><?php echo $row['emage'] ?></td>
                                <td><?php echo $row['emvillage'] ?></td>
                                <td><?php echo $row['emdistrict'] ?></td>
                                <td><?php echo $row['emprovince'] ?></td>
                                <td><?php echo $row['emphone'] ?></td>
                                <td><?php echo $row['emposition'] ?></td>
                                <td><?php echo $row['salary'] ?></td>
                                <td><?php echo $row['classid'] ?></td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ed<?php echo $row['emid']; ?>">ແກ້ໄຂ</button></td>
                                <td>
                                  <input type="hidden" id="getid" name="getid" value="<?php echo $row['emid'] ?>">
                                  <?php echo '<a href=?action=del&id=' . $row['emid'] . '' ?> <button type="button" class='btn btn-danger'> <i class='glyphicon fas fa-trash'></i> ລຶບ</button>
                                </td>
                              </tr>
                            <?php
                              include "components/modal/staff/modal-staff.php";
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
                              <th>ບ້ານ</th>
                              <th>ເມືອງ</th>
                              <th>ແຂວງ</th>
                              <th>ເບີ</th>
                              <th>ຕຳແໜ່ງ</th>
                              <th>ເງິນເດືອນ</th>
                              <th>ຫ້ອງຮຽນ</th>
                              <th>ແກ້ໄຂ</th>
                              <th>ລຶບ</th>
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
  <script>
    $(function() {
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "buttons": ["excel", "pdf", "print"],
        "language": {
          "info": "ສະແດງລາຍການ _START_ ຫາ _END_ ຂອງ _TOTAL_ ລາຍການ",
        },
        "order": [],
        "columnDefs": [{
          "targets": 'no-sort',
          "orderable": false,
        }],
      }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
  </script>
  <?php
  include "components/update/update-new-student.php";
  if (isset($_GET['action']) && $_GET['action'] == 'del') {
    $get = $_GET['id'];
    echo "<script>
        Swal.fire({
            title: 'Are you sure?',
            text: 'ທ່ານຕ້ອງການລົບແທ້ຫຼືບໍ',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ແມ່ນ, ຂ້ອຍຕ້ອງການ!',
            cancelButtonText: 'ຍົກເລີກ'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'i_information_student.php?action=confirm-delete&id=" . $get . "';
            }else {
                window.location.href = 'i_information_student.php';
            }
        });
    </script>";
  }
  if (isset($_GET['action']) && $_GET['action'] == 'confirm-delete') {
    $get = $_GET['id'];
    $del = "DELETE FROM `studenttb` WHERE stid = '$get'";
    if (mysqli_query($conn, $del)) {
      echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'ລຶບຂໍ້ມູນສຳເລັດແລ້ວ',
            showConfirmButton: false,
            timer: 2000
        }).then((result) => {
            if (result.isDismissed) {
                window.location.href = 'i_information_student.php';
            }
        });
        </script>";
    } else {
      echo "
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops....',
                Text: 'Something went wrong'
            });
            </script>
        ";
    }
  }
  ?>

</body>

</html>