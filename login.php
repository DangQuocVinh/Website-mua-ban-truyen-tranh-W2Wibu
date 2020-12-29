
<?php 
	$conn=mysqli_connect("localhost","root","","banhang");
 	$ten='';$pas='';$usernameErr='';$PasswordErr='';
 	$t='';$s='';$id='';
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if (empty($_POST['tendn'])) {
			$usernameErr="Ban can nhap username";
			if (!preg_match("/^[a-z0-9']*$/",$ten)) {
			$usernameErr="Bạn cần nhập đúng ký tự";
			}
		}
		else
		$ten=$_POST['tendn'];
		if (empty($_POST['mk'])) $PasswordErr="Ban can nhap password";
		else
		$pas=md5($_POST['mk']);
		$sql = "SELECT * FROM taikhoan WHERE tendn = '$ten' AND   matkhau = '$pas' ";
		$ketqua = mysqli_query($conn,$sql);
		$row = mysqli_num_rows($ketqua);
		$data=mysqli_fetch_assoc($ketqua);
		if ($row!=1) {
			$s= "<p align='center'>tên đăng nhập hoặc mật khẩu không đúng !</p> <br>";
		}else{
			$id=$data['id'];
			$t="tc";
			header('Location: index.php');
		}
		
	}
 ?>
 
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Nov 2020 14:59:43 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pustok - Book Store HTML Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
	<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
</head>

<body>
	<div class="site-wrapper" id="top">
		<div class="site-header d-none d-lg-block">
			<?php include "menu.php" ?>
			
		</div>
		
	
		<main class="page-section inner-page-sec-padding-bottom">
			<div class="container">
				<div  class="row">
					<?php 
					
						if ($t=="tc") {
							$admin=$data['vaitro'];
							$_SESSION['vt']=$admin;
							$_SESSION['ten']=$ten;
							$_SESSION['id']=$id;
						}
						else{
					?>
					<div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
						<form action="login.php" method="POST">
							<div class="login-form">
								<h4 class="login-title">Đã có tài khoản?</h4>
								<p><span class="font-weight-bold">Bạn đã là một thành viên của cộng đồng W2Wibu? đăng nhập ngay!</span></p>
								<div class="row">
									<div class="col-md-12 col-12 mb--15">
										<label for="email">Nhập tên đăng nhập ở đây `3` </label>
										<input class="mb-0 form-control" type="text" name="tendn" placeholder="Nhập vào ô này nà :3">
										<?php echo $usernameErr ?> 
											
									</div>
									<div class="col-12 mb--20">
										<label for="password">Mật khẩu</label>
										<input class="mb-0 form-control"  type="password" name="mk" placeholder="Nhập mật khẩu"><?php echo $PasswordErr; ?>
									</div>
									<div class="col-md-12">
										<input class="btn btn-outlined" style="background-color: #33CC33"   type="submit" name="" value="Đăng nhập">
									</div>
								</div>
							</div>
						</form>
					</div>
					<?php 
		}
		
	 ?> 
					<div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
					<div class="login-form">
							<h5><b><?php echo $s; ?></b><h5>
							<div class="col-xl-6 col-md-6 col-sm-7">
							<img src="image/bg-images/klee6.png" height="250px" width="260px" alt=""> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
	<!--=================================
  Brands Slider
===================================== -->
	<section class="section-margin">
		<h2 class="sr-only">Brand Slider</h2>
		<div class="container">
			<div class="brand-slider sb-slick-slider border-top border-bottom" data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow": 6
                                            }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 4} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 3} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
				<div class="single-slide">
					<img src="image/others/brand-1.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-2.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-3.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-4.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-5.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-6.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-1.jpg" alt="">
				</div>
				<div class="single-slide">
					<img src="image/others/brand-2.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<!--=================================
    Footer Area
===================================== -->
	<footer class="site-footer">
		<div class="container">
			<div class="row justify-content-between  section-padding">
				<div class=" col-xl-3 col-lg-4 col-sm-6">
					<div class="single-footer pb--40">
						<div class="brand-footer footer-title">
							<img src="image/logo--footer.png" alt="">
						</div>
						<div class="footer-contact">
							<p><span class="label">Address:</span><span class="text">Example Street 98, HH2 BacHa, New
									York, USA</span></p>
							<p><span class="label">Phone:</span><span class="text">+18088 234 5678</span></p>
							<p><span class="label">Email:</span><span class="text">suport@hastech.com</span></p>
						</div>
					</div>
				</div>
				<div class=" col-xl-3 col-lg-2 col-sm-6">
					<div class="single-footer pb--40">
						<div class="footer-title">
							<h3>Information</h3>
						</div>
						<ul class="footer-list normal-list">
							<li><a href="#">Prices drop</a></li>
							<li><a href="#">New products</a></li>
							<li><a href="#">Best sales</a></li>
							<li><a href="#">Contact us</a></li>
							<li><a href="#">Sitemap</a></li>
						</ul>
					</div>
				</div>
				<div class=" col-xl-3 col-lg-2 col-sm-6">
					<div class="single-footer pb--40">
						<div class="footer-title">
							<h3>Extras</h3>
						</div>
						<ul class="footer-list normal-list">
							<li><a href="#">Delivery</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Stores</a></li>
							<li><a href="#">Contact us</a></li>
							<li><a href="#">Sitemap</a></li>
						</ul>
					</div>
				</div>
				<div class=" col-xl-3 col-lg-4 col-sm-6">
					<div class="footer-title">
						<h3>Newsletter Subscribe</h3>
					</div>
					<div class="newsletter-form mb--30">
						<form action="https://demo.hasthemes.com/pustok-preview/pustok/php/mail.php">
							<input type="email" class="form-control" placeholder="Enter Your Email Address Here...">
							<button class="btn btn--primary w-100">Subscribe</button>
						</form>
					</div>
					<div class="social-block">
						<h3 class="title">STAY CONNECTED</h3>
						<ul class="social-list list-inline">
							<li class="single-social facebook"><a href="#"><i class="ion ion-social-facebook"></i></a>
							</li>
							<li class="single-social twitter"><a href="#"><i class="ion ion-social-twitter"></i></a></li>
							<li class="single-social google"><a href="#"><i
										class="ion ion-social-googleplus-outline"></i></a></li>
							<li class="single-social youtube"><a href="#"><i class="ion ion-social-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<p class="copyright-heading">Suspendisse in auctor augue. Cras fermentum est ac fermentum tempor. Etiam
					vel magna volutpat, posuere eros</p>
				<a href="#" class="payment-block">
					<img src="image/icon/payment.png" alt="">
				</a>
				<p class="copyright-text">Copyright © 2019 <a href="#" class="author">Pustok</a>. All Right Reserved.
					<br>
					Design By Pustok</p>
			</div>
		</div>
	</footer>
	<!-- Use Minified Plugins Version For Fast Page Load -->
	<script src="js/plugins.js"></script>
	<script src="js/ajax-mail.js"></script>
	<script src="js/custom.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Nov 2020 14:59:43 GMT -->
</html>