<!--<script type="text/javascript" src="../../jquery.min.js"></script>
<script type="text/javascript" language="javascript">
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
		else
		$('#th_error').text('');
		return flag;
	
	});
});
</script>-->
<?php
$khachhang = new khachhang();
$data = $khachhang->getAll();
?>            
        
    
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
	<h2>Thông tin khách hàng</h2> 
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Tên khách hàng</th>
            <th scope="col" class="rounded">Địa chỉ</th>
			<th scope="col" class="rounded">SĐT</th>
			<th scope="col" class="rounded">Email</th>
			<th scope="col" class="rounded">Chức năng</th>
			
        </tr>
    </thead>
        
    <tbody>
    <?php 
    foreach($data as $row)
    {?>
    	<tr>
        	<td><input type="checkbox" name="" /></td>
            <td><?php echo $row["tenuser"];?></td>
            <td><?php echo $row["diachi"];?></td>
            <td><?php echo $row["sdt"];?></td>
			<td><?php echo $row["email"];?></td>
			<td><?php echo $row["chucnang"];?></td>
            
        </tr>
        
    	<?php
}
        ?>  
        
    </tbody>
</table>

	

    

    
     
     
     
         
     
     
      
    
    
           
     
      
     
     