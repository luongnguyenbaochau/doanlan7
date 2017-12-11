<?php 
	session_start();
	unset($_SESSION['tenuser']);
	header('Location: index.php');
?>