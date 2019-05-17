<?php

if(isset($query4)){

    if(count($query4) > 0){
      for($i = 0; $i < count($query4); $i++){
        ?>

        <tr>
          <td class="py-1" width="5%">
            <span class="stt"><?= $i+1 ?></span>
          </td>
          <td width="25%">
            <span class="mssv"><?= $query4[$i]['MASV'] ?></span>
          </td>
          <td width="45%">
            <span class="tensv"><?= $query4[$i]['HO']." ".$query4[$i]['TEN'] ?></span>
          </td>
          <?php
          if(count($query3) > 0){
            $tmp = -1;
            for($j = 0; $j < count($query3); $j++){
              if($query3[$j]['MASV'] == $query4[$i]['MASV']){
                $tmp = $j;
                break;
              }
            }
            if($tmp == -1){
              ?>
              <td width="25%">
                <input type="number" min="0" max="10" class="form-control" name="" style="background-color: transparent; width: 60px; margin: auto; display: none" value="0">
                <span class="mark-student">0</span>
              </td>
              <?php
            }else{
              ?>
              <td width="25%">
                <input type="number" min="0" max="10" class="form-control" name="" style="background-color: transparent; width: 60px; margin: auto; display: none" value="<?= $query3[$j]['DIEM'] ?>">
                <span class="mark-student"><?= $query3[$j]['DIEM'] ?></span>
              </td>
              <?php
            }
          }else{
            ?>
            <td width="25%">
              <input type="number" min="0" max="10" class="form-control" name="" style="background-color: transparent; width: 60px; margin: auto; display: none" value="0">
              <span class="mark-student">0</span>
            </td>
            <?php
          }
          ?>

        </tr>

        <?php

      }

    }

}
?>