<?php
include "conn.php";
if (isset($_POST['insert'])) {
    if ($_POST['stname'] == null) {
?>
        <script>
            swal("Good job!", "You clicked the button!", "success");
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
        $status = "ຍັງ";
        $sql = "INSERT INTO studenttb (stid, stname, stsurname, stsex, stdob, stvillage, stdistrict, stprovince, streligion, sttribe, classid, yearid, status, stphone) VALUES ('$stid', '$stname', '$stsurname', '$stsex', '$stdob', '$stvillage', '$stdistrict', '$stprovince', '$streligion', '$sttribe', '$classid', '$yearid', '$status', '$stphone')";
        if ($conn->query($sql) === TRUE) {
        ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'ບັນທຶກຂໍ້ມູນສຳເລັດ',
                    showConfirmButton: false,
                    timer: 2000
                }).then((result) => {
                    location.href = 'A_laryhup.php'
                });
            </script>
        <?php
        } else {
        ?>
            <script>
                Swal.fire(
                    'ກະລຸນາ ປ່ອນຂໍ້ມູນ',
                    'ກະລຸນາ ປ່ອນຂໍ້ມູນໃຫ້ຖືກຕ້ອງ',
                    'error'
                )
            </script>
<?php
        }
        $conn->close();
    }
}
?>