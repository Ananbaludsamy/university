<?php
include "conn.php";
if (isset($_POST['insert'])) {
    if ($_POST['stname'] == null) {
?>
        <script>
            Swal.fire(
                'ກະລຸນາປ່ອນຂໍ້ມູນ',
                'ລາຍຊື່ທ່ານຍັງບໍ່ໄດ້ປ່ອນ',
                'error'
            )
        </script>
        <?php
    } else {
        /* GET INPUT FROM USER */
        $stid = $_POST['stid'];
        $stname =  $_POST['stname'];
        $stsurname = $_POST['stsurname'];
        $stsex = $_POST['stsex'];
        $stdob = $_POST['stdob'];
        $stvillage = $_POST['stvillage'];
        $stdistrict =  $_POST['stdistrict'];
        $stprovince = $_POST['stprovince'];
        $streligion = $_POST['streligion'];
        $sttribe = $_POST['sttribe'];
        $classid = $_POST['classid'];
        $yearid =  $_POST['yearid'];
        $stphone = $_POST['stphone'];
        $status = $_POST['status'];
        $sttotal = $_POST['sttotal'];
        $stposition = "ນັກຮຽນ";
        $sql = "INSERT INTO studenttb (stid, stname, stsurname, stsex, stdob, stvillage, stdistrict, stprovince, streligion, sttribe, classid, yearid, stphone, stposition) VALUES ('$stid', '$stname', '$stsurname', '$stsex', '$stdob', '$stvillage', '$stdistrict', '$stprovince', '$streligion', '$sttribe', '$classid', '$yearid', '$stphone', '$stposition')";
        if ($conn->query($sql) === TRUE) {
            if ($_POST['qty'] == null) {
                $testder = 0;
            } else {
                $testder = $_POST['qty'];
            }
            $pmsql = "INSERT INTO `feetb`(`stid`, `year`, `status`, `qty`) VALUES ('$stid','$yearid','$status','$testder')";
            if ($conn->query($pmsql) === TRUE) {
        ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'ບັນທຶກຂໍ້ມູນສຳເລັດ',
                        showConfirmButton: false,
                        timer: 2000
                    }).then((result) => {
                        location.href = 'new_register.php'
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
}
