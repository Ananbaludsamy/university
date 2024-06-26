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
    $status = $_POST['status'];
    $sttotal = $_POST['sttotal'];
    $stposition = $_POST['stposition'];
    $sql = "UPDATE `studenttb` SET `stid`='$stid',`stname`='$stname',`stsurname`='$stsurname',`stsex`='$stsex',`stdob`='$stdob',`stvillage`='$stvillage',`stdistrict`='$stdistrict',`stprovince`='$stprovince',`streligion`='$streligion',`sttribe`='$sttribe',`classid`='$classid',`yearid`='$yearid',`status`='$status',`stphone`='$stphone',`stposition`='$stposition',`sttotal`='$sttotal' WHERE stid = '$stid' ";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('ທ່ານແກ້ໄຂຂໍ້ມູນສຳເລັດແລ້ວ');</script>";
        header("Refresh:0; url=i_information_student.php");
    } else {
        echo "<script>alert('ກະລຸນາປ່ອນຂໍ້ມູນໃຫ້ຖືກຕ້ອງ');</script>";
    }
    $conn->close();
}
