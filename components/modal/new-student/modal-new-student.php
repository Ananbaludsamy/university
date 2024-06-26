<div class="modal fade" id="modal<?php echo $row['stid']; ?>" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                <label for="yearid">ສົກຮຽນ</label>
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
                                <label for="stsex">ເພດ</label>
                                <select name="stsex" id="stsex" class="form-control select2bs4" style="width: 100%;">
                                    <option value="<?php echo $row['stsex'] ?>"><?php echo $row['stsex'] ?></option>
                                    <option value="ຊາຍ">ຊາຍ</option>
                                    <option value="ຍິງ">ຍິງ</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="stdob">ວັນເດືອນປີເກີດ</label>
                                <input type="date" name="stdob" class="form-control" placeholder="ວັນທີ-ເດືອນ-ປີ" value="<?php echo $row['stdob'] ?>">
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="stvillage">ບ້ານ</label>
                                <input type="text" name="stvillage" class="form-control" placeholder="ປ່ອນບ້ານ" value="<?php echo $row['stvillage'] ?>">
                            </div>
                            <div class="col">
                                <label for="stdistrict">ເມືອງ</label>
                                <input type="text" name="stdistrict" class="form-control" placeholder="ປ່ອນເມືອງ" value="<?php echo $row['stdistrict'] ?>">
                            </div>
                            <div class="col">
                                <label for="stprovince">ແຂວງ
                                </label>
                                <input type="text" name="stprovince" class="form-control" placeholder="ປ່ອນແຂວງ" value="<?php echo $row['stprovince'] ?>">
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="streligion">ສາສະໜາ</label>
                                <input type="text" name="streligion" class="form-control" placeholder="ປ່ອນສາສະໜາ" value="<?php echo $row['streligion'] ?>">
                            </div>
                            <div class="col">
                                <label for="sttribe">ຊົນເຜົ່າ</label>
                                <input type="text" name="sttribe" class="form-control" placeholder="ປ່ອນຊົນເຜົ່າ" value="<?php echo $row['sttribe'] ?>">
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
                                <label for="stphone">ເບີໂທ</label>
                                <input type="text" name="stphone" class="form-control" placeholder="ປ່ອນເບີໂທ" value="<?php echo $row['stphone'] ?>">
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="stposition">ຕຳແໜ່ງນັກຮຽນ</label>
                                <select name="stposition" id="stposition" class="form-control select2bs4" style="width: 100%;">
                                    <option value="<?php echo $row['stposition'] ?>"><?php echo $row['stposition'] ?></option>
                                    <option value="ຄະນະຫ້ອງ">ຄະນະຫ້ອງ</option>
                                    <option value="ຮອງຄະນຫ້ອງ1">ຮອງຄະນຫ້ອງ1</option>
                                    <option value="ຮອງຄະນຫ້ອງ2">ຮອງຄະນຫ້ອງ2</option>
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
                            <div class="col">
                                <label for="sttotal">ຈຳນວນ</label>
                                <input type="text" name="sttotal" class="form-control" placeholder="ປ່ອນຈຳນວນເງິນ" value="<?php echo $row['sttotal'] ?>">
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
