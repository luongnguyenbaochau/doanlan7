<?php
class Cart extends Db{
	private $_cart;
	private $_num_item =0;
	public function  __construct()
	{
		parent::__construct();
		if(!isset($_SESSION["cart"])) $this->_cart= array();
		else $this->_cart = $_SESSION["cart"];
		$this->_num_item = array_sum($this->_cart);
		
	}
	
	public function getNumItem()
	{
		return $this->_num_item;	
	}
	public function __destruct()
	{
		$_SESSION["cart"] = $this->_cart;	
	}
	/*
	Them san pham có mã $id và số lương $quantity vào giỏ hàng
	*/
	
	public function laptopExist($masanpham)
	{
		$sql="select * from sanpham where masanpham = '$masanpham' ";
		$temp = new Db();
		$temp->exeQuery($sql);
		if ($temp->getRowCount()==0) return false;
		return true;
	}
	public function add($id, $quantity=1)
	{	
		if ($id=="" || $quantity<1) return;
		if (!$this->laptopExist($id)) return;
		//print_r($this->_cart);		
		if (isset($this->_cart[$id]))
			$this->_cart[$id]+=	$quantity;
		else $this->_cart[$id]=	$quantity;
		$_SESSION["cart"] = $this->_cart;	
		$this->_num_item = array_sum($this->_cart);
		//echo "Da them $id - $quantity ";
		echo "<script language=javascript>window.location='giohang.php';</script>";//Chuyển trình duyệt web tới trang hiển thị cart
	}
	
	public function remove($id)
	{
		unset($this->_cart[$id]);
		$this->_num_item = array_sum($this->_cart);
		$_SESSION["cart"] = $this->_cart;	
	}
	public function edit($id, $quantity)
	{
		$this->_cart[$id]	= $quantity;
		$this->_num_item = array_sum($this->_cart);
		$_SESSION["cart"] = $this->_cart;	
	}
	
	public function show()
	{
		if (Count($this->_cart)==0) 
		{	echo "Giỏ hàng rỗng";
			return;
		}
		//print_r($this->_cart);
		echo "<form action='update.php' method='post'>";
		echo "<table width='800px'>
					<tr><td style='border:3px solid #900;text-align:center;'>Tên sản phẩm</td>
                    <td style='border:3px solid #900; text-align:center;'>Số lượng</td>
					<td style='border:3px solid #900; text-align:center;'>Giá</td>
                    <td style='border:3px solid #900; text-align:center;'>Thành Tiền</td>
					<td style='border:3px solid #900; text-align:center;'>Hình</td>
					<td style='border:3px solid #900; text-align:center;'>Xóa</td></tr>";
		$laptop = new sanpham();
		foreach($this->_cart as $id=>$quantity)
		{
			
				$row = $laptop->getDetailgiohang($id);
				if (Count($row)==0) {unset($this->_cart[$id]); continue;}
			//	echo "<hr>id = $id <hr>";
			//echo "<pre>";	print_r($row);
				$ten = $row["tensanpham"];
				$gia = $row["giakhuyenmai"];
				$tt = $gia * $quantity;
				$img ="<img src='img/". $row["tenhinh"]."' width=100>";
				?><tr>
                <td style='border:3px solid #900; text-align:center;'><?php echo $ten; ?></td>
                <td style='border:3px solid #900; text-align:center;'>
				<input type=hidden name=masp[] value="<?php echo $id;?>">
				<input type="number" name="quantity[]" value="<?php echo $quantity; ?>" style="width: 38px; margin-bottom: 20px;"/> </td>
							<td style='border:3px solid #900; text-align:center;'><?php echo number_format($gia,0,'.','.') ; ?> đ</td>
							<td style='border:3px solid #900; text-align:center;'><?php echo number_format($tt,0,'.','.') ; ?> đ</td>
							<td style='border:3px solid #900; text-align:center;'> <?php echo $img; ?></td>
							<td style='border:3px solid #900; text-align:center;'> <a href="xoa.php?id=<?php echo $id; ?> "> Xóa </a> </td></tr>
							<?php
		}
		
		echo "</table>";?>

		<div style="text-align: center; margin-top: 40px; width: 820px;"> <input type="submit" name="ud" value="Cập nhật"/> </div>
		
		</form>
		<?php
		$this->setCartInfo($this->getNumItem());
		
		echo '<script>document.getElementById("dd").innerHTML="' . $this->getNumItem() .'";</script>';
		//Update số lượng item của cart trong header.php. Có thể không sử dụng method này nếu mỗi lần thêm xong, chuyển trang về mod=cart.
		
	}
	public function showthanhtoan()
	{
		if (Count($this->_cart)==0) 
		{	echo "Giỏ hàng rỗng";
			return;
		}
		//print_r($this->_cart);
		echo "<form action='".BASE_URL."thongtin/updatett.php' method='post'>";
		echo "<table width='800px'>
					<tr><td style='border:3px solid #900;text-align:center;'>Tên sản phẩm</td>
                    <td style='border:3px solid #900; text-align:center;'>Số lượng</td>
					<td style='border:3px solid #900; text-align:center;'>Giá</td>
                    <td style='border:3px solid #900; text-align:center;'>Thành Tiền</td>
					<td style='border:3px solid #900; text-align:center;'>Hình</td>
					<td style='border:3px solid #900; text-align:center;'>Xóa</td></tr>";
		$laptop = new sanpham();
		foreach($this->_cart as $id=>$quantity)
		{
			
				$row = $laptop->getDetailgiohang($id);
				if (Count($row)==0) {unset($this->_cart[$id]); continue;}
				//echo "<hr>id = $id <hr>";
			//echo "<pre>";	print_r($row);
				$ten = $row["tensanpham"];
				$gia = $row["giakhuyenmai"];
				$tt = $gia * $quantity;
				$img ="<img src='img/". $row["tenhinh"]."' width=100>";
				?><tr>
                <td style='border:3px solid #900; text-align:center;'><?php echo $ten; ?></td>
                <td style='border:3px solid #900; text-align:center;'>
				<input type=hidden name=masp[] value="<?php echo $id;?>">
				<input type="number" name="quantity[]" value="<?php echo $quantity; ?>" style="width: 38px; margin-bottom: 20px;"/> </td>
							<td style='border:3px solid #900; text-align:center;'><?php echo number_format($gia,0,'.','.') ; ?> đ</td>
							<td style='border:3px solid #900; text-align:center;'><?php echo number_format($tt,0,'.','.') ; ?> đ</td>
							<td style='border:3px solid #900; text-align:center;'> <?php echo $img; ?></td>
							<td style='border:3px solid #900; text-align:center;'> <a href="<?php echo BASE_URL;?>thongtin/xoatt.php?id=<?php echo $id; ?> "> Xóa </a> </td></tr>
							<?php
		}
		
		echo "</table>";?>

		<div style="text-align: center; margin-top: 40px; width: 820px;"> <input type="submit" name="ud" value="Cập nhật"/> </div>
		
		</form>
		<?php
		$this->setCartInfo($this->getNumItem());
		
		echo '<script>document.getElementById("dd").innerHTML="' . $this->getNumItem() .'";</script>';
		//Update số lượng item của cart trong header.php. Có thể không sử dụng method này nếu mỗi lần thêm xong, chuyển trang về mod=cart.
		
	}
	function setCartInfo( $quantity=0, $id="cart_sumary")
	{
		echo "<script language=javascript> document.getElementById('$id').innerHTML =$quantity; </script>";
	}
	function setThongTin()
	{
		echo  $this->getNumItem() ;
	}
	
