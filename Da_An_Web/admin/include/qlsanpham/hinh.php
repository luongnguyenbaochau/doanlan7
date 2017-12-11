<?php




$sm 	= postIndex("submit");
$mh	= postIndex("mh");
$arrImg = array("image/png", "image/jpeg", "image/bmp");/* Các loại file hinh trong mảng*/

if ($sm=="") {
				header("location:chitietsanpham.php"); exit;//quay ve 1.php
			}

$err = "";
////////print_r($_FILES);
$errFile = $_FILES["hinh"]["error"];
//print_r ($errFile);
if ($errFile>0)/*>0 thì gồm 1,2,3,4 cái số đó đều là lỗ,,=0 là không có lỗi*/
	$err .="Lỗi file hình <br>";
else
{
	$type = $_FILES["hinh"]["type"];/* name là hình, type là loai file hinh*/
	if (!in_array($type, $arrImg))/* nếu k tồn t loại file hinh đó có ở trong mảng hình hay không*/
		$err .="Không phải file hình <br>";
	else
	{	$temp = $_FILES["hinh"]["tmp_name"];/*tập tin trước khi xử lý sẽ được lưu trữ tạm ở đường dẫn này*/
		$name = time()."_".$_FILES["hinh"]["name"];/* tên tap tin */
		if (!move_uploaded_file($temp, ROOT."/img/".$name))/* khi di chuyen file luu lai vi tri*/
			$err .="Không thể lưu file<br>";
		
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
if ($err !="")
  echo $err;
else
{
	
	?>
	<?php 
	$hinh = new sanpham();
	//print_r($_POST);
	$th= $name;//$_FILES["hinh"]["name"];
	$masp = $_POST["masp"];
	//T["ht"];
	$hinhdaidien = isset($_POST["hinhdaidien"])?$_POST["hinhdaidien"]:"";
	$mh = $masp."_". $mh .$hinhdaidien;
	$s =$hinh->inserthinh($mh,$th,$masp); ?>
    <img src="img/<?php echo $name;?>">
    <?php	
}
?>
<script type="text/javascript" >
    alert("Da them");
    window.location='index.php?act=chitietsanpham&masanpham=<?php echo $masp; ?>';
</script> 
</body>
</html>