<?php
        session_start(); 
?>
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/ index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Nov 2020 14:58:10 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>W2Wibu - Book Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
    <script>
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</head>

<body>
    <div class="site-wrapper" id="top">
        <div class="site-header d-none d-lg-block">
            <div class="header-middle pt--10 pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 ">
                            <a href="index.php" class="site-brand">
                                <img src="image/bg-images/logo.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <div class="header-phone ">
                                <div class="icon">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="text">
                                    <p>Hỗ trợ tư vấn 24/7</p>
                                    <p class="font-weight-bold number">0915970687</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7" >
                            <div class="main-navigation flex-lg-right">
                                <ul class="main-menu menu-right ">
                                
                                    <!-- Shop -->
                                    
                                    <!-- Pages -->
                                    <?php  
                                    if(isset($_SESSION['vt'])){
                                    if($_SESSION['vt']=="admin"){
           
                                    echo '
                                        <li class="menu-item has-children"><a href="#" >Danh mục</a>
					                        <ul class="sub-menu">
        			                            <li><a href="danhmuc.php">Xem danh mục</a></li>
        			                            <li><a href="themdanhmuc.php">Thêm danh mục</a></li>
					                        </ul>
				                        </li>
                                        <li class="menu-item has-children"><a href="#" >Hàng hóa</a>
					                        <ul class="sub-menu">
        			                            <li><a href="hanghoa.php">Xem hàng hóa</a></li>
        			                            <li><a href="themhanghoa.php">Thêm hàng hóa</a></li>
					                        </ul>
				                        </li>
                                        <li class="menu-item"><a href="khachhang.php">Khách hàng</a></li>
                                    ';}
                                    }
                                    else {
                                    }
                                    ?>
                                    <?php
                                    if (isset($_SESSION['ten'])) {
                                        echo'
                                        <li class="menu-item">
                                        <a href="dangxuat.php"><span style="text-transform: capitalize;">Đăng xuất</span></a>
                                    </li>';
                                    }
                                    else{
                                        echo'
                                        <li class="menu-item">
                                        <a href="login.php"><span style="text-transform: capitalize;">Đăng nhập</span></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="register.php"><span style="text-transform: capitalize;">Đăng ký</span></a>
                                    </li>';
                                    }
                                    ?>
                                    <li class="menu-item">
                                        <a href="contact.html"><span style="text-transform: capitalize;">Liên hệ</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <nav class="category-nav   ">
                                <div>
                                    <a href="javascript:void(0)" class="category-trigger"><i
                                        class="fa fa-bars"></i>Thể loại</a>
                                        <ul class="category-menu">
                                    <?php 
				                            $conn=mysqli_connect("localhost","root","","banhang");
				                            $sql="SELECT * FROM danhmuc";
				                            $ketqua=mysqli_query($conn,$sql);
                                            $stt=1;
                                            while($row=mysqli_fetch_array($ketqua)){
                                        echo '
                                        <li class="ok">
                                        <a href="spdanhmuc.php?iddanhmuc='.$row['id'].'" >'.$row['tendanhmuc'].'</a>
                                            
                                        </li>
                                        ';
                                            }
                                            ?>
                                        </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-lg-5">
                            <div class="header-search-block">
								<form action="search.php" method="GET">
             					<input type="text" name="search" placeholder="Bạn cứ nhập từ khoá và để W2.Wibu lo">
									<button  type="submit" name="ok">Search</button>
								</form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="main-navigation flex-lg-right">
                                <div class="cart-widget">
                                    <div class="login-block">
                                    <?php
       		                            if (isset($_SESSION['ten'])) {
          		                        echo '<div class="cart-product">
                                          <a href="product-details.html" class="image">
                                              <img src="image/bg-images/klee1.png" alt="">
                                          </a>
                                          </div>';
          
                                        }
                                    ?>
                                        
                                    </div>
                                    <div class="cart-block">
                                        <div class="cart-total">
                                            <span class="text-number">
                                                1
                                            </span>
                                            <span class="text-item">
                                                Giỏ hàng
                                            </span>
                                            <span class="price">
                                                
                                                <i class="fas fa-chevron-down"></i>
                                            </span>
                                        </div>
                                        <div class="cart-dropdown-block">
                                            <div class=" single-cart-block ">
                                                <div class="cart-product">
                                                    <a href="product-details.html" class="image">
                                                        <img src="image/products/cart-product-1.jpg" alt="">
                                                    </a>
                                                    <div class="content">
                                                        <h3 class="title"><a href="product-details.html">Kodak PIXPRO
                                                                Astro Zoom AZ421 16 MP</a>
                                                        </h3>
                                                        <p class="price"><span class="qty">1 ×</span> £87.34</p>
                                                        <button class="cross-btn"><i class="fas fa-times"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" single-cart-block ">
                                                <div class="btn-block">
                                                    <a href="cart.php" class="btn">View Cart <i
                                                            class="fas fa-chevron-right"></i></a>
                                                    <a href="checkout.html" class="btn btn--primary">Check Out <i
                                                            class="fas fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="sticky-init fixed-header common-sticky">
            <div class="container d-none d-lg-block">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <a href=" index.php" class="site-brand">
                            <img src="image/bg-images/logo.png" alt="">
                        </a>
                    </div>
                    
                    <div class="col-lg-8">
                        <div class="main-navigation flex-lg-right">
                        <ul class="main-menu menu-right ">
                                
                                <!-- Shop -->
                                
                                <!-- Pages -->
                                
                                <?php
                                if (isset($_SESSION['ten'])) {
                                    echo'
                                    <li class="menu-item">
                                    <a href="dangxuat.php"><span style="text-transform: capitalize;">Đăng xuất</span></a>
                                </li>';
                                }
                                else{
                                    echo'
                                    <li class="menu-item">
                                    <a href="login.php"><span style="text-transform: capitalize;">Đăng nhập</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="register.php"><span style="text-transform: capitalize;">Đăng ký</span></a>
                                </li>';
                                }
                                ?>
                                <li class="menu-item">
                                    <a href="contact.html"><span style="text-transform: capitalize;">Liên hệ</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>