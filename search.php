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
        </div>
        <section class="section-padding">
            <h2 class="sr-only">Home Tab Slider Section</h2>
            <div class="container">
                <div class="sb-custom-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="shop-tab" data-toggle="tab" href="#shop" role="tab"
                                aria-controls="shop" aria-selected="true">
                                Bán chạy
                            </a>
                            <span class="arrow-icon"></span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="men-tab" data-toggle="tab" href="#men" role="tab"
                                aria-controls="men" aria-selected="true">
                                New Arrivals
                            </a>
                            <span class="arrow-icon"></span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="woman-tab" data-toggle="tab" href="#woman" role="tab"
                                aria-controls="woman" aria-selected="false">
                                Most view products
                            </a>
                            <span class="arrow-icon"></span>
                        </li>
                    </ul>
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
				if (isset($_REQUEST['ok'])) 
                {
                    // Gán hàm addslashes để chống sql injection
                    $search = addslashes($_GET['search']);
         
                    // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
                    if (empty($search)) {
                        echo '<h2 style="margin-top :20px;text-align:center; color: deeppink ">Vui lòng nhập thông tin vào ô trống :V</h2>';
                    } 
                    else
                    {
                        $connect=mysqli_connect("localhost", "root", "", "banhang");
                        // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                        $query = "select * from  hanghoa where tenhang like '%$search%'";
                        // Thực thi câu truy vấn
                        $sql = mysqli_query($connect,$query);
                        // Đếm số đong trả về trong sql.
                        $num = mysqli_num_rows($sql);
                        // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                        if ($num > 0 && $search != "") 
                        {
                            $kqkm= $row['dongia']-$row['dongia']*$row['giamgia'] ;
                            $giamgia= $row['giamgia']*100;
                            echo '
                            <div class="single-slide">
                            <b> '.$num.' ket qua tra ve voi tu khoa <b><b style="color: red">'.$search.'</b>
                            </div>';

                            while ($row = mysqli_fetch_assoc($sql)) {
                                
                                echo '
                        <div class="single-slide">
                                
                                
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                jpple
                                            </a>
                                            <h3><a href="chitietsp.php?id='.$row['id'].'">'.$row['tenhang'].'</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="'.$row['anh'].'" alt="">
                                                <div class="hover-contents">
                                                    <a href="chitietsp.php?id='.$row['id'].'" class="hover-image">
                                                        <img src="'.$row['anh'].'"  alt="">
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">'.$kqkm.'</span>
												
                                                <del class="price-old">'.$row['dongia'].'</del>
                                                <span class="price-discount">'.$giamgia.'%</span>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>';
                                }
                            }
                        }
				}
			?>
            </div>
            </div>
        </div>
    </div>
    </body>
    <script src="js/plugins.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/custom.js"></script>
</html>