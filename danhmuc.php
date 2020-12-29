<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.hasthemes.com/pustok-preview/pustok/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Nov 2020 14:58:10 GMT -->
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
            <?php include "menu.php" ?>
            
        </div>
        
        
       
        <section class="section-padding">
            <h2 class="sr-only">Home Tab Slider Section</h2>
            <div class="container">
                
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane show active" id="shop" role="tabpanel" aria-labelledby="shop-tab">
                            <div class="product-slider multiple-row  slider-border-multiple-row  sb-slick-slider"
                                data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 8000,
                            "slidesToShow": 5,
                            "rows":2,
                            "dots":true
                        }' data-slick-responsive='[
                            {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1} },
                            {"breakpoint":320, "settings": {"slidesToShow": 1} }
                        ]'>
				<?php 
				$conn=mysqli_connect("localhost","root","","banhang");
				$sql="SELECT * FROM danhmuc";
				$ketqua=mysqli_query($conn,$sql);
				$stt=1;
				
				while ($row = mysqli_fetch_assoc($ketqua)) {
                    
					echo '<div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a href="hanghoa.php?iddanhmuc='.$row['id'].'" >'.$row['tendanhmuc'].'</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="'.$row['anh'].'" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="'.$row['anh'].'"  alt="">
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price"><a href="xoadm.php?id='.$row['id'].'" >Xóa</a></span>
												
                                                <span class="price"><a href="suadm.php?id='.$row['id'].'" >Sửa</a></span>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>';
				}
			?>
                                
                                </div>
                            </div>
                        </div>
            </body>
            </html>