<pre><?php
session_start();
print_r($_POST);
if(isset($_POST['ud']))
{
	unset($_POST['ud']);
	$masp = $_POST["masp"];
	$quantity = $_POST["quantity"];
	foreach($masp as $key => $v)
	{
		$ma = $v;
		$sl = $quantity[$key];
		$_SESSION['cart'][$v]=$sl;
		//print_r($_SESSION['cart']['$v']);
		//ta se thay doi cai so luong cua gio hang = voi so ma qua lay duoc tu post cho ra $v so luong 	
	}
	
}

//exit;
?>
<script type="text/javascript" >
    alert("Da thuc hien");
    window.location='giohang';
</script>