<?php
 $mahang = $_GET["mahang"];

 $data = $db->exeQuery("select tenhang from hangsanxuat where mahang='$mahang' ");


 ?>
<div class="content_top">
    		<div class="heading">
    		<h3>Sản phẩm <?php
						foreach ($data as $key=>$r)
							foreach ($r as $a=>$value)
							echo $value;
					?>
			
			</h3>
    		</div>
    		<div class="see">
    			
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
          
     
              
                
                 
				 <?php
				$data = $db->exeQuery("SELECT
				sanpham.masanpham,						sanpham.tensanpham,
										sanpham.manhinh,
										sanpham.cpu,
										sanpham.vga,
										sanpham.hdh,
										sanpham.pin,
										sanpham.mahang,
										sanpham.giakhuyenmai,
										hinh.tenhinh,
										hinh.mahinh
										FROM
										sanpham
										INNER JOIN hinh ON hinh.masanpham = sanpham.masanpham
										where sanpham.mahang='$mahang' AND  hinh.mahinh LIKE '%a' ");
				 
				$i=0;
					foreach($data as $key=>$r)
					{
						 
						$i++;
				?>
                    <?php if($i>=5){ ?>
				<div class="images_1_of_4 khoangcach"  style="margin-left:12px;">
					 <a href="index.php?menu=sanpham&act=chitiet&masanpham=<?php echo $r['masanpham'] ?>"><img src="img/<?php echo $r["tenhinh"];?>" alt="" /></a>
					 <h2><?php echo $r["tensanpham"];?></h2>
					<div class="price-details">
				       <div class="mota">
							<p><span class="rupees"><font size="+1"><?php echo number_format ($r["giakhuyenmai"],0,'.','.'); ?><sup>đ</sup></font></span></p>
							<p><span class="rupees"><font size="+1"><?php echo $r["manhinh"];?></font></span></p>
							<p><span class="rupees"><font size="+1"><?php echo $r["vga"];?></font></span></p>
							<p><span class="rupees"><font size="+1"><?php echo $r["hdh"];?></font></span></p>
							<p><span class="rupees"><font size="+1"><?php echo $r["pin"];?></font></span></p>
					    </div>
                        <div class="clear"></div>
					       		<div class="add-cart">								
									<h4><a href="giohang.php?id=<?php echo $r['masanpham'] ?>">Thêm vào giỏ hàng</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					
				</div>
                <?php } 
                else {?>
                	<div class="images_1_of_4 khoangcach" style="margin-left:12px;">
					 <a href="index.php?menu=sanpham&act=chitiet&masanpham=<?php echo $r['masanpham'] ?>"><img src="img/<?php echo $r["tenhinh"];?>" alt="" /></a>
					 <h2><?php echo $r["tensanpham"];?></h2>
					<div class="price-details">
				       <div class="mota">
							<p><span class="rupees"><font size="+1"><?php echo $r["giakhuyenmai"];?></font></span></p>
							<p><span class="rupees"><font size="+1"><?php echo $r["manhinh"];?></font></span></p>
							<p><span class="rupees"><font size="+1"><?php echo $r["vga"];?></font></span></p>
							<p><span class="rupees"><font size="+1"><?php echo $r["hdh"];?></font></span></p>
							<p><span class="rupees"><font size="+1"><?php echo $r["pin"];?></font></span></p>
					    </div>
                        <div class="clear"></div>
					       		<div class="add-cart">								
									<h4><a href="giohang.php?id=<?php echo $r['masanpham'] ?>">Thêm vào giỏ hàng</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					
				</div>
                <?php } ?>
                <?php
				if  ($i%4==0) echo '<div style="clear:both"></div>';
				
				  }
				  ?>
				
			</div>