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
		var mh= $.trim($('#mh').val());
		var th =$.trim($('#th').val());
		if(mh=='')
		{
			$('#mh_error').text('Mã hãng không được để trống');
			flag=false;
		}
		else
		$('#mh_error').text('');
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
$hangsanxuat = new hangsanxuat();
$data = $hangsanxuat->getAll();
?>            
        
    <h2>Quản lý hãng sản xuất</h2> 
		<form action="index.php?act=insert_hangsanxuat" method="post" id="hsx">
			Mã hãng &nbsp; <input type="text" name="ml" id="mh"><label id="mh_error" class="error"></label><br><br>
			Tên hãng  &nbsp;<input type="text" name="tl" id="th"><label id="th_error" class="error"></label><br><br>
			<input type="submit" name="them" value="Save"id="them"><br><br>
		</form>
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Mã hãng sản xuất</th>
            <th scope="col" class="rounded">Tên hãng sản xuất</th>
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
            <td><?php echo $row["mahang"];?></td>
            <td><?php echo $row["tenhang"];?></td>
            

            <td><a href="index.php?act=sua_hangsanxuat&mahang=<?php echo $row["mahang"];?>"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="index.php?act=del_hangsanxuat&mahang=<?php echo $row["mahang"];?>" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        
    	<?php
}
        ?>  
        
    </tbody>
</table>

	 <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_blue"><span class="bt_blue_lft"></span><strong>View all items from category</strong><span class="bt_blue_r"></span></a>
     <a href="#" class="bt_red"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>

    
     
     
     
         
     
     
      
    
    
           
     
      
     
     