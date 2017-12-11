<?php

	
	$hinh = new sanpham();
	$mahinh = $_GET['mahinh'];
	$masanpham = $_GET['masanpham'];
	$data = $hinh->getDetailHinh($mahinh);
	$tenfilehinh = $data["tenhinh"];
	unlink(ROOT."/img/$tenfilehinh");
	//print_r($data);exit;
	//print_r($masanpham);
	//exit;
	$s =$hinh->deletehinh($mahinh); 
	
?>
<script type="text/javascript" >
    alert("Da xoa");
    window.location='index.php?act=chitietsanpham&masanpham=<?php echo $masanpham; ?>';
</script> 
  
</body>
</html>