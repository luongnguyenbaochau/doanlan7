<?php
class nhacungcap extends Db{
	private $_page_size =50;//M?t trang hi?n h? 5 cu?n sách
	private $_page_count;
	public function getRand($n)
	{
		$sql="select masanpham, tensanpham, img from sanpham order by rand() limit 0, $n ";
		return $this->exeQuery($sql);	
	}
	
	public function getByPubliser($manhaxb)
	{
		
	}
	public function delete($mancc)
	{
		$sql ="delete from nhacungcap where mancc = :mancc";
		
		$arr =  Array(":mancc"=>$mancc);
		$this->exeNoneQuery($sql, $arr);	
		//echo $sql;
		//print_r($arr);exit;

		$sql="delete from nhacungcap where mancc=:mancc ";
		return $this->exeNoneQuery($sql, $arr);	
	}
	
	public function getDetail($mancc)
	{
		$sql="SELECT
nhacungcap.mancc,
nhacungcap.tenncc
FROM
nhacungcap where nhacungcap.mancc=:mancc
";
		$arr = array(":mancc"=>$mancc);
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
nhacungcap.mancc,
nhacungcap.tenncc
FROM
nhacungcap
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
nhacungcap.mancc,
nhacungcap.tenncc
FROM
nhacungcap
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
	function editnhacungcap($mancc,$tenncc){
		$sql="update nhacungcap set tenncc='$tenncc'  where mancc='$mancc' ";
		$stm = $this->query($sql);
	}
	function insertnhacungcap($mancc,$tenncc){
		$sql="insert into nhacungcap(mancc, tenncc) ";
		$sql .=" values(:id,:ten)";
		$arr = array(":id"=>$mancc,":ten"=> $tenncc);	
		return $this->query($sql, $arr);	
	}
}
?>