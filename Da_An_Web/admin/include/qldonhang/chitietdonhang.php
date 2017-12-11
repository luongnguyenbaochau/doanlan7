
<?php
$donhang = new donhang();

$madondathang = $_GET['madondathang'];
$data = $donhang->getAllchitietdonhang($madondathang);
?>

<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        <h2>Chi tiết đơn đặt hàng</h2>
        	<th scope="col" class="rounded-company"></th>
			<th scope="col" class="rounded">Mã sản phẩm</th>
			<th scope="col" class="rounded">Mã đơn đặt hàng</th>
			<th scope="col" class="rounded">Số lượng</th>
			<th scope="col" class="rounded">Đơn giá</th>
        </tr>
    </thead>
        
    <tbody>
    <?php 
    foreach($data as $row)
    {?>
    	<tr>
        	<td><input type="checkbox" name="" /></td>
        	<td><?php echo $row["masanpham"];?></td>
			<td><?php echo $row["madondathang"];?></td>
			<td><?php echo $row["soluong"];?></td>
			<td><?php echo $row["dongia"];?></td>  
			
        </tr>
        
    	<?php
}
        ?>  
        
    </tbody>
</table>
      
     
     
      
    
    
           
     
      
     
     