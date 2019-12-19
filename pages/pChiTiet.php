
<?php
    if(isset($_GET["id"]))
        $id = $_GET["id"];
    else
        DataProvider::ChangeURL("index.php?a=404");
    $sql = "SELECT s.MaSanPham, s.TenSanPham, s.GiaSanPham, s.SoLuongTon, s.SoLuocXem, s.MoTa,s.HinhURL, h.TenHangSanXuat, l.TenLoaiSanPham FROM SanPham s, HangSanXuat h, LoaiSanPham l WHERE s.BiXoa = 0 AND s.MaHangSanXuat = h.MaHangSanXuat AND s.MaLoaiSanPham = l.MaLoaiSanPham AND s.MaSanPham = $id";
    $result = DataProvider::ExecuteQuery($sql);
    $row = mysqli_fetch_array($result);
    if($row == null)
        DataProvider::ChangeURL("index.php?a=404");
?>
<h1><?= $row["TenSanPham"]; ?></h1>
<div id="chitietsp">
    <div id="chitietleft">
        <img src="images/<?php echo $row["HinhURL"]; ?>">

    </div>
    <div id="chitietright">
        <div>
            <span class="productname"><?= $row["TenSanPham"]; ?></span>
        </div>
        <hr />
        <div>
            <span >Giá:</span>
            <span class="price"><?= $row["GiaSanPham"]; ?>đ</span>
        </div>
        <hr />
        <div>
            <span >Hãng sản xuất : </span>
            <span class="factory"><?= $row["TenHangSanXuat"]; ?></span>
        </div>
        <hr />
        <div>
            <span >Loại sản phẩm : </span>
            <span class="data"><?= $row["TenLoaiSanPham"]; ?></span>
        </div>
        <hr />
        <div>
            <span >Số lượng : </span>
            <span class="data"><?= $row["SoLuongTon"]; ?> sản phẩm</span>
        </div>
        <hr />
        <div>
            <span >Số lược xem : </span>
            <span class="data"><?= $row["SoLuocXem"]; ?> lượt</span>
        </div>
        <hr />
        <div class="giohang">
            <?php
                if(isset($_SESSION["MaTaiKhoan"]))
                {
                ?>
                    <a href="index.php?a=5&id=<?php echo $row["MaSanPham"]; ?>">
                        <img src="img/ca.png" width="32">
                    </a>
                <?php
                }
            ?>
        </div>
    </div>
    <div id="mota">
        <?=$row["MoTa"];
        ?>
    </div>
</div>
<?php
    $SoLuocXem = $row["SoLuocXem"] + 1;
    $sql = "UPDATE SanPham SET SoLuocXem = $SoLuocXem
            WHERE MaSanPham = $id";
    DataProvider::ExecuteQuery($sql);
?>