<?php
  if(isset($query)){
    if(count($query) > 0){
      ?>
      <div style="text-align: center;">
        <h2><b>Bảng điểm học tập</b></h2>
      </div><br>
      <div class="row">
        <div class="col-md-5">
          <p style="font-size: 15pt; margin-top: 5px;margin-left: 76px">Sinh viên <b id = "student-name"><?= $query[0]['HO'].' '.$query[0]['TEN'] ?></b></p>
        </div>

        <div class="col-md-4" style="">
          <p style="font-size: 15pt; margin-top: 5px">Mã SV <b id = "student-id"><?= $query[0]['MASV'] ?></b></p>
        </div>

        <div class="col-md-3" style="text-align: center;">

        </div>
        
      </div>
      <div class="row">
        <div class="col-md-4" style="text-align: center">
          <p style="font-size: 15pt; margin-top: 5px">Khoa <b id = "student-faculty"><?= $query[0]['TENKH'] ?></b></p>
        </div>
        
        <div class="col-md-4" style="text-align: center;">
          <p style="font-size: 15pt; margin-top: 5px">Lớp <b id = "student-class"><?= $query[0]['TENLOP'] ?></b></p>
        </div>

        <div class="col-md-4" style="text-align: center;">
          <p style="font-size: 15pt; margin-top: 5px">Mã lớp <b id = "student-class-id"><?= $query[0]['MALOP'] ?></b></p>
        </div>
      </div>

      <!-- <div class='row'>
        <div class='col-5'></div>
        <div class="col-2" style="width: 100px; text-align: center;">
          <label>Chọn học kì</label>
          <select class="form-control select-times" style="width: 200px;">
            <option value="">...Chọn Lần Thi....</option>
            <option value="1">Lần 1</option>
            <option value="2">Lần 2</option>
          </select>
        </div> 
        <div class="col-5"></div>          
      </div> -->

      <div class="col-lg-12 grid-margin stretch-card mark-table-children">
        <div class="card">                      
          <div class="card-body" style="text-align: center">
            <div class="table-responsive" style="overflow-x: scroll;">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>
                      <b>STT</b>
                    </th>
                    <th>
                      <b>Môn học</b>
                    </th>
                    <th>
                      <b>Điểm</b>
                    </th>
                  </tr>
                </thead>
                <tbody class="markbody">
                  <?php
                  for($i = 0; $i < count($query); $i++){
                    ?>
                    <tr>

                      <td class="py-1" width="20px">
                        <?= $i + 1 ?>
                      </td>

                      <td width="400px" style="text-align: center;">
                        <?= $query[$i]['TENMH'] ?>
                      </td>

                      <td width='100px'>
                        <?= $query[$i]['DIEM'] ?>
                      </td>

                    </tr> 
                    <?php
                  }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div> 

      <div class="div-btn" style="text-align: right; display: none">
        <a class="btn btn-success" style="display: inline-block;" href="<?= base_url()?>Welcome/write2Excel">In</a>
        <a class="btn btn-primary" style="display: inline-block;" href="<?= base_url()?>Welcome/viewDanhmuclop">Trở về</a>
      </div>
      <?php
    }
  }
?>



