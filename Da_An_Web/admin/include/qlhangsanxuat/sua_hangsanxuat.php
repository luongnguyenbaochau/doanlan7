<script type="text/javascript" src="../../jquery.min.js"></script>
<script type="text/javascript" language="javascript">
function ten(tenhang) {
    var filter = /[a-zA-Z]$/;
    if (filter.test(tenhang)) {
        return true;
    }
    else {
        return false;
    }
}
$(document).ready(function() {
    $('#hsx').submit(function()
	{
		var flag= true;
		
		var th =$.trim($('#th').val());
		if(th=='')
		{
			$('#th_error').text('Tên hãng không được để trống');
			flag=false;
		}
		else if(!ten(th) == true)
		{
			$('#th_error').text('Tên hãng sản xuất không được có số và kí tự đặc biệt');
			flag=false;
		}
		else
		$('#th_error').text('');
		return flag;
	
	});
});
</script>   
<?php
$act=getIndex("act");
$mahang =getIndex("mahang");



$hangsanxuat = new hangsanxuat();

if ($act=="sua_hangsanxuat") 
{
	$data = $hangsanxuat->getDetail($mahang);
		//print_r($data);
		if (Count($data)==0) {exit;}

			if ($mahang =="") exit;
		?>            
		 
			<h2>Quản lý hãng sản xuất</h2> 
				<form action="index.php?act=sua_hangsanxuat2" method="post" id="hsx">
					Mã hãng &nbsp; <input type="hidden" name="mahang" value="<?php echo $data["mahang"];?>" id="mh" ><?php echo $data["mahang"];?><br>
					Tên hãng  &nbsp;<input type="text" name="tenhang" value="<?php echo $data["tenhang"];?>" id="th"><label id="th_error" class="error"></label><br><br>
					<input type="submit" name="them" value="Save"><br><br>
				</form>
		<?php
		}

if ($act=="sua_hangsanxuat2") //update
{

  $hangsanxuat->suahangsanxuat($_POST["mahang"],$_POST["tenhang"]);
 // header("location: index.php?act=hangsanxuat");?
 ?>
<script type="text/javascript" >
    alert("Da thuc hien");
    window.location='index.php?act=hangsanxuat';
</script>
<?php 
}
?>

