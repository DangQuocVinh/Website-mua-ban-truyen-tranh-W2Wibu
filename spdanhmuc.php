<!DOCTYPE html>
<html>
<head>
	<title>Thịnh hành</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  	 article:hover {
          box-shadow: 0 0 15px ;
          border-radius: 10px;
        }
        
  </style>
</head>
<body>
	<div class="container-fiuld">
		
				<?php  
					include("menu.php");
				?>		
				
					
		<div class="container text-center" >	
				<?php 
				$conn=mysqli_connect("localhost","root","","banhang");
				if (isset($_GET['iddanhmuc'])) {
                
					$iddanhmuc=$_GET['iddanhmuc'];
				$sql="SELECT * FROM hanghoa WHERE iddanhmuc='$iddanhmuc' ORDER BY soluong ";	
				$sql1="SELECT * FROM danhmuc WHERE id='$iddanhmuc'";
				$ketqua=mysqli_query($conn,$sql);
				$ketqua1=mysqli_query($conn,$sql1);
				$row1 = mysqli_fetch_assoc($ketqua1);
				echo '<p style="float: left;font-size: 30px;color: red"> <b> '.$row1['tendanhmuc'].' </b> </p><br><br><br>';
				}
				else{
					$sql="SELECT * FROM hanghoa WHERE soluong<'30' ORDER BY soluong";
					$ketqua=mysqli_query($conn,$sql);
				}
				while ($row = mysqli_fetch_assoc($ketqua)) {
					
					echo '<div class="col-sm-4 "  ><a href="chitietsp.php?id='.$row['id'].'" style="text-decoration: none;">
							<article style="border: 1px solid #DCDCDC;width: 250px;height: 320px;">
					 	<img src="'.$row['anh'].'" alt="" class="img" width="240px" height="250px">
					 	<p>'.$row['tenhang'].'</p>
					 	<p style="width: 50%;background-color: red;color: white;border-radius: 10px;margin-left: 60px;font-size:19px" >'.$row['dongia'].'<sup>đ</sup>
					 	</p>
						</article>
						</a><br></div>';				}
			?>
		</div>
		<h1 style="margin-left: 100px"> <b>Phổ biến</b> </h1>	
			<div class="container text-center">	
				<?php 
				$conn=mysqli_connect("localhost","root","","banhang");	
					$sql="SELECT * FROM hanghoa ";
					$ketqua=mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_assoc($ketqua)) {
					echo '<div class="col-sm-4" ><a href="chitietsp.php?id='.$row['id'].'" style="text-decoration: none;" >
							<article style="border: 1px solid #DCDCDC;width: 25F0px;height: 320px">
					 	<img src="'.$row['anh'].'" alt="" class="img" width="240px" height="250px">
					 	<p>'.$row['tenhang'].'</p>
					 	<p style="width: 50%;background-color: red;color: white;border-radius: 10px;margin-left: 60px;font-size:19px" >'.$row['dongia'].'<sup>đ</sup>
					 	</p>
						</article>
						</a><br>
						
						</div>';
				}
				
			?>
		</div>
	</div>
</body>
</html>