<?php
  if(isset($query1) && isset($query2)){
    ?>

    <div class="col-md-4" style="text-align: center">
      <p style="font-size: 15pt; margin-top: 5px">Khoa <b><?= $query2[0]['TENKH'] ?></b></p>
    </div>
    <!--Button Xong-->
    <div class="col-md-4" style="text-align: center;">
      <p style="font-size: 15pt; margin-top: 5px">Lớp <b><?= $query1[0]['TENLOP'] ?></b></p>
    </div>
    <!--Button Thêm sinh viên-->
    <div class="col-md-4" style="text-align: center;">
      <p style="font-size: 15pt; margin-top: 5px">Mã lớp <b><?= $query1[0]['MALOP'] ?></b></p>
    </div>

    <?php
  }
?>
