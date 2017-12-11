<?php
class sanpham extends Db{
	private $_page_size =50;//Một trang hiển hị 5 cuốn sách
	private $_page_count;
	public function getRand($n)
	{
		$sql="select masanpham, tensanpham, img from sanpham order by rand() limit 0, $n ";
		return $this->exeQuery($sql);	
	}
	
	public function getByPubliser($manhaxb)
	{
		
	}
	public function delete($masanpham)
	{
		$sql ="delete from hinh where masanpham = :masanpham";
		
		$arr =  Array(":masanpham"=>$masanpham);
		$this->exeNoneQuery($sql, $arr);	
		//echo $sql;
		//print_r($arr);exit;

		$sql="delete from sanpham where masanpham=:masanpham ";
		return $this->exeNoneQuery($sql, $arr);	
	}
	
	public function getDetail($masanpham)
	{
		$sql="SELECT
sanpham.*,
hangsanxuat.mahang,
hangsanxuat.tenhang
FROM
sanpham
INNER JOIN hangsanxuat ON sanpham.mahang = hangsanxuat.mahang
where sanpham.masanpham=:masanpham";

		$arr = array(":masanpham"=>$masanpham);

		$data = $this->exeQuery($sql, $arr);
		
		if (Count($data)>0) 
		return $data[0];
		else return array();
	}
	public function getDetailgiohang($masanpham)
	{
		$sql="SELECT
sanpham.*,
hinh.mahinh,
hinh.tenhinh,
hinh.masanpham,
hangsanxuat.mahang,
hangsanxuat.tenhang
FROM
hangsanxuat
INNER JOIN sanpham ON sanpham.mahang = hangsanxuat.mahang
INNER JOIN hinh ON hinh.masanpham = sanpham.masanpham
where sanpham.masanpham=:masanpham";

		$arr = array(":masanpham"=>$masanpham);

		$data = $this->exeQuery($sql, $arr);
		
		if (Count($data)>0) 
		return $data[0];
		else return array();
	}
	public function getDetailHinh($mahinh)
	{
		$sql="select * from hinh where mahinh =:mahinh";
		$arr = array(":mahinh"=>$mahinh);

		$data = $this->exeQuery($sql, $arr);
		
		if (Count($data)>0) 
		return $data[0];
		else return array();
	}
	public function getAll($currPage=1)
	{
		/*$offset = ($currPage -1) * $this->_page_size;
		$sql="SELECT
				Count(*)
				FROM
				hangsanxuat
				INNER JOIN sanpham ON sanpham.mahang = hangsanxuat.mahang";
				
				$n  = $this->count($sql);
				$this->_page_count = ceil($n/$this->_page_size);*/
		$sql="SELECT sanpham.masanpham,
		sanpham.banchay,sanpham.ganday,
					sanpham.tensanpham,
					sanpham.manhinh,
					sanpham.cpu,
					sanpham.vga,
					sanpham.hdh,
					sanpham.pin,
					sanpham.mota,
					sanpham.giagoc,
					sanpham.tinhtrang,
					sanpham.mahang,
					sanpham.giakhuyenmai,
					sanpham.thoigianbaohanh,
					sanpham.soluong
					FROM
					sanpham
					 ";
					
				//limit $offset, " . $this->_page_size;
		
		return $this->exeQuery($sql);
	}
	
