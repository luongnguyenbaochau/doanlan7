<?php
/*include "/config/config.php";
include "/autoload/autoload.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");
$data = new Qua();*/

$obj = new sanpham();
?>
<div class="content_top">
    		<div class="heading">
    		<h3>Sản phẩm 
			
			</h3>
    		</div>
    		<div class="see">
    			
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
          <?php

				if (!isset($_GET["tim"]))
				{
				
					$data = $obj->getAll();
				}/*
				if (isset($_GET["tim"]))
				{
				//echo "<h1>Tim kiem san pham co ten chua ". $_GET["tensp"]."<h1>";
					$data = $obj->search($_GET["tensp"]);
				}
				else
				{
					echo "<h1>Không tim kiem san pham co ten chua ". $_GET["tensp"]."<h1>";
				}
				//echo "<pre>";
				//print_r($data);
				//exit;*/
				
				//echo "<h1>Tim kiem san pham co ten chua ". $_GET["tensp"]."<h1>";
					$data = $obj->search($_GET["tensp"]);
					if(count($data)>0)
						$data = $obj->search($_GET["tensp"]);
					else echo "<h1>Không tìm thấy sản phẩm nào</h1>";
				
			?>
			<div class="clear"></div>
            
                
                 
				 <?php
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
									<h4><a href="#">Thêm vào giỏ hàng</a></h4>
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
							<p><span class="rupees"><font size="+1"><?php echo $r["cpu"];?></font></span></p>
							<p><span class="rupees"><font size="+1"><?php echo $r["vga"];?></font></span></p>
							<p><span class="rupees"><font size="+1"><?php echo $r["hdh"];?></font></span></p>
							<p><span class="rupees"><font size="+1"><?php echo $r["pin"];?></font></span></p>
					    </div>
                        <div class="clear"></div>
					       		<div class="add-cart">								
									<h4><a href="#">Thêm vào giỏ hàng</a></h4>
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