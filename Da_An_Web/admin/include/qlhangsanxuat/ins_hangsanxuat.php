
<?php
$hangsanxuat = new hangsanxuat();
if (isset($_POST["them"]))
{	
	$m = $_POST["ml"];	
	$t = $_POST["tl"];
}
$s =$hangsanxuat->inserthangsanxuat($m,$t);
?>
<script type="text/javascript" >
    alert("Da thuc hien");
    window.location='index.php?act=hangsanxuat';
</script>