	public function getAllHinh($masp)
	{
		
		$sql="SELECT * 	FROM hinh	where masanpham='$masp'	";
		
		
					
				//limit $offset, " . $this->_page_size;
		
		return $this->exeQuery($sql);
		
	}
	public function search($key, $currPage=1)
	{
		//$key = Utils::getIndex("key");
		$arr = array(":mota"=>"%". $key ."%",  ":tensanpham"=>"%". $key ."%");
		
		$offset = ($currPage -1) * $this->_page_size;
		//echo "<hr> $offset = ($currPage -1) * {$this->_page_size} <hr>";
		/*$sql="SELECT
				Count(*)
				FROM
				hangsanxuat
				INNER JOIN sanpham ON sanpham.mahang = hangsanxuat.mahang
				
				where tensanpham like :tensanpham  or manhinh like :manhinh";
				$n  = $this->count($sql, $arr);
				$this->_page_count = ceil($n/$this->_page_size);
				*/
		$sql="SELECT
		sanpham.banchay,
		sanpham.ganday,
				sanpham.masanpham,						
				sanpham.tensanpham,
				sanpham.manhinh,
				sanpham.cpu,
				sanpham.vga,
				sanpham.hdh,
				sanpham.pin,
				sanpham.mahang,
				sanpham.giakhuyenmai,
				sanpham.thoigianbaohanh,
				sanpham.mota,
				hinh.tenhinh,
				hinh.mahinh
				FROM
				sanpham
				INNER JOIN hinh ON hinh.masanpham = sanpham.masanpham
				where (tensanpham like :tensanpham or mota like :mota)  and (hinh.mahinh like '%a') ";
				//limit $offset, " . $this->_page_size;
						
		//echo $sql;
		//print_r($arr);
		return $this->exeQuery($sql, $arr);
	}
	
	public function count($sql, $arr=array())
	{
		return $this->countItems($sql, $arr);
	}
	
	public function getPageCount()
	{
		return $this->_page_count;	
	}
	function insertsanpham($masanpham,$tensanpham,$mahang,$manhinh,$cpu,$vga,$hdh,$pin,$soluong,$giagoc,$giakhuyenmai,$thoigianbaohanh,$tinhtrang,$mota,$ganday,$banchay){
		$sql="insert into sanpham(masanpham,tensanpham,mahang,manhinh,cpu,vga,hdh,pin,soluong,giagoc,giakhuyenmai,thoigianbaohanh,tinhtrang,mota,ganday,banchay) ";
		$sql .=" values(:id,:ten,:mh,:mah,:cpu,:vga,:hdh,:pin,:sl,:gg,:gkm,:tgbh,:tt,:mt,:gd,:bc)";
		$arr = array(":id"=>$masanpham,":ten"=> $tensanpham,":mh"=>$mahang,":mah"=>$manhinh,":cpu"=>$cpu,":vga"=>$vga,":hdh"=>$hdh,":pin"=>$pin,":sl"=>$soluong,
		":gg"=>$giagoc,":gkm"=>$giakhuyenmai,":tgbh"=>$thoigianbaohanh,":tt"=>$tinhtrang,":mt"=>$mota,":gd"=>$ganday,":bc"=>$banchay);	
		return $this->query($sql, $arr);	
	}
	function editsanpham($masanpham,$tensanpham,$mahang,$manhinh,$cpu,$vga,$hdh,$pin,$soluong,$giagoc,$giakhuyenmai,$thoigianbaohanh,$tinhtrang,$mota,$ganday,$banchay){
		$sql="update sanpham set tensanpham='$tensanpham',mahang='$mahang',manhinh='$manhinh',cpu='$cpu',vga='$vga',hdh='$hdh',pin='$pin',soluong='$soluong',giagoc='$giagoc',giakhuyenmai='$giakhuyenmai',thoigianbaohanh='$thoigianbaohanh',tinhtrang='$tinhtrang',mota='$mota',ganday='$ganday',banchay='$banchay'  where masanpham='$masanpham' ";
		$stm = $this->query($sql);
	
	}
	function inserthinh($mahinh,$tenhinh,$masanpham){
		$sql="insert into hinh(mahinh,tenhinh,masanpham) ";
		$sql .=" values(:id,:ten,:msp)";
		$arr = array(":id"=>$mahinh,":ten"=> $tenhinh,":msp"=>$masanpham);	
		return $this->query($sql, $arr);	
	}
	function edithinh($mahinh,$tenhinh,$masanpham){
		$sql="update hinh set tenhinh='$tenhinh',masanpham='$masanpham' where mahinh='$mahinh' ";
		$stm = $this->query($sql);
	}
	public function deletehinh($mahinh)
	{
		$sql ="delete from hinh where mahinh = :mahinh";
		
		$arr =  Array(":mahinh"=>$mahinh);
		$this->exeNoneQuery($sql, $arr);	
		//echo $sql;
		//print_r($arr);exit;

		//$sql="delete from hinh where mahinh=:mahinh ";
		//return $this->exeNoneQuery($sql, $arr);	
	}
}
?>