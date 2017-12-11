<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt="" /></a>
			</div>
			  <div class="cart">
			  	   <p>Chào mừng bạn đến với computershop <span>Giỏ hàng:</span><div id="dd" class="wrapper-dropdown-2"> <?php $cart->setThongtin(); ?>
			  	   	<ul class="dropdown">
						<?php if( $cart->setThongtin()==0) echo "<li>sản phẩm</li>"; ?>	
					</ul></div></p>
			  </div>
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>