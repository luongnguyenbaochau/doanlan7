<?php
class hangsanxuat extends Db{
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
	public function delete($mahang)
	{
		$sql ="delete from hangsanxuat where mahang = :mahang";
		
		$arr =  Array(":mahang"=>$mahang);
		$this->exeNoneQuery($sql, $arr);	
		//echo $sql;
		//print_r($arr);exit;

		$sql="delete from hangsanxuat where mahang=:mahang ";
		return $this->exeNoneQuery($sql, $arr);	
	}
	
	public function getDetail($mahang)
	{
		$sql="SELECT * FROM hangsanxuat where hangsanxuat.mahang=:mahang
";
		$arr = array(":mahang"=>$mahang);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
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
		$sql="SELECT
hangsanxuat.mahang,
hangsanxuat.tenhang
FROM
hangsanxuat
					 ";
					
				//limit $offset, " . $this->_page_size;
		
		return $this->exeQuery($sql);
	}
	
	public function search($key, $currPage=1)
	{
		//$key = Utils::getIndex("key");
		$arr = array(":tenhang"=>"%". $key ."%");
		
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
hangsanxuat.mahang,
hangsanxuat.tenhang
FROM
hangsanxuat
				where tenhang like :tenhang";
				//limit $offset, " . $this->_page_size;
						
		echo $sql;
		print_r($arr);
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
	function suahangsanxuat($mahang,$tenhang){
		$sql="update hangsanxuat set tenhang='$tenhang'  where mahang='$mahang' ";
		$stm = $this->query($sql);
	}
	function inserthangsanxuat($mahang,$tenhang){
		$sql="insert into hangsanxuat(mahang, tenhang) ";
		$sql .=" values(:id,:ten)";
		$arr = array(":id"=>$mahang,":ten"=> $tenhang);	
		return $this->query($sql, $arr);	
	}
}
?>