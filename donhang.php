<?php 
   session_start();
	$conn=mysqli_connect("localhost","root","","banhang");
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
			$t=$_SESSION['ten'];
			$sql1= "SELECT id FROM taikhoan WHERE tendn='$t'";
			$result = mysqli_query($conn, $sql1);
			while ($row = mysqli_fetch_assoc($result)) {
			$idkhachhang= $row['id'];
			}
			$ten=$_POST['ten'];
		$sdt=$_POST['sdt'];
		$diachi=$_POST['diachi'];
		$ghichu=$_POST['ghichu'];
		$sql="INSERT INTO donhang(idkhachhang,ten,sdt,diachi,ghichu) VALUES('$idkhachhang','$ten','$sdt','$diachi','$ghichu')";
		$ketqua=mysqli_query($conn,$sql);
		
	}
				
				
?>