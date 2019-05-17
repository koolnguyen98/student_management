<?php
  if(isset($query)){
    if(count($query) > 0){

      for($i = 0; $i < count($query); $i ++){
        ?>
          <tr>
            <td class="py-1" width="10px">
              <?= $i + 1 ?>
            </td>
            <!--Môn học-->
            <td width="150px" style="text-align: center;">
              <?= $query[$i]['MASV'] ?>
            </td>
            <!--Họ-->
            <td width='250px'>
              <?= $query[$i]['HO'] ?>
            </td>
            <!--Tên-->
            <td width='150px'>
              <?= $query[$i]['TEN'] ?>
            </td>
            <!--Điểm lần 1-->
            <td width='150px'>
              <?= $query[$i]['DIEM'] ?>
            </td>
          </tr> 
          <!--Xong 1 hàng-->
        <?php
      }

    }
  }
?>
