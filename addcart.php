<?php
session_start();
?>
<div>
include("menu.php");
</div>

<?php
$conn=mysqli_connect("localhost","root","","banhang");
$id=$_GET['id'];
$tendn=$_SESSION['ten'];

if(isset($_SESSION['ten'])){
   
if(isset($_SESSION['cart'][$id][$tendn]))
{
$qty = $_SESSION['cart'][$id][$tendn] + 1;
}
else
{
$qty=1;
$_SESSION['dem']++;

}
$_SESSION['cart'][$id][$tendn]=$qty;
header("location:cart.php?id=$id");
exit();
}
else header("location:login.php");
?>

