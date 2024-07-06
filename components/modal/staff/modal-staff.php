<div class="modal fade" id="ed<?php echo $row['emid']; ?>" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂຂໍ້ມູນ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col">
                                <label for="stname1">ຊື່</label>
                                <input type="text" name="stname" class="form-control" placeholder="ປ່ອນລາຍຊື່" value="<?php echo $row['emname'] ?>">
                            </div>
                            <div class="col">
                                <label for="stsurname">ນາມສະກຸນ</label>
                                <input type="text" name="stsurname" class="form-control" placeholder="ປ່ອນນາມສະກຸນ" value="<?php echo $row['emsurname'] ?>">
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="emsex">ເພດ</label>
                                <select name="emsex" id="emsex" class="form-control select2bs4" style="width: 100%;">
                                    <option value="<?php echo $row['emsex'] ?>"><?php echo $row['emsex'] ?></option>
                                    <option value="ຊາຍ">ຊາຍ</option>
                                    <option value="ຍິງ">ຍິງ</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="stdob">ວັນເດືອນປີເກີດ</label>
                                <input type="date" name="stdob" class="form-control" placeholder="ວັນທີ-ເດືອນ-ປີ" value="<?php echo $row['emage'] ?>">
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="stvillage">ບ້ານ</label>
                                <input type="text" name="stvillage" class="form-control" placeholder="ປ່ອນບ້ານ" value="<?php echo $row['emvillage'] ?>">
                            </div>
                            <div class="col">
                                <label for="stdistrict">ເມືອງ</label>
                                <input type="text" name="stdistrict" class="form-control" placeholder="ປ່ອນເມືອງ" value="<?php echo $row['emdistrict'] ?>">
                            </div>
                            <div class="col">
                                <label for="stprovince">ແຂວງ
                                </label>
                                <input type="text" name="stprovince" class="form-control" placeholder="ປ່ອນແຂວງ" value="<?php echo $row['emprovince'] ?>">
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="streligion">ເບີໂທ</label>
                                <input type="text" name="streligion" class="form-control" placeholder="ປ່ອນສາສະໜາ" value="<?php echo $row['emphone'] ?>">
                            </div>
                            <div class="col">
                                <label for="emposition">ຕຳແໜ່ງ</label>
                                <select name="emposition" id="emposition" class="form-control select2bs4" style="width: 100%;">
                                    <option value="<?php echo $row['emposition'] ?>"><?php echo $row['emposition'] ?></option>
                                    <option value="ADDMIN">ADDMIN</option>
                                    <option value="STAFF">STAFF</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="salary">ຈຳນວນ</label>
                                <input type="text" name="salary" class="form-control" placeholder="ປ່ອນຈຳນວນເງິນ" value="<?php echo $row['salary'] ?>">
                            </div>
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
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="Edit" id="Edit" class="btn btn-primary">ແກ້ໄຂ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>