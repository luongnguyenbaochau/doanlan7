
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thanh toán</title>

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>


<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />


<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
	
    
    
    <div id="main">
    
        <div id="content">
        	 <form name="frmthanhtoan" action="xlThem.php" method="post" >
            <table border="0" width="100%">
            <tr>
            <td colspan="2" align="center"><b>ĐĂNG KÍ THÀNH VIÊN</b></td></tr>          
           
            <tr><td>Tên đăng nhập</td>
           	<td><span id="sprytextfield1">
            <input type="text" name="nmUsername2" size="30"/>
            <span class="textfieldRequiredMsg">Vui lòng nhập tên đăng nhập</span>
            <span class="textfieldMinCharsMsg">
            Nhập số kí tự từ 6-18</span></span></tr>
            <tr><td>Mật khẩu</td>
           	<td><span id="sprytextfield2">
            <input type="password" name="nmPassword" size="30"/>
            <span class="textfieldRequiredMsg">Vui lòng nhập mật khẩu</span>
            <span class="textfieldMinCharsMsg">Ít nhất 12 kí tự</span></span></td>
            </tr>
            <tr><td colspan="2"><hr /></td></tr>
            <tr><td colspan="2"><b>THÔNG TIN CÁ NHÂN</b></td></tr> 	
            <tr><td>Địa chỉ email</td>
           	<td><span id="sprytextfield3">
            <input type="text" name="nmEmailAdd" size="50" /><br />
            <span class="textfieldRequiredMsg">Vui lòng nhập địa chỉ email</span>
            <span class="textfieldInvalidFormatMsg">Sai cấu trúc Email</span></span></td>
            </tr>
            <tr><td>Xác nhận địa chỉ email</td>
           	<td><span id="sprytextfield31">
            <input type="text" name="nmEmailAdd" size="50" /><br />
            <span class="textfieldRequiredMsg">Vui lòng nhập lại địa chỉ email</span>
            <span class="textfieldInvalidFormatMsg">Nhập lại sai</span></span></td>
            </tr>
            <tr><td>Họ tên</td>
           	<td><input type="text" name="nmFullName" size="50"/></td>
            </tr>
            <tr><td>Giới tính</td>
           	<td><input type="radio" name="nmMale" />Nam<br/><input type="radio" name="nmFemale" />Nữ</td>
            </tr>
            <tr><td>Địa chỉ</td>
           	<td><input type="text" name="nmAddress" size="50"/></td>
            </tr>
            <tr><td>Điện thoại</td>
           	<td><input type="text" name="nmUsername" size="50"/></td>
            </tr>
            <tr><td>Câu hỏi bí mật</td>
           	<td><span id="spryselect1">
           	  <select name="nmPriateQuestion">
                <option value="" selected="selected">Vui lòng chọn câu hỏi</option>
              
                <option value="firstschool">Ngôi trường đầu tiên của bạn là gì</option>
                <option value="firstpet">Con vật đầu tiên mà bạn nuôi tên gì</option>
                <option value="childhoodmemory">Kỉ niệm thời thơ ấu của bạn là gì</option>
                <option value="hometown">Quê bạn ở đâu</option>
              </select>
           	  <span class="selectInvalidMsg">Vui lòng chọn câu hỏi</span>           	  
              <span class="selectRequiredMsg">Vui lòng chọn câu hỏi</span></span></td>
            </tr>
            <tr><td>Trả lời</td>
           	<td><span id="sprytextfield4">
            <input type="text" name="nmPrivateAnswer" size="50"/>
            <span class="textfieldRequiredMsg">Vui lòng nhập câu trả lời</span
            ><span class="textfieldMinCharsMsg">Ít nhất 16 kí tự</span></span></td>
            </tr>
                   <tr><td colspan="2">Tôi đã đọc và đồng ý với điều khoản sử dụng 
                   <span id="sprycheckbox1">
                     <input type="checkbox" name="nmAgreePolicy" />
                     <span class="checkboxRequiredMsg">Vui lòng đánh dấu vào ô</span></span></td>
            </tr>
     
            <tr>
            <td colspan="2" align="center">
            <br/><input type="submit" name="nmSubmit" value="Đăng kí" /> 
            <input type="reset" name="nmReset" value="Xóa" /> </td>
            </tr>
      		</table>
            </form>
            <script type="text/javascript">
			<!--
			var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {minChars:6,maxChars:18, validateOn:["blur", "change"]});
			var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none",
			{minChars:12, validateOn:["blur", "change"]});
			var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email", {validateOn:["blur", "change"]});
			 var sprytextfield31 = new Spry.Widget.ValidationTextField("sprytextfield31", "email", {validateOn:["blur", "change"]});
			var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"-1",
			 validateOn:["blur", "change"]});
			var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", 
			{minChars:16, validateOn:["blur", "change"]});
			var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1",
			 {validateOn:["blur", "change"]});
			//-->
			</script>
        </div>
      
    </div>
    <div style="clear:both; height:10px;"></div>
   
</div>
</body>
</noscript>
<div style="text-align: center;"><div style="position:relative; top:0; margin-right:auto;margin-left:auto; z-index:99999">

</div></div>
</html>
