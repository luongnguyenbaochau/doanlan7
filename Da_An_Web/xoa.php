<meta charset="utf-8" />
<?php
session_start();
$id=$_GET['id'];
if($_SESSION['cart'])
{
	unset($_SESSION['cart'][$id]);
	
}
?>
<script type="text/javascript" >
    alert("Đã xóa thành công 1 sản phẩm bạn đã chọn:");
    window.location='giohang.php';
</script>