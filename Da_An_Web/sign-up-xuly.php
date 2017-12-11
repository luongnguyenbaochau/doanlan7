<?php 
	include "config/config.php";
	include ROOT."/include/function.php";
	if (!isset($_SESSION)) session_start();
	  spl_autoload_register("loadClass");
	$db= new Db();
	$name=isset($_POST['name']) ? $_POST['name'] : '';
	$email=isset($_POST['email']) ? $_POST['email'] : '';
	$pass=isset($_POST['password']) ? $_POST['password'] : '';
	$phone=isset($_POST['phone']) ? $_POST['phone'] : '';
	$password=md5($pass);
	$sql = "INSERT INTO user (tenuser,sdt,email,password,chucnang,diachi) VALUES ('$name','$phone','$email','$password','client','')";
	echo($sql); 
	if($name== ''|| $phone ==''||$email==''||$password==''){
		echo 'false';
		exit();
	}
	else
		$data = $db->exeNoneQuery($sql);
	if($data){
		echo 'true';
	}
	else{
		echo 'false';
	}
?>