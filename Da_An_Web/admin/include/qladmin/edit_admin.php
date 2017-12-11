<script type="text/javascript" src="../../jquery.min.js"></script>
<script type="text/javascript" language="javascript">

function isEmail(emaill) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(emaill)) {
        return true;
    }
    else {
        return false;
    }
}
function ten(tenadmin) {
    var filter = /[a-zA-Z]$/;
    if (filter.test(tenadmin)) {
        return true;
    }
    else {
        return false;
    }
}
function sdthoai(sdt) {
    var filter = /^[0-9]+$/;
    if (filter.test(sdt)) {
        return true;
    }
    else {
        return false;
    }
}

$(document).ready(function() {
    $('#admin').submit(function()
	{
		var flag= true;
		
		var tadmin =$.trim($('#tadmin').val());
		var dc= $.trim($('#dc').val());
		var sdt =$.trim($('#sdt').val());
		var email =$.trim($('#email').val());
		if(email=='')
		{
			$('#email_error').text('Email không được để trống');
			flag=false;
		}
		else if(!isEmail(email))
			{
			$('#email_error').text('Email không đúng định dạng');
			flag=false;
		}
		else
		$('#email_error').text('');
		if(tadmin=='')
		{
			$('#tadmin_error').text('Tên Admin không được để trống');
			flag=false;
		}
		else if(!ten(tadmin) == true)
			{
			$('#tadmin_error').text('Tên Admin không được có số và ký tự đặc biệt');
			flag=false;
		}
		else
		$('#tadmin_error').text('');
	
		if(dc=='')
		{
			$('#dc_error').text('Địa chỉ giao hàng không được để trống');
			flag=false;
		}
		else
		$('#dc_error').text('');
	
		if(sdt=='')
		{
			$('#sdt_error').text('Số điện thoại không được để trống');
			flag=false;
		}
		else if(!sdthoai(sdt))
		{
			$('#sdt_error').text('Số điện thoại phải là số');
			flag=false;
		}
		else
		$('#sdt_error').text('');
	
		
		
		return flag;
	
	});
});
</script>  
<?php
$act=getIndex("act");
$iduser =getIndex("iduser");



$admin = new admin();

if ($act=="edit_admin") 
{
	$data = $admin->getDetail($iduser);
		//print_r($data);
		if (Count($data)==0) {exit;}

			if ($iduser =="") exit;
		?>            
		 
			<h2>Sửa thông tin cá nhân</h2> 
				<form action="index.php?act=edit_admin2" method="post" id="admin"> 
               <table width="436" border="0">
    <tr>
    	<td width="102" height="36">Mã Admin</td>
    	<td width="324"> <input type="hidden" name="maadmin" value="<?php echo $data["iduser"];?>" id="maadmin" size="50" ><?php echo $data["iduser"];?></td>
  </tr>
  <tr>
    <td width="102" height="36">Tên Admin</td>
    <td width="324"> <input type="text" name="tenadmin" value="<?php echo $data["tenuser"];?>" id="tadmin" size="50" ><label id="tadmin_error" class="error"></label></td>
  </tr>
  <tr>
    <td height="36">Địa chỉ</td>
    <td><input type="text" name="diachi" value="<?php echo $data["diachi"];?>" id="dc" size="50"><label id="dc_error" class="error"></label></td>
  </tr>
  <tr>
    <td height="36">SĐT</td>
    <td><input type="text" name="sdt" value="<?php echo $data["sdt"];?>" id="sdt" size="50"><label id="sdt_error" class="error"></label></td>
  </tr>
  <tr>
    <td height="33">Email</td>
    <td><input type="text" name="email" value="<?php echo $data["email"];?>" id="email" size="50"><label id="email_error" class="error"></label></td>
  </tr>
  <tr>
  <td></td>
  	<td><input type="submit" name="them" value="Save"></td>
  </tr>
</table>
</form>
                
                
<?php
		}

if ($act=="edit_admin2") //update
{

  $admin->editadmin($_POST["maadmin"],$_POST["tenadmin"],$_POST["diachi"],$_POST["sdt"],$_POST["email"]);
 // header("location: index.php?act=hangsanxuat");?
 ?>
<script type="text/javascript" >
    alert("Da thuc hien");
    window.location='index.php?act=admin';
</script>
<?php 
}
?>

