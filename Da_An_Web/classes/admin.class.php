<?php
class admin extends Db{
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
	public function getDetail($iduser)
	{
		$sql="SELECT
user.*
FROM
user
where chucnang='admin' and user.iduser=:iduser";

		$arr = array(":iduser"=>$iduser);

		$data = $this->exeQuery($sql, $arr);
		
		if (Count($data)>0) 
		return $data[0];
		else return array();
	}
	
	
	public function getAll($currPage=1)
	{
		$sql="SELECT
user.*
FROM
user where chucnang='admin' ";
		return $this->exeQuery($sql);
	}
	
	public function count($sql, $arr=array())
	{
		return $this->countItems($sql, $arr);
	}
	
	public function getPageCount()
	{
		return $this->_page_count;	
	}
	
	function editadmin($iduser,$tenuser,$diachi,$sdt,$email){
		$sql="update user set tenuser='$tenuser',iduser='$iduser',diachi='$diachi',sdt='$sdt',email='$email' where iduser='$iduser' ";
		$stm = $this->query($sql);
	
	}
	function updatepass($passmoi,$passcu){
		$sql="update user set password='$passmoi' where password='$passcu' ";
		$stm = $this->query($sql);
	
	}
}
?>