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
		{
		$('#sll_error').text('');
	
		}
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
		
		if(NoiDungTextArea=='')
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
$sanpham = new sanpham();
$data = $sanpham->getAll();
$hangsanxuat=new hangsanxuat();
$da = $hangsanxuat->getAll();
?>            
        
    <h2>Quản lý sản phẩm</h2> 
	<fieldset style="width:100%; border:solid 2px; margin:10px auto" >
		<legend>Nhập thông tin sản phẩm</legend>
           <form action="index.php?act=insert_sanpham" method="post" id="spp">
			Mã sản phẩm &nbsp; <input type="text" name="msp" id="msph"><label id="msph_error" class="error"></label><br><br>
			Tên sản phẩm  &nbsp;<input type="text" name="tsp" id="tsph"><label id="tsph_error" class="error"></label><br><br>
			Mã hãng  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<select name="mh">
				<?php 
				foreach($da as $hsx=>$key)
				{ ?>
				<option value="<?php echo $key["mahang"]; ?>"><?php echo $key["mahang"]; ?></option>
				<?php } ?>
			</select>
			Màn hình &nbsp;<input type="text" name="mah" id="mahi"><label id="mahi_error" class="error"></label><br><br>
			CPU	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="cpu" id="cpuu"><label id="cpuu_error" class="error"></label><br><br>
			VGA	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;           
			<input type="text" name="vga" id="vgaa"><label id="vgaa_error" class="error"></label><br><br>
			Hệ điều hành	 &nbsp;
			<input type="text" name="hdh" id="hdhh"><label id="hdhh_error" class="error"></label><br><br>
			Pin	&nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<input type="text" name="pin" id="pinn"><label id="pinn_error" class="error"></label><br><br>
			Số lượng &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="sl" id="sll"><label id="sll_error" class="error"></label><br><br>
			Giá gốc	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="gg" id="ggg"><label id="ggg_error" class="error"></label><br><br>
			Giá khuyến mãi &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="gkm" id="gkmm"><label id="gkmm_error" class="error"></label><br><br>
			Thời gian bảo hành &nbsp;  <input type="text" name="tgbh" id="tgbhh"><label id="tgbhh_error" class="error"></label><br><br>
			Tình trạng &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="tt" id="ttt"><label id="ttt_error" class="error"></label><br><br>
			Hiện trạng &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="checkbox" name="ganday" value="ganday">Gần đây
							<input type="checkbox" name="banchay" value="banchay">Bán chạy<br><br>
			Mô tả &nbsp;
           
			 <textarea id="contentchau" name="contentchau"></textarea> <label id="mt_error" class="error"></label>
          <script type="text/javascript"> CKEDITOR.replace('contentchau'); </script><br><br>
          
			<input type="submit" name="them" value="Save"><br><br>
		</form>         
    </fieldset>   <br>   
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Mã sản phẩm</th>
            <th scope="col" class="rounded">Tên sản phẩm</th>
            <th scope="col" class="rounded">Mã hãng</th>
            <th scope="col" class="rounded">Màn hình</th>
			<th scope="col" class="rounded">CPU</th>
			<th scope="col" class="rounded">VGA</th>
			<th scope="col" class="rounded">HDH</th>
			<th scope="col" class="rounded">Pin</th>
			<th scope="col" class="rounded">Số lượng</th>
			<th scope="col" class="rounded">Giá gốc</th>
			<th scope="col" class="rounded">Giá khuyến mãi</th>
			<th scope="col" class="rounded">Gần đây</th>
			<th scope="col" class="rounded">Bán chạy</th>
			<th scope="col" class="rounded">Chi tiết</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
       
    <tbody>
    <?php 
    foreach($data as $row)
    {?>
    	<tr>
        	<td><input type="checkbox" name="" /></td>
			<td><?php echo $row["masanpham"];?></td>
            <td><?php echo $row["tensanpham"];?></td>
            <td><?php echo $row["mahang"];?></td>
            <td><?php echo $row["manhinh"];?></td>
            <td><?php echo $row["cpu"];?></td>
			<td><?php echo $row["vga"];?></td>
			<td><?php echo $row["hdh"];?></td>
			<td><?php echo $row["pin"];?></td>
			<td><?php echo $row["soluong"];?></td>
			<td><?php echo number_format ($row["giagoc"],0,'.','.'); ?> <sup>đ</sup></td>
			<td><?php echo number_format ($row["giakhuyenmai"],0,'.','.'); ?><sup>đ</sup></td>
			<td><?php if($row["ganday"]==1) echo " x";?></td>
			<td><?php if($row["banchay"]==1) echo " x";?></td>
			<td><a href="index.php?act=chitietsanpham&masanpham=<?php echo $row["masanpham"];?>">Chi tiết</a></td>
            <td><a href="index.php?act=edit_sanpham&masanpham=<?php echo $row["masanpham"];?>"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="index.php?act=del_sanpham&masanpham=<?php echo $row["masanpham"];?>" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        
    	<?php
}
        ?>  
        
    </tbody>
</table>

	 <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_blue"><span class="bt_blue_lft"></span><strong>View all items from category</strong><span class="bt_blue_r"></span></a>
     <a href="#" class="bt_red"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a> 
     
     
       
     
     
      
     
    
           
     
      
     
     