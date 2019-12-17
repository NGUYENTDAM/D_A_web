<h3>Sản Phẩm Bán Chạy Nhất</h3>
<label class="line"></label>
<?php
$sql = "SELECT * FROM SanPham WHERE BiXoa = 0 ORDER BY SoLuongBan DESC LIMIT 0, 10";
$result = DataProvider::ExecuteQuery($sql);
while ($row = mysqli_fetch_array($result)) {
?>
    <div class="box">
        <div class="col-md-3 item-grid simpleCart_shelfItem">
            <div class=" mid-pop">
                <div class="pro-img"> <img src="images/<?php echo $row["HinhURL"]; ?>" />
                </div>
                <div class="mid-1">
                    <div class="phone">
                        <div class="phone-top"> <?php echo $row["TenSanPham"]; ?>
                        </div>
                        <div class="img item_add"> <a href="#"><img src="images/ca.png" alt=""></a> </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mid-2">
                        Giá: <?php echo $row["GiaSanPham"]; ?>đ
                        <div class="block">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>



        <!-- <img src="images/<?php echo $row["HinhURL"]; ?>" />
        <div class="pname"><?php echo $row["TenSanPham"]; ?></div>
        <div class="pprice">Giá: <?php echo $row["GiaSanPham"]; ?>đ</div>
        <div class="action">
            <a href="index.php?a=4&id=<?php echo $row["MaSanPham"]; ?>">Chi tiết</a>
        </div> -->
    </div>
<?php
                                                    }

?>