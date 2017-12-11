<div class="categories">
				  <ul>
				  	<h3>Hãng sản xuất</h3>
				      <li><a href="#">Laptop</a></li>
						 <ul style="margin-left:20px;">
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
				  </ul>
				</div>		