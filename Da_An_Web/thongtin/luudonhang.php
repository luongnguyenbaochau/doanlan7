<div style="margin: 100px 0px 0px 100px;">
<form action="luudonhang.php" method="post">

<table width="50%" border="0" align="center">
	<tr>
    	<th height="37" colspan="2">Thanh toán</th>
    </tr>
    <tr>
    	<td height="37" colspan="2">Thông tin sản phẩm</td>
        <td></td>
    </tr>
    <tr>
    <td colspan="2">
    <?php
	$cart->showthanhtoan();
	
	
	?>

    </td>
    </tr>
    <tr>
    	<td height="37" colspan="2">Thông tin người nhận</td>
        <td></td>
    </tr>
  <tr>
    <td width="30%" height="50">Tên người nhận</td>
    <td width="70%"><input type="text" name="tennn" size="30" placeholder="nhập tên người nhận"/></td>
  </tr>
  <tr>
    <td height="43">Số điện thoại</td>
    <td><input type="text" name="sdt" size="30" placeholder="nhập số điện thoại"/></td>
  </tr>
  <tr>
    <td height="58">Địa chỉ</td>
    <td><input type="text" name="dc" size="30" placeholder="nhập địa chỉ"/></td>
  </tr>
  
  <tr>
    <td ></td>
    <td align="left"> <input type="submit" name="submit" value="Mua hàng"></td>
  </tr>
  
</table>

</form>
</div>