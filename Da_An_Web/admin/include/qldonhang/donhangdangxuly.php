
<?php
$donhang = new donhang();
$data = $donhang->getAlldonhangdagiao();
?>

<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        <h2>Đơn đặt hàng đang xử lý</h2>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Mã đơn đặt hàng</th>
            <th scope="col" class="rounded">Ngày đặt hàng</th>
			<th scope="col" class="rounded">Tổng tiền</th>
			<th scope="col" class="rounded">Id user</th>
			<th scope="col" class="rounded">Tên người nhận</th>
			<th scope="col" class="rounded">SĐT</th>
			<th scope="col" class="rounded">Địa chỉ người nhận</th>
			<th scope="col" class="rounded">Trạng thái</th>
			<th scope="col" class="rounded">Chi tiết</th>  
        </tr>
    </thead>
        
    <tbody>
    <?php 
    foreach($data as $row)
    {?>
    	<tr>
        	<td><input type="checkbox" name="" /></td>
            <td><?php echo $row["madondathang"];?></td>
            <td><?php echo $row["ngaydathang"];?></td>
            <td><?php echo $row["tongtien"];?></td>
			<td><?php echo $row["iduser"];?></td>
			<td><?php echo $row["tennguoinhan"];?></td>
			<td><?php echo $row["sdt"];?></td>
			<td><?php echo $row["diachinhan"];?></td>
			<td><?php echo $row["trangthai"];?></td>
			<td><a href="index.php?act=chitietdonhang&madondathang=<?php echo $row["madondathang"];?>">Chi tiết</a></td>
        </tr>
        
    	<?php
}
        ?>  
        
    </tbody>
</table>
      
     
     
      
    
    
           
     
      
     
     