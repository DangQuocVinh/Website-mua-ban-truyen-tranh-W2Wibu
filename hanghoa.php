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
        <table border="1" style="table.center: width: 780px; margin-left: auto; margin-right: auto; text-align: center;">
			<tr>
				<th width="50px">ID truyện</th>
				<th width="200px">Tên truyện</th>
				<th width="150px">Số lượng </th>
				<th width="150px">Đơn giá</th>
				<th width="150px">Giảm giá</th>
				<th width="100px">ID thể loại</th>	
				<th width="250px">Link ảnh</th>
				<th width="100px">Xóa</th>
				<th width="100px">Sửa</th>
			</tr>
			<?php 
				$conn=mysqli_connect("localhost","root","","banhang");
				if (isset($_GET['iddanhmuc'])) {
				$sql="SELECT * FROM hanghoa WHERE iddanhmuc=".$_GET['iddanhmuc'];
				$ketqua=mysqli_query($conn,$sql);
				}
				else{
					$sql="SELECT * FROM hanghoa ";
				$ketqua=mysqli_query($conn,$sql);
                }
                
				$stt=1;
				while ($row = mysqli_fetch_assoc($ketqua)) {
                    $giamgia= $row['giamgia']*100;
					echo '<tr>';
					echo '<td style="width=50%">'.$row['id'].'</td>';
					echo '<td>'.$row['tenhang'].'</td>';
					echo '<td>'.$row['soluong'].'</td>';		
                    echo '<td>'.$row['dongia'].'</td>';
                    echo '<td>'.$giamgia.'%</td>';
					echo '<td>'.$row['iddanhmuc'].'</td>';
					echo '<td>'.$row['anh'].'</td>';
					
					echo '<td><a href="xoahh.php?id='.$row['id'].'">Xóa</a></td>';
					echo '<td><a href="suahh.php?id='.$row['id'].'">Sửa</a></td>';
					echo '</tr>';
					$stt++;
				}
			?>
	</table>
    </div>
    </body>
    </html>

        
        
