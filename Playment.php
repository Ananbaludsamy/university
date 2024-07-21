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
        <?php include "components/sidebar.php"; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0" style="font-weight: bold;">ຂໍ້ມູນ ຈ່າຍຄ່າເທີມ</h1>
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
                            <h3 class="card-title">ຍັງບໍ່ຈ່າຍຄ່າເທີມ</h3>
                            <div class="card-tools" style="float: left; margin-left: 10px;">
                                <?php
                                include "conn.php";
                                $sqlstaus = "SELECT COUNT(status) AS playment FROM `feetb` WHERE status = 'ຍັງ'";
                                $resultstatus = $conn->query($sqlstaus);
                                while ($rowstatus = $resultstatus->fetch_assoc()) {
                                    $output = $rowstatus['playment'];
                                ?>
                                    <span class="badge bg-danger"><?php echo $output ?></span>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <br>
                        <form method="post">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="example2" class="table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>ລະຫັດ</th>
                                                            <th>ສົກຮຽນ</th>
                                                            <th>ລະຫັດນັກສຶກສາ</th>
                                                            <th>ຊື່</th>
                                                            <th>ນາມສະກຸນ</th>
                                                            <th>ສະຖານະການຈ່າຍ</th>
                                                            <th>ຈຳນວນເງິນ</th>
                                                            <th>ຫ້ອງຮຽນ</th>
                                                            <th>ຈ່າຍເງິນ</th>
                                                            <th>ແກ້ໄຂ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        include "conn.php";
                                                        $test = 'ຍັງ';
                                                        $sql = "SELECT * FROM `feetb` inner join studenttb on feetb.stid = studenttb.stid inner join classtb on studenttb.classid = classtb.classid WHERE status = '$test' ";
                                                        $result = $conn->query($sql);
                                                        while ($row = $result->fetch_assoc()) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $row['feeid'] ?></td>
                                                                <td><?php echo $row['yearid'] ?></td>
                                                                <td><?php echo $row['stid'] ?></td>
                                                                <td><?php echo $row['stname'] ?></td>
                                                                <td><?php echo $row['stsurname'] ?></td>
                                                                <td><?php echo $row['status'] ?></td>
                                                                <td><?php echo $row['qty'] ?></td>
                                                                <td><?php echo $row['classname'] ?></td>
                                                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $row['feeid']; ?>"><span class='fas fa-edit'></span>ຈ່າຍເງິນ</button></td>
                                                                <td>
                                                                    <input type="hidden" id="getid" name="getid" value="<?php echo $row['stid'] ?>">
                                                                    <?php echo '<a href=?action=del&id=' . $row['stid'] . '' ?> <button type="button" class='btn btn-danger'> <i class='glyphicon fas fa-trash'></i> ລຶບ</button>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                            include "components/modal/playment/modal-playment.php";
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
            })
        });
    </script>
    <?php
    include "components/modal/playment/update-status.php";
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
                window.location.href = 'Playment.php?action=confirm-delete&id=" . $get . "';
            }else {
                window.location.href = 'Playment.php';
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
                window.location.href = 'Playment.php';
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