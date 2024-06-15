<?php
include "conn.php";
if (isset($_POST['insert'])) {
    if ($_POST['stname'] == null) {
        echo "<script>alert('ທ່ານຕ້ອງປ່ອນຊື່ ແລະ ນາມສະກຸນກ່ອນ');</script>"; 
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
            echo "<script>alert('ທ່ານບັນທຶກຂໍ້ມູນສຳເລັດແລ້ວ');</script>"; 
        } else {
        ?>
            echo "<script>alert('ກະລຸນາປ່ອນຂໍ້ມູນໃຫ້ຖືກຕ້ອງ');</script>"; 
<?php
        }
        $conn->close();
    }
}
?>