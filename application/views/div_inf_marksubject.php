<?php
  if(isset($query1) && isset($query2) && isset($query3)){
    if(count($query1) > 0 && count($query2) > 0 && count($query3) > 0){
      ?>

      <div class="col-md-4" style="text-align: center">
        <p style="font-size: 15pt; margin-top: 5px">Khoa <b><?= $query3[0]['TENKH'] ?></b></p>
      </div>
      <!--Button Xong-->
      <div class="col-md-4" style="text-align: center;">
        <p style="font-size: 15pt; margin-top: 5px">Lớp <b><?= $query1[0]['TENLOP'] ?></b></p>
      </div>
      <!--Button Thêm sinh viên-->
      <div class="col-md-4" style="text-align: center;">
        <p style="font-size: 15pt; margin-top: 5px">Mã lớp <b><?= $query1[0]['MALOP'] ?></b></p>
      </div>

      <div class="col-12" style="text-align: center; display: none">
        <p style="font-size: 15pt; margin-top: 5px">Môn học: <b><?= $query2[0]['TENMH'] ?></b></p>
      </div>

      <?php
    }
  }
?>

