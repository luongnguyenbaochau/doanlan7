
    	<div class="content_top">
    		<div class="heading">
    		<h3>Sản phẩm gần đây</h3>
    		</div>
    		<div class="see">
    			
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
           <?php
      $sql="SELECT
sanpham.masanpham,
sanpham.tensanpham,
sanpham.giakhuyenmai,
sanpham.banchay,
sanpham.ganday,
hinh.tenhinh,
hinh.mahinh,
hinh.masanpham
FROM
sanpham
INNER JOIN hinh ON hinh.masanpham = sanpham.masanpham where sanpham.ganday=1 and hinh.mahinh like '%a' ";
      $datasp = $db->exeQuery($sql);             
          ?> 
          <?php
              
                 foreach($datasp as $k=>$r)
                  { 
                    ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="index.php?menu=sanpham&act=chitiet&masanpham=<?php echo $r['masanpham'] ?>"><img src="img/<?php echo $r["tenhinh"];?>" alt="" /></a>
					 <h2><?php echo $r["tensanpham"];?></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees"><?php echo number_format ($r["giakhuyenmai"],0,'.','.'); ?><sup>đ</sup></span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="giohang.php?id=<?php echo $r['masanpham'] ?>">Thêm vào giỏ hàng</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					
				</div>
                
                <?php
				
				  }
				  ?>
				
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Sản phẩm bán chạy</h3>
    		</div>
    		<div class="see">
    			
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
           <?php
     $sql="SELECT
sanpham.*,

hinh.tenhinh,
hinh.mahinh,
hinh.masanpham
FROM
sanpham
INNER JOIN hinh ON hinh.masanpham = sanpham.masanpham where sanpham.banchay=1 and hinh.mahinh like '%a' ";

      $datasp = $db->exeQuery($sql);   	  
          ?> 
          <?php
              
                 foreach($datasp as $k=>$r)
                  { 
                    ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="#"><img src="img/<?php echo $r["tenhinh"];?>" alt="" /></a>
					 <h2><?php echo $r["tensanpham"];?></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees"><?php echo number_format ($r["giakhuyenmai"],0,'.','.'); ?><sup>đ</sup></span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="giohang.php?id=<?php echo $r['masanpham'] ?>">Thêm vào giỏ hàng</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					
				</div>
                
                <?php
				
				  }
				  ?>
				
			</div>
    