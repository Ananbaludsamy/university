<?php
include "conn.php";
if (isset($_POST['playment'])) {
    /* GET INPUT FROM USER */
    $stids = $_POST['stids'];
    $yearid = $_POST['yearid'];
    $stid =  $_POST['stid'];
    $stname = $_POST['stname'];
    $stsurname = $_POST['stsurname'];
    $classid = $_POST['classid'];
    $status = "ຈ່າຍແລ້ວ";
    $sql = "UPDATE `feetb` SET `status`='$status' WHERE feeid = '$stids' ";
    if ($conn->query($sql) === TRUE) {
?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'ຈ່າຍເງິນສຳເລັດແລ້ວ',
                showConfirmButton: false,
                timer: 2000
            }).then((result) => {
                location.href = 'Playment.php'
            });
        </script>
    <?php
    } else {
    ?>
        <script>
            Swal.fire(
                'ກະລຸນາປ່ອນຂໍ້ມູນ',
                'ໃຫ້ຖືກຕ້ອງ',
                'error'
            )
        </script>
<?php
    }
    $conn->close();
}