<script type="text/javascript" src="../../jquery.min.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
    $('#spp').submit(function()
	{
		var flag= true;
		var masp= $.trim($('#msph').val());
		var tensp =$.trim($('#tsph').val());
		var manh =$.trim($('#mahi').val());
		var cpu =$.trim($('#cpuu').val());
		var vga =$.trim($('#vgaa').val());
		var hdh =$.trim($('#hdhh').val());
		var pin =$.trim($('#pinn').val());
		var sl =$.trim($('#sll').val());
		var gg =$.trim($('#ggg').val());
		var gkm =$.trim($('#gkmm').val());
		var tgbh =$.trim($('#tgbhh').val());
		var tt =$.trim($('#ttt').val());
		var NoiDungTextArea = CKEDITOR.instances.contentchau.getData();
		if(masp=='')
		{
			$('#msph_error').text('Mã sản phẩm không được để trống');
			flag=false;
		}
		else
		$('#msph_error').text('');
		
		if(tensp=='')
		{
			$('#tsph_error').text('Tên sản phẩm không được để trống');
			flag=false;
		}
		else if(!isNaN(tensp) == true)
			{
			$('#tsph_error').text('Tên sản phẩm không được là số');
			flag=false;
		}
		else
		$('#tsph_error').text('');
		
		if(manh=='')
		{
			$('#mahi_error').text('Màn hình không được để trống');
			flag=false;
		}
		else
		$('#mahi_error').text('');
		
		if(cpu=='')
		{
			$('#cpuu_error').text('cpu không được để trống');
			flag=false;
		}
		else
		$('#cpuu_error').text('');
		
		if(vga=='')
		{
			$('#vgaa_error').text('vga không được để trống');
			flag=false;
		}
		else
		$('#vgaa_error').text('');
		
		if(hdh=='')
		{
			$('#hdhh_error').text('Hệ điều hành không được để trống');
			flag=false;
		}
		else
		$('#hdhh_error').text('');
		
		if(pin=='')
		{
			$('#pinn_error').text('Pin không được để trống');
			flag=false;
		}
		else
		$('#pinn_error').text('');
		
		if(isNaN(sl) == true)
		{
			$('#sll_error').text('số lượng phải là số');
			flag=false;
		}
		
		else if(sl=='')
		{
			$('#sll_error').text('Số lượng không được để trống');
			flag=false;
		}
		else
		$('#sll_error').text('');
		
		
		if(isNaN(gg) == true)
		{
			$('#ggg_error').text('giá gốc phải là số');
			flag=false;
		}
		else if(gg=='')
		{
			$('#ggg_error').text('Giá gốc không được để trống');
			flag=false;
		}
		else
		$('#ggg_error').text('');
		
		
		if(isNaN(gkm) == true)
		{
			$('#gkmm_error').text('giá khuyến mãi phải là số');
			flag=false;
		}
		else if(gkm=='')
		{
			$('#gkmm_error').text('Giá khuyến mãi không được để trống');
			flag=false;
		}
		else if(Math.ceil(gkm)>=Math.ceil(gg))
		{
			$('#gkmm_error').text('Giá khuyến mãi phải nhỏ giá gốc');
			flag=false;
		}
		else
		$('#gkmm_error').text('');
		
		
		if(isNaN(tgbh) == true)
		{
			$('#tgbhh_error').text('Thời gian bảo hành phải là số');
			flag=false;
		}
		else if(tgbh=='')
		{
			$('#tgbhh_error').text('Thời gian bảo hành không được để trống');
			flag=false;
		}
		else
		$('#tgbhh_error').text('');
		
		if(isNaN(tt) == true)
		{
			$('#ttt_error').text('Tình trạng phải là số');
			flag=false;
		}
		else if(tt=='')
		{
			$('#ttt_error').text('Tình trạng không được để trống');
			flag=false;
		}
		else
		$('#ttt_error').text('');
		
		if(NoiDungTextArea=="")
		{
			$('#mt_error').text('Mô tả không được để trống');
		
			flag=false;
		}
		else
		$('#mt_error').text('');
		
		return flag;
	
	});
});
</script>    
<?php


$act=getIndex("act");
$masanpham =getIndex("masanpham");
$hangsanxuat=new hangsanxuat();
$da = $hangsanxuat->getAll();

	

