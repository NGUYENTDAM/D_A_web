<table cellspacing="0" border="1">
    <tr>
       <th width="100"> Mã tài khoản</th>
       <th width="200"> Tên đăng nhập</th>
       <th width="200"> Tên hiển thị</th>
       <th width="150"> Điện thoại</th>
       <th width="200"> Email</th>
       <th width="75"> Tình trạng</th>
       <th width="150"> Loại tài khoản</th>
       <th width="100"> Thao tác</th>
    </tr>
    <?php
       $sql = "SELECT t.MaTaiKhoan, t.TenDangNhap, t.TenHienThi, t.DienThoai, t.Email, t.BiXoa, l.TenLoaiTaiKhoan FROM TaiKhoan t, LoaiTaiKHoan l 
              WHERE t.MaLoaiTaiKhoan = l.MaLoaiTaiKhoan";
              $result = DataProvider::ExecuteQuery($sql);
              while ($row = mysqli_fetch_array($result))
              {
                  ?>
                  <tr>
                       <td><?php echo $row["MaTaiKhoan"]; ?></td>
                       <td><?php echo $row["TenDangNhap"]; ?></td>
                       <td><?php echo $row["TenHienThi"]; ?></td>
                       <td><?php echo $row["DienThoai"]; ?></td>
                       <td><?php echo $row["Email"]; ?></td>
                  <td>
                      <?php
                         if($row["BiXoa"] == 1)
                            echo "<img src='images/locked.png' />";
                         else
                            echo "<img src='images/active.png' />";
                       ?>
                  </td>
                  <td><?php echo $row["TenLoaiTaiKhoan"]; ?></td>
                  <td>
                     <a href="pages/qlTaiKhoan/xlKhoa.php?id=<?php echo $row["MaTaiKhoan"] ?>">
                        <img src="images/lock.png"/>
                    </a>
                    <a href="index.php?c=1&a=2&id=<?php echo $row["MaTaiKhoan"] ?> ">
                        <img src="images/edit.png"/>
                    </a>
                </td>
             </tr>
         <?php
     }
 ?>
</table>
      