<?php
    session_start();
    include "lib/DataProvider.php";	
    //$_SESSION["path"] = $_SERVER["RESUEST_URL"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
	addEventListener("load", function() {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
	</script>
	<!--//theme-style-->
	<link href="css/style4.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<script src="js/jquery.min.js"></script>
	<!--- start-rate---->
	<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
	<script type="text/javascript">
	jQuery(function() {
		jQuery('.starbox').each(function() {
			var starbox = jQuery(this);
			starbox.starbox({
				average: starbox.attr('data-start-value'),
				changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
				ghosting: starbox.hasClass('ghosting'),
				autoUpdateAverage: starbox.hasClass('autoupdate'),
				buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
				stars: starbox.attr('data-star-count') || 5
			}).bind('starbox-value-changed', function(event, value) {
				if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' ' + val);
					return val;
				}
			})
		});
	});
	</script>
	<!---//End-rate---->

</head>

<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="head">
				<div class=" logo">
					<a href="index.html"><img src="images/logo.png" alt="" width="184" height="91"></a>
				</div>
		  </div>
		</div>
		<div class="header-top">
			<div  class="container">
				<div class="col-sm-5 col-md-offset-2  header-login">
					<ul>
						<li><a href="login.html">Đăng nhập</a></li>
						<li><a href="register.html">Đăng ký</a></li>
						<li><a href="checkout.html">Giỏ hàng</a></li>
					</ul>
				</div>
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
									<li><a class="color" href="index.html">Trang chủ</a></li>
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
									<h3> <div class="total">
							<span class="simpleCart_total">0.00đ</span></div>
						  <img src="images/cart.png" alt=""/></h3> </a>
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
			<!--content-->
			<div class="content">
				<div class="container">
					<div class="content-mid">
						<?php
							include "pages/pSanPhamBanChay.php";

						?>
					
					</div>
					<div class="content-mid">
						<?php
							include "pages/pSanPhamMoi.php";

						?>
					
					</div>
				</div>
			
			</div>
		</div>
		<!--//content-->
		<!--//footer-->
		<div class="footer">
			<div class="footer-middle">
				<div class="container">
					<div class="col-md-3 footer-middle-in">
						<h6>Thông tin</h6>
						<ul class=" in">
							<li><a href="404.html">Thông Tin</a></li>
							<li><a href="contact.html">Phản Hồi</a></li>
							<li><a href="#">Trở Lại</a></li>
							<li><a href="contact.html">Tìm Trên Map</a></li>
						</ul>
						<ul class="in in1">
							<li><a href="#">Lịch Sử</a></li>
							<li><a href="wishlist.html">Danh Sách Yêu Thích</a></li>
							<li><a href="login.html">Đăng Nhập</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Tags</h6>
						<ul class="tag-in">
							<li><a href="#">Điện Thoại</a></li>
							<li><a href="#">Tablet</a></li>
							<li><a href="#">LapTop</a></li>
							<li><a href="#">Đồng Hồ</a></li>
							<li><a href="#">Máy Cũ Giá Rẻ</a></li>
							<li><a href="#">Phụ Kiện</a></li>
							<li><a href="#">Tin Tức Công Nghệ</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Bảng Tin</h6> <span>Đăng nhập để cập nhật tin tức mới</span>
						<form>
							<input type="text" value="Nhập E-mail của bạn" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Nhập Email';}">
							<input type="submit" value="Đồng Ý"> </form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="footer-bottom"> &copy;Design by Student of Fit - HCMUS </div>
			<!--//footer-->
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="js/simpleCart.min.js">
			</script>
			<!-- slide -->
			<script src="js/bootstrap.min.js"></script>
			<!--light-box-files -->
			<script src="js/jquery.chocolat.js"></script>
			<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
			<!--light-box-files -->
			<script type="text/javascript" charset="utf-8">
			$(function() {
				$('a.picture').Chocolat();
			});
			</script>
</body>
</html>