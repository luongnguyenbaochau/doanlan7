
<?php
$sanpham = new sanpham();
if (isset($_POST["them"]))
{	
	$msp = $_POST["msp"];	
	$tsp = $_POST["tsp"];
	$mh  = $_POST ["mh"];
	$mah = $_POST ["mah"];
	$cpu = $_POST ["cpu"];
	$vga = $_POST ["vga"];
	$hdh = $_POST ["hdh"];
	$pin = $_POST ["pin"];
	$sl  = $_POST ["sl"];
	$gg  = $_POST ["gg"];
	$gkm = $_POST ["gkm"];
	$tgbh = $_POST ["tgbh"];
	$tt  = $_POST ["tt"];
	$ganday = isset($_POST["ganday"])?1:"0";
	$banchay = isset($_POST["banchay"])?1:"0";
	$mtt =strip_tags( $_POST ["contentchau"]);
	$mt=addslashes(str_replace( '&nbsp;', ' ', $mtt ));
	
	
	
}
$s =$sanpham->insertsanpham($msp,$tsp,$mh,$mah,$cpu,$vga,$hdh,$pin,$sl,$gg,$gkm,$tgbh,$tt,$mt, $ganday, $banchay);
?>
<script type="text/javascript" >
    alert("Da thuc hien");
    window.location='index.php?act=sanpham';
</script>
