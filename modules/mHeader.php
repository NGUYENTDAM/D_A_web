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
                <div class="col-sm-8 col-sm-offset-2 h_menu4">
                    <nav class="navbar nav_bottom" role="navigation">
                        <!-- Menu Bar -->
                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav nav_1">
                                <li><a class="color" href="index.php ">Trang chủ</a></li>
                                <li class="dropdown mega-dropdown active"> <a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown">Điện Thoại<span class="caret"></span></a>
                                    <div class="dropdown-menu ">
                                        <div class="menu-top">
                                            <h3>Hãng sản xuất</h3>
                                            <div class="col1">
                                                <div class="h_nav">
                                                    <a href="#" ><h4>APPLE</h4></a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col1">
                                                <div class="h_nav">
                                                    <a href="#"><h4>SAMSUNG</h4></a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col1">
                                                <div class="h_nav">
                                                <a href="#"><h4>OPPO</h4></a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col1">
                                                <div class="h_nav">
                                                <a href="#"><h4>XIAOMI</h4></a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col1">
                                                <div class="h_nav">
                                                <a href="#"><h4>REALME</h4></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col1">
                                                <div class="h_nav">
                                                <a href="#"><h4>ASUS</h4></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col1">
                                                <div class="h_nav">
                                                <a href="#"><h4>NOKIA</h4></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col1">
                                                <div class="h_nav">
                                                <a href="#"><h4>SONY</h4></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                </li>
                                <li class="dropdown mega-dropdown active"> <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">TABLET<span class="caret"></span></a>
                                    <div class="dropdown-menu mega-dropdown-menu">
                                        <div class="menu-top">
                                        <h3>Hãng sản xuất</h3>
                                            <div class="col1">
                                                <div class="h_nav">
                                                <a href="#"><h4>APPLE (iPad)</h4></a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col1">
                                                <div class="h_nav">
                                                <a href="#"><h4>SAMSUNG</h4></a>
                                            </div>
                                            <div class="clearfix"></div>
                                            </div>
                                            <div class="col1">
                                                <div class="h_nav">
                                                <a href="#"><h4>LENOVO</h4></a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col1">
                                                <div class="h_nav">
                                                <a href="#"><h4>ITEL</h4></a>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </li>
                                <li><a class="color3" href="product.html">Phụ Kiện</a></li>
                                <li><a class="color6" href="contact.html">Phản hồi</a></li>
                            </ul>
                        </div>
                        <!-- /menubar -->
                    </nav>
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