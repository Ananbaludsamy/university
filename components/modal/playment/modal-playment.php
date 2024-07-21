<div class="modal fade" id="modal<?php echo $row['feeid']; ?>" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ຈ່າຍເງິນ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col">
                                <label for="yearid">ສົກຮຽນ</label>
                                <input type="hidden" name="stids" class="form-control" value="<?php echo $row['feeid'] ?>">
                                <input type="text" name="yearid" class="form-control" placeholder="ປ່ອນສົກຮຽນ" value="<?php echo $row['yearid'] ?>">
                            </div>
                            <div class="col">
                                <label for="stid">ລະຫັດນັກຮຽນ</label>
                                <input type="text" name="stid" class="form-control" placeholder="ປ່ອນລະຫັດນັກຮຽນ" value="<?php echo $row['stid'] ?>">
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="stname1">ຊື່</label>
                                <input type="text" name="stname" class="form-control" placeholder="ປ່ອນລາຍຊື່" value="<?php echo $row['stname'] ?>">
                            </div>
                            <div class="col">
                                <label for="stsurname">ນາມສະກຸນ</label>
                                <input type="text" name="stsurname" class="form-control" placeholder="ປ່ອນນາມສະກຸນ" value="<?php echo $row['stsurname'] ?>">
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label>ຫ້ອງຮຽນ</label>
                                <select name="classid" id="classid" class="form-control select2bs4" style="width: 100%;">
                                    <option value="<?php echo $row['classid'] ?>"><?php echo $row['classname'] ?></option>
                                    <?php
                                    include "conn.php";
                                    // SQL query เพื่อดึงข้อมูล
                                    $sql2 = "SELECT classid, classname FROM classtb";
                                    $result3 = $conn->query($sql2);

                                    // ตรวจสอบว่ามีข้อมูลหรือไม่
                                    if ($result3->num_rows > 0) {
                                        // วนลูปและแสดงผลลัพธ์เป็น options
                                        while ($row3 = $result3->fetch_assoc()) {
                                            echo "<option value='" . $row3['classid'] . "'>" . $row3['classname'] . "</option>";
                                        }
                                    } else {
                                        echo "0 results";
                                    } ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="status">ສະຖານະການຈ່າຍ</label>
                                <select name="status" id="status" class="form-control select2bs4" style="width: 100%;">
                                    <option value="<?php echo $row['status'] ?>"><?php echo $row['status'] ?></option>
                                    <option value="ຍັງ">ຍັງ</option>
                                    <option value="ຈ່າຍແລ້ວ">ຈ່າຍແລ້ວ</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="qty">ຈຳນວນເງິນ</label>
                                <input type="text" name="qty" class="form-control" placeholder="ປ່ອນລາຍຊື່" value="<?php echo number_format($row['qty']); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="playment" id="playment" class="btn btn-primary">ຈ່າຍເງິນ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>