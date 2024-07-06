<?php
include "conn.php";
if (isset($_POST['insert'])) {
    /* GET INPUT FROM USER */
    $classid = $_POST['classid'];
    $qty =  $_POST['qty'];
    $sql = "INSERT INTO `feeqty_tb`(`classid`, `qty`) VALUES ('$classid','$qty')";
    if ($conn->query($sql) === TRUE) {
?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'ບັນທຶກຂໍ້ມູນສຳເລັດ',
                showConfirmButton: false,
                timer: 2000
            }).then((result) => {
                location.href = 'feeqty.php'
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
