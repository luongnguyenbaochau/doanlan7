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
		var mancc= $.trim($('#mancc').val());
		var tenncc =$.trim($('#tenncc').val());
		if(mancc=='')
		{
			$('#mancc_error').text('Mã nhà cung cấp không được để trống');
			flag=false;
		}
		else
		$('#mancc_error').text('');
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
		$('tenncc_error').text('');
		return flag;
	
	});
});
</script>


<?php
$nhacungcap = new nhacungcap();
$data = $nhacungcap->getAll();

?>            
        
    <h2>Quản lý nhà cung cấp </h2> 
		<form action="index.php?act=insert_nhacc" method="post" id="ncc">
			Mã nhà cung cấp &nbsp; <input type="text" name="mancc" id="mancc"><label id="mancc_error" class="error"></label><br><br>
			Tên nhà cung cấp  &nbsp;<input type="text" name="tenncc" id="tenncc"><label id="tenncc_error" class="error"></label><br><br>
			<input type="submit" name="them" value="Save"id="them"><br><br>
		</form>
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Mã nhà cung cấp</th>
            <th scope="col" class="rounded">Tên nhà cung cấp</th>
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
            <td><?php echo $row["mancc"];?></td>
            <td><?php echo $row["tenncc"];?></td>
			
            

            <td><a href="index.php?act=edit_nhacc&mancc=<?php echo $row["mancc"];?>"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="index.php?act=del_nhacc&mancc=<?php echo $row["mancc"];?>" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        
    	<?php
}
        ?>  
        
    </tbody>
</table>

	 <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_blue"><span class="bt_blue_lft"></span><strong>View all items from category</strong><span class="bt_blue_r"></span></a>
     <a href="#" class="bt_red"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>

    
     
     
     
         
     
     
      
    
    
           
     
      
     
     