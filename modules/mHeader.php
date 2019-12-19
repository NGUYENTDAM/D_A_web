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
                <div class="col-sm-8 col-md-offset-2 h_menu4">
                    <nav class="navbar nav_bottom" role="navigation">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header nav_2">
                            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <!-- Menu Bar -->
                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav nav_1">
                                <li><a class="color" href="index.php ">Trang chủ</a></li>
                                <li class="dropdown mega-dropdown active"> <a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown">Điện Thoại<span class="caret"></span></a>
                                    <div class="dropdown-menu ">
                                        <div class="menu-top">
                                            <div class="col1">
                                                <div class="h_nav">
                                                    <h4>IPHONE</h4>
                                                    <ul>
                                                        <li><a href="product.html">IPHONE 11</a></li>
                                                        <li><a href="product.html">IPHONE X</a></li>
                                                        <li><a href="product.html">IPHONE 8</a></li>
                                                        <li><a href="product.html">IPHONE 7</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col1">
                                                <div class="h_nav">
                                                    <h4>SAMSUNG</h4>
                                                    <ul>
                                                        <li><a href="product.html">SAMSUNG NOTE</a></li>
                                                        <li><a href="product.html">SAMSUNG GALAXY S10</a></li>
                                                        <li><a href="product.html">SAMSUNG A</a></li>
                                                        <li><a href="product.html">SAMSUNG FOLD</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col1">
                                                <div class="h_nav">
                                                    <h4>OPPO</h4>
                                                    <ul>
                                                        <li><a href="product.html">OPPO RENO</a></li>
                                                        <li><a href="product.html">OPPO A</a></li>
                                                        <li><a href="product.html">OPPO K</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col1">
                                                <div class="h_nav">
                                                    <h4>XIAOMI</h4>
                                                    <ul>
                                                        <li><a href="product.html">XIAOMI MI</a></li>
                                                        <li><a href="product.html">XIAOMI REDMI</a></li>
                                                        <li><a href="product.html">XIAOMI POCOPHONE</a></li>
                                                        <li><a href="product.html">XIAOMI BLACKSHARK</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col1">
                                                <div class="h_nav">
                                                    <h4>REALME</h4>
                                                    <ul>
                                                        <li><a href="product.html">REALME 5</a></li>
                                                        <li><a href="product.html">REALME C3</a></li>
                                                        <li><a href="product.html">REALME XT</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col1">
                                                <div class="h_nav">
                                                    <h4>ASUS</h4>
                                                    <ul>
                                                        <li><a href="product.html">ASUS ROG</a></li>
                                                        <li><a href="product.html">AUSU ZENFONE</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                </li>
                                <li class="dropdown mega-dropdown active"> <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">Laptop<span class="caret"></span></a>
                                    <div class="dropdown-menu mega-dropdown-menu">
                                        <div class="menu-top">
                                            <div class="col1">
                                                <div class="h_nav">
                                                    <h4>Macbook</h4>
                                                    <ul>
                                                        <li><a href="product.html">Macbook Air</a></li>
                                                        <li><a href="product.html">MacBook Pro</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col1">
                                                <div class="h_nav">
                                                    <h4>HP</h4>
                                                    <ul>
                                                        <li><a href="product.html">HP Pavilion</a></li>
                                                        <li><a href="product.html">HP Notebook</a></li>
                                                        <li><a href="product.html">HP Envy</a></li>
                                                        <li><a href="product.html">HP Elitebook</a></li>
                                                        <li><a href="product.html">Các dòng khác</a></li>
                                                </div>
                                            </div>
                                            <div class="col1">
                                                <div class="h_nav">
                                                    <h4>Asus</h4>
                                                    <ul>
                                                        <li><a href="product.html">Asus Vivobook</a></li>
                                                        <li><a href="product.html">Asus Zenbook</a></li>
                                                        <li><a href="product.html">Asus Zephyrus</a></li>
                                                        <li><a href="product.html">Asus Strix</a></li>
                                                        <li><a href="product.html">Asus TUF Gaming</a></li>
                                                        <li><a href="product.html">Asus Pro</a></li>
                                                        <li><a href="product.html">Các dòng khác</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col1">
                                                <div class="h_nav">
                                                    <h4>MSI</h4>
                                                    <ul>
                                                        <li><a href="product.html">MSI GF63</a></li>
                                                        <li><a href="product.html">MSI PS41</a></li>
                                                        <li><a href="product.html">MSI GL63</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </li>
                                <li><a class="color3" href="product.html">Phụ Kiện</a></li>
                                <li><a class="color4" href="404.html">Sim,Thẻ Nhớ</a></li>
                                <li><a class="color6" href="contact.html">Góp Ý</a></li>
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