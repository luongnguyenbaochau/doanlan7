<script type="text/javascript" src="../../jquery.min.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
    $('#admin').submit(function()
	{
		var flag= true;
		var passmoi= $.trim($('#passmoi').val());
		var xnpassmoi =$.trim($('#xnpassmoi').val());
		if(passmoi=='')
		{
			$('#passmoi_error').text('Password không được để trống');
			flag=false;
		}
		else
		$('#passmoi_error').text('');
		if(xnpassmoi=='')
		{
			$('#xnpassmoi_error').text('Xác nhận password không được để trống');
			flag=false;
		}
		else if(xnpassmoi!=passmoi)
		{
			$('#xnpassmoi_error').text('Xác nhận password không trùng khớp');
			flag=false;
		}
		else
		$('#xnpassmoi_error').text('');
		return flag;
	
	});
});
</script>
<h2>Thay đổi mật khẩu</h2> 
<form action="index.php?act=xulymatkhau" method="post" id="admin"> 
<table width="602" border="0">
  <tr>
    <td width="159" height="28">Mật khẩu cũ</td>
    <td width="433"><input type="password" name="passcu" value="" id="passcu" size="20" ><label id="passcu_error" value=" class="error"></label></td>
  </tr>
  <tr>
    <td height="24">Mật khẩu mới</td>
    <td><input type="password" name="passmoi" value="" id="passmoi" size="20" ><label id="passmoi_error" class="error"></label></td>
  </tr>
  <tr>
    <td height="30">Xác nhận mật khẩu mới</td>
    <td><input type="password" name="xnpassmoi" value="" id="xnpassmoi" size="20" ><label id="xnpassmoi_error" class="error"></label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="them" value="Thay đổi"></td>
  </tr>
</table>
</form>