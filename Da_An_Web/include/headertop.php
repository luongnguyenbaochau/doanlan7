<div class="call">
				 <p><span>Need help?</span> gọi chúng tôi <span class="number">0962797822</span></span></p>
			</div>
			<div class="account_desc">
				<ul>
					<?php 
						if(isset($_SESSION['tenuser'])) {
							echo "<li><a href='#small-dialog1'>".$_SESSION['tenuser']['tenuser']." </a></li>";
							echo "<li><a href='./logout.php'>Đăng xuất</a></li>" ;
						}
						else {
							echo "<li><a href='sign-up-tv.html'>Đăng ký</a></li>
								  <li><a class='popup_css_temp'  href='#small-dialog1'>Login</a></li>" ;
						}
					?>
					<li><a href="giohang.php">Giỏ hàng</a></li>
					<li><a href="#">My Account</a></li>
				</ul>
			</div>
			<div class="clear"></div>
<!-- login -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="contact-form1">
			<h3 class="w3ls-left">sign in </h3>
			<form action="./login.php" method="post" class="w3_agile_login">
				<p>Email</p>
				<input type="email" name="email" class="email" placeholder="your mail" required="">
				<p>Password</p>
				<input type="password" name="password" class="password" placeholder="your password" required="">
				<div class="w3_agile_login">
					<input type="submit" name="submit" value="sign in">
				</div>
				<span id="Loi"></span>
			</form>
		</div>  
	</div>
	<div class="agileits-w3layouts-copyright text-center"></div>  
<!-- login-->