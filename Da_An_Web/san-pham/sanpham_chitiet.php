<div class="content_top">
    		<div class="back-links">
    		<p><a href="index.php">Home</a> >>>> </p>
    	    </div>
    		<div class="clear"></div>
</div>
<?php
  $masanpham = $_GET['masanpham'];
      $sql="SELECT  sanpham.masanpham,hinh.mahinh,hinh.tenhinh
  FROM sanpham
INNER JOIN hinh ON hinh.masanpham = sanpham.masanpham  where sanpham.masanpham=hinh.masanpham and sanpham.masanpham='$masanpham'";
$data = $db->exeQuery($sql);
?>
<div class="section group">
				<div class="cont-desc span_1_of_2">
				  <div class="product-details">				
					<div class="grid images_3_of_2">
						<div id="container">
						   <div id="products_example">
                            
							   <div id="products">
								<div class="slides_container">
                                <?php foreach($data as $key=>$value)
								{?>
                               
									<a href="#" target="_blank"><img src="img/<?php echo $value["tenhinh"];?>" width="290" height="300" alt=" " /></a>
									<?php } ?>
								</div>
								<ul class="pagination">
                                <?php foreach($data as $key=>$value)
								{?>
									<li><a href="#"><img src="img/<?php echo $value["tenhinh"];?>" width="51" height="41" alt=" " /></a></li>
									<?php } ?>
								</ul>
							</div>
                           
						</div>
					</div>
				</div>
				<div class="desc span_3_of_2">
                <?php
				
				
				$sql ="SELECT
sanpham.masanpham,
sanpham.mahang,
sanpham.tensanpham,
sanpham.manhinh,
sanpham.cpu,
sanpham.vga,
sanpham.hdh,
sanpham.pin,
sanpham.giagoc,
sanpham.giakhuyenmai,
sanpham.thoigianbaohanh,
sanpham.tinhtrang,
sanpham.mota
FROM
sanpham where masanpham ='$masanpham' ";
				$data = $db->exeQuery($sql);
				 $mahang="";
			?>
            <?php foreach($data as $key=>$value)
				{
					$mahang = $value["mahang"]; 
			?>
					<h2 style="font-size:20px;"><?php echo $value["tensanpham"]; ?> </h2>
										
					<div class="price">
						<p>Giá gốc:<font style="font-size:8px;"> <span><?php echo number_format ($value["giagoc"],0,'.','.'); ?><sup>đ</sup></span></font></p>
                        <p>Giá khuyến mãi:<font size="-3"> <span><?php echo number_format ($value["giakhuyenmai"],0,'.','.'); ?><sup>đ</sup> </span></font></p>
					</div>
					<div class="available">
						<p>Mô tả :</p>
					<ul style="padding-bottom:10px;">
						
						<li>Màn hình: <?php echo $value["manhinh"]; ?></li>
                        </ul>
                        <ul style="padding-bottom:10px;">
                        <li>CPU: <?php echo $value["cpu"]; ?></li></ul>
                       <ul style="padding-bottom:10px;"> <li>Card đồ họa: <?php echo $value["vga"]; ?></li></ul>
                        <ul style="padding-bottom:10px;"><li>Dung lượng pin: <?php echo $value["pin"]; ?></li></ul>
                        <ul style="padding-bottom:10px;"><li>Hệ điều hành: <?php echo $value["hdh"]; ?></li></ul>
                        <ul style="padding-bottom:10px;"><li>Thời gian bảo hành <?php echo $value["thoigianbaohanh"]; ?></li>
					</ul>
                    <ul style="padding-bottom:10px;"><li>Tình trạng:  <?php if( $value["tinhtrang"]==1) echo "Còn hàng"; else echo "Hết hàng"; ?></li>
					</ul>
					</div>
				<div class="share-desc">
					<div class="share">
						<p>Share Product :</p>
						<ul>
					    	<li><a href="#"><img src="images/facebook.png" alt="" /></a></li>
					    	<li><a href="#"><img src="images/twitter.png" alt="" /></a></li>					    
			    		</ul>
					</div>
					<div class="button"><span><a href="#">Add to Cart</a></span></div>					
					<div class="clear"></div>
				</div>
				 
			</div>
			<div class="clear"></div>
		  </div>
		<div class="product_desc">	
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li>Chi tiết sản phẩm</li>
					
					<div class="clear"></div>
				</ul>
				<div class="resp-tabs-container">
					<div class="product-desc">
						<p><pre><?php echo $value["mota"]; ?></p>
						
				  				
				</div>
			</div>
		 </div>
         <?php
				}
				?>
	 </div>
	    <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>		
   <div class="content_bottom">
    		<div class="heading">
    		<h3>Sản phẩm khác</h3>
    		</div>
    		<div class="see">
    			<p><a href="index.php?menu=sanpham&act=hang&mahang=<?php echo $value['mahang']; ?>">Tất cả các sản phẩm</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
   <div class="section group">
   <?php
 
  
      $sql="SELECT sanpham.tensanpham, sanpham.masanpham,sanpham.giakhuyenmai,sanpham.mahang,hinh.mahinh,
hinh.tenhinh  FROM sanpham
INNER JOIN hinh ON hinh.masanpham = sanpham.masanpham  where sanpham.mahang='$mahang' and sanpham.masanpham !='". $_GET["masanpham"]."' and hinh.mahinh LIKE '%a' limit 0,4";
      $data = $db->exeQuery($sql);             
          ?> 
          <?php foreach($data as $key=>$value)
				{
					
			?>
				<div class="grid_1_of_4 images_1_of_4" style="height:300px;">
					 <a href="index.php?menu=sanpham&act=chitiet&masanpham=<?php echo $value['masanpham'] ?>"><img src="img/<?php echo $value["tenhinh"];?>" alt="" /></a>	
                     <h2 style="height:90px;"><?php echo $value["tensanpham"];?></h2>				
					<div class="price" style="border:none">
					       		<div class="add-cart" style="float:none">								
									<h4><a href="#">Thêm vào giỏ</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
                   
				</div>
				 <?php
				}
				?>
				
				
			</div>
        </div>
				<div class="rightsidebar span_3_of_1">
					<h2>Danh mục sản phẩm</h2>
					<ul class="side-w3ls">
				     
                      <?php
                                    $data = $db->exeQuery("select * from hangsanxuat");
                                    foreach ($data as $hang) 
                                    {
                                    
                                     ?>
                                    <li><a href="index.php?menu=sanpham&act=hang&mahang=<?php echo $hang["mahang"];?>">
                                        <?php echo $hang["tenhang"];?></a></li>
                                    <?php
                                    }
                                    ?>
				  
    				</ul>
    				
      				 
 				</div>
 		</div>