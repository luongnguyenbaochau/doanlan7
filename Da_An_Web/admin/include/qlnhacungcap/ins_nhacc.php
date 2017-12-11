
<?php
$nhacungcap = new nhacungcap();
if (isset($_POST["them"]))
{	
	$mancc = $_POST["mancc"];	
	$tenncc = $_POST["tenncc"];
	
}
$s =$nhacungcap->insertnhacungcap($mancc,$tenncc);
?>
<script type="text/javascript" >
    alert("Da thuc hien");
    window.location='index.php?act=nhacc';
</script>
