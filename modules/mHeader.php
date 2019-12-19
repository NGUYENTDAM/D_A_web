<div class="header">
    <div class="container">
        <div class="head">
            <div class=" logo">
                <a href="index.php"><img src="images/logo.png" alt="" width="184" height="91"></a>
            </div>
        </div>
    </div>
    <div class="header-top">
        <div class="container">
            <?php
                if (isset($_SESSION["MaTaiKhoan"]))
                {
                    ?>
                    Hello, <?php echo $_SESSION["TenHienThi"];?>
                    <a href="modules/xlDangXuat.php">Đăng xuất</a>
                    <a href="index.php?a=5">
                        <img src="img/manage_shopping.png" height="20" />
                    </a>
                    <?php
                }
                else
                {
                    ?>
                        <div class="col-sm-5 col-md-offset-2  header-login">
                            <ul>
                                <li><a href="index.php?a=5">Đăng Nhập</a></li>
                                <li><a href="index.php?a=6">Đăng ký</a></li>
                                <li><a href="checkout.html">Giỏ hàng</a></li>
                            </ul>
                        </div>
                    <?php
                }
            ?>


            
        </div>
        <div class="container">
            <div class="head-top">
            <div class="navbar1">
                        <a href="#">Home</a>
                        <div class="subnav1">
                            <button class="subnavbtn1" onclick="window.location.href = 'index.php?a=404';">Điện thoại<i class="fa fa-caret-down"></i></button>
                            <div class="subnav-content1">
                                <p class="cnt">Hãng sản xuất</p>
                            <a href="#">APPLE</a>
                            <a href="#">SAMSUNG</a>
                            <a href="#">OPPO</a>
                            <a href="#">XIAOMI</a>
                            <a href="#">ASUS</a>
                            <a href="#">REALME</a>
                            </div>
                        </div>
                        <div class="subnav1">
                            <button class="subnavbtn1"onclick="window.location.href = '#';">Tablet <i class="fa fa-caret-down"></i></button>
                            <div class="subnav-content1">
                            <p class="cnt">Hãng sản xuất</p>
                            <a href="#">APPLE (iPad)</a>
                            <a href="#">SAMSUNG</a>
                            <a href="#">LENOVO</a>
                            </div>
                        </div>
                        <div class="subnav1">
                            <button class="subnavbtn1" onclick="window.location.href = '#m';">Phụ kiện<i class="fa fa-caret-down"></i></button>
                            <div class="subnav-content1">
                            <p class="cnt">Các sản phẩm phụ kiện</p>
                            <a href="#">Loa</a>
                            <a href="#">Ốp lưng</a>
                            <a href="#">USB-Ổ cứng</a>
                            <a href="#">Tai nghe</a>
                            <a href="#">Sạc dự phòng</a>
                            <a href="#">Thẻ nhớ</a>
                            <a href="#">Phụ kiện khác</a>
                            </div>
                            </div>
                        <a href="#contact">Phản hồi</a>
                        </div>
                        </div>
                <div class="col-sm-2 search-right">
                    <ul class="heart">
                        <li>
                            <a href="wishlist.html"> <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> </a>
                        </li>
                        <li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
                    </ul>
                    <div class="cart box_1">
                        <a href="checkout.html">
                            <h3>
                                <div class="total">
                                    <span class="simpleCart_total">0.00đ</span></div>
                                <img src="images/cart.png" alt="" />
                            </h3>
                        </a>
                        <p>
                            <a href="javascript:;" class="simpleCart_empty"></a>
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                    <!----->
                    <!---pop-up-box---->
                    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
                    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                    <!---//pop-up-box---->
                    <!--search--->
                    <div id="small-dialog" class="mfp-hide">
                        <div class="search-top">
                            <div class="login-search">
                                <input type="submit" value="">
                                <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"> </div>
                            <p>Hunter Mobile</p>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $('.popup-with-zoom-anim').magnificPopup({
                                type: 'inline',
                                fixedContentPos: false,
                                fixedBgPos: true,
                                overflowY: 'auto',
                                closeBtnInside: true,
                                preloader: false,
                                midClick: true,
                                removalDelay: 300,
                                mainClass: 'my-mfp-zoom-in'
                            });
                        });
                    </script>
                    <!--//search--->
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>