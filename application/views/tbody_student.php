<?php
if(isset($query)){
  for($i = 0; $i < count($query); $i++){
    ?>

    <tr>
      <!--STT-->
      <td class="py-1" >
        <span><?= $i+1 ?></span>
      </td>
      <!--MSSV-->
      <td>
        <span><?= $query[$i]['MASV'] ?></span>
      </td>
      <!--Họ-->
      <td >
        <input type="text" class="form-control" name="" style="background-color: transparent; width: 200px" value="<?= $query[$i]['HO'] ?>" disabled="">
      </td>
      <!--Tên-->
      <td >
        <input type="text" class="form-control" name="" style="background-color: transparent; width: 100px; text-align: center;" value="<?= $query[$i]['TEN'] ?>" disabled="">
      </td>
      <!--Giới tính-->
      <td >
        <select class="form-control form-control-sm" id=""  size="1" disabled="">
          <option value="1" <?= $query[$i]['PHAI'] == 1 ? 'selected="selected"' : 'disabled' ?>>Nam</option>
          <option value="0" <?= $query[$i]['PHAI'] == 1 ? 'disabled' : 'selected="selected"' ?>>Nữ</option>
        </select>
        
      </td>
      <!--Ngày sinh-->
      <td >
        <input type="date" class="form-control" name="" style="background-color: transparent; margin: auto; width: 150px" value="<?= (new DateTime($query[$i]['NGAYSINH']))->format('Y-m-d') ?>" disabled="">
      </td>
      Nơi sinh
      <td >
        <input type="text" class="form-control" name="" style="background-color: transparent; margin: auto; width: 250px; overflow-x: scroll;" value="<?= $query[$i]['NOISINH'] ?>" disabled="">
      </td>
      <!--Địa chỉ-->
      <td >
        <input type="text" class="form-control" name="" style="background-color: transparent; margin: auto;  width: 250px; overflow-x: scroll;" value="<?= $query[$i]['DIACHI'] ?>" disabled="">
      </td>

      <!--Nghỉ học-->
      <td >
        <input type="checkbox" class="form-check" name="" style="background-color: transparent; margin: auto;" disabled=""  <?= $query[$i]['NGHIHOC'] == 1 ? 'checked' : '' ?>>
      </td>

      <!--Tác vụ-->
      <td >
        <!--Sửa-->
        <button type="button" class="btn btn-icons btn-rounded btn-outline-primary btn-edit" style="display: inline-block;">
          <i class="mdi mdi-pencil"></i>
        </button>
        <!--Xoá-->
        <button type="button" class="btn btn-icons btn-rounded btn-outline-danger btn-remove" style="display: inline-block;">
          <i class="mdi mdi-bitbucket"></i>
        </button>
        <!--Lưu-->
        <button type="button" class="btn btn-icons btn-rounded btn-outline-success btn-save" style="display: none">
          <i class="mdi mdi-check"></i>
        </button>
      </td>
    </tr> <!--Xong 1 hàng-->

    <?php
  }
};
?>