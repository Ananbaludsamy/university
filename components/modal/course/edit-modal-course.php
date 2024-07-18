<div class="modal fade" id="modal<?php echo $row['stid']; ?>" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ໃຫ້ຄະແນນ</h5>
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
                                <label>ຫ້ອງຮຽນ</label>
                                <select name="classid" id="classid" class="form-control select2bs4" style="width: 100%;">
                                    <option value="<?php echo $row['classid'] ?>"><?php echo $row['classname'] ?></option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-2">
                                <label for="stid">ລະຫັດນັກຮຽນ</label>
                                <input type="text" name="stid" class="form-control" placeholder="ປ່ອນລະຫັດນັກຮຽນ" value="<?php echo $row['stid'] ?>">
                            </div>
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
                                <label for="GE1">General English1</label>
                                <input type="text" name="GE1" class="form-control">
                            </div>
                            <div class="col">
                                <label for="PN">Pronunciation</label>
                                <input type="text" name="PN" class="form-control">
                            </div>
                            <div class="col">
                                <label for="ER">Reading</label>
                                <input type="text" name="ER" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="GRM">Grammar</label>
                                <input type="text" name="GRM" class="form-control">
                            </div>
                            <div class="col">
                                <label for="EC">Communication</label>
                                <input type="text" name="EC" class="form-control">
                            </div>
                            <div class="col">
                                <label for="GE2">Genaral English2</label>
                                <input type="text" name="GE2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="submit_course" id="submit_course" class="btn btn-primary">ໃຫ້ຄະແນນ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>