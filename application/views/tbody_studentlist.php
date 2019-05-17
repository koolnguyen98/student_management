<?php

if(isset($query3)){

    if(count($query3) > 0){
      for($i = 0; $i < count($query3); $i++){
        ?>

        <tr>

          <td class="py-1" >
            <span class="stt"><?= $i+1 ?></span>
            
          </td>
          <td width="100px" style="text-align: center;">
            <span class="stt"><?= $query3[$i]['MASV'] ?></span>
            
          </td>

          <td width='200px'>
            <span class="stt"><?= $query3[$i]['HO'] ?></span>
            
          </td>

          <td width='100px' style="text-align: center;">
            <span class="stt"><?= $query3[$i]['TEN'] ?></span>
            
          </td>

          <td>
            <span class="stt"><?= $query3[$i]['PHAI'] == 1 ? 'Nam' : 'Nữ' ?></span>
            
          </td>

          <td width='100px'>
            <span class="stt"><?= (new DateTime($query3[$i]['NGAYSINH']))->format('d-m-Y') ?></span>
            
          </td>

          <td width="250px">
            <span class="stt"><?= $query3[$i]['NOISINH'] ?></span>
           
         </td>

         <td width="250px">
          <span class="stt"><?= $query3[$i]['DIACHI'] ?></span>
          
        </td>
      </tr>

        <?php

      }

    }

}
?>

