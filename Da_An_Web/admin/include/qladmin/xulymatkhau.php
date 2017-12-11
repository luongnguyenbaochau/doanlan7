<?php
$admin =new admin();

if(isset($_POST["passcu"])?$_POST["passcu"]:'')
{
if(isset($_SESSION['tenuser'])){
$oldpass=$_SESSION['tenuser']['password'];
if($oldpass==md5($_POST["passcu"]))
{
	
	$admin->updatepass(md5($_POST["passmoi"]),$oldpass);
	?>
	<script type="text/javascript" >
    alert("Da thuc hien");
    window.location='index.php?act=admin';
</script>
	<?php
}
else
{
	?>
	<script type="text/javascript" >
    alert("Thất bại! Nhập sai mật khẩu cũ. Hãy nhập lại");
    window.location='index.php?act=matkhau';
</script>
	<?php
}
}
}
?>