$sanpham = new sanpham();

if ($act=="edit_sanpham") 
{
	$data = $sanpham->getDetail($masanpham);
	
		
		if (Count($data)==0) {exit;}

			if ($masanpham =="") exit;
		?>            
		 
			<h2>Quản lý sản phẩm</h2> 
				<fieldset style="width:100%; border:solid 2px; margin:10px auto" >
		<legend>Nhập thông tin sản phẩm</legend>
           <form action="index.php?act=edit_sanpham2" method="post" id="spp">
			Mã sản phẩm &nbsp; <input type="hidden" name="msp" value="<?php echo $data["masanpham"];?>" id="msph"><?php echo $data["masanpham"];?><label id="msph_error" class="error"></label><br><br>
			Tên sản phẩm  &nbsp;<input type="text" name="tsp" value="<?php echo $data["tensanpham"];?>" id="tsph"><label id="tsph_error" class="error"></label><br><br>
			Mã hãng  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<select name="mh">
				<?php 
				foreach($da as $hsx=>$key)
				{ ?>
				<option value="<?php echo $key["mahang"]; ?>"><?php echo $key["mahang"]; ?></option>
				<?php } ?>
			</select>
			Màn hình &nbsp;<input type="text" name="mah" value="<?php echo $data["manhinh"];?>" id="mahi"><label id="mahi_error" class="error"></label><br><br>
			CPU	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="cpu" value="<?php echo $data["cpu"];?>" id="cpuu"><label id="cpuu_error" class="error"></label><br><br>
			VGA	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="vga" value="<?php echo $data["vga"];?>" id="vgaa"><label id="vgaa_error" class="error"></label><br><br>
			Hệ điều hành	&nbsp;<input type="text" name="hdh" value="<?php echo $data["hdh"];?>" id="hdhh"><label id="hdhh_error" class="error"></label><br><br>
			Pin	&nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="pin" value="<?php echo $data["pin"];?>" id="pinn"><label id="pinn_error" class="error"></label><br><br>
			Số lượng &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="sl" value="<?php echo $data["soluong"];?>" id="sll"><label id="sll_error" class="error"></label><br><br>
			Giá gốc	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="gg" value="<?php echo $data["giagoc"];?>" id="ggg"><label id="ggg_error" class="error"></label><br><br>
			Giá khuyến mãi &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="gkm" value="<?php echo $data["giakhuyenmai"];?>" id="gkmm"><label id="gkmm_error" class="error"></label><br><br>
			Thời gian bảo hành &nbsp;  <input type="text" name="tgbh" value="<?php echo $data["thoigianbaohanh"];?>" id="tgbhh"><label id="tgbhh_error" class="error"></label><br><br>
			Tình trạng &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="tt" value="<?php echo $data["tinhtrang"];?>" id="ttt"><label id="ttt_error" class="error"></label><br><br>
			Hiện trạng &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="checkbox" name="ganday" value="ganday" <?php if($data["ganday"]=="1") echo "checked=true"; ?> >Gần đây
							<input type="checkbox" name="banchay" value="banchay" <?php if($data["banchay"]=="1") echo "checked=true"; ?> >Bán chạy<br><br>
			Mô tả &nbsp;
			 <textarea id="contentchau" name="contentchau"><?php echo $data["mota"];?></textarea><label id="mt_error" class="error"></label>
          <script type="text/javascript"> CKEDITOR.replace('contentchau'); </script><br><br>
			<input type="submit" name="them" value="Save"><br><br>
		</form>         
    </fieldset>   <br>   
		<?php
		}

if ($act=="edit_sanpham2" ) //update
{
	$ganday = isset($_POST["ganday"])?1:"0";
	$banchay = isset($_POST["banchay"])?1:"0";
  $sanpham->editsanpham($_POST["msp"],$_POST["tsp"],$_POST["mh"],$_POST["mah"],$_POST["cpu"],$_POST["vga"],$_POST["pin"],$_POST["hdh"],$_POST["sl"],$_POST["gg"],$_POST["gkm"],$_POST["tgbh"],$_POST["tt"],$_POST["contentchau"],$ganday,$banchay);

	
 ?>
<script type="text/javascript" >
    alert("Da thuc hien");
    window.location='index.php?act=sanpham';
</script>
<?php 
}

?>

