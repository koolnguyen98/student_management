<div class="col-12">
  <div class="card" >
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead style="text-align: center;">
            <tr>
              <th>
                STT
              </th>
              <th>
                MSSV
              </th>
              <th>
                Họ
              </th>
              <th>
                Tên
              </th>
              <th>
                Giới tính
              </th>
              <th>
                Ngày sinh
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            if(isset($query)){
              if(count($query) > 0){
                for ($i = 0; $i < count($query); $i++) { 
                  ?>

                  <tr>
                    <!--STT-->
                    <td class="py-1" style="text-align: center;">
                      <?= $i + 1 ?>
                    </td>
                    <!--MSSV-->
                    <td style="text-align: center;">
                      <a href="" class="link-student"><span><?= $query[$i]['MASV'] ?></span></a>
                    </td>
                    <!--Họ-->
                    <td >
                      <p><?= $query[$i]['HO'] ?></p>
                    </td>
                    <!--Tên-->
                    <td style="text-align: center;">
                      <p><?= $query[$i]['TEN'] ?><p>
                    </td>
                    <!--Giới tính-->
                    <td style="text-align: center;">
                      <p><?= $query[$i]['PHAI'] == '1' ? 'Nam' : 'Nữ' ?></p>
                    </td>
                    <!--Ngày sinh-->
                    <td style="text-align: center;">
                      <p><?= (new DateTime($query[$i]['NGAYSINH']))->format('d-m-Y') ?></p>
                    </td>
                  </tr>

                  <?php
                  }
                }
              }
              ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>