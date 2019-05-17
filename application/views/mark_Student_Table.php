<?php
if(isset($query4)){
  for($i = 0; $i < count($query4); $i++){
    ?>
    <tr>

      <td class="py-1" width="20px">
        <?= $i + 1 ?>
      </td>

      <td width="400px" style="text-align: center;">
        <?= $query4[$i]['TENMH'] ?>
      </td>

      <td width='100px'>
        <?= $query4[$i]['DIEM'] ?>
      </td>

    </tr> 
    <?php
  }
}
?>