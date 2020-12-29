<?php 
	$conn=mysqli_connect("localhost","root","","banhang");
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		$tenhang=$_POST['tenhang'];$soluong=$_POST['soluong'];$dongia=$_POST['dongia'];
		$anh=$_POST['anh'];
		$iddanhmuc=$_POST['iddanhmuc'];
		$mota=$_POST['mota'];
		$sql="INSERT INTO hanghoa(tenhang,soluong,dongia,iddanhmuc,anh,mota) VALUES('$tenhang',$soluong,$dongia,$iddanhmuc,'image/bg-images/$anh','$mota')";
		$ketqua=mysqli_query($conn,$sql);
		
	}
				
				
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<script src="ckeditor/ckeditor.js"></script>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
</head>
<body>
	<div class="col-sm-12 text-center" >
				<?php  
					include("menu.php");
				?>
	</div>
	<div class="col-sm-12 form-group" style="margin-top: 90px">
		<h1 >Thêm hàng hóa</h1>

	<form action="themhanghoa.php" method="POST" >
		Tên mặt hàng: <input type="text" name="tenhang" ><br>
		Số lượng: <input type="text" name="soluong"><br>
		Đơn giá: <input type="text" name="dongia"><br>
		Link ảnh: <input type="file" id="myfile" name="anh" ><br>
		Danh mục: 
		<select name="iddanhmuc" >
			<?php
				$sql="SELECT * FROM danhmuc";
				$ketqua=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_assoc($ketqua)){
					echo '<option value="'.$row['id'].'">'.$row['tendanhmuc'].'</option>';
				}

			?>
		</select>
		<br>
		Phần mô tả:  <textarea  class="ckeditor col-12" name="mota" cols="80" rows="10" >
		        </textarea> 
		<input type="submit" value="Thêm">
	</form>
	</div>
	
</body>
</html>