	function getMaDonHangMoiNhat($iduser)
	{
		$sql="select madondathang from dondathang where iduser=:iduser order by madondathang desc limit 0, 1 ";
		$arr = array(":iduser"=>$iduser);
		$data = $this->exeQuery($sql, $arr);
		return $data[0]["madondathang"];
	}
	function saveDonHang()
	{
		$laptop = new sanpham();
		$tongtien=0;
		foreach($_SESSION["cart"] as $masanpham=>$soluong)
		{
			$row = $laptop->getDetailgiohang($masanpham);
			$dongia = $row["giakhuyenmai"];
			$tongtien+= $dongia * $soluong;
		}
		$arr = array();
		$arr[":tongtien"]=$tongtien;
		$arr[":iduser"] = $_SESSION["tenuser"]["iduser"];
		$arr[":tennguoinhan"] = $_POST["tennn"];
		$arr[":sdt"] = $_POST["sdt"];
		$arr[":diachinhan"] = $_POST["dc"];
		$sql="INSERT INTO dondathang ( ngaydathang,    tongtien,       iduser,  tennguoinhan,  sdt,   diachinhan,  trangthai) 
		                      VALUES (CURRENT_DATE(), :tongtien,       :iduser, :tennguoinhan, :sdt, :diachinhan,  '0') ";
		
		//print_r($arr); echo $sql;
		//print_r($this);
		
		
		$this->exeQuery($sql, $arr);
		//echo "<hr> Luu xong don hang"; exit;
		$madondathang = $this->getMaDonHangMoiNhat($arr[":iduser"] );
		//echo "Don hang moi: $madonhang ";exit;
		$arr = array(":madondathang"=>$madondathang);
		//echo "<pre>";
		//print_r ($_SESSION["cart"]);
		//$laptop = new sanpham();
		foreach($_SESSION["cart"] as $masanpham=>$soluong)
		{
			//$row = $laptop->getDetailgiohang($masanpham);
			//$dongia = $row["giakhuyenmai"];
			$arr[":masanpham"]= $masanpham;
			$arr[":soluong"]= $soluong;
			$arr[":dongia"]= $dongia;
			$sql="INSERT INTO chitietdondathang (masanpham, madondathang, soluong, dongia) 
			                             VALUES (:masanpham, :madondathang, :soluong, :dongia)";
			$this->exeQuery($sql, $arr);
			$this->_cart=array();
		//	unset($_SESSION["cart"]);
			//echo $sql ;
			//print_r($arr);

		
		}
		
		
		
	}
}
?>