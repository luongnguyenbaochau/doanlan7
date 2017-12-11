<?php
$sanpham = new sanpham();
$data = $sanpham->getAll();
$masanpham = $_GET['masanpham'];

?>            
        
    <h2>Quản lý chi tiết sản phẩm</h2> 
		<fieldset>
			<legend>Chọn hình</legend>
				<form action="index.php?act=hinh" method="post" enctype="multipart/form-data">
					<table  align="center">
						<tr><td>Mã sản phẩm:</td><td><input type="hidden" name=masp value="<?php echo $masanpham;  ?>"><?php echo $masanpham;  ?></td></tr>
						<tr><td>Mã hình:</td><td><input type="text" name="mh"></td></tr>
						<tr><td>Tên hình:</td><td><input type="file" name="hinh" /></td></tr>
						
						<tr><td>Hình dai dien:</td><td><input type="checkbox" name="hinhdaidien" value="_a" /></td></tr>
						<tr><td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td></tr>
					</table>
				</form>
		</fieldset>        
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit" width="950px;">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Mã sản phẩm</th>
            <th scope="col" class="rounded">Tên sản phẩm</th>
			<th scope="col" class="rounded">Thời gian bảo hành</th>
			<th scope="col" class="rounded">Tình trạng</th>
			<th scope="col" class="rounded">Mô tả</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
       
    <tbody>
    <?php 
	 
	 $sql="SELECT
sanpham.masanpham,
sanpham.tensanpham,
sanpham.thoigianbaohanh,
sanpham.tinhtrang,
sanpham.mota
FROM
sanpham  where sanpham.masanpham='$masanpham'";
$data = $db->exeQuery($sql);
    foreach($data as $row)
    {?>
	
    	<tr>
        	<td><input type="checkbox" name="" /></td>
			<td><?php echo $row["masanpham"];?></td>
            <td><?php echo $row["tensanpham"];?></td>
			<td><?php echo $row["thoigianbaohanh"];?></td>
			<td><?php if($row["tinhtrang"]==1)echo "còn hàng"; else echo "hết hàng";?></td>
			<td width=500px;><pre><?php echo $row["mota"];?></td>
            <td><a href="index.php?act=edit_sanpham&masanpham=<?php echo $row["masanpham"];?>"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="index.php?act=del_sanpham&masanpham=<?php echo $row["masanpham"];?>" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        
    	<?php
}
        ?>  
        
    </tbody>
</table>

	
     <div class=row>
	 Danh sach hinh cua sp<pre>
	 <?php
	 $data = $sanpham->getAllHinh($masanpham);
	 //print_r($data);
	 
	 ?>
	 <table border=1 width=1000>
	 
	 <tr><td>Mã hình</td>
	 <td>Hình</td>
	 <td>Mã sản phẩm</td>
	 <td>Edit</td>
	 <td>Delete</td>
	 </tr>
	 <?php
	 foreach($data as $r)
	 {
		 ?>
		 <tr>
		 <td><?php echo $r["mahinh"];?></td>
		 <td><img src="<?php echo BASE_URL."img/". $r["tenhinh"];?>" width=800 height=800> </td>
		 <td><?php echo $r["masanpham"];?></td>
		 
		 <td><a href="index.php?act=edit_hinh&mahinh=<?php echo $r["mahinh"];?>"><img src="images/user_edit.png" alt="" title="" border="0" /></a></td>
		<td><a href="index.php?act=del_hinh&masanpham=<?php echo $r["masanpham"];?>&mahinh=<?php echo $r["mahinh"];?>" class="ask"><img src="images/trash.png" alt="" title="" border="0" /></a></td>
		 </tr>
		 <?php
	 }
	 ?>
	 </table>
	 </div>
   
       
     
     
      
     
    
           
     
      
     
     