<div class="content_top">
    		<div class="back-links">
    		<p><a href="index.php">Home</a> >>>> </p>
    	    </div>
    		<div class="clear"></div>
</div>
<div class="section group">
				<div class="cont-desc span_1_of_2">
				  <div class="product-details">				
									<?php
$ac= getIndex("ac",1);//kq:add
//unset($_SESSION["cart"]);

{
	$quantity = getIndex("quantity", 1);//kq=1
	
	$id = getIndex("id");//aple01
	
	$cart->add($id, $quantity);
	//$cart->edit($id, $quantity);

	
//	print_r($cart);
	//exit;
}
//Biến $cart được tạo từ trang chủ index.php
$cart->show();

?>
				
				 
			</div>
			<div class="clear"></div>
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