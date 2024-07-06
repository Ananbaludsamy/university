<?php
include "conn.php";
if (isset($_POST['Edit'])) {
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
    $stposition = $_POST['stposition'];
    $sql = "UPDATE `studenttb` SET `stid`='$stid',`stname`='$stname',`stsurname`='$stsurname',`stsex`='$stsex',`stdob`='$stdob',`stvillage`='$stvillage',`stdistrict`='$stdistrict',`stprovince`='$stprovince',`streligion`='$streligion',`sttribe`='$sttribe',`classid`='$classid',`yearid`='$yearid',`stphone`='$stphone',`stposition`='$stposition' WHERE stid = '$stid' ";
    if ($conn->query($sql) === TRUE) {
?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'ແກ້ໄຂມູນສຳເລັດແລ້ວ',
                showConfirmButton: false,
                timer: 2000
            }).then((result) => {
                location.href = 'i_information_student.php'
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
