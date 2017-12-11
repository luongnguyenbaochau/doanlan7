 <script type="text/javascript" src="../../jquery.min.js"></script>
<script type="text/javascript" language="javascript">
function ten(tenncc) {
    var filter = /[a-zA-Z]$/;
    if (filter.test(tenncc)) {
        return true;
    }
    else {
        return false;
    }
}
$(document).ready(function() {
    $('#ncc').submit(function()
	{
		var flag= true;
		var tenncc =$.trim($('#tenncc').val());
		if(tenncc=='')
		{
			$('#tenncc_error').text('Tên nhà cung cấp không được để trống');
			flag=false;
		}
		else if(!ten(tenncc) == true)
		{
			$('#tenncc_error').text('Tên nhà cung cấp không được có số và kí tự đặc biệt');
			flag=false;
		}
		else
		$('#tenncc_error').text('');
		return flag;
	
	});
});
</script>  
<?php
$act=getIndex("act");
$mancc =getIndex("mancc");
$nhacungcap = new nhacungcap();

if ($act=="edit_nhacc") 
{
	$data = $nhacungcap->getDetail($mancc);
	
		
		if (Count($data)==0) {exit;}

			if ($mancc =="") exit;
		?>            
		 
			<h2>Quản lý nhà cung cấp</h2> 
			<form action="index.php?act=edit_nhacc2" method="post" id="ncc">
			Mã nhà cung cấp &nbsp; <input type="hidden" name="mancc"  value="<?php echo $data["mancc"];?>"><?php echo $data["mancc"];?><br><br>
			Tên nhà cung cấp  &nbsp;<input type="text" name="tenncc" value="<?php echo $data["tenncc"];?>" id="tenncc"><label id="tenncc_error" class="error"></label><br><br>
			<input type="submit" name="them" value="Save"id="them"><br><br>
		</form>
	  <br>   
		<?php
		}

if ($act=="edit_nhacc2" ) //update
{

  $nhacungcap->editnhacungcap($_POST["mancc"],$_POST["tenncc"]);

	
 ?>
<script type="text/javascript" >
    alert("Da thuc hien");
    window.location='index.php?act=nhacc';
</script>
<?php 

}
?>

